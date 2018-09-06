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
 * The module simple certificate tests
 *
 * @package    mod_simplecertificate
 * @copyright  2018 Carlos Alexandre S. da Fonseca
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


/**
 * Tests for textmarks conveters subplugins.
 */
class mod_chat_format_message_testcase extends advanced_testcase {
    public function test_textmarks_converters() {
        $this->resetAfterTest();
        $course = $this->getDataGenerator()->create_course();
        $currentuser = $this->getDataGenerator()->create_user();
        $this->setUser($currentuser);
        $otheruser = $this->getDataGenerator()->create_user();
    }
}