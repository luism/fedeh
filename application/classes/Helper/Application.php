<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 */
class Helper_Application {

    public static function breadcrumbs($values='')
    {
        if (is_array($values))
        {
            ?><ol class="breadcrumb"><?php   
            
            foreach ($values as $value)
            {
                $active = '';
                $controller = $value;
                if (is_array($value))
                {
                    $controller = $value[0];
                    $active = ($value[1] === 'active' ? 'class="active"' : $active);
                }
                ?>
                <li <?php echo $active ?>><?php echo $controller ?></li>
                <?php   
            }

            ?></ol><?php   
        }
    }
}