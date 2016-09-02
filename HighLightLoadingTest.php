<?php
    class HighLightLoadingTest extends PHPUnit_Framework_TestCase
    {
        public function testLoadHighlightGood()
        {
            $test = new HighlightGood;
            $this->assertTrue($test->getTrue());
        }
        public function testLoadHighlightBad()
        {
            $test = new HighlightBad;
            $this->assertTrue($test->getTrue());
        }
    }
