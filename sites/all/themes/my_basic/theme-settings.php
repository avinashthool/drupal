<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function my_basic_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['my_basic_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Responsive Blog Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['my_basic_settings']['color'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('Color Scheme'),
    '#weight' => -2,
    '#description'   => t("Select a predesigned color scheme for the site."),
  );

  $form['my_basic_settings']['color']['color_scheme'] = array(
    '#type'          => 'select',
    '#title'         => t('Color Scheme'),
    '#default_value' => theme_get_setting('color_scheme', 'my_basic'),
    '#description'   => t('Select a predesigned color scheme.'),
    '#options'       => array(
      'white' => t('White'),
      'dark' => t('Dark'),
     ),
  );
  $form['my_basic_settings']['layout'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('Layout'),
    '#weight' => -2,
    '#description'   => t("Select a layout for the Sidebar."),
  );

  $form['my_basic_settings']['layout']['sidebar_layout'] = array(
    '#type'          => 'select',
    '#title'         => t('Sidebar'),
    '#default_value' => theme_get_setting('sidebar_layout', 'my_basic'),
    '#description'   => t('Select a layout for the Sidebar to be displayed (Right hand side or Left hand side).'),
    '#options'       => array(
      'right_sidebar' => t('Right Sidebar'),
      'left_sidebar' => t('Left Sidebar'),
     ),
  );
  $form['my_basic_settings']['layout']['sidebar_width'] = array(
    '#type'          => 'select',
    '#title'         => t('Sidebar Width'),
    '#default_value' => theme_get_setting('sidebar_width', 'my_basic'),
    '#description'   => t('Select the width of the Sidebar. (Narrow or Wide)'),
    '#options'       => array(
      'narrow_sidebar' => t('Narrow Sidebar'),
      'wide_sidebar' => t('Wide Sidebar'),
     ),
  );
  $form['my_basic_settings']['image_logo'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show <strong>Image Logo</strong> instead of text logo in a page'),
    '#default_value' => theme_get_setting('image_logo','my_basic'),
    '#description'   => t("Check this option to show Image Logo in page. Uncheck to show the text logo."),
  );
  $form['my_basic_settings']['breadcrumbs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumbs in a page'),
    '#default_value' => theme_get_setting('breadcrumbs','my_basic'),
    '#description'   => t("Check this option to show breadcrumbs in page. Uncheck to hide."),
  );
  $form['my_basic_settings']['slideshow'] = array(
    '#type' => 'fieldset',
    '#title' => t('Front Page Slideshow'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['my_basic_settings']['slideshow']['slideshow_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show slideshow'),
    '#default_value' => theme_get_setting('slideshow_display','my_basic'),
    '#description'   => t("Check this option to show Slideshow in front page. Uncheck to hide."),
  );
  $form['my_basic_settings']['slideshow']['slide'] = array(
    '#markup' => t('You can change the description and URL of each slide in the following Slide Setting fieldsets.'),
  );
  $form['my_basic_settings']['slideshow']['slide1'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 1'),
  );
  $form['my_basic_settings']['slideshow']['slide1']['slide1_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide1_desc','my_basic'),
  );
  $form['my_basic_settings']['slideshow']['slide1']['slide1_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide1_url','my_basic'),
  );
  $form['my_basic_settings']['slideshow']['slide2'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 2'),
  );
  $form['my_basic_settings']['slideshow']['slide2']['slide2_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide2_desc','my_basic'),
  );
  $form['my_basic_settings']['slideshow']['slide2']['slide2_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide2_url','my_basic'),
  );
  $form['my_basic_settings']['slideshow']['slide3'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 3'),
  );
  $form['my_basic_settings']['slideshow']['slide3']['slide3_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide3_desc','my_basic'),
  );
  $form['my_basic_settings']['slideshow']['slide3']['slide3_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide3_url','my_basic'),
  );
  $form['my_basic_settings']['slideshow']['slideimage'] = array(
    '#markup' => t('To change the Slide Images, Replace the slide-image-1.jpg, slide-image-2.jpg and slide-image-3.jpg in the images folder of the theme folder.'),
  );
  $form['my_basic_settings']['socialicon'] = array(
    '#type' => 'fieldset',
    '#title' => t('Social Icon'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['my_basic_settings']['socialicon']['socialicon_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Social Icon'),
    '#default_value' => theme_get_setting('socialicon_display','my_basic'),
    '#description'   => t("Check this option to show Social Icon. Uncheck to hide."),
  );
  $form['my_basic_settings']['socialicon']['twitter_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter Profile URL'),
    '#default_value' => theme_get_setting('twitter_url', 'my_basic'),
    '#description'   => t("Enter your Twitter Profile URL. Leave blank to hide."),
  );
  $form['my_basic_settings']['socialicon']['facebook_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook Profile URL'),
    '#default_value' => theme_get_setting('facebook_url', 'my_basic'),
    '#description'   => t("Enter your Facebook Profile URL. Leave blank to hide."),
  );
  $form['my_basic_settings']['socialicon']['google_plus_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Plus Address'),
    '#default_value' => theme_get_setting('google_plus_url', 'my_basic'),
    '#description'   => t("Enter your Google Plus URL. Leave blank to hide."),
  );
  $form['my_basic_settings']['socialicon']['pinterest_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Pinterest Address'),
    '#default_value' => theme_get_setting('pinterest_url', 'my_basic'),
    '#description'   => t("Enter your Pinterest URL. Leave blank to hide."),
  );
}
