<?php
    class HighlightBad extends Highlight
    {
        public function __construct()
        {
            $this->highlight = 'bad';
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
