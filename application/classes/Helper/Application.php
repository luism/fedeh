<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 */
class Helper_Application {

    public static function breadcrumbs($values='')
    {
        $html = '';
        if (is_array($values))
        {
            $html = "<ol class=\"breadcrumb\">\n";   
            foreach ($values as $value)
            {
                $active = '';
                $controller = $value;
                if (is_array($value))
                {
                    $controller = $value[0];
                    $active = ($value[1] === 'active' ? ' class="active" ' : $active);
                }
                $html .= "\t<li$active>$controller</li>\n";
            }
            $html .= "</ol>";
        }
        return $html;
    }
}