<?php
/*
@edashRef: @
*/

defined('MOODLE_INTERNAL') || die();
include_once($CFG->dirroot . '/course/lib.php');

class edashPageHandler {
  public function edashGetPageTitle() {
    global $PAGE, $COURSE, $DB, $CFG;

    $edashReturn = $PAGE->heading;

    if(
      $DB->record_exists('course', array('id' => $COURSE->id))
      && $COURSE->format == 'site'
      && $PAGE->cm
      && $PAGE->cm->name !== NULL
    ){
      $edashReturn = $PAGE->cm->name;
    } elseif($PAGE->pagetype == 'blog-index') {
      $edashReturn = get_string("blog", "blog");
    }

    return $edashReturn;
  }
}
