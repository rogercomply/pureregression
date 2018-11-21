<?php
/**
 * pureRegression functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pureRegression
 *
 * Implements multi-domain support for onion domains using WordPress filter hooks.
 * Onion v2: slackiuxopmaoigo.onion
 * Onion v3: 4hpfzoj3tgyp2w7sbe3gnmphqiqpxwwyijyvotamrvojl7pkra7z7byd.onion
 * 
 * Source: https://blog.paranoidpenguin.net/2017/09/how-to-configure-wordpress-as-a-tor-hidden-service/
 */

if ($_SERVER["HTTP_HOST"] == 'slackiuxopmaoigo.onion') {
	add_filter('option_home', 'pureregression_permalinks');
	add_filter('option_siteurl', 'pureregression_permalinks');
	add_filter('option_blogdescription', 'pureregression_blogdescription');
	add_filter('option_blogname', 'pureregression_blogname');
	add_filter('bloginfo', 'pureregression_blogname');
	add_filter('post_link', 'pureregression_permalinks');
	add_filter('page_link', 'pureregression_permalinks');
	add_filter('post_type_link', 'pureregression_permalinks');
	add_filter('category_link', 'pureregression_permalinks');
	add_filter('tag_link', 'pureregression_permalinks');
	add_filter('author_link', 'pureregression_permalinks');
	add_filter('day_link', 'pureregression_permalinks');
	add_filter('month_link', 'pureregression_permalinks');
	add_filter('year_link', 'pureregression_permalinks');
	add_filter('nav_menu_link_attributes', 'pureregression_permalinks');
	add_filter('includes_url', 'pureregression_permalinks');
	add_filter('content_url', 'pureregression_permalinks');
	add_filter('admin_url', 'pureregression_permalinks');
	add_filter('feed_link', 'pureregression_permalinks');
	add_filter('stylesheet_uri', 'pureregression_permalinks');
	add_filter('attachment_link', 'pureregression_permalinks');
	add_filter('wp_get_attachment_image_src', 'pureregression_permalinks');
	add_filter('wp_get_attachment_link', 'pureregression_permalinks');
	add_filter('the_excerpt', 'pureregression_permalinks');
	add_filter('the_content', 'pureregression_permalinks');

} elseif ($_SERVER["HTTP_HOST"] == '4hpfzoj3tgyp2w7sbe3gnmphqiqpxwwyijyvotamrvojl7pkra7z7byd.onion') {
	add_filter('option_home', 'pureregression_permalinks_v3');
	add_filter('option_siteurl', 'pureregression_permalinks_v3');
	add_filter('option_blogdescription', 'pureregression_blogdescription');
	add_filter('option_blogname', 'pureregression_blogname');
	add_filter('bloginfo', 'pureregression_blogname_v3');
	add_filter('post_link', 'pureregression_permalinks_v3');
	add_filter('page_link', 'pureregression_permalinks_v3');
	add_filter('post_type_link', 'pureregression_permalinks_v3');
	add_filter('category_link', 'pureregression_permalinks_v3');
	add_filter('tag_link', 'pureregression_permalinks_v3');
	add_filter('author_link', 'pureregression_permalinks_v3');
	add_filter('day_link', 'pureregression_permalinks_v3');
	add_filter('month_link', 'pureregression_permalinks_v3');
	add_filter('year_link', 'pureregression_permalinks_v3');
	add_filter('nav_menu_link_attributes', 'pureregression_permalinks_v3');
	add_filter('includes_url', 'pureregression_permalinks_v3');
	add_filter('content_url', 'pureregression_permalinks_v3');
	add_filter('admin_url', 'pureregression_permalinks_v3');
	add_filter('feed_link', 'pureregression_permalinks_v3');
	add_filter('stylesheet_uri', 'pureregression_permalinks_v3');
	add_filter('attachment_link', 'pureregression_permalinks_v3');
	add_filter('wp_get_attachment_image_src', 'pureregression_permalinks_v3');
	add_filter('wp_get_attachment_link', 'pureregression_permalinks_v3');
	add_filter('the_excerpt', 'pureregression_permalinks_v3');
	add_filter('the_content', 'pureregression_permalinks_v3');
}

function pureregression_blogname($content) {
	$content = str_replace('ParanoidPenguin.net', 'Slackiuxopmaoigo.onion', $content);
	return $content;
}

function pureregression_blogdescription($content) {
	$content = str_replace('a patron', 'an onion', $content);
	return $content;
}

function pureregression_permalinks($content) {
	$content = preg_replace('/https?:\/\/blog.paranoidpenguin.net/', 'http://slackiuxopmaoigo.onion', $content);
	return $content;
}

function pureregression_blogname_v3($content) {
	$content = str_replace('ParanoidPenguin.net', '4hpfzoj3tgyp2w7sbe3gnmphqiqpxwwyijyvotamrvojl7pkra7z7byd.onion', $content);
	return $content;
}

function pureregression_permalinks_v3($content) {
	$content = preg_replace('/https?:\/\/blog.paranoidpenguin.net/', 'http://4hpfzoj3tgyp2w7sbe3gnmphqiqpxwwyijyvotamrvojl7pkra7z7byd.onion', $content);
	return $content;
}
