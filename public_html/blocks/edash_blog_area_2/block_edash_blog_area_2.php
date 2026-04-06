<?php
global $CFG;
require_once($CFG->dirroot .'/blog/lib.php');
require_once($CFG->dirroot .'/blog/locallib.php');
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_blog_area_2 extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_blog_area_2');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'eDash latest publications';
            $this->config->style = 1;
        }
    }

    public function get_content() {
        global $CFG, $PAGE;

        if ($this->content !== null) {
            return $this->content;
        }
        $this->content         =  new stdClass;
        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}

        if(!empty($this->config->posts)){$this->content->posts = $this->config->posts;} else { $this->content->posts = '';}

        if(isset($this->config->shape_img) && !empty($this->config->shape_img)){
            $this->content->shape_img = $this->config->shape_img;
        }else{
            $this->content->shape_img = '';
        }

        $style = 1;
        if(isset($this->config->style)){
            $style = $this->config->style;
        }

        $url = new moodle_url('/blog/index.php');

        global $CFG;
        $bloglisting = new blog_listing();

        $entries = $bloglisting->get_entries();
        
        $entrieslist = array();
        $viewblogurl = new moodle_url('/blog/index.php');

        $text = '';

        if($style == 2):
            $text .= '
            <div class="rt-blog-area oa-blog-area ptb-100">
                <div class="container">
                    <div class="section-title with-just-heading">
                        <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                    </div>
                    
                    <div class="rt-blog-slides owl-carousel owl-theme">';
                        if($this->content->posts):
                            foreach ($entries as $entryid => $entry) {
                                $viewblogurl->param('entryid', $entryid);
                                $entrylink = html_writer::link($viewblogurl, shorten_text($entry->subject));
                                $entrieslist[] = $entrylink;
                
                                $blogentry = new blog_entry($entryid);
                                $blogattachments = $blogentry->get_attachments();

                                $short_summary = $entry->summary;
                                $short_summary = strip_tags( $short_summary);
                                $short_summary = implode(' ', array_slice(str_word_count($short_summary,1), 0, 15));

                                if(in_array($entry->id, $this->content->posts)):
                                    $text .= '
                                    <div class="rt-blog-card">
                                        <div class="blog-image">
                                            <a href="'.$viewblogurl.'" class="d-block">
                                                <img src="'.$blogattachments[0]->url.'" alt="'.$entry->subject.'">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <h3><a href="'.$viewblogurl.'">'.$entry->subject.'</a></h3>
                                            <ul class="meta">
                                                <li><a href="'.$viewblogurl.'">'.$entry->firstname.' '.$entry->lastname.'</a></li>
                                                <li>'. userdate($entry->created, '%d %B %Y', 0) .'</li>
                                            </ul>
                                        </div>
                                    </div>';
                                endif;
                            }
                        endif;
                        $text .= '
                    </div>
                </div>';

                if($this->content->shape_img):
                    $shape_img = $this->content->shape_img;
                    $text .= '   
                    <div class="rt-blog-shape">
                        <img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'">
                    </div>';
                endif;
                $text .= '
            </div>';
        else:
            $text .= '
            <div class="rt-blog-area ptb-100">
                <div class="container">
                    <div class="section-title with-just-heading">
                        <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                    </div>
                    
                    <div class="rt-blog-slides owl-carousel owl-theme">';
                        if($this->content->posts):
                            foreach ($entries as $entryid => $entry) {
                                $viewblogurl->param('entryid', $entryid);
                                $entrylink = html_writer::link($viewblogurl, shorten_text($entry->subject));
                                $entrieslist[] = $entrylink;
                
                                $blogentry = new blog_entry($entryid);
                                $blogattachments = $blogentry->get_attachments();

                                $short_summary = $entry->summary;
                                $short_summary = strip_tags( $short_summary);
                                $short_summary = implode(' ', array_slice(str_word_count($short_summary,1), 0, 15));

                                if(in_array($entry->id, $this->content->posts)):
                                    $text .= '
                                    <div class="rt-blog-card">
                                        <div class="blog-image">
                                            <a href="'.$viewblogurl.'" class="d-block">
                                                <img src="'.$blogattachments[0]->url.'" alt="'.$entry->subject.'">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <h3><a href="'.$viewblogurl.'">'.$entry->subject.'</a></h3>
                                            <ul class="meta">
                                                <li><a href="'.$viewblogurl.'">'.$entry->firstname.' '.$entry->lastname.'</a></li>
                                                <li>'. userdate($entry->created, '%d %B %Y', 0) .'</li>
                                            </ul>
                                        </div>
                                    </div>';
                                endif;
                            }
                        endif;
                        $text .= '
                    </div>
                </div>';

                if($this->content->shape_img):
                    $shape_img = $this->content->shape_img;
                    $text .= '   
                    <div class="rt-blog-shape">
                        <img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'">
                    </div>';
                endif;
                $text .= '
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