<?php
global $CFG;
class block_edash_search extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_search');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->search_placeholder = 'Search...';
            $this->config->title = 'Search';

        }
    }

    public function get_content() {
        global $CFG, $DB;

        if ($this->content !== null) {
          return $this->content;
        }

        $this->content         =  new stdClass;

        if (\core_search\manager::is_global_search_enabled() === false) {
            $this->content->search_placeholder = '';
        }else{
            if(isset($this->config->search_placeholder) && !empty($this->config->search_placeholder)){
                $this->content->search_placeholder = $this->config->search_placeholder;
            }else{
                $this->content->search_placeholder = '';
            }
        }

        if(isset($this->config->title) && !empty($this->config->title)){
            $this->content->title = $this->config->title;
        }else{
            $this->content->title = '';
        }

        $url = new moodle_url('/course/search.php');

        $text = '';
        $text .= '
            <div class="widget widget_search">';
                if($this->content->search_placeholder):
                    $text .= '
                    <h5>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h5>
                    <form class="search-form" action="'.$url->out().'" method="post">
                        <input type="hidden" name="areaids" value="core_course-course">
                        <input type="text" name="q"  class="search-field" placeholder="'.format_text($this->content->search_placeholder, FORMAT_HTML, array('filter' => true)).'">
                        <button type="submit"><i class="bx bx-search-alt"></i></button>
                    </form>';
                endif;
                $text .= '
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