<?php
require_once($CFG->dirroot. '/course/renderer.php');
require_once($CFG->dirroot . '/theme/edash/inc/course_handler/edash_course_handler.php');
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
global $CFG;
class block_edash_course_filter_slider extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_course_filter_slider');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $this->config = new \stdClass();
            $this->config->style = 1;
            $this->config->title = 'Students are viewing';
            $this->config->subtitle = 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!';
            $this->config->button_text = 'View All Courses';
            $this->config->button_link = $CFG->wwwroot . '/course';
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
        if(!empty($this->config->subtitle)){$this->content->subtitle = $this->config->subtitle;} else {$this->content->subtitle = '';}
        if(!empty($this->config->button_text)){$this->content->button_text = $this->config->button_text;} else {$this->content->button_text = '';}
        if(!empty($this->config->button_link)){$this->content->button_link = $this->config->button_link;} else {$this->content->button_link = '';}
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

        $style = 1;
        if(isset($this->config->style)){
            $style = $this->config->style;
        }

        $shape_image_count = 3;
        for($i = 1; $i <= $shape_image_count; $i++) {
            $shape_img = 'shape_img' .$i;
            if(isset($this->config->$shape_img) && !empty($this->config->$shape_img)){
                $this->content->$shape_img = $this->config->$shape_img;
            }else{
                $this->content->$shape_img = '';
            }
        }

        $btn_img = 'btn_img';
            if(isset($this->config->$btn_img) && !empty($this->config->$btn_img)){
                $this->content->$btn_img = $this->config->$btn_img;
            }else{
                $this->content->$btn_img = '';
            }
        $text = '';
        
        if($style == 2):
            $text .= '
            <div class="dark-home-with-seven">
                <div class="courses-area pt-100 pb-75 slider-courses-area">
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

                        <div class="courses-slides owl-carousel owl-theme">';
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
                                        <div class="single-courses-box">
                                            <div class="image">
                                                <div class="course-cat">'.$edashCourse->categoryName.'</div>
                                                '.$edashCourse->edashRender->coverImage.'
                                                <a href="'. $edashCourse->url .'" class="link-btn"></a>
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
                                        </div>';
                                    }
                                }                        
                            }
                            $text .= '
                        </div>
                    </div>';
                    if($this->content->shape_img1):
                        $shape_img1 = $this->content->shape_img1;
                        $text .= '                    
                        <div class="shape5"><img src="'.edash_block_image_process($shape_img1).'" alt="'.strip_tags($this->content->title).'"></div>';
                    endif;
                    if($this->content->shape_img2):
                        $shape_img2 = $this->content->shape_img2;
                        $text .= '                    
                        <div class="shape4 style-two"><img src="'.edash_block_image_process($shape_img2).'" alt="'.strip_tags($this->content->title).'"></div>';
                    endif;

                    if($this->content->shape_img3):
                        $shape_img3 = $this->content->shape_img3;
                        $text .= '                    
                        <div class="shape5 style-two"><img src="'.edash_block_image_process($shape_img3).'" alt="'.strip_tags($this->content->title).'"></div>';
                    endif;
                    $text .= '
                </div>
            </div>';
        elseif($style == 3):
            $text .= '
            <div class="rt-courses-area pt-100 pb-75">
                <div class="container">
                    <div class="section-title with-just-heading">
                        <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>';

                        if($this->content->subtitle):$text .= '
                            <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>';
                        endif;

                        if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                            $text .= '
                            <a href="'.$this->content->button_link.'" class="default-btn">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'</a>';
                        }
                        $text .= '
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="rt-courses-slides owl-carousel owl-theme">';
                        if(!empty($this->config->courses)){
                            $chelper = new coursecat_helper();
                            $total_courses = count($coursesArr);
                            foreach ($courses as $course) {
                                if ($DB->record_exists('course', array('id' => $course->id))) {
                                    
                                    $edashCourseHandler = new edashCourseHandler();
                                    $edashCourse = $edashCourseHandler->edashGetCourseDetails($course->id);
                                    $edashCourseDescription = $edashCourseHandler->edashGetCourseDescription($course->id, 150);

                                    // Rating Control
                                    $filepath = $CFG->dirroot . '/admin/tool/courserating/version.php';
                                    if (file_exists($filepath) && !empty($course->id) && is_int($course->id)) {
                                        $tool_courserating = $PAGE->get_renderer('tool_courserating');
                                        $rating_block = $tool_courserating->course_rating_block($course->id);
                                    } else {
                                        $rating_block = '';
                                    }

                                    $text .= '
                                    <div class="rt-single-courses-box">
                                        <div class="image">
                                            <div class="course-cat">'.$edashCourse->categoryName.'</div>
                                            '.$edashCourse->edashRender->coverImage.'
                                            <a href="'. $edashCourse->url .'" class="link-btn"></a>
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
                                    </div>';
                                }
                            }                        
                        }
                        $text .= '
                    </div>
                </div>';
                if($this->content->shape_img1):
                    $shape_img1 = $this->content->shape_img1;
                    $text .= '                    
                    <div class="shape5"><img src="'.edash_block_image_process($shape_img1).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                if($this->content->shape_img2):
                    $shape_img2 = $this->content->shape_img2;
                    $text .= '                    
                    <div class="shape4 style-two"><img src="'.edash_block_image_process($shape_img2).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;

                if($this->content->shape_img3):
                    $shape_img3 = $this->content->shape_img3;
                    $text .= '                    
                    <div class="shape5 style-two"><img src="'.edash_block_image_process($shape_img3).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                $text .= '
            </div>';
        elseif($style == 4):
            $text .= '
            <div class="oa-classes-area ptb-100">
                <div class="container">
                    <div class="section-title with-just-heading d-flex justify-content-center justify-content-between">
                        <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>';

                        if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                            $text .= '
                            <a href="'.$this->content->button_link.'" class="default-btn">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).' ';
                            if($this->content->btn_img):
                                $btn_img = $this->content->btn_img;
                                $text .= '                    
                                <img src="'.edash_block_image_process($btn_img).'" alt="'.strip_tags($this->content->title).'">';
                            endif;
                            $text .= '                            
                            </a>';
                        }
                        $text .= '
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="oa-classes-slides owl-carousel owl-theme">';
                        if(!empty($this->config->courses)){
                            $chelper = new coursecat_helper();
                            $total_courses = count($coursesArr);
                            foreach ($courses as $course) {
                                if ($DB->record_exists('course', array('id' => $course->id))) {
                                    
                                    $edashCourseHandler = new edashCourseHandler();
                                    $edashCourse = $edashCourseHandler->edashGetCourseDetails($course->id);
                                    $edashCourseDescription = $edashCourseHandler->edashGetCourseDescription($course->id, 60);

                                    // Rating Control
                                    $filepath = $CFG->dirroot . '/admin/tool/courserating/version.php';
                                    if (file_exists($filepath) && !empty($course->id) && is_int($course->id)) {
                                        $tool_courserating = $PAGE->get_renderer('tool_courserating');
                                        $rating_block = $tool_courserating->course_rating_block($course->id);
                                    } else {
                                        $rating_block = '';
                                    }

                                    $text .= '
                                    <div class="oa-classes-card">
                                        <div class="row m-0">
                                            <div class="col-lg-7 col-md-6 p-0">
                                                <div class="oa-classes-image" style="background-image:url('.$edashCourse->edashRender->ImageUrl.');"></div>
                                            </div>

                                            <div class="col-lg-5 col-md-6 p-0">
                                                <div class="oa-classes-content">
                                                    <h3><a href="'. $edashCourse->url .'">'.$edashCourse->fullName.'</a></h3>
                                                    <p>'.$edashCourseDescription.'</p>
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
                                        </div>
                                    </div>';
                                }
                            }                        
                        }
                        $text .= '
                    </div>
                </div>';
                
                if($this->content->shape_img1):
                    $shape_img1 = $this->content->shape_img1;
                    $text .= '                    
                    <div class="oa-classes-shape"><img src="'.edash_block_image_process($shape_img1).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                $text .= '
            </div>';
        else:
            $text .= '
            <div class="courses-area pt-100 pb-75 slider-courses-area">
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

                    <div class="courses-slides owl-carousel owl-theme">';
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
                                    <div class="single-courses-box">
                                        <div class="image">
                                            <div class="course-cat">'.$edashCourse->categoryName.'</div>
                                            '.$edashCourse->edashRender->coverImage.'
                                            <a href="'. $edashCourse->url .'" class="link-btn"></a>
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
                                    </div>';
                                }
                            }                        
                        }
                        $text .= '
                    </div>
                </div>';
                if($this->content->shape_img1):
                    $shape_img1 = $this->content->shape_img1;
                    $text .= '                    
                    <div class="shape5"><img src="'.edash_block_image_process($shape_img1).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;
                if($this->content->shape_img2):
                    $shape_img2 = $this->content->shape_img2;
                    $text .= '                    
                    <div class="shape4 style-two"><img src="'.edash_block_image_process($shape_img2).'" alt="'.strip_tags($this->content->title).'"></div>';
                endif;

                if($this->content->shape_img3):
                    $shape_img3 = $this->content->shape_img3;
                    $text .= '                    
                    <div class="shape5 style-two"><img src="'.edash_block_image_process($shape_img3).'" alt="'.strip_tags($this->content->title).'"></div>';
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