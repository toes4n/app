<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_why_choose_area extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_why_choose_area');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'Why you Should choose eDash';
            $this->config->features_title1 = 'Learn the Latest Top Skills';
            $this->config->features_title2 = 'Learn From The Industry Experts';
            $this->config->features_title3 = 'Learn in Your Own Pace';
            $this->config->features_title4 = 'Enjoy Learning From Anywhere';

            $this->config->video_title = 'See Our Student Success Story';
            $this->config->video_link = 'https://www.youtube.com/watch?v=PWvPbGWVRrU';

            $this->config->fb_title = 'Learners say about eDash';
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
        }
    }

    public function get_content() {
        global $CFG, $DB;

        $this->content         =  new stdClass;

        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}

        if(!empty($this->config->video_title)){$this->content->video_title = $this->config->video_title;} else {$this->content->video_title = '';}

        if(!empty($this->config->video_link)){$this->content->video_link = $this->config->video_link;} else {$this->content->video_link = '';}

        if(!empty($this->config->fb_title)){$this->content->fb_title = $this->config->fb_title;} else {$this->content->fb_title = '';}

        $featuresnumber = 4;
        if(isset($this->config->featuresnumber)){
            $featuresnumber = $this->config->featuresnumber;
        }

        $bg_img = 'bg_img';
        if(isset($this->config->$bg_img) && !empty($this->config->$bg_img)){
            $this->content->$bg_img = $this->config->$bg_img;
        }else{
            $this->content->$bg_img = '';
        }

        $video_img = 'video_img';
        if(isset($this->config->$video_img) && !empty($this->config->$video_img)){
            $this->content->$video_img = $this->config->$video_img;
        }else{
            $this->content->$video_img = '';
        }

        $video_icon = 'video_icon';
        if(isset($this->config->$video_icon) && !empty($this->config->$video_icon)){
            $this->content->$video_icon = $this->config->$video_icon;
        }else{
            $this->content->$video_icon = '';
        }

        $fb_img = 'fb_img';
        if(isset($this->config->$fb_img) && !empty($this->config->$fb_img)){
            $this->content->$fb_img = $this->config->$fb_img;
        }else{
            $this->content->$fb_img = '';
        }

        $itemsnumber = 3;
        if(isset($this->config->itemsnumber)){
            $itemsnumber = $this->config->itemsnumber;
        }
       
        $text = '';
        $text .= '
            <div class="home-eight-with-bg-image" style="background-image:url('.edash_block_image_process($this->content->$bg_img).');">';
                if($this->content->title || $featuresnumber != 0):
                    $text .='
                    <!-- Start RT Choose Area -->
                    <div class="rt-choose-area pt-100 pb-75">
                        <div class="container-fluid">';
                            if($this->content->title):
                                $text .='
                                <div class="section-title with-just-heading">
                                    <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                                </div>';
                            endif;
                            $text .='
                            
                            <div class="row justify-content-center">';
                                for($i = 1; $i <= $featuresnumber; $i++) {
                                    $features_title = 'features_title' . $i;
                                    $icon           = 'feature_img' . $i;

                                    if(isset($this->config->$features_title)) {
                                        $features_title = $this->config->$features_title;
                                    }else{
                                        $features_title = '';
                                    }
                                    if(isset($this->config->$icon)) {
                                        $icon = $this->config->$icon;
                                    }else{
                                        $icon = '';
                                    }
                                    $grid_class = 'col-xl-3 col-lg-4 col-md-6 col-sm-6';

                                    $text .= '
                                    <div class="'.$grid_class.'">
                                        <div class="rt-choose-card">
                                            <div class="content">';
                                                if($icon):
                                                    $text .='
                                                    <div class="icon-image">
                                                        <img src="'.edash_block_image_process($icon).'" alt="'.format_text($features_title, FORMAT_HTML, array('filter' => true)).'">
                                                    </div>';
                                                endif;
                                                $text .='
                                                <h3>'.format_text($features_title, FORMAT_HTML, array('filter' => true)).'</h3>
                                            </div>
                                        </div>
                                    </div>';
                                } $text .= '
                            </div>
                        </div>
                    </div>
                    <!-- End RT Choose Area -->';
                endif;
                $text .='';          
                    
                if($this->content->video_title || $this->content->video_img):
                    $text .='
                    <!-- Start RT Video Area -->
                    <div class="rt-video-area pb-100">
                        <div class="container">
                            <div class="rt-video-view">';
                                if($this->content->video_img):
                                    $video_img = $this->content->video_img;
                                    $text .= '
                                    <img src="'.edash_block_image_process($video_img).'" alt="'.strip_tags($this->content->video_title).'">';
                                endif;
                                $text .= '

                                <a href="'.$this->content->video_link.'" class="video-btn popup-video">
                                    <div class="polygon-icon">';
                                        if($this->content->video_icon):
                                            $video_icon = $this->content->video_icon;
                                            $text .= '
                                            <img src="'.edash_block_image_process($video_icon).'" alt="'.strip_tags($this->content->video_title).'">';
                                        endif;
                                        $text .= '
                                    </div>
                                    <span>'.format_text($this->content->video_title, FORMAT_HTML, array('filter' => true)).'</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End RT Video Area -->';
                endif;
                $text .='';

                if($this->content->fb_title || $itemsnumber):
                    $text .='
                    <!-- Start RT Feedback Area -->
                    <div class="rt-feedback-area pb-100">
                        <div class="container">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-8 col-md-12">
                                    <div class="rt-feedback-content">
                                        <h2>'.format_text($this->content->fb_title, FORMAT_HTML, array('filter' => true)).'</h2>

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

                                <div class="col-lg-4 col-md-12">
                                    <div class="rt-feedback-image">';
                                        if($this->content->fb_img):
                                            $fb_img = $this->content->fb_img;
                                            $text .= '                    
                                            <img src="'.edash_block_image_process($fb_img).'" alt="'.strip_tags($this->content->fb_title).'">';
                                        endif;
                                        $text .= '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End RT Feedback Area -->';
                endif;
                $text .='   
            </div>
        ';
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