<?php
    class Article {
        // FIELDS
        private $id;
        private $title;
        private $content;
        private $author;
        private $createdDate;
        private $visibility;
        
        // PROPERTIES

        // <editor-fold defaultstate="collapsed" desc="GETTERS">
        public function GetId(){
            return $this->id; 
        }
        
        public function GetTitle(){
            return $this->title; 
        }
        
        public function GetContent(){
            return $this->content; 
        }
        
        public function GetAuthor(){
            return $this->author; 
        }
        
        public function GetCreatedDate(){
            return $this->createdDate; 
        }
        
        public function GetVisibility(){
            return $this->visibility; 
        }
        // </editor-fold>
        
        // <editor-fold defaultstate="collapsed" desc="SETTERS">
        
        public function SetId($value){
            $this->id = $value;
            return $this;
        }
        
        public function SetTitle($value){
            $this->title = $value;
            return $this;
        }
        
        public function SetContent($value){
            $this->content = $value;
            return $this;
        }
        
        public function SetAuthor($value){
            $this->author = $value;
            return $this;
        }
        
        public function SetCreatedDate($value){
            $this->createdDate = $value;
            return $this;
        }
        
        public function SetVisibility($value){
            $this->visibility = $value;
            return $this;
        }
        
        // </editor-fold>
        
        // CONSTRUCTOR
        public function __construct() {
            
        }
        
    }
