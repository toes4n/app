<?php
global $CFG;
class block_edash_faq extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_faq');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'Ciao! How Can We Help You?';
            $this->config->search_placeholder = 'Search a question...';
            $this->config->search_btn = 'Search';
            $this->config->faqnumber = '3';
            
            $this->config->faq_title1 = 'Do I have to be a student to take an online course?';
            $this->config->faq_title2 = 'How old do I have to be to take an online class?';
            $this->config->faq_title3 = 'What if I change my mind and want to drop my class?';
            $this->config->faq_body1 = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.';
            $this->config->faq_body2 = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.';
            $this->config->faq_body3 = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.';
        }
    }

    public function get_content() {
        global $CFG, $DB;

        if ($this->content !== null) {
            return $this->content;
        }
  
        $this->content         =  new stdClass;
        if(!empty($this->config->title)){
            $this->content->title = $this->config->title;
        }else{
            $this->content->title = '';
        }
        if(isset($this->config->body) && !empty($this->config->body)){
            $this->content->body = $this->config->body;
        }else{
            $this->content->body = '';
        }

        if(isset($this->config->search_placeholder) && !empty($this->config->search_placeholder)){
            $this->content->search_placeholder = $this->config->search_placeholder;
        }else{
            $this->content->search_placeholder = '';
        }

        if(isset($this->config->search_btn) && !empty($this->config->search_btn)){
            $this->content->search_btn = $this->config->search_btn;
        }else{
            $this->content->search_btn = '';
        }

        $faqnumber = 3;
        if (isset($this->config->faqnumber) && is_numeric($this->config->faqnumber)) {
            $faqnumber = (int)$this->config->faqnumber;
        }

        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

       
        $text = '';
        $text .= '
        <div class="faq-area ptb-100">
            <div class="container">
                <div class="faq-content">
                    <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>';

                    if($this->content->search_placeholder):
                        $text .= '
                        <form action="'.$actual_link.'" method="post">
                            <label><i class="bx bx-search-alt"></i></label>
                            <input type="text" name="input-search" class="input-search" placeholder="'.format_text($this->content->search_placeholder, FORMAT_HTML, array('filter' => true)).'">
                            <button type="submit" class="default-btn">'.format_text($this->content->search_btn, FORMAT_HTML, array('filter' => true)).'</button>
                        </form>';
                    endif;
                    $text .= '
                </div>
                <div class="faq-accordion">
                    <div class="accordion" id="faqAccordion">';
                        for ($i = 1; $i <= $faqnumber; $i++) {
                            $faq_title_key = 'faq_title' . $i;
                            $faq_body_key = 'faq_body' . $i;

                            $faq_title = isset($this->config->$faq_title_key) ? $this->config->$faq_title_key : '';
                            $faq_body = isset($this->config->$faq_body_key) ? $this->config->$faq_body_key : '';

                            $show = ($i == 1) ? 'show' : '';
                            $collapsed = ($i == 1) ? '' : 'collapsed';
                            $aria_expanded = ($i == 1) ? 'true' : 'false';

                            $text .= '
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading'.$i.'">
                                        <button class="accordion-button '.$collapsed.'" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$i.'" aria-expanded="'.$aria_expanded.'" aria-controls="collapse'.$i.'">
                                            '.$faq_title.'
                                        </button>
                                    </h2>
                                    <div id="collapse'.$i.'" class="accordion-collapse collapse '.$show.'" aria-labelledby="heading'.$i.'" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            '.$faq_body.'
                                        </div>
                                    </div>
                                </div>';
                        }
                        $text .= '
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