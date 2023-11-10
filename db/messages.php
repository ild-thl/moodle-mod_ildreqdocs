<?php
/*
defined('MOODLE_INTERNAL') || die();
$messageproviders = array(
    'notify' => array(
        #'capability' => 'mod/ildreqdocs:participant'
    )
);
*/
$messageproviders = array (
    'notify' => array (
        'defaults' => array (
            'email' => MESSAGE_FORCED
        )
    )
);