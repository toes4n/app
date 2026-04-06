<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_feedback_two extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_feedback_two');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'What Our Learners say about eDash';
            $this->config->itemsnumber = '3';
            $this->config->item_title1 = 'Ali Tufan';
            $this->config->item_subtitle1 = 'TV Model';
            $this->config->item_text1 = '<b>eDash</b> is a Global training provider based across the UK that specialis in accredited and bespoke Lorem ipsum dolor sit amet consectetur elit sed do eiusmod tempor incididunt ut labore et mag na aliqua consectetur elit sed do eiusmod tempor incididunt ut labore et mag na aliqua.';
            $this->config->item_title2 = 'Allien Zampa';
            $this->config->item_subtitle2 = 'Developer';
            $this->config->item_text2 = '<b>eDash</b> is a Global training provider based across the UK that specialis in accredited and bespoke Lorem ipsum dolor sit amet consectetur elit sed do eiusmod tempor incididunt ut labore et mag na aliqua consectetur elit sed do eiusmod tempor incididunt ut labore et mag na aliqua.';
            $this->config->item_title3 = 'Ramos Leo';
            $this->config->item_subtitle3 = 'Designer';
            $this->config->item_text3 = '<b>eDash</b> is a Global training provider based across the UK that specialis in accredited and bespoke Lorem ipsum dolor sit amet consectetur elit sed do eiusmod tempor incididunt ut labore et mag na aliqua consectetur elit sed do eiusmod tempor incididunt ut labore et mag na aliqua.';
            
            $this->config->text_item_title1 = 'Best <span>Online</span> Art <span>Learning</span> Platform';
            $this->config->text_item_title2 = 'Best <span>Online</span> Art <span>Learning</span> Platform';
            $this->config->text_item_title3 = 'Best <span>Online</span> Art <span>Learning</span> Platform';
       
            $this->config->text_items = '3';
        }
    }

    public function get_content() {
        global $CFG, $PAGE;

        require_once($CFG->libdir . '/filelib.php');

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         =  new stdClass;
        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}

        $shape_img = 'shape_img';
        if(isset($this->config->$shape_img) && !empty($this->config->$shape_img)){
            $this->content->$shape_img = $this->config->$shape_img;
        }else{
            $this->content->$shape_img = '';
        }

        $img = 'img';
        if(isset($this->config->$img) && !empty($this->config->$img)){
            $this->content->$img = $this->config->$img;
        }else{
            $this->content->$img = '';
        }

        if (!empty($this->config) && is_object($this->config)) {
            $data = $this->config;
            $data->itemsnumber = is_numeric($data->itemsnumber) ? (int)$data->itemsnumber : 3;
        } else {
            $data = new stdClass();
            $data->itemsnumber = '3';
        }

        if (!empty($this->config) && is_object($this->config)) {
            $data = $this->config;
            $data->text_items = is_numeric($data->text_items) ? (int)$data->text_items : 3;
        } else {
            $data = new stdClass();
            $data->text_items = '3';
        }

        $itemsnumber = 3;
        if(isset($this->config->itemsnumber)){
            $itemsnumber = $this->config->itemsnumber;
        }

        $text_items = 3;
        if(isset($this->config->text_items)){
            $text_items = $this->config->text_items;
        }

        $text = '';
       
        $text .= '
        <div class="home-nine-with-bg-color">
            <div class="rt-feedback-area oa-feedback-area ptb-100">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="rt-feedback-content">
                                <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>

                                <div class="rt-feedback-slides owl-carousel owl-theme">';
                                    if ($itemsnumber > 0) {
                                        for($i = 1; $i <= $itemsnumber; $i++) {
                                            $image = 'img' . $i;
                                            $item_title = 'item_title' . $i;
                                            $item_subtitle = 'item_subtitle' . $i;
                                            $item_text = 'item_text' . $i;
                                            $text .= '
                                            <div class="rt-single-feedback-box">
                                                <div class="client-info d-flex align-items-center">
                                                    <div class="quotes">';
                                                        if(isset($this->config->$image)){
                                                            $image = $this->config->$image;
                                                            if($image){
                                                                $text .= '
                                                                <img src="'.edash_block_image_process($image).'" alt="'.strip_tags($this->config->$item_title).'">';
                                                            }
                                                        } 
                                                        $text .= '
                                                    </div>
                                                    <div class="info">';
                                                        if(isset($this->config->$item_title)):
                                                            $text .='
                                                            <h3>'.format_text($this->config->$item_title, FORMAT_HTML, array('filter' => true)).'</h3>';
                                                        endif;
                                                        $text .='
                                                        ';
                                                        if(isset($this->config->$item_subtitle)):
                                                            $text .='
                                                            <span>'.format_text($this->config->$item_subtitle, FORMAT_HTML, array('filter' => true)).'</span>';
                                                        endif;
                                                        $text .='
                                                    </div>
                                                </div>';
                                                if(isset($this->config->$item_text)){
                                                    $text .= '
                                                    <p>'.format_text($this->config->$item_text, FORMAT_HTML, array('filter' => true)).'</p>';
                                                }
                                                $text .= '
                                            </div>';
                                        }
                                    }
                                    $text .= '
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">';
                            if($this->content->img):
                                $img = $this->content->img;
                                $text .= '                    
                                <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($this->content->title).'">';
                            endif;
                            $text .= '
                        </div>
                    </div>
                </div>

                <div class="oa-feedback-animation-slides owl-carousel owl-theme">';
                    if ($text_items > 0) {
                        for($i = 1; $i <= $text_items; $i++) {
                            $item_title = 'text_item_title' . $i;
                            $text .= '
                            <div class="oa-animation-content">';
                                if(isset($this->config->$item_title)):
                                    $text .='
                                    <h1>'.format_text($this->config->$item_title, FORMAT_HTML, array('filter' => true)).'</h1>';
                                endif;
                                $text .='
                            </div>';
                        }
                    }
                    $text .= '
                </div>

                <svg style="display:none;">
                    <defs>
                        <filter id="stroke-text">
                            <feMorphology radius="1" operator="dilate"></feMorphology>
                            <feComposite operator="xor" in="SourceGraphic"/>
                        </filter>
                    </defs>
                </svg>
                ';
                if($this->content->shape_img):
                    $shape_img = $this->content->shape_img;
                    $text .= '                    
                    <div class="oa-feedback-shape"><img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                $text .= '
            </div>
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