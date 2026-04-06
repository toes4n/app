<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * edash.
 *
 * @package    theme_edash
 * @copyright  EnvyTheme
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

$edashFontList = include($CFG->dirroot . '/theme/edash/inc/font_handler/edash_font_select.php');

// This is used for performance, we don't need to know about these settings on every page in Moodle, only when
// we are looking at the admin settings pages.
if ($ADMIN->fulltree) {

    // Boost provides a nice setting page which splits settings onto separate tabs. We want to use it here.
    $settings = new theme_boost_admin_settingspage_tabs('themesettingedash', get_string('configtitle', 'theme_edash'));

    /*
    * ----------------------
    * General setting
    * ----------------------
    */
    $page = new admin_settingpage('theme_edash_general', get_string('generalsettings', 'theme_edash'));

     // Back to Top
     $setting = new admin_setting_configselect('theme_edash/back_to_top', get_string('back_to_top', 'theme_edash') , get_string('back_to_top_desc', 'theme_edash') , null, array(
        '0' => 'Visible',
        '1' => 'Hidden'
    ));
    $page->add($setting);

    // Favicon
    $name='theme_edash/favicon';
    $title = get_string('favicon', 'theme_edash');
    $description = get_string('favicon_desc', 'theme_edash');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Preset files setting.
    $name = 'theme_edash/preset';
    $title = get_string('preset', 'theme_edash');
    $description = get_string('preset_desc', 'theme_edash');
    $default = 'default.scss';

    $context = context_system::instance();
    $fs = get_file_storage();
    $files = $fs->get_area_files($context->id, 'theme_edash', 'preset', 0, 'itemid, filepath, filename', false);

    $choices = [];
    foreach ($files as $file) {
        $choices[$file->get_filename()] = $file->get_filename();
    }
    // These are the built in presets from Boost.
    $choices['default.scss'] = 'default.scss';
    $choices['plain.scss'] = 'plain.scss';

    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Preset files setting.
    $name = 'theme_edash/presetfiles';
    $title = get_string('presetfiles','theme_edash');
    $description = get_string('presetfiles_desc', 'theme_edash');

    $setting = new admin_setting_configstoredfile($name, $title, $description, 'preset', 0,
        array('maxfiles' => 20, 'accepted_types' => array('.scss')));
    $page->add($setting);

    // Primary Color 
    $name = 'theme_edash/brandcolor';
    $title = get_string('brandcolor', 'theme_edash');
    $description = get_string('brandcolor_desc', 'theme_edash');
    $default = '#08A9E6';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Secondary Color 
    $name = 'theme_edash/secondarycolor';
    $title = get_string('secondarycolor', 'theme_edash');
    $description = get_string('secondarycolor_desc', 'theme_edash');
    $default = '#EC272E';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Footer Color 
    $name = 'theme_edash/footer_bg';
    $title = get_string('footer_bg', 'theme_edash');
    $default = '#E6F8FF';
    $setting = new admin_setting_configcolourpicker($name, $title, '', $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Hide Course Curriculum For Guest Access
    $setting = new admin_setting_configselect('theme_edash/hide_guest_access_curriculum', 'Course Curriculum For Guest Access' , 'Show or hide curriculum from guest user', null, array(
        '0' => 'Visible',
        '1' => 'Hidden'
    ));
    $page->add($setting);

    // Free Course Price
    // $name = 'theme_edash/free_course_price';
    // $title = 'Course Free Title';
    // $setting = new admin_setting_configtext($name, $title, '', '');
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

    // Site Currency
    $name = 'theme_edash/site_currency';
    $title = get_string('site_currency', 'theme_edash');
    $setting = new admin_setting_configtext($name, $title, '', '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Site Currency
    $name = 'theme_edash/enrolled_text';
    $title = 'Course Enrolled';
    $setting = new admin_setting_configtext($name, $title, '', '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_edash/enable_dark_navbar_footer';
    $title = get_string('enable_dark_navbar_footer', 'theme_edash');
    $description = get_string('enable_dark_navbar_footer_desc', 'theme_edash');
    $setting = new admin_setting_configtextarea ($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_edash/enable_navbar_footer_style_two';
    $title = get_string('enable_navbar_footer_style_two', 'theme_edash');
    $description = get_string('enable_navbar_footer_style_two_desc', 'theme_edash');
    $setting = new admin_setting_configtextarea ($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_edash/enable_navbar_footer_style_three';
    $title = get_string('enable_navbar_footer_style_three', 'theme_edash');
    $description = get_string('enable_navbar_footer_style_three_desc', 'theme_edash');
    $setting = new admin_setting_configtextarea ($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_edash/hide_banner';
    $title = get_string('hide_banner', 'theme_edash');
    $description = get_string('hide_banner_desc', 'theme_edash');
    $setting = new admin_setting_configtextarea ($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

     // Global Banner
     $setting = new admin_setting_configselect('theme_edash/hide_global_banner', get_string('hide_global_banner', 'theme_edash') , get_string('hide_global_banner_desc', 'theme_edash') , null, array(
        '0' => 'Visible',
        '1' => 'Hidden'
    ));
    $page->add($setting);
    
    $name = 'theme_edash/hide_page_bottom_content';
    $title = get_string('hide_page_bottom_content', 'theme_edash');
    $description = get_string('hide_page_bottom_content_desc', 'theme_edash');
    $setting = new admin_setting_configtextarea ($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    $settings->add($page);
    

    /*
    * ----------------------
    * Logo settings
    * ----------------------
    */
    $page = new admin_settingpage('theme_edash_logo', get_string('logo_settings', 'theme_edash'));

        // Header logos
        $page->add(new admin_setting_heading('theme_edash/header_logos', get_string('header_logos', 'theme_edash'), NULL));

        // Logotype
        $setting = new admin_setting_configselect('theme_edash/logo_visibility',
            get_string('logo_visibility', 'theme_edash'), '', null,
            array(
                '0' => 'Visible',
                '1' => 'Hidden'
            ));
        $page->add($setting);

        // Main Logo
        $name='theme_edash/main_logo';
        $title = get_string('main_logo', 'theme_edash');
        $description = get_string('main_logo_desc', 'theme_edash');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'main_logo');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

        // Logo Width
        $setting = new admin_setting_configtext('theme_edash/logo_image_width', get_string('logo_image_width','theme_edash'), get_string('logo_image_width_desc', 'theme_edash'), '', PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

        // Logo Height
        $setting = new admin_setting_configtext('theme_edash/logo_image_height', get_string('logo_image_height','theme_edash'), get_string('logo_image_height_desc', 'theme_edash'), '', PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

        // Mobile Logo
        $name='theme_edash/mobile_logo';
        $title = get_string('mobile_logo', 'theme_edash');
        $description = get_string('mobile_logo_desc', 'theme_edash');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'mobile_logo');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

        // Mobile Logo Width
        $setting = new admin_setting_configtext('theme_edash/mobile_logo_width', get_string('mobile_logo_width','theme_edash'), get_string('mobile_logo_width_desc', 'theme_edash'), '', PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

        // Logo Height
        $setting = new admin_setting_configtext('theme_edash/mobile_logo_height', get_string('mobile_logo_height','theme_edash'), get_string('mobile_logo_height_desc', 'theme_edash'), '', PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

        // Footer logo
        $page->add(new admin_setting_heading('theme_edash/footer_logo_sec', get_string('footer_logo_sec', 'theme_edash'), NULL));

        // Logotype
        $setting = new admin_setting_configselect('theme_edash/footer_logo_visibility',
            get_string('footer_logo_visibility', 'theme_edash'), '', null,
            array(
                '0' => 'Visible',
                '1' => 'Hidden'
            ));
        $page->add($setting);

        // Footer  Logo
        $name='theme_edash/main_footer_logo';
        $title = get_string('main_footer_logo', 'theme_edash');
        $description = get_string('main_footer_logo_desc', 'theme_edash');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'main_footer_logo');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

        // Logo Width
        $setting = new admin_setting_configtext('theme_edash/footer_logo_width', get_string('footer_logo_width','theme_edash'), get_string('footer_logo_width_desc', 'theme_edash'), '', PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

        // Logo Height
        $setting = new admin_setting_configtext('theme_edash/footer_logo_height', get_string('footer_logo_height','theme_edash'), get_string('footer_logo_height_desc', 'theme_edash'), '', PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

    $settings->add($page);

    /*
    * ----------------------
    * Header settings tab
    * ----------------------
    */
    $page = new admin_settingpage('theme_edash_header', get_string('header_settings', 'theme_edash'));

        // Search
        $setting = new admin_setting_configselect('theme_edash/header_search', get_string('header_search', 'theme_edash'),
        get_string('header_search_desc', 'theme_edash'), null,
            array(
                '1' => 'Show',
                '0' => 'Hide'
            ));
        $page->add($setting);

        // Navbar Search Placeholder Title.
        $name = 'theme_edash/search_placeholder';
        $title = get_string('search_placeholder', 'theme_edash');
        $default = 'Search for anything';
        $description = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

        // Button Text
        $setting = new admin_setting_configtext('theme_edash/header_btn_text', get_string('header_btn_text','theme_edash'), get_string('header_btn_text_desc', 'theme_edash'), 'Sign Up', PARAM_RAW, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

        // Button URL
        $setting = new admin_setting_configtext('theme_edash/header_btn_url', get_string('header_btn_url','theme_edash'), get_string('header_btn_url_desc', 'theme_edash'), '', PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

        // Button Icon
        $setting = new admin_setting_configselect('theme_edash/header_btn_icon_edash_icon_class',
        get_string('header_btn_icon', 'theme_edash'),
        get_string('header_btn_icon_desc', 'theme_edash'), 'flaticon-add', $edashFontList);
        $page->add($setting);

    $settings->add($page);

    // Social settings
    $page = new admin_settingpage('theme_edash_social_settings', get_string('social_settings', 'theme_edash'));

        // New Window
        $setting = new admin_setting_configselect('theme_edash/social_target', get_string('social_target', 'theme_edash') , get_string('social_target_desc', 'theme_edash') , null, array(
            '0' => 'Open URLs in the same page',
            '1' => 'Open URLs in a new window'
        ));
        $page->add($setting);

        // Facebook URL
        $setting = new admin_setting_configtext('theme_edash/edash_facebook_url', get_string('edash_facebook_url', 'theme_edash') , get_string('edash_facebook_url_desc', 'theme_edash') , '#', PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Twitter URL
        $setting = new admin_setting_configtext('theme_edash/edash_twitter_url', get_string('edash_twitter_url', 'theme_edash') , get_string('edash_twitter_url_desc', 'theme_edash') , '#', PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Instagram URL
        $setting = new admin_setting_configtext('theme_edash/edash_instagram_url', get_string('edash_instagram_url', 'theme_edash') , get_string('edash_instagram_url_desc', 'theme_edash') , '#', PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Pinterest URL
        $setting = new admin_setting_configtext('theme_edash/edash_pinterest_url', get_string('edash_pinterest_url', 'theme_edash') , get_string('edash_pinterest_url_desc', 'theme_edash') , '#', PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Dribbble URL
        $setting = new admin_setting_configtext('theme_edash/edash_dribbble_url', get_string('edash_dribbble_url', 'theme_edash') , get_string('edash_dribbble_url_desc', 'theme_edash') , '#', PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Google URL
        $setting = new admin_setting_configtext('theme_edash/edash_google_url', get_string('edash_google_url', 'theme_edash') , get_string('edash_google_url_desc', 'theme_edash') , '#', PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // YouTube URL
        $setting = new admin_setting_configtext('theme_edash/edash_youtube_url', get_string('edash_youtube_url', 'theme_edash') , get_string('edash_youtube_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // VK URL
        $setting = new admin_setting_configtext('theme_edash/edash_vk_url', get_string('edash_vk_url', 'theme_edash') , get_string('edash_vk_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // 500px URL
        $setting = new admin_setting_configtext('theme_edash/edash_500px_url', get_string('edash_500px_url', 'theme_edash') , get_string('edash_500px_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Behance URL
        $setting = new admin_setting_configtext('theme_edash/edash_behance_url', get_string('edash_behance_url', 'theme_edash') , get_string('edash_behance_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Digg URL
        $setting = new admin_setting_configtext('theme_edash/edash_digg_url', get_string('edash_digg_url', 'theme_edash') , get_string('edash_digg_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Flickr URL
        $setting = new admin_setting_configtext('theme_edash/edash_flickr_url', get_string('edash_flickr_url', 'theme_edash') , get_string('edash_flickr_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Foursquare URL
        $setting = new admin_setting_configtext('theme_edash/edash_foursquare_url', get_string('edash_foursquare_url', 'theme_edash') , get_string('edash_foursquare_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // LinkedIn URL
        $setting = new admin_setting_configtext('theme_edash/edash_linkedin_url', get_string('edash_linkedin_url', 'theme_edash') , get_string('edash_linkedin_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Medium URL
        $setting = new admin_setting_configtext('theme_edash/edash_medium_url', get_string('edash_medium_url', 'theme_edash') , get_string('edash_medium_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Meetup URL
        $setting = new admin_setting_configtext('theme_edash/edash_meetup_url', get_string('edash_meetup_url', 'theme_edash') , get_string('edash_meetup_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Snapchat URL
        $setting = new admin_setting_configtext('theme_edash/edash_snapchat_url', get_string('edash_snapchat_url', 'theme_edash') , get_string('edash_snapchat_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Tumblr URL
        $setting = new admin_setting_configtext('theme_edash/edash_tumblr_url', get_string('edash_tumblr_url', 'theme_edash') , get_string('edash_tumblr_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Vimeo URL
        $setting = new admin_setting_configtext('theme_edash/edash_vimeo_url', get_string('edash_vimeo_url', 'theme_edash') , get_string('edash_vimeo_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // WeChat URL
        $setting = new admin_setting_configtext('theme_edash/edash_wechat_url', get_string('edash_wechat_url', 'theme_edash') , get_string('edash_wechat_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // WhatsApp URL
        $setting = new admin_setting_configtext('theme_edash/edash_whatsapp_url', get_string('edash_whatsapp_url', 'theme_edash') , get_string('edash_whatsapp_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // WordPress URL
        $setting = new admin_setting_configtext('theme_edash/edash_wordpress_url', get_string('edash_wordpress_url', 'theme_edash') , get_string('edash_wordpress_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Weibo URL
        $setting = new admin_setting_configtext('theme_edash/edash_weibo_url', get_string('edash_weibo_url', 'theme_edash') , get_string('edash_weibo_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Telegram URL
        $setting = new admin_setting_configtext('theme_edash/edash_telegram_url', get_string('edash_telegram_url', 'theme_edash') , get_string('edash_telegram_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Moodle URL
        $setting = new admin_setting_configtext('theme_edash/edash_moodle_url', get_string('edash_moodle_url', 'theme_edash') , get_string('edash_moodle_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Amazon URL
        $setting = new admin_setting_configtext('theme_edash/edash_amazon_url', get_string('edash_amazon_url', 'theme_edash') , get_string('edash_amazon_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Slideshare URL
        $setting = new admin_setting_configtext('theme_edash/edash_slideshare_url', get_string('edash_slideshare_url', 'theme_edash') , get_string('edash_slideshare_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // SoundCloud URL
        $setting = new admin_setting_configtext('theme_edash/edash_soundcloud_url', get_string('edash_soundcloud_url', 'theme_edash') , get_string('edash_soundcloud_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // LeanPub URL
        $setting = new admin_setting_configtext('theme_edash/edash_leanpub_url', get_string('edash_leanpub_url', 'theme_edash') , get_string('edash_leanpub_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Xing URL
        $setting = new admin_setting_configtext('theme_edash/edash_xing_url', get_string('edash_xing_url', 'theme_edash') , get_string('edash_xing_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Bitcoin URL
        $setting = new admin_setting_configtext('theme_edash/edash_bitcoin_url', get_string('edash_bitcoin_url', 'theme_edash') , get_string('edash_bitcoin_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Twitch URL
        $setting = new admin_setting_configtext('theme_edash/edash_twitch_url', get_string('edash_twitch_url', 'theme_edash') , get_string('edash_twitch_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Github URL
        $setting = new admin_setting_configtext('theme_edash/edash_github_url', get_string('edash_github_url', 'theme_edash') , get_string('edash_github_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Gitlab URL
        $setting = new admin_setting_configtext('theme_edash/edash_gitlab_url', get_string('edash_gitlab_url', 'theme_edash') , get_string('edash_gitlab_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Forumbee URL
        $setting = new admin_setting_configtext('theme_edash/edash_forumbee_url', get_string('edash_forumbee_url', 'theme_edash') , get_string('edash_forumbee_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Trello URL
        $setting = new admin_setting_configtext('theme_edash/edash_trello_url', get_string('edash_trello_url', 'theme_edash') , get_string('edash_trello_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Weixin URL
        $setting = new admin_setting_configtext('theme_edash/edash_weixin_url', get_string('edash_weixin_url', 'theme_edash') , get_string('edash_weixin_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);
        // Slack URL
        $setting = new admin_setting_configtext('theme_edash/edash_slack_url', get_string('edash_slack_url', 'theme_edash') , get_string('edash_slack_url_desc', 'theme_edash') , null, PARAM_NOTAGS, 50);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $page->add($setting);

    $settings->add($page);

    /*
    * --------------------
    * Footer settings tab
    * --------------------
    */
    $page = new admin_settingpage('theme_edash_footer', get_string('footersettings', 'theme_edash'));

    // Footer Logo
    $name='theme_edash/footer_shape_image';
    $title = get_string('footer_shape_image', 'theme_edash');
    $description = get_string('footer_shape_image_desc', 'theme_edash');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'footer_shape_image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Footer Copyright Text
    $name = 'theme_edash/footer_copyright';
    $title = get_string('footer_copyright', 'theme_edash');
    $description = '';
    $setting = new admin_setting_configtextarea ($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Footer column 1
    $page->add(new admin_setting_heading('theme_edash/footer_col_1', get_string('footer_col_1', 'theme_edash') , NULL));
    // Footer column title
    $setting = new admin_setting_configtext('theme_edash/footer_col_1_title', get_string('footer_col_title', 'theme_edash') , get_string('footer_col_title_desc', 'theme_edash') , '', PARAM_RAW, 50);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Footer column body
    $setting = new admin_setting_configtextarea('theme_edash/footer_col_1_body', get_string('footer_col_body', 'theme_edash') , get_string('footer_col_body_desc', 'theme_edash') , 'Body text for the first column.', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Footer column 2
    $page->add(new admin_setting_heading('theme_edash/footer_col_2', get_string('footer_col_2', 'theme_edash') , NULL));
    // Footer column title
    $setting = new admin_setting_configtext('theme_edash/footer_col_2_title', get_string('footer_col_title', 'theme_edash') , get_string('footer_col_title_desc', 'theme_edash') , 'About Us', PARAM_RAW, 50);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Footer column body
    $setting = new admin_setting_configtextarea('theme_edash/footer_col_2_body', get_string('footer_col_body', 'theme_edash') , get_string('footer_col_body_desc', 'theme_edash') , 'Body text for the second column.', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Footer column 3
    $page->add(new admin_setting_heading('theme_edash/footer_col_3', get_string('footer_col_3', 'theme_edash') , NULL));
    // Footer column title
    $setting = new admin_setting_configtext('theme_edash/footer_col_3_title', get_string('footer_col_title', 'theme_edash') , get_string('footer_col_title_desc', 'theme_edash') , 'Resources', PARAM_RAW, 50);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Footer column body
    $setting = new admin_setting_configtextarea('theme_edash/footer_col_3_body', get_string('footer_col_body', 'theme_edash') , get_string('footer_col_body_desc', 'theme_edash') , 'Body text for the third column.', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Footer column 4
    $page->add(new admin_setting_heading('theme_edash/footer_col_4', get_string('footer_col_4', 'theme_edash') , NULL));
    // Footer column title
    $setting = new admin_setting_configtext('theme_edash/footer_col_4_title', get_string('footer_col_title', 'theme_edash') , get_string('footer_col_title_desc', 'theme_edash') , 'Quick Link', PARAM_RAW, 50);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Footer column body
    $setting = new admin_setting_configtextarea('theme_edash/footer_col_4_body', get_string('footer_col_body', 'theme_edash') , get_string('footer_col_body_desc', 'theme_edash') , 'Body text for the fourth column.', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Footer column 5
    $page->add(new admin_setting_heading('theme_edash/footer_col_5', get_string('footer_col_5', 'theme_edash') , NULL));
    // Footer column title
    $setting = new admin_setting_configtext('theme_edash/footer_col_5_title', get_string('footer_col_title', 'theme_edash') , get_string('footer_col_title_desc', 'theme_edash') , 'Contact Us', PARAM_RAW, 50);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Footer column body
    $setting = new admin_setting_configtextarea('theme_edash/footer_col_5_body', get_string('footer_col_body', 'theme_edash') , get_string('footer_col_body_desc', 'theme_edash') , 'Body text for the fifth column.', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    $settings->add($page);

    /*
    * ----------------------
    * Advanced settings tab
    * ----------------------
    */
    $page = new admin_settingpage('theme_edash_advanced', get_string('advancedsettings', 'theme_edash'));

    // Raw SCSS to include before the content.
    $setting = new admin_setting_configtextarea('theme_edash/scsspre',
        get_string('rawscsspre', 'theme_edash'), get_string('rawscsspre_desc', 'theme_edash'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Raw SCSS to include after the content.
    $setting = new admin_setting_configtextarea('theme_edash/scss', get_string('rawscss', 'theme_edash'), get_string('rawscss_desc', 'theme_edash'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);
}