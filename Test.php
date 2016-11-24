<?php
	echo "TESTING..";
	class Test extends PHPUnit_Framework_TestCase{
    
    public function testCalculate()
    	{
        	$this->assertEquals(2, 1 + 1);
    	}
	}
?>