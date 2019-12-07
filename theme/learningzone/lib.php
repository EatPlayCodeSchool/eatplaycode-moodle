<?php
function theme_learningzone_process_css($css, $theme) {
global $OUTPUT;
// Set the background image for the logo.
$logo = $theme->setting_file_url('logo', 'logo');
$css = theme_learningzone_set_logo($css, $logo);
// Set custom CSS.
if (!empty($theme->settings->customcss)) {
$customcss = $theme->settings->customcss;
} else {
$customcss = null;
}
$css = theme_learningzone_set_customcss($css, $customcss);
// Set the background image for the bannerinternaldefaultimage.
$bannerinternaldefaultimage = $theme->setting_file_url('bannerinternaldefaultimage', 'bannerinternaldefaultimage');
if(!isset($bannerinternaldefaultimage)){
$bannerinternaldefaultimage = $OUTPUT->pix_url('bannerinternaldefaultimage', 'theme');
}
$css = theme_learningzone_set_bannerinternaldefaultimage($css, $bannerinternaldefaultimage);
// Set the background image for the loginbackgroundimage.
$loginbackgroundimage = $theme->setting_file_url('loginbackgroundimage', 'loginbackgroundimage');
if(!isset($loginbackgroundimage)){
$loginbackgroundimage = $OUTPUT->pix_url('loginbackgroundimage', 'theme');
}
$css = theme_learningzone_set_loginbackgroundimage($css, $loginbackgroundimage);
// Set the background image for the numbersbg.
$numbersbg = $theme->setting_file_url('numbersbg', 'numbersbg');
if(!isset($numbersbg)){
$numbersbg = $OUTPUT->pix_url('numbersbg', 'theme');
}
$css = theme_learningzone_set_numbersbg($css, $numbersbg);
// Set the Site background color.
if (empty($theme->settings->sitecolor)) {
$sitecolor = '#f98012'; // Default.
} else {
$sitecolor = $theme->settings->sitecolor;
}
$css = learningzone_set_sitecolor($css, $sitecolor);
return $css;
}
/**
* Adds the logo to CSS.
*
* @param string $css The CSS.
* @param string $logo The URL of the logo.
* @return string The parsed CSS
*/
function theme_learningzone_set_logo($css, $logo) {
$tag = '[[setting:logo]]';
$replacement = $logo;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_learningzone_set_numbersbg($css, $numbersbg) {
$tag = '[[setting:numbersbg]]';
$replacement = $numbersbg;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_learningzone_set_bannerinternaldefaultimage($css, $bannerinternaldefaultimage) {
$tag = '[[setting:bannerinternaldefaultimage]]';
$replacement = $bannerinternaldefaultimage;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_learningzone_set_loginbackgroundimage($css, $loginbackgroundimage) {
$tag = '[[setting:loginbackgroundimage]]';
$replacement = $loginbackgroundimage;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function learningzone_set_sitecolor($css, $sitecolor) {
$tag = '[[setting:sitecolor]]';
$css = str_replace($tag, $sitecolor, $css);
return $css;
}
/**
* Serves any files associated with the theme settings.
*
* @param stdClass $course
* @param stdClass $cm
* @param context $context
* @param string $filearea
* @param array $args
* @param bool $forcedownload
* @param array $options
* @return bool
*/
function theme_learningzone_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
if ($context->contextlevel == CONTEXT_SYSTEM and ($filearea === 'logo' || $filearea === 'smalllogo')) {
$theme = theme_config::load('learningzone');
// By default, theme files must be cache-able by both browsers and proxies.
if (!array_key_exists('cacheability', $options)) {
$options['cacheability'] = 'public';
}
return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'bannerinternaldefaultimage') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('bannerinternaldefaultimage', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'loginbackgroundimage') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('loginbackgroundimage', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'banner1image') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('banner1image', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'banner2image') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('banner2image', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'banner3image') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('banner3image', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'numbersbg') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('numbersbg', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'numbers1icon') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('numbers1icon', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'numbers2icon') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('numbers2icon', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'numbers3icon') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('numbers3icon', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'numbers4icon') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('numbers4icon', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'faculty1image') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('faculty1image', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'faculty2image') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('faculty2image', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'faculty3image') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('faculty3image', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'faculty4image') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('faculty4image', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'getthecoachingimage') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('getthecoachingimage', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'favicon') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('favicon', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'instagram1image') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('instagram1image', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'instagram2image') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('instagram2image', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'instagram3image') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('instagram3image', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'instagram4image') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('instagram4image', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'instagram5image') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('instagram5image', $args, $forcedownload, $options);
} else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'instagram6image') {
$theme = theme_config::load('learningzone');
return $theme->setting_file_serve('instagram6image', $args, $forcedownload, $options);
} else{
send_file_not_found();
}
}
/**
* Adds any custom CSS to the CSS before it is cached.
*
* @param string $css The original CSS.
* @param string $customcss The custom CSS to add.
* @return string The CSS which now contains our custom CSS.
*/
function theme_learningzone_set_customcss($css, $customcss) {
$tag = '[[setting:customcss]]';
$replacement = $customcss;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
/**
* Returns an object containing HTML for the areas affected by settings.
*
* Do not add learningzone specific logic in here, child themes should be able to
* rely on that function just by declaring settings with similar names.
*
* @param renderer_base $output Pass in $OUTPUT.
* @param moodle_page $page Pass in $PAGE.
* @return stdClass An object with the following properties:
*      - navbarclass A CSS class to use on the navbar. By default ''.
*      - heading HTML to use for the heading. A logo if one is selected or the default heading.
*      - footnote HTML to use as a footnote. By default ''.
*/
function theme_learningzone_get_html_for_settings(renderer_base $output, moodle_page $page) {
global $CFG;
$return = new stdClass;
$return->navbarclass = '';
if (!empty($page->theme->settings->invert)) {
$return->navbarclass .= ' navbar-inverse';
}
// Only display the logo on the front page and login page, if one is defined.
if (!empty($page->theme->settings->logo) &&
($page->pagelayout == 'frontpage' || $page->pagelayout == 'login')) {
$return->heading = html_writer::tag('div', '', array('class' => 'logo'));
} else {
$return->heading = $output->page_heading();
}
$return->footnote = '';
if (!empty($page->theme->settings->footnote)) {
$return->footnote = '
<div class="footnote text-center">'.format_text($page->theme->settings->footnote).'</div>
';
}
return $return;
}
/**
* All theme functions should start with theme_learningzone_
* @deprecated since 2.5.1
*/
function learningzone_process_css() {
throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}
/**
* All theme functions should start with theme_learningzone_
* @deprecated since 2.5.1
*/
function learningzone_set_logo() {
throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}
/**
* All theme functions should start with theme_learningzone_
* @deprecated since 2.5.1
*/
function learningzone_set_customcss() {
throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}
function theme_learningzone_get_setting($setting, $format = false) {
global $CFG;
require_once($CFG->dirroot . '/lib/weblib.php');
static $theme;
if (empty($theme)) {
$theme = theme_config::load('learningzone');
}
if (empty($theme->settings->$setting)) {
return false;
} else if (!$format) {
return $theme->settings->$setting;
} else if ($format === 'format_text') {
return format_text($theme->settings->$setting, FORMAT_PLAIN);
} else if ($format === 'format_html') {
return format_text($theme->settings->$setting, FORMAT_HTML, array('trusted' => true, 'noclean' => true));
} else {
return format_string($theme->settings->$setting);
}
}