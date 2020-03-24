<?php
require('../functions.php');
use PHPUnit\Framework\TestCase;

class functionsTest extends TestCase {
    public function testdisplayBread_Success() {
        $exspected = "<div class='listitem'><img src=something><h1>fghfg</h1><br> type: sdf |  Rating: 1<br><br>Description:<br><br>sdhfkjkl<br></div>";
        $breads = [
          ['imgurl' => 'something', 'name' => 'fghfg','type' => 'sdf', 'rating' => 1, 'desc' => 'sdhfkjkl']
        ];
        $actual = displayBread($breads);
        $this->assertequals($actual, $exspected);
    }

    public function testddisplayBread_Fail() {
        $exspected = "";
        $breads = [
            ['iegf' => 'something', 'namsfde' => 'fghfg','tydsfpe' => 'sdf', 'rasdfting' => 1, 'desdfsc' => 'sdhfkjkl']
        ];
        $actual = displayBread($breads);
        $this->assertequals($actual, $exspected);
    }

    public function testdisplayBread_Fail() {
        $this->expectException(TypeError::class);
        displayBread(1);
    }
}