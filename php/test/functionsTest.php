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

    function testValidateUserInput_success() {
        $exspected = true;
        $breads = ['imgurl' => 'something', 'name' => 'fghfg','type' => 'sdf', 'rating' => 1, 'desc' => 'sdhfkjkl'];
        $actual = validateUsrInput($breads);
        $this->assertSame($actual, $exspected);
    }

    function testValidateUserInput_fail() {
        $exspected = false;
        $breads = ['dfgg' => 'something', 'fdg' => 'fghfg','tydfge' => 'sdf', 'ratdfging' => 1, 'dedfgdsc' => 'sdhfkjkl'];
        $actual = validateUsrInput($breads);
        $this->assertSame($actual, $exspected);
    }

    function testValidateUserInput_failEmptyImgurl() {
        $exspected = false;
        $breads = ['imgurl' => '', 'name' => 'fghfg','type' => 'sdf', 'rating' => 1, 'desc' => 'sdhfkjkl'];
        $actual = validateUsrInput($breads);
        $this->assertSame($actual, $exspected);
    }

    function testValidateUserInput_failEmptyName() {
        $exspected = false;
        $breads = ['imgurl' => '', 'name' => '','type' => 'sdf', 'rating' => 1, 'desc' => 'sdhfkjkl'];
        $actual = validateUsrInput($breads);
        $this->assertSame($actual, $exspected);
    }

    function testValidateUserInput_failEmptyType() {
        $exspected = false;
        $breads = ['imgurl' => '', 'name' => 'fghfg','type' => '', 'rating' => 1, 'desc' => 'sdhfkjkl'];
        $actual = validateUsrInput($breads);
        $this->assertSame($actual, $exspected);
    }

    function testValidateUserInput_failEmptyRating() {
        $exspected = false;
        $breads = ['imgurl' => '', 'name' => 'fghfg','type' => 'sdf', 'rating' => "", 'desc' => 'sdhfkjkl'];
        $actual = validateUsrInput($breads);
        $this->assertSame($actual, $exspected);
    }

    function testValidateUserInput_failEmptyDesc() {
        $exspected = false;
        $breads = ['imgurl' => '', 'name' => 'fghfg','type' => 'sdf', 'rating' => 1, 'desc' => ''];
        $actual = validateUsrInput($breads);
        $this->assertSame($actual, $exspected);
    }
    function testValidateUserInput_failEmptyAll() {
        $exspected = false;
        $breads = ['imgurl' => '', 'name' => '','type' => '', 'rating' => "", 'desc' => ''];
        $actual = validateUsrInput($breads);
        $this->assertSame($actual, $exspected);
    }
}