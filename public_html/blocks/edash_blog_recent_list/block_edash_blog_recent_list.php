<?php
global $CFG;
class block_edash_blog_recent_list extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_blog_recent_list');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'Recent Posts';

        }
    }

    public function get_content() {
        global $CFG, $PAGE;

        if ($this->content !== null) {
          return $this->content;
        }

         // verify blog is enabled
         if (empty($CFG->enableblogs)) {
            $this->content = new stdClass();
            $this->content->text = '';
            if ($this->page->user_is_editing()) {
                $this->content->text = get_string('blogdisable', 'blog');
            }
            return $this->content;

        } else if ($CFG->bloglevel < BLOG_GLOBAL_LEVEL and (!isloggedin() or isguestuser())) {
            $this->content = new stdClass();
            $this->content->text = '';
            return $this->content;
        }

        if (empty($this->config)) {
            $this->config = new stdClass();
        }

        if (empty($this->config->recentbloginterval)) {
            $this->config->recentbloginterval = 8400;
        }

        if (empty($this->config->numberofrecentblogentries)) {
            $this->config->numberofrecentblogentries = 4;
        }

        $this->content         =  new stdClass;

        if(isset($this->config->title) && !empty($this->config->title)){
            $this->content->title = $this->config->title;
        }else{
            $this->content->title = '';
        }

        $context = $this->page->context;

        $url = new moodle_url('/blog/index.php');
        $filter = array();
        if ($context->contextlevel == CONTEXT_MODULE) {
            $filter['module'] = $context->instanceid;
            $a = new stdClass;
            $a->type = get_string('modulename', $this->page->cm->modname);
            $strview = get_string('viewallmodentries', 'blog', $a);
            $url->param('modid', $context->instanceid);
        } else if ($context->contextlevel == CONTEXT_COURSE) {
            $filter['course'] = $context->instanceid;
            $a = new stdClass;
            $a->type = get_string('course');
            $strview = get_string('viewblogentries', 'blog', $a);
            $url->param('courseid', $context->instanceid);
        } else {
            $strview = get_string('viewsiteentries', 'blog');
        }
        $filter = null;


        global $CFG;
        $bloglisting = new blog_listing();

        $entries = $bloglisting->get_entries();
        $entrieslist = array();
        $viewblogurl = new moodle_url('/blog/index.php');

        $text = '';
        $text .= '
            <div class="widget widget_edash_posts_thumb">
                <h5><span>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</span></h5>';
                foreach ($entries as $entryid => $entry) {
                    $viewblogurl->param('entryid', $entryid);
                    $entrylink = html_writer::link($viewblogurl, shorten_text($entry->subject));
                    $entrieslist[] = $entrylink;

                    $blogentry = new blog_entry($entryid);
                    $blogattachments = $blogentry->get_attachments();
                    $text .= '
                    <article class="item">
                        <a href="'.$viewblogurl.'" class="thumb">
                            <img src="'.$blogattachments[0]->url.'" alt="'.$entry->subject.'">
                        </a>
                        <div class="info">
                            <h4 class="title"><a href="'.$viewblogurl.'">'. $entry->subject.'</a></h4>
                            <span class="date">'. userdate($entry->created, '%d %B', 0) .'</span>
                        </div>
                    </article>';
                }
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