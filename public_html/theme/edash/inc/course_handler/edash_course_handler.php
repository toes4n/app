<?php
/*
* COURSE HANDLER
*/

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot. '/course/renderer.php');
include_once($CFG->dirroot . '/course/lib.php');

class edashCourseHandler {
    public function edashGetCourseDetails($courseId) {
        global $CFG, $COURSE, $USER, $DB, $SESSION, $SITE, $PAGE, $OUTPUT;


        $courseId = (int)$courseId;
        if ($DB->record_exists('course', array('id' => $courseId))) {
        // @edashComm: Initiate
        $edashCourse = new \stdClass();
        $chelper = new coursecat_helper();
        $courseContext = context_course::instance($courseId);

        $courseRecord = $DB->get_record('course', array('id' => $courseId));
        $courseElement = new core_course_list_element($courseRecord);

        /* @edashBreak */
        $courseId = $courseRecord->id;
        $courseShortName = $courseRecord->shortname;
        $courseFullName = $courseRecord->fullname;
        $courseSummary = $chelper->get_course_formatted_summary($courseElement, array('noclean' => true, 'para' => false));
        $courseFormat = $courseRecord->format;
        $courseAnnouncements = $courseRecord->newsitems;
        $courseStartDate = $courseRecord->startdate;
        $courseEndDate = $courseRecord->enddate;
        $courseVisible = $courseRecord->visible;
        $courseCreated = $courseRecord->timecreated;
        $courseUpdated = $courseRecord->timemodified;
        $courseRequested = $courseRecord->requested;
        $courseEnrolmentCount = count_enrolled_users($courseContext);
        $course_is_enrolled = is_enrolled($courseContext, $USER->id, '', true);

        /* @edashBreak */
        $categoryId = $courseRecord->category;

        try {
            $courseCategory = core_course_category::get($categoryId);
            $categoryName = $courseCategory->get_formatted_name();
            $categoryUrl = $CFG->wwwroot . '/course/index.php?categoryid='.$categoryId;
        } catch (Exception $e) {
            $courseCategory = "";
            $categoryName = "";
            $categoryUrl = "";
        }

        /* @edashBreak */
        $enrolmentLink = $CFG->wwwroot . '/enrol/index.php?id=' . $courseId;
        $courseUrl = new moodle_url('/course/view.php', array('id' => $courseId));
        // @edashComm: Start Payment
        $enrolInstances = enrol_get_instances($courseId, true);

        foreach($enrolInstances as $singleenrolInstances){
            if($singleenrolInstances->enrol == 'paypal'){
                $course_price = $singleenrolInstances->cost;
                $course_currency = $singleenrolInstances->currency;
            }elseif($singleenrolInstances->enrol == 'stripe'){
                $course_price = $singleenrolInstances->cost;
                $course_currency = $singleenrolInstances->currency;
            }elseif($singleenrolInstances->enrol == 'payfast'){
                $course_price = $singleenrolInstances->cost;
                $course_currency = $singleenrolInstances->currency;
            }elseif($singleenrolInstances->enrol == 'paymob'){
                $course_price = $singleenrolInstances->cost;
                $course_currency = $singleenrolInstances->currency;
            }else{
                $course_price =  $singleenrolInstances->cost;
                $course_currency = $singleenrolInstances->currency;
            }
        }

        $edashArrayOfCosts = array();
            $edashCourseContacts = array();
            if ($courseElement->has_course_contacts()) {
                foreach ($courseElement->get_course_contacts() as $key => $courseContact) {
                $edashCourseContacts[$key] = new \stdClass();
                $edashCourseContacts[$key]->userId = $courseContact['user']->id;
                $edashCourseContacts[$key]->username = $courseContact['user']->username;
                $edashCourseContacts[$key]->name = $courseContact['user']->firstname . ' ' . $courseContact['user']->lastname;
                $edashCourseContacts[$key]->role = $courseContact['role']->displayname;
                $edashCourseContacts[$key]->profileUrl = new moodle_url('/user/view.php', array('id' => $courseContact['user']->id, 'course' => SITEID));
                }
            }


        // @edashComm: Process first image
        $contentimages = $contentfiles = $CFG->wwwroot . '/theme/edash/pix/category.jpg';
        foreach ($courseElement->get_course_overviewfiles() as $file) {
            $isimage = $file->is_valid_image();
            $url = file_encode_url("{$CFG->wwwroot}/pluginfile.php",
                    '/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
                    $file->get_filearea(). $file->get_filepath(). $file->get_filename(), !$isimage);
            if ($isimage) {
                $contentimages = $url;
            } else {
                $contentfiles = $CFG->wwwroot . '/theme/edash/pix/category.jpg';
            }
        }

        /* Map data */
        $edashCourse->courseId = $courseId;
        $edashCourse->enrolments = $courseEnrolmentCount;
        $edashCourse->categoryId = $categoryId;
        $edashCourse->categoryName = $categoryName;
        $edashCourse->categoryUrl = $categoryUrl;
        $edashCourse->shortName = $courseShortName;
        $edashCourse->fullName = format_text($courseFullName, FORMAT_HTML, array('filter' => true));
        $edashCourse->summary = $courseSummary;
        $edashCourse->imageUrl = $contentimages;
        $edashCourse->format = $courseFormat;
        $edashCourse->announcements = $courseAnnouncements;
        $edashCourse->startDate = userdate($courseStartDate, get_string('strftimedatefullshort', 'langconfig'));
        $edashCourse->endDate = userdate($courseEndDate, get_string('strftimedatefullshort', 'langconfig'));
        $edashCourse->visible = $courseVisible;
        $edashCourse->created = userdate($courseCreated, get_string('strftimedatefullshort', 'langconfig'));
        $edashCourse->updated = userdate($courseUpdated, get_string('strftimedatefullshort', 'langconfig'));
        $edashCourse->requested = $courseRequested;
        $edashCourse->enrolmentLink = $enrolmentLink;
        $edashCourse->url = $courseUrl;
        $edashCourse->teachers = $edashCourseContacts;
        $edashCourse->course_price = $course_price;
        $edashCourse->course_currency = $course_currency;
        $edashCourse->course_is_enrolled = $course_is_enrolled;
        $edashCourse->courseRecord = $courseRecord;

        /* Render object */
        $edashRender = new \stdClass();
        $edashRender->enrolmentIcon = '';
        $edashRender->enrolmentIcon1 = '';
        $edashRender->announcementsIcon     =     '';
        $edashRender->announcementsIcon1     =     '';
        $edashRender->updatedDate           =     '';
        $edashRender->updatedDate         =     userdate($courseUpdated, get_string('strftimedatefullshort', 'langconfig'));
        $edashRender->title             =     '<h3><a href="'. $edashCourse->url .'">'. $edashCourse->fullName .'</a></h3>';
        $edashRender->coverImage        =     '<img class="img-whp" src="'. $contentimages .'" alt="'.$edashCourse->fullName.'">';
        $edashRender->ImageUrl = $contentimages;
        /* @edashBreak */
        $edashCourse->edashRender = $edashRender;
        return $edashCourse;
        }
        return null;
    }

