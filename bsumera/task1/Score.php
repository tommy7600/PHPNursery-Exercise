<?php
            class Score
            {
                private $points;

                public function __construct()
                {
                        $this->points = 0;
                }

                public function add($points)
                {
                        $this->points += $points;
                }

                public function subtract($points)
                {
                        $this->points -= $points;
                }

                public function getPoints()
                {
                        return $this->points;
                }

                public function __destruct()
                {
                        return $this->points;
                }
            }
?>