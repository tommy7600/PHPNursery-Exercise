<?php
    class ArticleCollection {
        //FIELDS
        private $collection;
        
        // PROPERTIES
        public function GetCollection(){
            return $this->collection;
        }
        
        // CONSTRUCTOR
        public function __construct() {
            $this->collection = array();
        }
        
        // METHODS
        public function AddArticle(Article $_article){
            array_push($this->collection, $_article);
        }
        
        public function RemoveArticleById($_id){
            foreach($this->collection as $key => $val){
                if($val->GetId() == $_id){
                    unset($this->collection[$key]);
                    break;
                }
            }
        }
        
        public function ShowAll(){
            foreach($this->collection as $key => $val){
                echo 'id:' . $val->GetId() . '<br>';
                echo 'title:' . $val->GetTitle() . '<br>';
                echo 'content:' . $val->GetContent() . '<br>';
                echo 'author:' . $val->GetAuthor() . '<br>';
                echo 'created date:' . $val->GetCreatedDate() . '<br>';
                echo 'visibility:' . $val->GetVisibility() . '<br>';
                echo '-----------------------<br>';
            }
        }
        
    }