    public function edashGetCourseDescription($courseId, $maxLength){
        global $CFG, $COURSE, $USER, $DB, $SESSION, $SITE, $PAGE, $OUTPUT;
    
        if ($DB->record_exists('course', array('id' => $courseId))) {
        $chelper = new coursecat_helper();
        $courseContext = context_course::instance($courseId);
    
        $courseRecord = $DB->get_record('course', array('id' => $courseId));
        $courseElement = new core_course_list_element($courseRecord);
    
        if ($courseElement->has_summary()) {
            $courseSummary = $chelper->get_course_formatted_summary($courseElement, array('noclean' => false, 'para' => false));
            if($maxLength != null) {
                if (strlen($courseSummary) > $maxLength) {
                    $courseSummary = wordwrap($courseSummary, $maxLength);
                    $courseSummary = substr($courseSummary, 0, strpos($courseSummary, "\n")) . '...';
                }
            }
            return $courseSummary;
        }
    
        }
        return null;
    }

    public function edashListCategories(){
        global $DB, $CFG;
        $topcategory = core_course_category::top();
        $topcategorykids = $topcategory->get_children();
        $areanames = array();
        foreach ($topcategorykids as $areaid => $topcategorykids) {
            $areanames[$areaid] = $topcategorykids->get_formatted_name();
            foreach($topcategorykids->get_children() as $k=>$child){
                $areanames[$k] = $child->get_formatted_name();
            }
        }
        return $areanames;
    }

