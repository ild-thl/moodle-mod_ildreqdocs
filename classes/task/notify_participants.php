<?php

namespace mod_ildreqdocs\task;

class notify_participants extends \core\task\scheduled_task {
    public function get_name() {
        // Shown in admin screens
        return get_string('notify-participants', 'mod_ildreqdocs');
    }

    public function execute() {
        global $CFG;
        require_once($CFG->dirroot . '/mod/ildreqdocs/lib.php');
        ildreqdocs_notify_participants();
    }
}