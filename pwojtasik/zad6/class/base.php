<?php

class Base
{
    public static function initialize(Http_Request $request, Http_Response $response)
    {
        $url = $request->getUrl();

        $parts = explode('/', $url);

        $controller = isset($parts[1]) ? $parts[1] : 'welcome';

        $action = isset($parts[2]) ? $parts[2] : 'index';

        $request->controller($controller);
        $request->action($action);

        try
        {
          $class = new ReflectionClass('Controller_'.$controller);

          if ($class->isAbstract())
          {
            throw new Exception('Cannot create instances of abstract');
          }

          $controller = $class->newInstance($request, $response);
          $response   = $class->getMethod('action_'.$action)->invoke($controller);
          return $class->getMethod('after')->invoke($controller);
        }
        catch (Exception $e)
        {
          echo $e->getMessage();
        }
    }
}