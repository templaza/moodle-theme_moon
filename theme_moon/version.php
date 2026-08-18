<?php
defined('MOODLE_INTERNAL') || die();

$plugin->component = 'theme_moon';
$plugin->version   = 2026081800;
$plugin->requires  = 2022041900;
$plugin->maturity  = MATURITY_ALPHA;
$plugin->release   = '1.0.0';
$plugin->dependencies = [
    'local_moon' => 2026081800,
];