<?php
namespace View\Back\Maintenance;

/**
 *
 */
class Maintenance
{
    function render($param){

        require_once(__DIR__.'/../Head.php');//flag

        $maintenance  = '';
        $maintenance  .= '<section class="content">';
        $maintenance  .= '<form name="member" action="" method="post" >';
        $maintenance  .= '<div class="container-fluid" style="padding-left:0px;">';

        $maintenance  .=  ($param["box_maintenance"])->render();

        $maintenance  .= '</div>';
        $maintenance  .= '</form>';

        $maintenance   .= '<form name="request" action="" method="post">';
        $maintenance  .= '<div class="container-fluid" style="padding-left:0px;">';

        $maintenance   .= ($param["box_request"])->render();

        $maintenance  .= '</div>';
        $maintenance   .= '</form>';

         $maintenance  .= ' <form enctype="multipart/form-data" action="/www/Kalaweit/maintenance/upload_config" method="post">
                                <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
                                    Transfère le fichier <input type="file" name="monfichier" />
                                <input type="submit" />
                            </form>';

        $maintenance  .= '</section>';

        echo $maintenance;

        require_once( __DIR__ .'/../Footer.php');

    }

}

 ?>
