<?php
/*
@edashRef: @block_edash/block.php
*/

defined('MOODLE_INTERNAL') || die();

// print_object($this);
$edashBlockType = $this->instance->blockname;

$edashCollectionFullwidthTop =  array(
  "edash_banner_1",
  "edash_banner_2",
  "edash_banner_3",
  "edash_banner_4",
  "edash_banner_5",
  "edash_course_filter",
  "edash_funfacts",
  "edash_features",
  "edash_categories",
  "edash_partners",
  "edash_course_filter_slider",
  "edash_course_filter",
  "edash_become_instructor",
  "edash_feedback",
  "edash_stories_area",
  "edash_cta_area",
  "edash_about_us_banner",
  "edash_about_slider",
  "edash_become_instructor_two",
  "edash_blog_area",
  "edash_features_two",
  "edash_categories_two",
  "edash_course_two",
  "edash_why_choose_us",
  "edash_features_three",
  "edash_about_me",
  "edash_overview_area",
  "edash_partners_two",
  "edash_stories_area_two",
  "edash_newsletter",
  "edash_banner_6",
  "edash_about_area",
  "edash_overview_area_two",
  "edash_banner_7",
  "edash_banner_8",
  "edash_features_four",
  "edash_why_choose_area",
  "edash_become_instructor_three",
  "edash_blog_area_2",
  "edash_banner_slider",
  "edash_feedback_two",
);

$edashCollectionAboveContent =  array(
  "edash_contact_form",
  "edash_course_overview",
  "edash_tabs",
  "edash_course_desc",
);

$edashCollectionBelowContent =  array(
  "edash_course_rating",
  "edash_more_courses",
  "edash_course_instructor",
);

$edashCollection = array_merge($edashCollectionFullwidthTop, $edashCollectionAboveContent, $edashCollectionBelowContent);

if (empty($this->config)) {
  if(in_array($edashBlockType, $edashCollectionFullwidthTop)) {
    $this->instance->defaultregion = 'fullwidth-top';
    $this->instance->region = 'fullwidth-top';
    $DB->update_record('block_instances', $this->instance);
  }
  if(in_array($edashBlockType, $edashCollectionAboveContent)) {
    $this->instance->defaultregion = 'above-content';
    $this->instance->region = 'above-content';
    $DB->update_record('block_instances', $this->instance);
  }
  if(in_array($edashBlockType, $edashCollectionBelowContent)) {
    $this->instance->defaultregion = 'below-content';
    $this->instance->region = 'below-content';
    $DB->update_record('block_instances', $this->instance);
  }
}
