<?php
    class Controller_Contact extends Controller_Base
    {     
        public function __construct(Request $request, Response $response) {
            parent::__construct($request, $response);
        }
        
        public function Action_Contact()
        {
            $view = new CustomView('Contact'); 
            $view->render();
        }
    }