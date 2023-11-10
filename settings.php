<?php

defined('MOODLE_INTERNAL') || die;

$settings->add(new admin_setting_heading(            
	'headerconfig',            
	get_string('headerconfig', 'mod_ildreqdocs'),            
	get_string('descconfig', 'mod_ildreqdocs'),''    
));

$settings->add(new admin_setting_configtextarea(            
	'ildreqdocs/infotext',            
	get_string('configlabel_infotext', 'mod_ildreqdocs'),            
	get_string('configdesc_infotext', 'mod_ildreqdocs'),''
));

$settings->add(new admin_setting_configtext(            
	'ildreqdocs/first_mail_subject',            
	get_string('configlabel_first_mail_subject', 'mod_ildreqdocs'),            
	get_string('configdesc_first_mail_subject', 'mod_ildreqdocs'),''
));

$settings->add(new admin_setting_configtextarea(            
	'ildreqdocs/first_mail_content',            
	get_string('configlabel_first_mail_content', 'mod_ildreqdocs'),            
	get_string('configdesc_first_mail_content', 'mod_ildreqdocs'),''
));

$settings->add(new admin_setting_configtext(            
	'ildreqdocs/second_mail_subject',            
	get_string('configlabel_second_mail_subject', 'mod_ildreqdocs'),            
	get_string('configdesc_second_mail_subject', 'mod_ildreqdocs'),''
));

$settings->add(new admin_setting_configtextarea(            
	'ildreqdocs/second_mail_content',            
	get_string('configlabel_second_mail_content', 'mod_ildreqdocs'),            
	get_string('configdesc_second_mail_content', 'mod_ildreqdocs'),''
));

$settings->add(new admin_setting_configtext(            
	'ildreqdocs/responsible_mail_subject',            
	get_string('configlabel_responsible_mail_subject', 'mod_ildreqdocs'),            
	get_string('configdesc_responsible_mail_subject', 'mod_ildreqdocs'),''
));

$settings->add(new admin_setting_configtextarea(            
	'ildreqdocs/responsible_mail_content',            
	get_string('configlabel_responsible_mail_content', 'mod_ildreqdocs'),            
	get_string('configdesc_responsible_mail_content', 'mod_ildreqdocs'),''
));

$settings->add(new admin_setting_configtext(            
	'ildreqdocs/overview_mail_subject',            
	get_string('configlabel_overview_mail_subject', 'mod_ildreqdocs'),            
	get_string('configdesc_overview_mail_subject', 'mod_ildreqdocs'),''
));

$settings->add(new admin_setting_configtextarea(            
	'ildreqdocs/overview_mail_content',            
	get_string('configlabel_overview_mail_content', 'mod_ildreqdocs'),            
	get_string('configdesc_overview_mail_content', 'mod_ildreqdocs'),''
));