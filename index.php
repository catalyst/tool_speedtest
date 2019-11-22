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
 *  A speed test page
 *
 * @package    tool_speedtest
 * @copyright  2019 Brendan Heywood <brendan@catalyst-au.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(__FILE__) . '/../../../config.php');

$PAGE->set_url('/admin/tool/speedtest/');
$PAGE->set_pagelayout('report');
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('pluginname', 'tool_speedtest'));
$PAGE->set_heading(get_string('pluginname', 'tool_speedtest'));
echo $OUTPUT->header();
?>
<script type="text/javascript" src="speedtest.js"></script>
<script type="text/javascript" src="run.js"></script>
<style type="text/css" src="styles.css"></style>
<div id="test">
    <div>
        <button id="startStopBtn" class="btn btn-primary" onclick="startStop()"
 data-start="<?php echo get_string('teststart' , 'tool_speedtest') ?>"
 data-abort="<?php echo get_string('testabort' , 'tool_speedtest') ?>">
<?php echo get_string('teststart' , 'tool_speedtest') ?></button>
    </div>
    <div class="testGroup">
        <div class="testArea">
            <div class="testName"><?php echo get_string('download' , 'tool_speedtest') ?></div>
            <div id="dlText" class="meterText"></div>
            <div class="unit">Mbps</div>
        </div>
        <div class="testArea">
            <div class="testName"><?php echo get_string('upload' , 'tool_speedtest') ?></div>
            <div id="ulText" class="meterText"></div>
            <div class="unit">Mbps</div>
        </div>
    </div>
    <div class="testGroup">
        <div class="testArea">
            <div class="testName"><?php echo get_string('ping' , 'tool_speedtest') ?></div>
            <div id="pingText" class="meterText"></div>
            <div class="unit">ms</div>
        </div>
        <div class="testArea">
            <div class="testName"><?php echo get_string('jitter' , 'tool_speedtest') ?></div>
            <div id="jitText" class="meterText"></div>
            <div class="unit">ms</div>
        </div>
    </div>
    <div id="ipArea">
        <?php echo get_string('ipaddress', 'tool_speedtest') ?>: <span id="ip"></span>
    </div>
</div>
<script type="text/javascript">
    initUI();
</script>
<?php
echo $OUTPUT->footer();
