<?php
global $CFG;
require_once($CFG->dirroot. '/theme/edash/inc/course_handler/edash_course_handler.php');

class block_edash_course_desc extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_course_desc');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
    }

    public function get_content() {
        global $CFG, $DB, $COURSE, $USER, $PAGE;

        $this->content         =  new stdClass;        

        $edashCourseHandler = new edashCourseHandler();
        $edashCourse = $edashCourseHandler->edashGetCourseDetails($COURSE->id);
        $edashCourseDescription = $edashCourseHandler->edashGetCourseDescription($COURSE->id, 99999999999999999999999);

        $text = '';

        $text .= '
        <div class="courses-overview">
            '.$edashCourseDescription.'
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
            'all' => false,
            'my' => false,
            'admin' => false,
            'course-view' => true,
            'course' => false,
        );
    }

}