<?php
    class Player {
        //FIELDS
        private $currentScore = null;
        private $firstName;
        private $lastName;
        
        // PROPERTIES
        // GETTERS
        public function GetScore(){
            return $this->currentScore;
        }
        
        // CONSTRUCTOR
        public function __construct($_firstName, $_lastName){
            $this->firstName = $_firstName;
            $this->lastName = $_lastName;
            $this->currentScore = new Score;
        }
        
        // DESTRUCTOR
        public function __destruct() {
            echo 'FirstName: '.$this->firstName.'<br>';
            echo 'LastName: '.$this->lastName.'<br>';
        }
        
        // METHODS
        public function UpdateScore($_points){
            $this->currentScore->SetPoint($_points);
        }
        
    }