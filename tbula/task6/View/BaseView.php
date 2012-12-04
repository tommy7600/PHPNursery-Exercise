<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author tbula
 */
class View_BaseView
{
    private $fileName;
    private $viewData;
    
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        $this->viewData = array();
    }
    
    public function Render()
    {
        return $this->capture();
    }
    
    public function SetVariable($key, $value)
    {
        if (is_array($key))
        {
            foreach ($key as $name => $value)
            {
                    $this->viewData[$name] = $value;
            }
        }
        else
        {
            $this->viewData[$key] = $value;
        }
    }
    
    private function capture()
    {
//        // Import the view variables to local namespace
//        extract($viewData, EXTR_SKIP);
//
        if ($this->viewData)
        {
                // Import the global view variables to local namespace
                extract($this->viewData, EXTR_SKIP | EXTR_REFS);
        }

        // Capture the view output
        ob_start();

        try
        {
                // Load the view within the current scope
                include $this->fileName;
        }
        catch (Exception $e)
        {
                // Delete the output buffer
                ob_end_clean();

                // Re-throw the exception
                throw $e;
        }

        // Get the captured output and close the buffer
        return ob_get_clean();
    }
}

?>
