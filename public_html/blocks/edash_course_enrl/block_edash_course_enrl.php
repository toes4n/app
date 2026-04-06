<?php
global $CFG;
require_once($CFG->dirroot. '/theme/edash/inc/course_handler/edash_course_handler.php');

class block_edash_course_enrl extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_course_enrl');
    }

    // Declare second
    public function specialization()
    {
        global $CFG;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');

        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->video_link = "https://www.youtube.com/watch?v=PWvPbGWVRrU";
            $this->config->title = "Course Preview";
            $this->config->price = "Price";
            $this->config->free = "Free";
            $this->config->btn = "Enrol Now";
            $this->config->btn_link = "";
            $this->config->items = 5;
            $this->config->item_title1  = 'Course Level';
            $this->config->item_icon1   = 'bx bx-sort-up';
            $this->config->item_value1  = 'Intermediate';
            $this->config->item_title2  = 'Duration';
            $this->config->item_icon2   = 'bx bx-time-five';
            $this->config->item_value2  = '7 weeks';
            $this->config->item_title3  = 'Certificate';
            $this->config->item_icon3   = 'bx bx-sun';
            $this->config->item_value3  = 'Yes';
            $this->config->item_title4  = 'Language';
            $this->config->item_icon4   = 'bx bx-globe';
            $this->config->item_value4  = 'English';
            $this->config->item_title5  = 'Access';
            $this->config->item_icon5   = 'bx bx-lock-alt';
            $this->config->item_value5  = 'Lifetime';
        }
    }

    public function get_content() {
        global $CFG, $DB, $COURSE, $USER, $PAGE;

        $edashCourseHandler = new edashCourseHandler();
        $edashCourse = $edashCourseHandler->edashGetCourseDetails($COURSE->id);
        $edashCurrentUserId = $USER->id;

        $context = context_course::instance($COURSE->id, MUST_EXIST);

        $edashEnroled = get_string('course_enrolled', 'theme_edash');
        $edashEnroledText = get_string('course_enrolled_text', 'theme_edash');

        if( function_exists('isguestuser')
          && !isguestuser()
          && isloggedin()
          && is_enrolled($context, $USER, '', true)
          && isset($edashCourse->teachers[$edashCurrentUserId])
          && ($edashCurrentUserId == $edashCourse->teachers[$edashCurrentUserId]->userId)
          ){
            $edashEnroled = get_string('course_enrolled_teacher', 'theme_edash');
            $edashEnroledText = get_string('course_enrolled_teacher_text', 'theme_edash');
        }

        if ($this->content !== null) {
          return $this->content;
        }

        $this->content = new stdClass();

        $items = 5;
        if(isset($this->config->items)){
            $items = $this->config->items;
        }

        if(!empty($this->config->video_link)){$this->content->video_link = $this->config->video_link;}else{$this->content->video_link = '';}

        if(!empty($this->config->title)){$this->content->title = $this->config->title;}else{$this->content->title = '';}

        if(!empty($this->config->price)){$this->content->price = $this->config->price;}else{$this->content->price = '';}

        if(!empty($this->config->free)){$this->content->free = $this->config->free;}else{$this->content->free = '';}
        
        if(!empty($this->config->btn)){$this->content->btn = $this->config->btn;}else{$this->content->btn = '';}
        if(!empty($this->config->btn_link)){$this->content->btn_link = $this->config->btn_link;}else{$this->content->btn_link = '';}

        $text = '';
        $text .= '
        <div class="courses-details-info style-two">
            <div class="image">
                '.$edashCourse->edashRender->coverImage.' ';
                
                if($this->content->video_link): 
                    $text .= '
                    <a href="'.$this->content->video_link.'" class="link-btn popup-video"></a>
                    <div class="content">
                        <i class="bx bx-play"></i>
                        <span>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</span>
                    </div>';
                endif;
                $text .= '
            </div>
            <ul class="info">';
                if($this->content->price){
                    if (is_enrolled($context, $USER, '', true)) {
                        $text .='
                            <div class="price"> '. $edashEnroled .' </div>
                            <p class="mt10">'. $edashEnroledText .'</p>';
                    }elseif($edashCourse->course_price) {
                        $text .='
                        <li class="price">
                            <div class="d-flex justify-content-between align-items-center">
                                <span><i class="bx bx-purchase-tag-alt"></i> '.format_text($this->content->price, FORMAT_HTML, array('filter' => true)).'</span>
                                ' . get_config('theme_edash', 'site_currency') .'' . $edashCourse->course_price .'
                            </div>
                        </li>';
                    }else{ $text .='
                        <li class="price">
                            <div class="d-flex justify-content-between align-items-center">
                                <span><i class="bx bx-purchase-tag-alt"></i> '.format_text($this->content->price, FORMAT_HTML, array('filter' => true)).'</span>
                                '.format_text($this->content->free, FORMAT_HTML, array('filter' => true)).'
                            </div>
                        </li>';
                    } 
                } 
                for ($i = 1; $i <=  $items; $i++) {
                    $item_title = 'item_title' . $i;
                    $item_value = 'item_value' . $i;
                    $item_icon = 'item_icon' . $i;

                    if(isset($this->config->$item_title)) { $item_title =  $this->config->$item_title; }else{ $item_title = ''; }
                    if(isset($this->config->$item_value)) { $item_value =  $this->config->$item_value; }else{ $item_value = ''; }
                    if(isset($this->config->$item_icon)) { $item_icon =  $this->config->$item_icon; }else{ $item_icon = ''; }

                $text .='
                    <li>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="'.$item_icon.'"></i> '.$item_title.'</span>
                            '.$item_value.'
                        </div>
                    </li>';
                }
                $text .='
            </ul>';

            if($this->content->btn): 
                if($this->content->btn_link):
                    $text .='
                    <div class="btn-box">
                        <a href="'. $this->content->btn_link .'" class="default-btn d-block w-100">'.format_text($this->content->btn, FORMAT_HTML, array('filter' => true)).'</a>
                    </div>';
                else:
                    if(!$edashCourse->course_is_enrolled):
                        $text .='
                        <div class="btn-box">
                            <a href="'. $edashCourse->enrolmentLink .'" class="default-btn d-block w-100">'.format_text($this->content->btn, FORMAT_HTML, array('filter' => true)).'</a>
                        </div>';
                    endif;
                endif;
            endif;
            $text .='
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