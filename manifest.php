<?php if (!defined('FW')) die('Forbidden');

$manifest = array();

$manifest['name']        = __( 'Feedback', 'fw' );
$manifest['slug']        = 'unysonplus-feedback';
$manifest['description'] = __( 
	'Adds the possibility to leave feedback (comments, reviews and rating) about your products, articles, etc. This replaces the default comments system.', 
	'fw' 
);

$manifest['version']     = '1.0.14';
$manifest['display']     = true;
$manifest['standalone']  = true;

// Repository Info
$manifest['github_update'] = 'UnysonPlus/UnysonPlus-Feedback-Extension';
$manifest['github_repo']   = 'https://github.com/UnysonPlus/UnysonPlus-Feedback-Extension';
$manifest['github_branch'] = 'master';

// Author Info
$manifest['author']     = 'UnysonPlus';
$manifest['author_uri'] = 'https://www.lastimosa.com.ph/unysonplus';

// Meta
$manifest['license']      = 'GPL-2.0-or-later';
$manifest['text_domain']  = 'fw';
$manifest['requires_php'] = '7.4';
$manifest['requires_wp']  = '5.8';
