<?php
global $CFG;
require_once($CFG->dirroot . '/theme/edash/inc/course_handler/edash_course_handler.php');
require_once($CFG->dirroot. '/course/renderer.php');
require_once($CFG->dirroot . '/theme/edash/inc/block_handler/get-content.php');
class block_edash_categories_two extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_edash_categories_two');
    }

    // Declare second
    public function specialization()
    {
        global $CFG, $DB;
        include($CFG->dirroot . '/theme/edash/inc/block_handler/specialization.php');
        if (empty($this->config)) {
            $edashCourseHandler = new edashCourseHandler();
            $edashCategories = $edashCourseHandler->edashGetExampleCategoriesIds(8);
            $this->config = new \stdClass();
            $this->config->title = 'Top categories';
            $this->config->subtitle = 'Explore all of our courses and pick your suitable ones to enroll and start learning with us!';
            $this->config->button_text = 'View All Categories';
            $this->config->button_link = $CFG->wwwroot . '/course';
            $this->config->cat_content1 = '5+ Courses';
            $this->config->style = 1;
        }
    }

    public function get_content() {
        global $CFG, $USER, $DB, $OUTPUT;

        if ($this->content !== null) {
            return $this->content;
        }

        if (isset($this->config->items)) {
            $data = $this->config;
            $data->items = is_numeric($data->items) ? (int)$data->items : 4;
        } else {
            $data = new stdClass();
            $data->items = '0';
        }

        $style = 1;
        if(isset($this->config->style)){
            $style = $this->config->style;
        }

        $this->content         =  new stdClass;
        if(!empty($this->config->title)){$this->content->title = $this->config->title;} else {$this->content->title = '';}
        
        if(!empty($this->config->subtitle)){$this->content->subtitle = $this->config->subtitle;} else {$this->content->subtitle = '';}
        
        if(!empty($this->config->button_text)){$this->content->button_text = $this->config->button_text;} else {$this->content->button_text = '';}
        
        if(!empty($this->config->button_link)){$this->content->button_link = $this->config->button_link;} else {$this->content->button_link = '';}

        // BG Image URL
        $bg_img = 'bg_img';
        if(isset($this->config->$bg_img) && !empty($this->config->$bg_img)){ $this->content->$bg_img = $this->config->$bg_img; }else{ $this->content->$bg_img = ''; }
        if($this->content->bg_img):
            $bg_img = $this->content->bg_img;
        else:
            $bg_img = $this->content->bg_img;
        endif;

        $text = '';

        if($style == 2):
            $text .= '
            <div class="rt-categories-area pt-100 pb-75" style="background-image:url('.$bg_img.');">
                <div class="container">
                    <div class="section-title with-just-heading d-flex justify-content-center justify-content-between">
                        <div class="div"><h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2></div>
                        <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>';
                        if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                            $text .= '
                                <a href="'.$this->content->button_link.'" class="default-btn style-two">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'</a>';
                        }
                        $text .= '
                    </div>

                    <div class="row justify-content-center">';
                        $topcategory = core_course_category::top();
                        $col_class = "";
                        if ($data->items == 1) {
                            $col_class = "col-sm-12 col-lg-12";
                        } else if ($data->items == 2) {
                            $col_class = "col-sm-6 col-lg-6";
                        } else if ($data->items == 3) {
                            $col_class = "col-xl-3 col-lg-4 col-md-6 col-sm-6";
                        } else {
                            $col_class = "col-xl-3 col-lg-4 col-md-6 col-sm-6";
                        }
                        
                        if ($data->items > 0) {
                            for ($i = 1; $i <= $data->items; $i++) {
                                $cat_img = 'img' . $i;
                                $cat_content = 'cat_content' . $i;
                                $categoryID = 'category' . $i;
                                $category = $DB->get_record('course_categories',array('id' => $data->$categoryID));
                                
                                if ($DB->record_exists('course_categories', array('id' => $data->$categoryID))) {
                                    $chelper = new coursecat_helper();
                                    $categoryID = $category->id;
                                    $category = core_course_category::get($categoryID);
                                    $categoryname = $category->get_formatted_name();
                                    $children_courses = $category->get_courses();
                                    if($children_courses >= 1){
                                        $countNoOfCourses = '<p>'.count($children_courses).'</p>';
                                    } else {
                                        $countNoOfCourses = '';
                                    }
                                    $text .= '
                                    <div class="'.$col_class.'">
                                        <div class="rt-categories-box">
                                            <div class="content">';
                                                if($data->$cat_img):
                                                    $cat_img = $data->$cat_img;
                                                    $text .= '
                                                    <div class="image-icon">
                                                        <img src="'.edash_block_image_process($cat_img).'" alt="'.$categoryname.'">
                                                    </div>';
                                                endif;
                                                $text .= '
                                                <h3><a href="'.$CFG->wwwroot .'/course/index.php?categoryid='.$categoryID.'">'.$categoryname.'</a></h3>
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
        else:
            $text .= '
            <div class="categories-area pb-100">
                <div class="container">
                    <div class="section-title style-two">
                        <h2>'.format_text($this->content->title, FORMAT_HTML, array('filter' => true)).'</h2>
                        <p>'.format_text($this->content->subtitle, FORMAT_HTML, array('filter' => true)).'</p>
                    </div>

                    <div class="row justify-content-center">';
                        $topcategory = core_course_category::top();
                        $col_class = "";
                        if ($data->items == 1) {
                            $col_class = "col-sm-12 col-lg-12";
                        } else if ($data->items == 2) {
                            $col_class = "col-sm-6 col-lg-6";
                        } else if ($data->items == 3) {
                            $col_class = "col-lg-3 col-md-6 col-sm-6";
                        } else {
                            $col_class = "col-lg-3 col-md-6 col-sm-6";
                        }
                        
                        if ($data->items > 0) {
                            for ($i = 1; $i <= $data->items; $i++) {
                                $cat_img = 'img' . $i;
                                $cat_content = 'cat_content' . $i;
                                $categoryID = 'category' . $i;
                                $category = $DB->get_record('course_categories',array('id' => $data->$categoryID));
                                if ($DB->record_exists('course_categories', array('id' => $data->$categoryID))) {
                                    $chelper = new coursecat_helper();
                                    $categoryID = $category->id;
                                    $category = core_course_category::get($categoryID);
                                    $categoryname = $category->get_formatted_name();
                                    $children_courses = $category->get_courses();
                                    if($children_courses >= 1){
                                        $countNoOfCourses = '<p>'.count($children_courses).'</p>';
                                    } else {
                                        $countNoOfCourses = '';
                                    }
                                    $text .= '
                                    <div class="'.$col_class.'">
                                        <div class="single-categories-item">';
                                            if($data->$cat_img):
                                                $cat_img = $data->$cat_img;
                                                $text .= '                    
                                                <img src="'.edash_block_image_process($cat_img).'" alt="'.$categoryname.'">';
                                            endif;
                                            $text .= '
                                            <h3><a href="'.$CFG->wwwroot .'/course/index.php?categoryid='.$categoryID.'">'.$categoryname.'</a></h3>
                                            <span>'.format_text($data->$cat_content, FORMAT_HTML, array('filter' => true)).'</span>
                                        </div>
                                    </div>';
                                }
                            }
                        }
                        if(!empty($this->content->button_text) && !empty($this->content->button_link)){
                            $text .= '
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="categories-btn">
                                    <a href="'.$this->content->button_link.'" class="default-btn style-two">'.format_text($this->content->button_text, FORMAT_HTML, array('filter' => true)).'</a>
                                </div>
                            </div>';
                        }
                        $text .= '
                    </div>
                </div>
            </div>';
        endif;

        $this->content->footer = '';
        $this->content->text   = $text;

        return $this->content;
    }

    function instance_allow_config() {
        return true;
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