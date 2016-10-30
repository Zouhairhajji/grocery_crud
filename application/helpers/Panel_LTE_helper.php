
<?php 


if ( ! function_exists('_print_errors'))
{   
    /**
     * @param string $errors  Liste qui contient tous les erreurs
     */
    function _print_errors($errors)
    {
        return _show_panel('danger', 'ban', $errors);
    }
}


if ( ! function_exists('_show_panel'))
{   
    /**
     * @param string $type_panel  (danger, info, warning, success) 
     * @param string $icon  (check, warning, info, ban) 
     * @param string $message  message à afficher dans le panel
     */
    function _show_panel($type_panel, $icon, $message)
    {
        $script = '<div class="alert alert-'.$type_panel.' alert-dismissible">'."\n";
        $script .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'."\n";
        $script .= '<h4><i class="icon fa fa-'.$icon.'"></i> Alert!</h4>'."\n";
        $script .= $message;
        $script .= '</div>' ."\n";
        return $script;
    }
}








function div_open($class = NULL, $id = NULL)
{
    $code   = '<div ';
    $code   .= ( $class != NULL )   ? 'class="'. $class .'" '   : '';
    $code   .= ( $id != NULL )      ? 'id="'. $id .'" '         : '';
    $code   .= '>';
    return $code;
}

function div_close()
{
    return '</div>';
}



?>
