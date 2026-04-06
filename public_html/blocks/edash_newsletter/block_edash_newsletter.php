<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_newsletter extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_newsletter');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'There a better way to get healthy subscribe to my newsletter';
            $this->config->body = 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!';
            $this->config->placeholder = 'Enter your email address';
            $this->config->btn = 'Subscribe Now';
            $this->config->action_url = '';
            $this->config->config_newsletter_style = 1;
        }
    }

    public function get_content() {
        global $CFG, $DB, $COURSE, $USER, $PAGE;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         =  new stdClass;

        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}

        if(!empty($this->config->body)){$this->content->body = $this->config->body;} else {$this->content->body = '';}

        if(!empty($this->config->placeholder)){$this->content->placeholder = $this->config->placeholder;} else {$this->content->placeholder = '';}

        if(!empty($this->config->btn)){$this->content->btn = $this->config->btn;} else {$this->content->btn = '';}

        if(!empty($this->config->action_url)){$this->content->action_url = $this->config->action_url;} else {$this->content->action_url = '';}

        $img = 'img';
        if(isset($this->config->$img) && !empty($this->config->$img)){ $this->content->img = $this->config->$img; }else{ $this->content->img = '';}

        $shape_img = 'shape_img';
        if(isset($this->config->$shape_img) && !empty($this->config->$shape_img)){ $this->content->$shape_img = $this->config->$shape_img; }else{ $this->content->$shape_img = ''; }

        $newsletter_style = 1;
        if(isset($this->config->newsletter_style)){
            $newsletter_style = $this->config->newsletter_style;
        }

        $text = '';
        
        if($newsletter_style == 2):
            $text .= '
            <div class="vc-subscribe-area">
            <div class="container">
                <div class="vc-subscribe-inner-box ptb-100">
                    <div class="vc-subscribe-content">
                        <h3>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h3>
                        <p>'.format_text($this->content->body, FORMAT_HTML, array('filter' => true)).'</p>';

                        if($this->content->action_url):
                            $text .= '
                            <form action="'.$this->content->action_url.'" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletter-form validate" target="_blank">
                                <input type="text" value="" name="EMAIL" class="email input-newsletter" id="mce-EMAIL" placeholder="'.format_text($this->content->placeholder, FORMAT_HTML, array('filter' => true)).'" required>
                                <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button default-btn">'.format_text($this->content->btn, FORMAT_HTML, array('filter' => true)).'</button>
                            </form>';
                            endif;
                            $text .= '  
                    </div>

                    <div class="vc-subscribe-shape">';
                        if($this->content->img):
                            $img = $this->content->img;
                            $text .= '                    
                            <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($this->content->title).'">';
                        endif;
                        $text .= '
                    </div>
                </div>
            </div>
        </div>';
        else:
            $text .= '
            <div class="kc-subscribe-area">
                <div class="container">
                    <div class="kc-subscribe-inner-box ptb-100">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-7 col-md-12">
                                <div class="kc-subscribe-content">
                                    <h3>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h3>
                                    <p>'.format_text($this->content->body, FORMAT_HTML, array('filter' => true)).'</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">';
                                if($this->content->action_url):
                                    $text .= '
                                    <form action="'.$this->content->action_url.'" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletter-form validate" target="_blank">
                                        <input type="text" value="" name="EMAIL" class="email input-newsletter" id="mce-EMAIL" placeholder="'.format_text($this->content->placeholder, FORMAT_HTML, array('filter' => true)).'" required>
                                        <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button default-btn">'.format_text($this->content->btn, FORMAT_HTML, array('filter' => true)).'</button>
                                    </form>';
                                    endif;
                                    $text .= '
                            </div>
                        </div>

                        <div class="kc-subscribe-shape-1">';
                            if($this->content->img):
                                $img = $this->content->img;
                                $text .= '                    
                                <img src="'.edash_block_image_process($img).'" alt="'.strip_tags($this->content->title).'">';
                            endif;
                            $text .= '
                        </div>
                        <div class="kc-subscribe-shape-2">';
                            $shape_img = $this->content->shape_img;
                            if($this->content->shape_img):
                                $text .= '
                                    <img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'">';
                            endif;
                            $text .= '
                        </div>
                    </div>
                </div>
            </div>';
            endif;
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