    public function edashGetCategoryDetails($categoryId){
        global $CFG, $COURSE, $USER, $DB, $SESSION, $SITE, $PAGE, $OUTPUT;
    
        if ($DB->record_exists('course_categories', array('id' => $categoryId))) {
        
            $categoryRecord = $DB->get_record('course_categories', array('id' => $categoryId));
        
            $chelper = new coursecat_helper();
            $categoryObject = core_course_category::get($categoryId);
        
            $edashCategory = new \stdClass();
        
            $categoryId = $categoryRecord->id;
            $categoryName = format_text($categoryRecord->name, FORMAT_HTML, array('filter' => true));
            $categoryDescription = $chelper->get_category_formatted_description($categoryObject);
        
            $categorySummary = format_string($categoryRecord->description, $striplinks = true,$options = null);
            $isVisible = $categoryRecord->visible;
            $categoryUrl = $CFG->wwwroot . '/course/index.php?categoryid=' . $categoryId;
            $categoryCourses = $categoryObject->get_courses();
            $categoryCoursesCount = count($categoryCourses);
        
            $categoryGetSubcategories = [];
            $categorySubcategories = [];
            if (!$chelper->get_categories_display_option('nodisplay')) {
                $categoryGetSubcategories = $categoryObject->get_children($chelper->get_categories_display_options());
            }
            foreach($categoryGetSubcategories as $k=>$edashSubcategory) {
                $edashSubcat = new \stdClass();
                $edashSubcat->id = $edashSubcategory->id;
                $edashSubcat->name = $edashSubcategory->name;
                $edashSubcat->description = $edashSubcategory->description;
                $edashSubcat->depth = $edashSubcategory->depth;
                $edashSubcat->coursecount = $edashSubcategory->coursecount;
                $categorySubcategories[$edashSubcategory->id] = $edashSubcat;
            }
        
            $categorySubcategoriesCount = count($categorySubcategories);
        
            /* Do image */
            $outputimage = '';
            //edashComm: Fetching the image manually added to the coursecat description via the editor.
            $description = $chelper->get_category_formatted_description($categoryObject);
            $src = "";
            if ($description) {
                $dom = new DOMDocument();
                $dom->loadHTML($description);
                $xpath = new DOMXPath($dom);
                $src = $xpath->evaluate("string(//img/@src)");
            }
            if ($src && $description){
                $outputimage = $src;
            } else {
                foreach($categoryCourses as $child_course) {
                if ($child_course === reset($categoryCourses)) {
                    foreach ($child_course->get_course_overviewfiles() as $file) {
                        if ($file->is_valid_image()) {
                            $imagepath = '/' . $file->get_contextid() . '/' . $file->get_component() . '/' . $file->get_filearea() . $file->get_filepath() . $file->get_filename();
                            $imageurl = file_encode_url($CFG->wwwroot . '/pluginfile.php', $imagepath, false);
                            $outputimage  =  $imageurl;
                            // Use the first image found.
                            break;
                        }
                    }
                }
            }
        }
    
        /* Map data */
        $edashCategory->categoryId = $categoryId;
        $edashCategory->categoryName = $categoryName;
        $edashCategory->categoryDescription = $categoryDescription;
        $edashCategory->categorySummary = $categorySummary;
        $edashCategory->isVisible = $isVisible;
        $edashCategory->categoryUrl = $categoryUrl;
        $edashCategory->coverImage = $outputimage;
        $edashCategory->ImageUrl = $outputimage;
        $edashCategory->courses = $categoryCourses;
        $edashCategory->coursesCount = $categoryCoursesCount;
        $edashCategory->subcategories = $categorySubcategories;
        $edashCategory->subcategoriesCount = $categorySubcategoriesCount;
        return $edashCategory;
    
        }
    }

    public function edashGetExampleCategories($maxNum) {
        global $CFG, $DB;
    
        $edashCategories = $DB->get_records('course_categories', array(), $sort='', $fields='*', $limitfrom=0, $limitnum=$maxNum);
    
        $edashReturn = array();
        foreach ($edashCategories as $edashCategory) {
            $edashReturn[] = $this->edashGetCategoryDetails($edashCategory->id);
        }
        return $edashReturn;
    }

    public function edashGetExampleCategoriesIds($maxNum) {
        global $CFG, $DB;
    
        $edashCategories = $this->edashGetExampleCategories($maxNum);
    
        $edashReturn = array();
        foreach ($edashCategories as $key => $edashCategory) {
            $edashReturn[] = $edashCategory->categoryId;
        }
        return $edashReturn;
    }
}
