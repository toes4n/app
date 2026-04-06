<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_contact extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_contact');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'Get in Touch';
            $this->config->subtitle = 'Have a inquiry or some feedback for us? Fill out the form below to contact our team. For partnership and business development inquiries.';
            $this->config->contact_title1 = 'San Francisco, CA';
            $this->config->contact_title2 = 'Dublin, Ireland';
            $this->config->contact_title3 = 'Istanbul, Turkey';
            $this->config->contact_subtitle1 = '1890 Sutter St. State CA 94115';
            $this->config->contact_subtitle2 = '110-111 Cork St, The Liberties, E1VN';
            $this->config->contact_subtitle3 = 'Çengelköy, Salkım Söğüt Çk.';
        }
    }

    public function get_content() {
        global $CFG, $DB;

        $this->content         =  new stdClass;
        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}
        if(!empty($this->config->subtitle)){$this->content->subtitle = $this->config->subtitle;} else {$this->content->subtitle = '';}
        if(!empty($this->config->img)){$this->content->img = $this->config->img;} else {$this->content->img = '';}
        if(!empty($this->config->contact_from_code)){$this->content->contact_from_code = $this->config->contact_from_code;} else {$this->content->contact_from_code = '';}

        $contactnumber = 3;
        if(isset($this->config->contactnumber)){
            $contactnumber = $this->config->contactnumber;
        }

        $text = '';
        $text .= '
        <div class="contact-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-info">';
                            if($this->content->img):
                                $img = $this->content->img;
                                $text .= '
                                <img src="'.edash_block_image_process($img).'" alt="contact">';
                            endif;
                            $text .= '
                            <ul>';
                                for($i = 1; $i <= $contactnumber; $i++) {
                                    $contact_title = 'contact_title' . $i;
                                    $contact_subtitle = 'contact_subtitle' . $i;
        
                                    if(isset($this->config->$contact_title)) {
                                        $contact_title = $this->config->$contact_title;
                                        
                                    }else{
                                        $contact_title = '';
                                    }
                                    if(isset($this->config->$contact_subtitle)) {
                                        $contact_subtitle = $this->config->$contact_subtitle;
                                    }else{
                                        $contact_subtitle = '';
                                    }
                                    if($contact_title || $contact_subtitle){
                                        $text .= '
                                        <li>
                                            <h3>'.format_text($contact_title, FORMAT_HTML, array('filter' => true)).'</h3>
                                            <p>'.format_text($contact_subtitle, FORMAT_HTML, array('filter' => true)).'</p>
                                        </li>';
                                    }
                                } $text .= '
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-form style-two">
                            <h2>'.format_text($this->config->title, FORMAT_HTML, array('filter' => true)).'</h2>
                            <p>'.format_text($this->config->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
                            '.$this->content->contact_from_code.'
                        </div>
                    </div>
                </div>
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