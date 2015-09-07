<?php

/**
 * @file
 * template.php
 */
/**
 * Implements hook_preprocess_page().
 */
function thedu_preprocess_page(&$variables) {
	drupal_add_js(array('pathToTheme' => array('pathToTheme' => base_path() . path_to_theme())), 'setting');

	if (arg(0) == 'user' && arg(1) == 'login') {
		drupal_add_css(drupal_get_path('theme', 'thedu').'/css/page-user-login.css',array('group'=>CSS_THEME));
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/jquery.backstretch.min.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/page-user-login.js','file');
		$variables['navbar_classes_array'][] = 'navbar-inverse';
		# code...
	}
	if(drupal_is_front_page()){
		drupal_add_css(drupal_get_path('theme', 'thedu').'/css/WordsRotating.css', 'file');
		drupal_add_css(drupal_get_path('theme', 'thedu').'/css/page-front.css',array('group'=>CSS_THEME));
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/jquery.backstretch.min.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/shareTo.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/page-front.js','file');
		$variables['navbar_classes_array'][] = 'navbar-bigger';
	}
	if (arg(0) == 'student' && arg(1) == 'register') {
		drupal_add_css(drupal_get_path('theme', 'thedu').'/css/page-front.css',array('group'=>CSS_THEME));
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/jquery.backstretch.min.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/shareTo.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/page-front.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/page-user-register.js','file');
		$variables['navbar_classes_array'][] = 'navbar-bigger';
	}
	if (arg(0) == 'user' && arg(1) == 'validate_phone') {
		drupal_add_css(drupal_get_path('theme', 'thedu').'/css/page-front.css',array('group'=>CSS_THEME));
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/jquery.backstretch.min.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/shareTo.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/page-front.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/page-user-register.js','file');
		$variables['navbar_classes_array'][] = 'navbar-bigger';
	}
	if(isset($variables['node']) && $variables['node']->nid == '43') {
		drupal_add_css(drupal_get_path('theme', 'thedu').'/css/page-front.css',array('group'=>CSS_THEME));
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/jquery.backstretch.min.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/shareTo.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/page-front.js','file');
		$variables['navbar_classes_array'][] = 'navbar-bigger';
	}
}