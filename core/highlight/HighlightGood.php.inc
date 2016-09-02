<?php
    class HighlightGood extends Highlight
    {
        public function __construct()
        {
            $this->highlight = 'good';
        }

        public function getTrue()
        {
            return true;
        }

        public function getFalse()
        {
            return false;
        }
    }
