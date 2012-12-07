<?php
    class Controller_About extends Controller_Base
    {
        // constructor.
        public function __construct(Request $request, Response $response) {
            parent::__construct($request, $response);
        }
        
        public function Action_About()
        {
            $view = new CustomView('About'); 
            $view->render();
        }
        
    }