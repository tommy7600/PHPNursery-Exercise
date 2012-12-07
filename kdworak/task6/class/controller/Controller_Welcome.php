<?php
    class Controller_Welcome extends Controller_Base
    {
        // constructor.
        public function __construct(Request $request, Response $response) {
            parent::__construct($request, $response);
        }
        
        public function Action_Welcome()
        {
            $view = new CustomView('Welcome'); 
            $view->render();
        }

    }