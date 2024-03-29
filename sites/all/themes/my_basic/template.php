<?php
/**
 * Implements hook_html_head_alter().
 * This will overwrite the default meta character type tag with HTML5 version.
 */
function my_basic_html_head_alter(&$head_elements) {
  $head_elements['system_meta_content_type']['#attributes'] = array(
    'charset' => 'utf-8'
  );
}

/**
 * Insert themed breadcrumb page navigation at top of the node content.
 */
function my_basic_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    // Use CSS to hide titile .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    // comment below line to hide current page to breadcrumb
$breadcrumb[] = drupal_get_title();
    $output .= '<nav class="breadcrumb">' . implode(' » ', $breadcrumb) . '</nav>';
    return $output;
  }
}

function my_basic_preprocess_html(&$vars) {
  // Add body classes for custom design options
  $colors = theme_get_setting('color_scheme', 'my_basic');
  $classes = explode(" ", $colors);
  for($i=0; $i<count($classes); $i++){
    $vars['classes_array'][] = $classes[$i];
  }
  $sidebar_layout = theme_get_setting('sidebar_layout', 'my_basic');
  if($sidebar_layout == 'left_sidebar') {
    $vars['classes_array'][] = 'left-sidebar';
  }
  $sidebar_width = theme_get_setting('sidebar_width', 'my_basic');
  if($sidebar_width == 'wide_sidebar') {
    $vars['classes_array'][] = 'wide-sidebar';
  }
}

/**
 * Override or insert variables into the page template.
 */
function my_basic_preprocess_page(&$vars) {
  if (isset($vars['main_menu'])) {
    $vars['main_menu'] = theme('links__system_main_menu', array(
      'links' => $vars['main_menu'],
      'attributes' => array(
        'class' => array('links', 'main-menu', 'clearfix'),
      ),
      'heading' => array(
        'text' => t('Main menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      )
    ));
  }
  else {
    $vars['main_menu'] = FALSE;
  }
  if (isset($vars['secondary_menu'])) {
    $vars['secondary_menu'] = theme('links__system_secondary_menu', array(
      'links' => $vars['secondary_menu'],
      'attributes' => array(
        'class' => array('links', 'secondary-menu', 'clearfix'),
      ),
      'heading' => array(
        'text' => t('Secondary menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      )
    ));
  }
  else {
    $vars['secondary_menu'] = FALSE;
  }
  if (isset($vars['node']->type)) {
        $nodetype = $vars['node']->type;
        $vars['theme_hook_suggestions'][] = 'page__' . $nodetype;
  }
}

/**
 * Duplicate of theme_menu_local_tasks() but adds clearfix to tabs.
 */
function my_basic_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary clearfix">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary clearfix">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }
  return $output;
}

/**
 * Override or insert variables into the node template.
 */
function my_basic_preprocess_node(&$variables) {
  $node = $variables['node'];
  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
    $variables['classes_array'][] = 'node-full';
  }
  $variables['date'] = t('!datetime', array('!datetime' =>  date('l, j F Y', $variables['created'])));
}

function my_basic_page_alter($page) {
  // <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  $viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
    'name' =>  'viewport',
    'content' =>  'width=device-width, initial-scale=1, maximum-scale=1'
    )
  );
  drupal_add_html_head($viewport, 'viewport');
}

/**
 * Add css for color style.
 */
// if (theme_get_setting('color_scheme', 'my_basic') == 'dark') {
//   drupal_add_css(drupal_get_path('theme', 'my_basic') . '/css/color-schemes.css');
// }

// /**
//  * Add javascript files for front-page jquery slideshow.
//  */
// if (drupal_is_front_page()) {
//   drupal_add_js(drupal_get_path('theme', 'my_basic') . '/js/jquery.cycle.all.min.js');
//   drupal_add_js(drupal_get_path('theme', 'my_basic') . '/js/slide.js');
// }


function my_basic_preprocess_region(&$vars) {
  //$vars['theme_hook_suggestions'][] = 'region--' . $vars['region'];
  if($vars['region'] == "regionsidebar_first"){
    $vars['theme_hook_suggestions'][] = 'region--sidebar-first.tpl.php';  
  }
}

drupal_add_js(drupal_get_path('theme', 'my_basic') . '/js/jquery.cycle.all.js');
drupal_add_js(drupal_get_path('theme', 'my_basic') . '/js/jquery.cycle.all.min.js');
drupal_add_js(drupal_get_path('theme', 'my_basic') . '/js/owlcarousel/owl.carousel.min.js');
  drupal_add_js(drupal_get_path('theme', 'my_basic') . '/js/owlcarousel/owl.carousel.js');
  drupal_add_css(drupal_get_path('theme', 'my_basic') . '/stylesheets/hero.css');
  drupal_add_js(drupal_get_path('theme', 'my_basic') . '/js/slide.js');