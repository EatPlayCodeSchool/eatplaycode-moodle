<?php
$settings = null;
defined('MOODLE_INTERNAL') || die;
$ADMIN->add('themes', new admin_category('theme_learningzone', 'Learningzone'));
// General setting page.
$temp = new admin_settingpage('theme_learningzone_general',  get_string('generalsettings', 'theme_learningzone'));
//Dashboard Setting
//$name = 'theme_learningzone/displaydashboard';
//$title = get_string('dashboardsetting','theme_learningzone');
//$description = get_string('dashboarddescription', 'theme_learningzone');
//$default = 0;
//$choice = array(0=>'Custom Dashboard', 1=>'Default Dashborad');
//$setting = new admin_setting_configselect($name, $title, $description, $default,$choice);
//$temp->add($setting);
// favicon.
$name = 'theme_learningzone/favicon';
$title = get_string('favicon', 'theme_learningzone');
$description = get_string('favicondesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Logo file setting.
$name = 'theme_learningzone/logo';
$title = get_string('logo','theme_learningzone');
$description = get_string('logodesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Small logo file setting.
$name = 'theme_learningzone/smalllogo';
$title = get_string('smalllogo', 'theme_learningzone');
$description = get_string('smalllogodesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'smalllogo');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Show site name along with small logo.
$name = 'theme_learningzone/sitename';
$title = get_string('sitename', 'theme_learningzone');
$description = get_string('sitenamedesc', 'theme_learningzone');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// bannerinternaldefaultimage file setting.
$name = 'theme_learningzone/bannerinternaldefaultimage';
$title = get_string('bannerinternaldefaultimage','theme_learningzone');
$description = get_string('bannerinternaldefaultimagedesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'bannerinternaldefaultimage');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// loginbackgroundimage file setting.
$name = 'theme_learningzone/loginbackgroundimage';
$title = get_string('loginbackgroundimage','theme_learningzone');
$description = get_string('loginbackgroundimagedesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'loginbackgroundimage');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Site color.
$name = 'theme_learningzone/sitecolor';
$title = get_string('sitecolor', 'theme_learningzone');
$description = get_string('sitecolordesc', 'theme_learningzone');
$default = '#f98012';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$temp->add($setting);
// Custom CSS file.
$name = 'theme_learningzone/customcss';
$title = get_string('customcss', 'theme_learningzone');
$description = get_string('customcssdesc', 'theme_learningzone');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
$ADMIN->add('theme_learningzone', $temp);
// frontpage setting page.
$temp = new admin_settingpage('theme_learningzone_frontpage',  get_string('frontpagesettings', 'theme_learningzone'));
// banner1image file setting.
$name = 'theme_learningzone/banner1image';
$title = get_string('banner1image','theme_learningzone');
$description = get_string('banner1imagedesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'banner1image');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// banner2image file setting.
$name = 'theme_learningzone/banner2image';
$title = get_string('banner2image','theme_learningzone');
$description = get_string('banner2imagedesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'banner2image');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// banner3image file setting.
$name = 'theme_learningzone/banner3image';
$title = get_string('banner3image','theme_learningzone');
$description = get_string('banner3imagedesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'banner3image');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// bannerheading setting.
$name = 'theme_learningzone/bannerheading';
$title = get_string('bannerheading', 'theme_learningzone');
$description = get_string('bannerheadingdesc', 'theme_learningzone');
$default = 'Use your imagination – it is the only thing that will never run out.';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
// bannertagline setting.
$name = 'theme_learningzone/bannertagline';
$title = get_string('bannertagline', 'theme_learningzone');
$description = get_string('bannertaglinedesc', 'theme_learningzone');
$default = 'Our mission is to inspire our students not only intellectually but also spiritually, through participation in the sacramental life of the school.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$temp->add($setting);
// bannerbuttontext setting.
$name = 'theme_learningzone/bannerbuttontext';
$title = get_string('bannerbuttontext', 'theme_learningzone');
$description = get_string('bannerbuttontextdesc', 'theme_learningzone');
$default = 'Learn More';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
// bannerbuttonurl setting.
$name = 'theme_learningzone/bannerbuttonurl';
$title = get_string('bannerbuttonurl', 'theme_learningzone');
$description = get_string('bannerbuttonurldesc', 'theme_learningzone');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
$name = 'theme_learningzone/displaynumberssection';
$title = get_string('displaynumberssection','theme_learningzone');
$description = get_string('displaynumberssectiondesc', 'theme_learningzone');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);
// numbersbg file setting.
$name = 'theme_learningzone/numbersbg';
$title = get_string('numbersbg','theme_learningzone');
$description = get_string('numbersbgdesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'numbersbg');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// numbers Heading.
$name = 'theme_learningzone/numbers';
$title = get_string('numbers', 'theme_learningzone');
$description = get_string('numbersdesc', 'theme_learningzone');
$default = 'Learning Zone By The Numbers';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
// numbers1icon.
$name = 'theme_learningzone/numbers1icon';
$title = get_string('numbers1icon', 'theme_learningzone');
$description = get_string('numbers1icondesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'numbers1icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// numbers1count setting.
$name = 'theme_learningzone/numbers1count';
$title = get_string('numbers1count', 'theme_learningzone');
$description = get_string('numbers1countdesc', 'theme_learningzone');
$default = '52,147';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
// numbers1heading setting.
$name = 'theme_learningzone/numbers1heading';
$title = get_string('numbers1heading', 'theme_learningzone');
$description = get_string('numbers1headingdesc', 'theme_learningzone');
$default = 'Active Students';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
// numbers2icon.
$name = 'theme_learningzone/numbers2icon';
$title = get_string('numbers2icon', 'theme_learningzone');
$description = get_string('numbers2icondesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'numbers2icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// numbers2count setting.
$name = 'theme_learningzone/numbers2count';
$title = get_string('numbers2count', 'theme_learningzone');
$description = get_string('numbers2countdesc', 'theme_learningzone');
$default = '10,397';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
// numbers2heading setting.
$name = 'theme_learningzone/numbers2heading';
$title = get_string('numbers2heading', 'theme_learningzone');
$description = get_string('numbers2headingdesc', 'theme_learningzone');
$default = 'Awards Winning';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
// numbers3icon.
$name = 'theme_learningzone/numbers3icon';
$title = get_string('numbers3icon', 'theme_learningzone');
$description = get_string('numbers3icondesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'numbers3icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// numbers3count setting.
$name = 'theme_learningzone/numbers3count';
$title = get_string('numbers3count', 'theme_learningzone');
$description = get_string('numbers3countdesc', 'theme_learningzone');
$default = '30,897';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
// numbers3heading setting.
$name = 'theme_learningzone/numbers3heading';
$title = get_string('numbers3heading', 'theme_learningzone');
$description = get_string('numbers3headingdesc', 'theme_learningzone');
$default = 'Years of History';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
// numbers4icon.
$name = 'theme_learningzone/numbers4icon';
$title = get_string('numbers4icon', 'theme_learningzone');
$description = get_string('numbers4icondesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'numbers4icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// numbers4count setting.
$name = 'theme_learningzone/numbers4count';
$title = get_string('numbers4count', 'theme_learningzone');
$description = get_string('numbers4countdesc', 'theme_learningzone');
$default = '46,034';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
// numbers4heading setting.
$name = 'theme_learningzone/numbers4heading';
$title = get_string('numbers4heading', 'theme_learningzone');
$description = get_string('numbers4headingdesc', 'theme_learningzone');
$default = 'Library Books';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
// courseheading setting.
$name = 'theme_learningzone/courseheading';
$title = get_string('courseheading', 'theme_learningzone');
$description = get_string('courseheadingdesc', 'theme_learningzone');
$default = 'Discover Our Programs';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
// coursetagline setting.
$name = 'theme_learningzone/coursetagline';
$title = get_string('coursetagline', 'theme_learningzone');
$description = get_string('coursetaglinedesc', 'theme_learningzone');
$default = 'You Can Enroll Wide Range Of Courses In This Canvas To Full Fill Your Dreams.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$temp->add($setting);
// yourcourseheading setting.
$name = 'theme_learningzone/yourcourseheading';
$title = get_string('yourcourseheading', 'theme_learningzone');
$description = get_string('yourcourseheadingdesc', 'theme_learningzone');
$default = 'All Your Enrolled Courses';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
// yourcoursetagline setting.
$name = 'theme_learningzone/yourcoursetagline';
$title = get_string('yourcoursetagline', 'theme_learningzone');
$description = get_string('yourcoursetaglinedesc', 'theme_learningzone');
$default = 'Here You Can See All Your Courses.';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
// displaygetthecoaching setting.
$name = 'theme_learningzone/displaygetthecoaching';
$title = get_string('displaygetthecoaching','theme_learningzone');
$description = get_string('displaygetthecoachingdesc', 'theme_learningzone');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);
// getthecoachingimage.
$name = 'theme_learningzone/getthecoachingimage';
$title = get_string('getthecoachingimage', 'theme_learningzone');
$description = get_string('getthecoachingimagedesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'getthecoachingimage');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// getthecoachingheading.
$name = 'theme_learningzone/getthecoachingheading';
$title = get_string('getthecoachingheading', 'theme_learningzone');
$description = get_string('getthecoachingheadingdesc', 'theme_learningzone');
$default = 'GET THE COACHING TRAINING';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
// getthecoachingcontent.
$name = 'theme_learningzone/getthecoachingcontent';
$title = get_string('getthecoachingcontent', 'theme_learningzone');
$description = get_string('getthecoachingcontentdesc', 'theme_learningzone');
$default = 'BY JONATHAN ABLARK FREE';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$temp->add($setting);
// getthecoachingbuttontext.
$name = 'theme_learningzone/getthecoachingbuttontext';
$title = get_string('getthecoachingbuttontext', 'theme_learningzone');
$description = get_string('getthecoachingbuttontextdesc', 'theme_learningzone');
$default = 'REGISTER NOW';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
// getthecoachingbuttonurl.
$name = 'theme_learningzone/getthecoachingbuttonurl';
$title = get_string('getthecoachingbuttonurl', 'theme_learningzone');
$description = get_string('getthecoachingbuttonurldesc', 'theme_learningzone');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);
$name = 'theme_learningzone/displayfaculties';
$title = get_string('displayfaculties','theme_learningzone');
$description = get_string('displayfacultiesdesc', 'theme_learningzone');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);
// facultyheading setting.
$name = 'theme_learningzone/facultyheading';
$title = get_string('facultyheading', 'theme_learningzone');
$description = get_string('facultyheadingdesc', 'theme_learningzone');
$default = 'Our Faculties';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$temp->add($setting);
// facultytagline setting.
$name = 'theme_learningzone/facultytagline';
$title = get_string('facultytagline', 'theme_learningzone');
$description = get_string('facultytaglinedesc', 'theme_learningzone');
$default = 'Contrary to popular belief, Lorem Ipsum is not simply random text';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$temp->add($setting);
// faculty1image.
$name = 'theme_learningzone/faculty1image';
$title = get_string('faculty1image', 'theme_learningzone');
$description = get_string('faculty1imagedesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'faculty1image');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// faculty1name.
$name = 'theme_learningzone/faculty1name';
$title = get_string('faculty1name', 'theme_learningzone');
$description = get_string('faculty1namedesc', 'theme_learningzone');
$default = 'Chun Roge';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// faculty1url.
$name = 'theme_learningzone/faculty1url';
$title = get_string('faculty1url', 'theme_learningzone');
$description = get_string('faculty1urldesc', 'theme_learningzone');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// faculty1profile setting.
$name = 'theme_learningzone/faculty1profile';
$title = get_string('faculty1profile', 'theme_learningzone');
$description = get_string('faculty1profiledesc', 'theme_learningzone');
$default = 'Phd, Master';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$temp->add($setting);
// faculty2image.
$name = 'theme_learningzone/faculty2image';
$title = get_string('faculty2image', 'theme_learningzone');
$description = get_string('faculty2imagedesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'faculty2image');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// faculty2name.
$name = 'theme_learningzone/faculty2name';
$title = get_string('faculty2name', 'theme_learningzone');
$description = get_string('faculty2namedesc', 'theme_learningzone');
$default = 'Yale Dvers';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// faculty2url.
$name = 'theme_learningzone/faculty2url';
$title = get_string('faculty2url', 'theme_learningzone');
$description = get_string('faculty2urldesc', 'theme_learningzone');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// faculty2profile setting.
$name = 'theme_learningzone/faculty2profile';
$title = get_string('faculty2profile', 'theme_learningzone');
$description = get_string('faculty2profiledesc', 'theme_learningzone');
$default = 'Biology Instructor';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$temp->add($setting);
// faculty3image.
$name = 'theme_learningzone/faculty3image';
$title = get_string('faculty3image', 'theme_learningzone');
$description = get_string('faculty3imagedesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'faculty3image');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// faculty3name.
$name = 'theme_learningzone/faculty3name';
$title = get_string('faculty3name', 'theme_learningzone');
$description = get_string('faculty3namedesc', 'theme_learningzone');
$default = 'Zubin Smart';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// faculty3url.
$name = 'theme_learningzone/faculty3url';
$title = get_string('faculty3url', 'theme_learningzone');
$description = get_string('faculty3urldesc', 'theme_learningzone');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// faculty3profile setting.
$name = 'theme_learningzone/faculty3profile';
$title = get_string('faculty3profile', 'theme_learningzone');
$description = get_string('faculty3profiledesc', 'theme_learningzone');
$default = 'Phd, English';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$temp->add($setting);
// faculty4image.
$name = 'theme_learningzone/faculty4image';
$title = get_string('faculty4image', 'theme_learningzone');
$description = get_string('faculty4imagedesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'faculty4image');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// faculty4name.
$name = 'theme_learningzone/faculty4name';
$title = get_string('faculty4name', 'theme_learningzone');
$description = get_string('faculty4namedesc', 'theme_learningzone');
$default = 'Adesh Robart';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// faculty4url.
$name = 'theme_learningzone/faculty4url';
$title = get_string('faculty4url', 'theme_learningzone');
$description = get_string('faculty4urldesc', 'theme_learningzone');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// faculty4profile setting.
$name = 'theme_learningzone/faculty4profile';
$title = get_string('faculty4profile', 'theme_learningzone');
$description = get_string('faculty4profiledesc', 'theme_learningzone');
$default = 'Math Instructor';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$temp->add($setting);
$ADMIN->add('theme_learningzone', $temp);
// Footer setting page.
$temp = new admin_settingpage('theme_learningzone_footer',  get_string('footersettings', 'theme_learningzone'));    
// Facebook url setting.
$name = 'theme_learningzone/facebook';
$title = get_string('facebook', 'theme_learningzone');
$description = get_string('facebookdesc', 'theme_learningzone');
$default = 'http://www.facebook.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// twitter url setting.
$name = 'theme_learningzone/twitter';
$title = get_string('twitter', 'theme_learningzone');
$description = get_string('twitterdesc', 'theme_learningzone');
$default = 'http://www.twitter.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// googlepluse url setting.
$name = 'theme_learningzone/googlepluse';
$title = get_string('googlepluse', 'theme_learningzone');
$description = get_string('googleplusedesc', 'theme_learningzone');
$default = 'http://www.googlepluse.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// pinterest url setting.
$name = 'theme_learningzone/pinterest';
$title = get_string('pinterest', 'theme_learningzone');
$description = get_string('pinterestdesc', 'theme_learningzone');
$default = 'http://www.pinterest.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// vimeo url setting.
$name = 'theme_learningzone/vimeo';
$title = get_string('vimeo', 'theme_learningzone');
$description = get_string('vimeodesc', 'theme_learningzone');
$default = 'http://www.vimeo.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// git url setting.
$name = 'theme_learningzone/git';
$title = get_string('git', 'theme_learningzone');
$description = get_string('gitdesc', 'theme_learningzone');
$default = 'https://git-scm.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// yahoo url setting.
$name = 'theme_learningzone/yahoo';
$title = get_string('yahoo', 'theme_learningzone');
$description = get_string('yahoodesc', 'theme_learningzone');
$default = 'http://www.yahoo.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// linkdin url setting.
$name = 'theme_learningzone/linkdin';
$title = get_string('linkdin', 'theme_learningzone');
$description = get_string('linkdindesc', 'theme_learningzone');
$default = 'http://www.linkdin.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
$name = 'theme_learningzone/displayfooter';
$title = get_string('displayfooter','theme_learningzone');
$description = get_string('displayfooterdesc', 'theme_learningzone');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);
// footersection1heading.
$name = 'theme_learningzone/footersection1heading';
$title = get_string('footersection1heading', 'theme_learningzone');
$description = get_string('footersection1headingdesc', 'theme_learningzone');
$default = 'ABOUT learningzone';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection1content.
$name = 'theme_learningzone/footersection1content';
$title = get_string('footersection1content', 'theme_learningzone');
$description = get_string('footersection1contentdesc', 'theme_learningzone');
$default = 'Duis autem vel eum iriure dolor inhendrerit in vulputate velit esse molestieconsequat, vel illum dolore eu feugiatnulla facilisis at vero eros.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection1email.
$name = 'theme_learningzone/footersection1email';
$title = get_string('footersection1email', 'theme_learningzone');
$description = get_string('footersection1emaildesc', 'theme_learningzone');
$default = 'cmsbrand93@gmail.com';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection1contactno.
$name = 'theme_learningzone/footersection1contactno';
$title = get_string('footersection1contactno', 'theme_learningzone');
$description = get_string('footersection1contactnodesc', 'theme_learningzone');
$default = '+00 123-456-789';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection1address.
$name = 'theme_learningzone/footersection1address';
$title = get_string('footersection1address', 'theme_learningzone');
$description = get_string('footersection1addressdesc', 'theme_learningzone');
$default = '123 6th St.Melbourne, FL 32904';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection2heading.
$name = 'theme_learningzone/footersection2heading';
$title = get_string('footersection2heading', 'theme_learningzone');
$description = get_string('footersection2headingdesc', 'theme_learningzone');
$default = 'INFORMATION';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection2link1.
$name = 'theme_learningzone/footersection2link1';
$title = get_string('footersection2link1', 'theme_learningzone');
$description = get_string('footersection2link1desc', 'theme_learningzone');
$default = 'About Us';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection2link1url.
$name = 'theme_learningzone/footersection2link1url';
$title = get_string('footersection2link1url', 'theme_learningzone');
$description = get_string('footersection2link1urldesc', 'theme_learningzone');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection2link2.
$name = 'theme_learningzone/footersection2link2';
$title = get_string('footersection2link2', 'theme_learningzone');
$description = get_string('footersection2link2desc', 'theme_learningzone');
$default = 'Our Stories';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection2link2url.
$name = 'theme_learningzone/footersection2link2url';
$title = get_string('footersection2link2url', 'theme_learningzone');
$description = get_string('footersection2link2urldesc', 'theme_learningzone');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection2link3.
$name = 'theme_learningzone/footersection2link3';
$title = get_string('footersection2link3', 'theme_learningzone');
$description = get_string('footersection2link3desc', 'theme_learningzone');
$default = 'My Account';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection2link3url.
$name = 'theme_learningzone/footersection2link3url';
$title = get_string('footersection2link3url', 'theme_learningzone');
$description = get_string('footersection2link3urldesc', 'theme_learningzone');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection2link4.
$name = 'theme_learningzone/footersection2link4';
$title = get_string('footersection2link4', 'theme_learningzone');
$description = get_string('footersection2link4desc', 'theme_learningzone');
$default = 'Our History';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection2link4url.
$name = 'theme_learningzone/footersection2link4url';
$title = get_string('footersection2link4url', 'theme_learningzone');
$description = get_string('footersection2link4urldesc', 'theme_learningzone');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection2link5.
$name = 'theme_learningzone/footersection2link5';
$title = get_string('footersection2link5', 'theme_learningzone');
$description = get_string('footersection2link5desc', 'theme_learningzone');
$default = 'Sprcialist Info';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection2link5url.
$name = 'theme_learningzone/footersection2link5url';
$title = get_string('footersection2link5url', 'theme_learningzone');
$description = get_string('footersection2link5urldesc', 'theme_learningzone');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection3heading.
$name = 'theme_learningzone/footersection3heading';
$title = get_string('footersection3heading', 'theme_learningzone');
$description = get_string('footersection3headingdesc', 'theme_learningzone');
$default = 'STUDENT HELP';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection3link1.
$name = 'theme_learningzone/footersection3link1';
$title = get_string('footersection3link1', 'theme_learningzone');
$description = get_string('footersection3link1desc', 'theme_learningzone');
$default = 'My Info';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection3link1url.
$name = 'theme_learningzone/footersection3link1url';
$title = get_string('footersection3link1url', 'theme_learningzone');
$description = get_string('footersection3link1urldesc', 'theme_learningzone');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection3link2.
$name = 'theme_learningzone/footersection3link2';
$title = get_string('footersection3link2', 'theme_learningzone');
$description = get_string('footersection3link2desc', 'theme_learningzone');
$default = 'My Questions';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection3link2url.
$name = 'theme_learningzone/footersection3link2url';
$title = get_string('footersection3link2url', 'theme_learningzone');
$description = get_string('footersection3link2urldesc', 'theme_learningzone');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection3link3.
$name = 'theme_learningzone/footersection3link3';
$title = get_string('footersection3link3', 'theme_learningzone');
$description = get_string('footersection3link3desc', 'theme_learningzone');
$default = 'F.A.Q';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection3link3url.
$name = 'theme_learningzone/footersection3link3url';
$title = get_string('footersection3link3url', 'theme_learningzone');
$description = get_string('footersection3link3urldesc', 'theme_learningzone');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection3link4.
$name = 'theme_learningzone/footersection3link4';
$title = get_string('footersection3link4', 'theme_learningzone');
$description = get_string('footersection3link4desc', 'theme_learningzone');
$default = 'Serch Courses';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection3link4url.
$name = 'theme_learningzone/footersection3link4url';
$title = get_string('footersection3link4url', 'theme_learningzone');
$description = get_string('footersection3link4urldesc', 'theme_learningzone');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection3link5.
$name = 'theme_learningzone/footersection3link5';
$title = get_string('footersection3link5', 'theme_learningzone');
$description = get_string('footersection3link5desc', 'theme_learningzone');
$default = 'Latest Informations';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection3link5url.
$name = 'theme_learningzone/footersection3link5url';
$title = get_string('footersection3link5url', 'theme_learningzone');
$description = get_string('footersection3link5urldesc', 'theme_learningzone');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// footersection4heading.
$name = 'theme_learningzone/footersection4heading';
$title = get_string('footersection4heading', 'theme_learningzone');
$description = get_string('footersection4headingdesc', 'theme_learningzone');
$default = 'INSTAGRAM';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// instagram1image.
$name = 'theme_learningzone/instagram1image';
$title = get_string('instagram1image', 'theme_learningzone');
$description = get_string('instagram1imagedesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'instagram1image');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// instagram2image.
$name = 'theme_learningzone/instagram2image';
$title = get_string('instagram2image', 'theme_learningzone');
$description = get_string('instagram2imagedesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'instagram2image');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// instagram3image.
$name = 'theme_learningzone/instagram3image';
$title = get_string('instagram3image', 'theme_learningzone');
$description = get_string('instagram3imagedesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'instagram3image');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// instagram4image.
$name = 'theme_learningzone/instagram4image';
$title = get_string('instagram4image', 'theme_learningzone');
$description = get_string('instagram4imagedesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'instagram4image');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// instagram5image.
$name = 'theme_learningzone/instagram5image';
$title = get_string('instagram5image', 'theme_learningzone');
$description = get_string('instagram5imagedesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'instagram5image');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// instagram6image.
$name = 'theme_learningzone/instagram6image';
$title = get_string('instagram6image', 'theme_learningzone');
$description = get_string('instagram6imagedesc', 'theme_learningzone');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'instagram6image');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// followus.
$name = 'theme_learningzone/followus';
$title = get_string('followus', 'theme_learningzone');
$description = get_string('followusdesc', 'theme_learningzone');
$default = 'Follow Us';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// followusurl.
$name = 'theme_learningzone/followusurl';
$title = get_string('followusurl', 'theme_learningzone');
$description = get_string('followusurldesc', 'theme_learningzone');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Copyright setting.
$name = 'theme_learningzone/copyright';
$title = get_string('copyright', 'theme_learningzone');
$description = get_string('copyrightdesc', 'theme_learningzone');
$default = 'CmsBrand';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);;   
// back to top button
$name = 'theme_learningzone/backtotop';
$title = get_string('backtotop','theme_learningzone');
$description = get_string('backtotopdesc', 'theme_learningzone');
$default = '1';
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$temp->add($setting);
// Footnote setting.
$name = 'theme_learningzone/footnote';
$title = get_string('footnote', 'theme_learningzone');
$description = get_string('footnotedesc', 'theme_learningzone');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
$ADMIN->add('theme_learningzone', $temp);