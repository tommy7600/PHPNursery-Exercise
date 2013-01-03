<?php

class Helper
{
    public static function generateInput($name, $value, $placeholder, $error)
    {
        $field = '<input class="input-xlarge" type="text" name="' . $name . '" value="' . $value . '" placeholder="' . $placeholder . '">';
                
        return self::generateField($field, $error);
    }
        
    public static function generateTextarea($name, $value, $error)
    {
        $field = '<textarea class="input-xlarge" rows="10" name="' . $name . '">' . $value . '</textarea>';
        
        return self::generateField($field, $error);
    }
    
    private static function generateField($field, $error)
    {
        $output = '<div class="control-group' . ($error ? ' error' : '') . '">';
        
        $output .= $field;

        if ($error)
        {
            $output .= '<span class="help-inline">' . $error . '</span>';
        }

        $output .= '</div>';
        
        return $output;
    }
}