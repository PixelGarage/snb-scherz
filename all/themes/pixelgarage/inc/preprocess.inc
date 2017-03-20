<?php
/**
 * Created by PhpStorm.
 * User: ralph
 * Date: 06.02.15
 * Time: 17:23
 */

/**
 * Preprocess variables for the html template.
 */
function pixelgarage_preprocess_html(&$vars) {
  // make sure jQuery UI and effects is loaded for anonymous users
  drupal_add_library('system', 'ui');
  //drupal_add_library('system', 'effects');


}

function pixelgarage_process_html(&$vars) {
  // prepare html page
  $vars['html_attributes'] = ' class="js rgba hsla cssanimations csstransforms csstransforms3d csstransitions generatedcontent" lang="de"';
  $vars['body_attributes'] = '';

  // add meta info
  $files_url = file_create_url('sites/all/themes/pixelgarage/_snb_files');
  //$data = array('#tag' => 'meta', '#attributes' => array('http-equiv' => 'Content-Type', 'content' => 'text/html; charset=utf-8',),'#weight' => -1000,);
  //drupal_add_html_head($data, $key = 'meta1');
  $data = array('#tag' => 'meta', '#attributes' => array('http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge,chrome=1',));
  drupal_add_html_head($data, $key = 'meta2');
  $data = array('#tag' => 'meta', '#attributes' => array('http-equiv' => 'cleartype', 'content' => 'off',));
  drupal_add_html_head($data, $key = 'meta3');
  $data = array('#tag' => 'meta', '#attributes' => array('name' => 'language', 'content' => 'de',));
  drupal_add_html_head($data, $key = 'meta4');
  $data = array('#tag' => 'meta', '#attributes' => array('name' => 'copyright', 'content' => 'Schweizerische Nationalbank, Zürich (Schweiz)',));
  drupal_add_html_head($data, $key = 'meta5');
  $data = array('#tag' => 'meta', '#attributes' => array('name' => 'application-name', 'content' => 'www.snb.ch','data-rendered' => "2017-03-08T12:42:46.508+0100", 'data-snbv' => "7.2.49", 'data-url' => "/de/", 'data-virtual' => "snbng-web01-prod",));
  drupal_add_html_head($data, $key = 'meta6');

  // add head links
  drupal_add_html_head_link(array('rel' => "apple-touch-icon-precomposed", 'sizes' => "228x228", 'href' => "http://snb.ch/apple-touch-icon-228x228.png",));
  drupal_add_html_head_link(array('rel' => "apple-touch-icon-precomposed", 'sizes' => "144x144", 'href' => "http://snb.ch/apple-touch-icon-144x144.png",));
  drupal_add_html_head_link(array('rel' => "apple-touch-icon-precomposed", 'sizes' => "72x72", 'href' => "http://snb.ch/apple-touch-icon-72x72.png",));
  drupal_add_html_head_link(array('rel' => "apple-touch-icon-precomposed", 'sizes' => "57x57", 'href' => "http://snb.ch/apple-touch-icon-57x57.png",));
  drupal_add_html_head_link(array('rel' => "apple-touch-icon-precomposed", 'sizes' => "32x32", 'href' => "http://snb.ch/apple-touch-icon-32x32.png",));
  drupal_add_html_head_link(array('rel' => "apple-touch-icon", 'href' => "http://snb.ch/apple-touch-icon-57x57.png",));
  drupal_add_html_head_link(array('rel' => "icon", 'href' => "http://snb.ch/favicon.png",));
  drupal_add_html_head_link(array('rel' => "shortcut icon", 'href' => "http://snb.ch/favicon.ico",));
  //drupal_add_html_head_link(array('rel' => "stylesheet", 'type' => "text/css", 'href' => "{$files_url}/main-a556dd5c729e4f03958460217a417dc9.css",));

  // add title and head
  $vars['head_title'] = "Schweizerische Nationalbank (SNB) - Die Schweizerische Nationalbank führt als unabhängige Zentralbank die Geld- und Währungspolitik des Landes";
  $vars['head'] = drupal_get_html_head();

  // add all scripts
  $jquery_url = file_create_url('sites/all/modules/_admin/jquery_update/replace/jquery/1.10/jquery.min.js?v=1.10.2');
  //$vars['scripts'] .= "<script src='{$jquery_url}'></script>\n";
  $vars['scripts'] .= "<script src='{$files_url}/zepto-b371d1e5f3e497b67294ff5b113a13a8.js'></script>\n";
  $vars['scripts'] .= "<script src='{$files_url}/postload-97d4d822b25b3e772481369dd589b8a1.js'></script>\n";
  $vars['scripts'] .= "<script src='{$files_url}/preload-80c6db841256e75222e3c2c337f7e6a6.js'></script>\n";
  $vars['scripts'] .= "<script>window.SNB.lcid='de';</script>\n";
  $vars['scripts'] .= "<script>window.SNB.columns=1;</script>\n";
}

/**
 * Override or insert variables for the page templates.
 */
function pixelgarage_preprocess_page(&$vars) {
  // hide titles on login forms
  pg_login_preprocess_page($vars);

  //$vars['logo'] = str_replace(array('.jpg', '.png'), '.svg', $vars['logo']);
}


