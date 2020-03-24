<?php
require('../functions.php');
use PHPUnit\Framework\TestCase;

class functionsTest extends TestCase {
    public function testloopbread_success() {
        $exspected = "<div class='listitem'><img src=something><h1>fghfg</h1><br> Rating: 1<br><br>Description:<br><br>sdhfkjkl<br></div>";
        $breads = [
          ['imgurl' => 'something', 'name' => 'fghfg', 'rating' => 1, 'desc' => 'sdhfkjkl']
        ];
        $actual = loopbread($breads);
        $this->assertequals($actual, $exspected);
    }

    public function testloopbread_fail() {
        $this->expectException(TypeError::class);
        loopbread(1);
    }
}