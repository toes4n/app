<?php
global $CFG;
class block_edash_gallery extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_gallery');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'eDash Gallery';
            $this->config->body = 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!';
        }
    }

    public function get_content() {
        global $CFG, $DB;
        require_once($CFG->libdir . '/filelib.php');

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
        $text = '';
        $text .= '
        <div class="gallery-area ptb-100">
            <div class="container">
                <div class="section-title style-two">
                    <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                    <p>'.format_text($this->content->body, FORMAT_HTML, array('filter' => true)).'</p>
                </div>

                <div class="row">';
                    $fs = get_file_storage();
                    $files = $fs->get_area_files($this->context->id, 'block_edash_gallery', 'content');
                    foreach ($files as $file) {
                        $filename = $file->get_filename();
                        if ($filename <> '.') {
                            $url = moodle_url::make_pluginfile_url($file->get_contextid(), $file->get_component(), $file->get_filearea(), null, $file->get_filepath(), $filename);
                            $text .= '
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="gallery-item">
                                    <a href="'. $url.'" class="popup-img">
                                        <img src="'. $url.'" alt="'. $filename.'">    
                                    </a>    
                                </div>
                            </div>';
                            }
                        }
                        $text .= '
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