<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_banner_slider extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_banner_slider');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->itemsnumber = '3';

            $this->config->item_title1 = 'Everyone Can Join & Draw With Us Easily';
            $this->config->item_text1 = '<b>eDash</b> is a Global training provider based across the UK that specialises in accredited and bespoke training courses. Flexible easy to access learning opportunities can bring a significant change.';
            $this->config->button_text1 = 'Explore All Courses ';
            $this->config->button_link1 = $CFG->wwwroot . '/course';
            $this->config->by_text1 = 'Art Done By ';
            $this->config->name_text1 = 'Andrew Watson';
            $this->config->name_link1 = '#';

            $this->config->item_title2 = 'Build Skills With Experts Any Time, Anywhere';
            $this->config->item_text2 = '<b>eDash</b> is a Global training provider based across the UK that specialises in accredited and bespoke training courses. Flexible easy to access learning opportunities can bring a significant change.';
            $this->config->button_text2 = 'Explore All Courses ';
            $this->config->button_link2 = $CFG->wwwroot . '/course';
            $this->config->by_text2 = 'Art Done By ';
            $this->config->name_text2 = 'Andrew Watson';
            $this->config->name_link2 = '#';

            $this->config->item_title3 = 'Start learning from the world’s best institutions';
            $this->config->item_text3 = '<b>eDash</b> is a Global training provider based across the UK that specialises in accredited and bespoke training courses. Flexible easy to access learning opportunities can bring a significant change.';
            $this->config->button_text3 = 'Explore All Courses ';
            $this->config->button_link3 = $CFG->wwwroot . '/course';
            $this->config->by_text3 = 'Art Done By ';
            $this->config->name_text3 = 'Andrew Watson';
            $this->config->name_link3 = '#';
        }
    }

    public function get_content() {
        global $CFG, $PAGE;

        require_once($CFG->libdir . '/filelib.php');

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         =  new stdClass;

        if (!empty($this->config) && is_object($this->config)) {
            $data = $this->config;
            $data->itemsnumber = is_numeric($data->itemsnumber) ? (int)$data->itemsnumber : 3;
        } else {
            $data = new stdClass();
            $data->itemsnumber = '3';
        }

        $text = '';
        $text .= '

        <div class="online-art-banner-slides owl-carousel owl-theme">
            ';
            if ($data->itemsnumber > 0) {
                $fs = get_file_storage();
                for ($i = 1; $i <= $data->itemsnumber; $i++) {
                    $image = 'bg_img' . $i;
                    $item_title = 'item_title' . $i;
                    $item_text = 'item_text' . $i;
                    $button_text = 'button_text' . $i;
                    $button_link = 'button_link' . $i;
                    $btn_img = 'btn_img' . $i;
                    $by_text = 'by_text' . $i;
                    $user_img = 'user_img' . $i;
                    $name_text = 'name_text' . $i;
                    $name_link = 'name_link' . $i;
                    
                    if(isset($data->$image)){ $image = $data->$image; }else{ $image = '';}

                    if(isset($data->$item_title)){ $item_title = $data->$item_title; }else{ $item_title = '';}

                    if(isset($data->$item_text)){ $item_text = $data->$item_text; }else{ $item_text = '';}

                    if(isset($data->$button_text)){ $button_text = $data->$button_text; }else{ $button_text = '';}

                    if(isset($data->$button_link)){ $button_link = $data->$button_link; }else{ $button_link = '';}

                    if(isset($data->$btn_img)){ $btn_img = $data->$btn_img; }else{ $btn_img = '';}

                    if(isset($data->$user_img)){ $user_img = $data->$user_img; }else{ $user_img = '';}

                    if(isset($data->$by_text)){ $by_text = $data->$by_text; }else{ $by_text = '';}

                    if(isset($data->$name_text)){ $name_text = $data->$name_text; }else{ $name_text = '';}

                    if(isset($data->$name_link)){ $name_link = $data->$name_link; }else{ $name_link = '';}
                    
                    $text .= '
                    <div class="online-art-banner-item jarallax" data-jarallax={"speed": 0.3} style="background-image:url('.edash_block_image_process($image).');">
                        <div class="container-fluid">
                            <div class="online-art-banner-content">
                                <h1>'.format_text($item_title, FORMAT_HTML, array('filter' => true)).'</h1>
                                <p>'.format_text($item_text, FORMAT_HTML, array('filter' => true)).'</p>';

                                if($button_text || $button_link):
                                    $text .='
                                    <div class="banner-btn">
                                        <a href="'.$button_link.'" class="default-btn">'.$button_text.'';
                                            if($btn_img):
                                                $text .='
                                                <img src="'.edash_block_image_process($btn_img).'" alt="'.format_text($item_title, FORMAT_HTML, array('filter' => true)).'">';
                                            endif;
                                            $text .='
                                        </a>
                                    </div>';
                                endif;
                                $text .='
                            </div>
                        </div>
        
                        <div class="art-banner-info">
                            <div class="d-flex align-items-center">
                                <div class="images d-flex align-items-center">';
                                    if($user_img):
                                        $text .='
                                        <img src="'.edash_block_image_process($user_img).'" alt="'.$item_title.'"></a>';
                                    endif;
                                    $text .='
                                </div>
                                <div class="text">';
                                    if($name_text):
                                        $text .='
                                        <p>'.$by_text.' <a href="'.$name_link.'">'.format_text($name_text, FORMAT_HTML, array('filter' => true)).'</a></p>';
                                    endif;
                                    $text .='
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            }
            $text .= '
        </div>';     

        $this->content->footer = '';
        $this->content->text   = $text;

        return $this->content;
    }

    /**
     * The block can be used repeatedly in a page.
     */
    function instance_allow_multiple() {
        return true;
    }

    /**
     * Enables global configuration of the block in settings.php.
     *
     * @return bool True if the global configuration is enabled.
     */
    function has_config() {
        return false;
    }

    /**
     * Sets the applicable formats for the block.
     *
     * @return string[] Array of pages and permissions.
     */
    function applicable_formats() {
        return array(
            'all' => true,
            'my' => false,
            'admin' => false,
            'course-view' => true,
            'course' => true,
        );
    }

}