<?php
defined('MOODLE_INTERNAL') || die();

include($CFG->dirroot . '/theme/edash/inc/edash_themehandler.php');

require_once($CFG->libdir . '/behat/lib.php');

array_push($extraclasses, "edash_context_frontend");
$bodyclasses = implode(" ",$extraclasses);
$bodyattributes = $OUTPUT->body_attributes($bodyclasses);
$blockshtml = $OUTPUT->blocks('side-pre');
$hasblocks = strpos($blockshtml, 'data-block=') !== false;

include($CFG->dirroot . '/theme/edash/inc/edash_themehandler_context.php');

echo $OUTPUT->render_from_template('theme_edash/edash_my', $templatecontext);