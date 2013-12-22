<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * default layout
 * Location: application/views/
 */
$config['template_layout'] = 'template/layout';

/**
 * default css
 */
$config['template_css'] = array(
    '/assets/css/bootstrap.css' => 'screen',
    '/assets/css/font-awesome.css' => 'screen',
    '/assets/css/style.css' => 'screen'
);

/**
 * default javascript
 * load javascript on header: FALSE
 * load javascript on footer: TRUE
 */
$config['template_js'] = array(
    'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' => TRUE,
base_url()."/assets/js/jquery-ui-1.10.3.custom.min.js" => TRUE,
base_url()."/assets/js/less-1.5.0.min.js" => TRUE,
base_url()."/assets/js/jquery.ui.touch-punch.min.js" => TRUE,
base_url()."/assets/js/bootstrap.min.js" => TRUE,
base_url()."/assets/js/bootstrap-select.js" => TRUE,
base_url()."/assets/js/jquery.tagsinput.js" => TRUE,
base_url()."/assets/js/jquery.placeholder.js" => TRUE,
base_url()."/assets/js/bootstrap-typeahead.js" => TRUE,
base_url()."/assets/js/moment.min.js" => TRUE,
base_url()."/assets/js/jquery.dataTables.min.js" => TRUE,
base_url()."/assets/js/jquery.sortable.js" => TRUE,
base_url()."/assets/js/jquery.gritter.js" => TRUE,
base_url()."/assets/js/jquery.nicescroll.min.js" => TRUE,
base_url()."/assets/js/prettify.min.js" => TRUE,
base_url()."/assets/js/jquery.noty.js" => TRUE,
base_url()."/assets/js/bic_calendar.js" => TRUE,
base_url()."/assets/js/jquery.accordion.js" => TRUE,
base_url()."/assets/js/skylo.js" => TRUE,


base_url()."/assets/js/core.js" => TRUE
);

/**
 * default variable
 */
$config['template_vars'] = array(
    'site_description' => 'A Codeigniter admin template',
    'site_keywords' => 'Cascade, Admin'
);

/**
 * default site title
 */
$config['base_title'] = 'Cascade';

/**
 * default title separator
 */
$config['title_separator'] = ' | ';

