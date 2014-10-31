<?php
/**
 * WikkaWiki configuration file 
 * 
 * This file was generated by the Wikka installer on [[reg_time]]
 * Do not manually change wakka_version if you wish to keep your engine up-to-date.
 * Documentation is available at: http://docs.wikkawiki.org/ConfigurationOptions
 */
$wakkaConfig = array(
	'mysql_host' => '[[softdbhost]]',
	'mysql_database' => '[[softdb]]',
	'mysql_user' => '[[softdbuser]]',
	'table_prefix' => '[[dbprefix]]',
	'root_page' => 'HomePage',
	'wakka_name' => '[[site_name]]',
	'rewrite_mode' => '1',
	'wiki_suffix' => '@wikka',
	'enable_user_host_lookup' => '0',
	'action_path' => 'plugins/actions,actions',
	'handler_path' => 'plugins/handlers,handlers',
	'lang_path' => 'plugins/lang',
	'gui_editor' => '1',
	'default_comment_display' => 'threaded',
	'theme' => 'light',
	'wikka_formatter_path' => 'plugins/formatters,formatters',
	'wikka_highlighters_path' => 'formatters',
	'geshi_path' => '3rdparty/plugins/geshi',
	'geshi_languages_path' => '3rdparty/plugins/geshi/geshi',
	'wikka_template_path' => 'plugins/templates,templates',
	'feedcreator_path' => '3rdparty/core/feedcreator',
	'menu_config_path' => 'plugins/config,config',
	'safehtml_path' => '3rdparty/core/safehtml',
	'referrers_purge_time' => '30',
	'pages_purge_time' => '0',
	'xml_recent_changes' => '10',
	'hide_comments' => '0',
	'require_edit_note' => '0',
	'anony_delete_own_comments' => '1',
	'public_sysinfo' => '0',
	'double_doublequote_html' => 'safe',
	'sql_debugging' => '0',
	'admin_users' => '[[admin_username]]',
	'admin_email' => '[[admin_email]]',
	'upload_path' => 'uploads',
	'mime_types' => 'mime_types.txt',
	'geshi_header' => 'div',
	'geshi_line_numbers' => '1',
	'geshi_tab_width' => '4',
	'grabcode_button' => '1',
	'wikiping_server' => '',
	'default_write_acl' => '+',
	'default_read_acl' => '*',
	'default_comment_read_acl' => '*',
	'default_comment_post_acl' => '+',
	'allow_user_registration' => '1',
	'enable_version_check' => '1',
	'version_check_interval' => '1h',
	'default_lang' => 'en',
	'spamlog_path' => './spamlog.txt.php',
	'badwords_path' => './badwords.txt.php',
	'spam_logging' => '0',
	'content_filtering' => '0',
	'max_new_document_urls' => '15',
	'max_new_comment_urls' => '6',
	'max_new_feedback_urls' => '6',
	'utf8_compat_search' => '0',
	'wakka_version' => '1.3.5',
	'mysql_password' => '[[softdbpass]]',
	'meta_keywords' => '',
	'meta_description' => '',
	'stylesheet_hash' => '[[style_hash]]');
?>