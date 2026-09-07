<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.
//

/**
 * Theme library functions for theme_moon.
 *
 * @package   theme_moon
 * @author    Moon Framework Team https://moonframe.work
 * @copyright Copyright (C) 2026 MoonFrame.work.
 * @license https://www.gnu.org/licenses/gpl-3.0.html GNU/GPLv3 or Later
 */
// phpcs:ignore moodle.Files.MoodleInternal.MoodleInternalNotNeeded
defined('MOODLE_INTERNAL') || die();

use local_moon\library\helper\utilities;
use local_moon\library\helper\media;

/**
 * Returns the SCSS content used by the moon theme.
 *
 * @param theme_config $theme
 * @return string
 */
function theme_moon_get_main_scss_content($theme) {
    global $CFG;
    $scss = utilities::get_moon_scss_variables();
    $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');
    $scss .= utilities::get_moon_css();
    return $scss;
}

/**
 * Theme Moon component file.
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
