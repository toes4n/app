<?php
global $CFG;
require_once($CFG->dirroot .'/blog/lib.php');
require_once($CFG->dirroot .'/blog/locallib.php');
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_blog_area extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_blog_area');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->title = 'eDash latest publications';
            $this->config->subtitle = 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!';
            $this->config->button_text = 'View All News';
            $this->config->button_link = $CFG->wwwroot . '/course';
        }
    }

    public function get_content() {
        global $CFG, $PAGE;

        if ($this->content !== null) {
            return $this->content;
        }
        $this->content         =  new stdClass;
        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}
        if(!empty($this->config->subtitle)){$this->content->subtitle = $this->config->subtitle;} else {$this->content->subtitle = '';}
        if(!empty($this->config->button_text)){$this->content->button_text = $this->config->button_text;} else {$this->content->button_text = '';}
        if(!empty($this->config->button_link)){$this->content->button_link = $this->config->button_link;} else {$this->content->button_link = '';}

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

        if(isset($this->config->shape_img2) && !empty($this->config->shape_img2)){
            $this->content->shape_img2 = $this->config->shape_img2;
        }else{
            $this->content->shape_img2 = '';
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
            <div class="dark-home-with-seven">
                <div class="blog-area pt-100 pb-75">
                    <div class="container">
                        <div class="section-title">
                            <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                            <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>';
                            if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                                $text .= '
                                <a href="'.$this->content->button_link.'" class="default-btn">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'</a>';
                            }
                            $text .= '
                        </div>
                        <div class="row justify-content-center">';
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
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-blog-post">
                                                <div class="image">
                                                    <a href="'.$viewblogurl.'" class="d-block">
                                                        <img src="'.$blogattachments[0]->url.'" alt="'.$entry->subject.'">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <ul class="meta">
                                                        <li><a href="'.$viewblogurl.'">'.$entry->firstname.' '.$entry->lastname.'</a></li>
                                                        <li>'. userdate($entry->created, '%d %B %Y', 0) .'</li>
                                                    </ul>
                                                    <h3><a href="'.$viewblogurl.'">'.$entry->subject.'</a></h3>
                                                    <p>'.$short_summary.'</p>
                                                </div>
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
                        <div class="shape2">
                            <img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'">
                        </div>                 
                        ';
                    endif;
                    $text .= '

                    ';
                    if($this->content->shape_img2):
                        $shape_img2 = $this->content->shape_img2;
                        $text .= '   
                        <div class="shape4">
                            <img src="'.edash_block_image_process($shape_img2).'" alt="'.strip_tags($this->content->title).'">
                        </div>                 
                        ';
                    endif;
                    $text .= '
                </div>
            </div>';
        else:
            $text .= '
            <div class="blog-area pt-100 pb-75">
                <div class="container">
                    <div class="section-title">
                        <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                        <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>';
                        if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                            $text .= '
                            <a href="'.$this->content->button_link.'" class="default-btn">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'</a>';
                        }
                        $text .= '
                    </div>
                    <div class="row justify-content-center">';
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
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-blog-post">
                                            <div class="image">
                                                <a href="'.$viewblogurl.'" class="d-block">
                                                    <img src="'.$blogattachments[0]->url.'" alt="'.$entry->subject.'">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <ul class="meta">
                                                    <li><a href="'.$viewblogurl.'">'.$entry->firstname.' '.$entry->lastname.'</a></li>
                                                    <li>'. userdate($entry->created, '%d %B %Y', 0) .'</li>
                                                </ul>
                                                <h3><a href="'.$viewblogurl.'">'.$entry->subject.'</a></h3>
                                                <p>'.$short_summary.'</p>
                                            </div>
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
                    <div class="shape2">
                        <img src="'.edash_block_image_process($shape_img).'" alt="'.strip_tags($this->content->title).'">
                    </div>                 
                    ';
                endif;
                $text .= '

                ';
                if($this->content->shape_img2):
                    $shape_img2 = $this->content->shape_img2;
                    $text .= '   
                    <div class="shape4">
                        <img src="'.edash_block_image_process($shape_img2).'" alt="'.strip_tags($this->content->title).'">
                    </div>                 
                    ';
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