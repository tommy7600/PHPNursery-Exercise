<?php
    class Controller_Gallery extends Controller_Base
    {     
        public function __construct(Request $request, Response $response) {
            parent::__construct($request, $response);
        }
        
        public function Action_Show()
        {
            $view = new CustomView('Gallery'); 
            $view->render();
        }
    }