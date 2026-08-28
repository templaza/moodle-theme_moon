<?php
defined('MOODLE_INTERNAL') || die();
use local_moon\library\helper\utilities;
use local_moon\library\helper\media;

/**
 * @throws \ScssPhp\ScssPhp\Exception\SassException
 */
function theme_moon_get_main_scss_content($theme) {
    global $CFG;
    $scss = utilities::get_moon_scss_variables();
    $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');
    $scss .= utilities::get_moon_css();
    return $scss;
}

/**
 * Serve the files from the theme file areas.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context  $context
 * @param string   $filearea
 * @param array    $args
 * @param bool     $forcedownload
 * @param array    $options
 * @return bool
 */
function theme_moon_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = []) {
    media::plugin_file('theme_moon', $context, $filearea, $args, $forcedownload, $options);
    return true;
}