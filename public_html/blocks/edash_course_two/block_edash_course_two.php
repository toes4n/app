<?php
require_once($CFG->dirroot. '/course/renderer.php');
require_once($CFG->dirroot . '/theme/edash/inc/course_handler/edash_course_handler.php');
global $CFG;
class block_edash_course_two extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_course_two');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->top_title = 'COURSES';
            $this->config->title = 'Explore Our Popular Courses';
            $this->config->button = 'Enroll Now';
            $this->config->price = '1';
        }
    }

    public function get_content() {
        global $CFG, $DB, $COURSE, $USER, $PAGE;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         =  new stdClass;
        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}
        if(!empty($this->config->top_title)){$this->content->top_title = $this->config->top_title;} else {$this->content->top_title = '';}
        if(!empty($this->config->button)){$this->content->button = $this->config->button;} else {$this->content->button = '';}
        if(!empty($this->config->price)){$this->content->price = $this->config->price;} else {$this->content->price = '1';}
        if( isset($this->content->price) && $this->content->price == '1' ) {
            $BlockShowPrice = 1;
        } else {
            $BlockShowPrice = 0;
        }

        $categories = array();
        if(!empty($this->config->courses)){
            $coursesArr = $this->config->courses;
            $courses = new stdClass();
            foreach ($coursesArr as $key => $course) {
                $courseObj = new stdClass();
                $courseObj->id = $course;
                $courseRecord = $DB->get_record('course', array('id' => $courseObj->id), 'category');
                $courseCategory = $DB->get_record('course_categories',array('id' => $courseRecord->category));
                $courseCategory = core_course_category::get($courseCategory->id);
                $courseObj->category = $courseCategory->id;
                $courseObj->category_name = $courseCategory->get_formatted_name();
                $courses->$course = $courseObj;
            }
            $categories = array();
            foreach ($courses as $key => $course) {
                $categories[$course->category] = $course->category_name;
            }
            $categories = array_unique($categories);
        }

        $text = '';
        $text .= '

        <div class="courses-area pt-100 pb-75">
            <div class="container">
                <div class="section-title style-two">
                    <span class="sub-title">'.format_text($this->content->top_title, FORMAT_HTML, array('filter' => true)).'</span>
                    <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                </div>
                <div class="row">';
                    if(!empty($this->config->courses)){
                        $chelper = new coursecat_helper();
                        $total_courses = count($coursesArr);
                        foreach ($courses as $course) {
                            if ($DB->record_exists('course', array('id' => $course->id))) {
                                
                                $edashCourseHandler = new edashCourseHandler();
                                $edashCourse = $edashCourseHandler->edashGetCourseDetails($course->id);
                                $edashCourseDescription = $edashCourseHandler->edashGetCourseDescription($course->id, 100);

                                // Rating Control
                                $filepath = $CFG->dirroot . '/admin/tool/courserating/version.php';
                                if (file_exists($filepath) && !empty($course->id) && is_int($course->id)) {
                                    $tool_courserating = $PAGE->get_renderer('tool_courserating');
                                    $rating_block = $tool_courserating->course_rating_block($course->id);
                                } else {
                                    $rating_block = '';
                                }

                                $text .= '
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-md-6">
                                    <div class="single-courses-item">
                                        <div class="front">
                                            <div class="image">
                                                <div class="course-cat">'.$edashCourse->categoryName.'</div>
                                                <a href="'. $edashCourse->url .'" class="d-block">
                                                    '.$edashCourse->edashRender->coverImage.'
                                                </a>
                                            </div>
                                            <div class="content">
                                                <ul class="courses-box-info d-flex justify-content-between align-items-center">';
                                                    if($edashCourse->course_is_enrolled):
                                                        if(get_config('theme_edash', 'enrolled_text')):
                                                            $text .= '
                                                            <li class="enrolled-lable">
                                                                <i class="bx bx-user-check"></i>
                                                                '.get_config('theme_edash', 'enrolled_text') .'
                                                            </li>';
                                                        endif;
                                                    else:
                                                        $text .= '
                                                        <li>
                                                            <i class="flaticon-clock"></i> '. $edashCourse->edashRender->updatedDate .'
                                                        </li>';
                                                    endif;
                                                    $text .= '
                                                    <li>
                                                        <i class="flaticon-people"></i> '.$edashCourse->enrolments.' '.get_string('course_students', 'theme_edash').'
                                                    </li>
                                                </ul>

                                                <h3><a href="'. $edashCourse->url .'">'.$edashCourse->fullName.'</a></h3>
                                                <div class="desc">
                                                    '.$edashCourseDescription.'
                                                </div>

                                                <div class="edash-rating-area">
                                                    '.$rating_block.'
                                                </div>';

                                                if($edashCourse->course_price) {
                                                    $text .= '
                                                    <div class="price">
                                                        <span class="new-price">'.get_config('theme_edash', 'site_currency') .''.$edashCourse->course_price.'</span>
                                                    </div>';
                                                }else{
                                                    $text .= '
                                                    <div class="price">
                                                        <span class="new-price">'.get_string('course_free', 'theme_edash').'</span>
                                                    </div>';
                                                } $text .= '
                                            </div>
                                        </div>
                                        <div class="back">
                                            <div class="d-table">
                                                <div class="d-table-cell">
                                                    <h3><a href="'. $edashCourse->url .'">'.$edashCourse->fullName.'</a></h3>
                                                    <span class="update-info">'. $edashCourse->edashRender->updatedDate .'</span>
                                                    <div class="stats d-flex align-items-center">
                                                        <span class="level">'.get_string('course_total_students', 'theme_edash').'</span>
                                                        <span>'.$edashCourse->enrolments.' '.get_string('course_students', 'theme_edash').'</span>
                                                    </div>
                                                    <p>'.$edashCourseDescription.'</p>
                                                    <ul>
                                                        <li><i class="flaticon-check-mark"></i> '.get_string('course_total_announcements', 'theme_edash').' '. $edashCourse->announcements .'</li>
                                                        <li><i class="flaticon-check-mark"></i> '.get_string('course_format', 'theme_edash').' '. $edashCourse->format .'</li>
                                                    </ul>

                                                    <div class="edash-rating-area">
                                                        '.$rating_block.'
                                                    </div>';

                                                    if($this->content->button):
                                                        $text .= '
                                                        <div class="btn-box d-flex align-items-center">
                                                            <a href="'. $edashCourse->enrolmentLink .'" class="default-btn">'. format_text($this->content->button, FORMAT_HTML, array('filter' => true)) .' <i class="flaticon-shopping-cart-1"></i></a>
                                                        </div>';
                                                    endif;
                                                    $text .= '
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
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