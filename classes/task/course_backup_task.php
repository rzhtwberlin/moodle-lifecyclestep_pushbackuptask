<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Life Cycle Admin push backup task step
 *
 * @package    lifecyclestep_pushbackuptask
 * @copyright  2024 Johannes Burk (HTW Berlin)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace lifecyclestep_pushbackuptask\task;

defined('MOODLE_INTERNAL') || die();

use tool_lifecycle\local\manager\backup_manager;

class course_backup_task extends \core\task\adhoc_task {

    /**
     * Run the adhoc task and preform the backup.
     */
    public function execute() {
        $courseid = $this->get_custom_data()->courseid;
        backup_manager::create_course_backup($courseid);
    }
}
