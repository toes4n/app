<?php
defined('MOODLE_INTERNAL') || die();
echo $OUTPUT->doctype();

include($CFG->dirroot . '/theme/edash/inc/edash_themehandler.php');

$bodyattributes = $OUTPUT->body_attributes();
include($CFG->dirroot . '/theme/edash/inc/edash_themehandler_context.php');

echo $OUTPUT->render_from_template('theme_edash/edash_dashboard', $templatecontext);