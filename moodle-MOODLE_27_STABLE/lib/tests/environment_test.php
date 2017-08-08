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
 * Moodle environment test.
 *
 * @package    core
 * @category   phpunit
 * @copyright  2013 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


/**
 * Do standard environment.xml tests.
 */
class core_environment_testcase extends advanced_testcase {

    /**
     * Test the environment.
     */
    public function test_environment() {
        global $CFG;

        require_once($CFG->libdir.'/environmentlib.php');
        list($envstatus, $environment_results) = check_moodle_environment(normalize_version($CFG->release), ENV_SELECT_RELEASE);

        $this->assertNotEmpty($envstatus);
        foreach ($environment_results as $environment_result) {
            if ($environment_result->part === 'php_setting'
                and $environment_result->info === 'opcache.enable'
                and $environment_result->getLevel() === 'optional'
                and $environment_result->getStatus() === false
            ) {
                $this->markTestSkipped('OPCache extension is not necessary for unit testing.');
                continue;
            }
            $this->assertTrue($environment_result->getStatus(), "Problem detected in environment ($environment_result->part:$environment_result->info), fix all warnings and errors!");
        }
    }

    /**
     * Test the restrict_php_version() function returns true if the current
     * PHP version is greater than the restricted version
     */
    public function test_restrict_php_version_greater_than_restricted_version() {
        global $CFG;
        require_once($CFG->libdir.'/environmentlib.php');

        $result = new environment_results('php');
        $delimiter = '.';
        // Get the current PHP version.
        $currentversion = explode($delimiter, normalize_version(phpversion()));
        // Lets drop back one major version to ensure we trip the restriction.
        $currentversion[0]--;
        $restrictedversion = implode($delimiter, $currentversion);

        // Make sure the status is true before the test to see it flip to false.
        $result->setStatus(true);

        $this->assertTrue(restrict_php_version($result, $restrictedversion),
            'restrict_php_version returns true if the current version exceeds the restricted version');
    }

    /**
     * Test the restrict_php_version() function returns true if the current
     * PHP version is equal to the restricted version
     */
    public function test_restrict_php_version_equal_to_restricted_version() {
        global $CFG;
        require_once($CFG->libdir.'/environmentlib.php');

        $result = new environment_results('php');
        // Get the current PHP version.
        $currentversion = normalize_version(phpversion());

        // Make sure the status is true before the test to see it flip to false.
        $result->setStatus(true);

        $this->assertTrue(restrict_php_version($result, $currentversion),
            'restrict_php_version returns true if the current version is equal to the restricted version');
    }

    /**
     * Test the restrict_php_version() function returns false if the current
     * PHP version is less than the restricted version
     */
    public function test_restrict_php_version_less_than_restricted_version() {
        global $CFG;
        require_once($CFG->libdir.'/environmentlib.php');

        $result = new environment_results('php');
        $delimiter = '.';
        // Get the current PHP version.
        $currentversion = explode($delimiter, normalize_version(phpversion()));
        // Lets increase the major version to ensure don't trip the restriction.
        $currentversion[0]++;
        $restrictedversion = implode($delimiter, $currentversion);

        // Make sure the status is true before the test to see it flip to false.
        $result->setStatus(true);

        $this->assertFalse(restrict_php_version($result, $restrictedversion),
            'restrict_php_version returns false if the current version is less than the restricted version');
    }
}
