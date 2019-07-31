<?php
namespace View\Back\Asso_donation;

/**
*
*/

class Asso_donation {

    function render($param)
    {
        require_once(__DIR__.'/../Head.php');//flag

        $asso_donation  = '';
        $asso_donation .= '<div class="container-fluid" style="padding-left:0px;">';
        $asso_donation .= '<form class="content" method="post">';

        $asso_donation .= '<div class=" container-fluid " >'.$param['add_don']['box_donation'].'</div>';


        $asso_donation .= '<div class=" container-fluid " >'.$param['last_donation'].'</div>';

        $asso_donation .= '</div>';
        $asso_donation .= '</div>';
        $asso_donation .= '</form>';
        $asso_donation .= '</div>';

        echo $asso_donation;

    require_once( __DIR__ .'/../Footer.php');

    }

    function update($param){

        require_once(__DIR__.'/../Head.php');//flag

        $asso_donation  = '';
        $asso_donation .= '<div class="container-fluid" style="padding-left:0px;">';
        $asso_donation .= '<form class="content" method="post">';

        $asso_donation .= '<div class=" container-fluid " >'.$param['add_don']['box_donation'].'</div>';

        $asso_donation .= '</div>';
        $asso_donation .= '</div>';
        $asso_donation .= '</form>';
        $asso_donation .= '</div>';

        echo $asso_donation;

    require_once( __DIR__ .'/../Footer.php');

    }

    function render_add($param){

        require_once(__DIR__.'/../Head.php');//flag

        $asso_donation  = '';
        $asso_donation .= '<div class="container-fluid" style="padding-left:0px;">';
        $asso_donation .= '<form class="content" method="POST">';
        $asso_donation .= '<div class=" container-fluid " >'.$param['box_donation'].'</div>';
        $asso_donation .= '<div class=" container-fluid " >'.$param['last_donation'].'</div>';

        $asso_donation .= '</div>';
        $asso_donation .= '</div>';

        $asso_donation .= '</form>';

        $asso_donation .= '</div>';

        echo $asso_donation;

    require_once( __DIR__ .'/../Footer.php');

    echo '

    <script src="/Js/Back/Create_user.js"></script>
    <script src="/Js/Back/Create_paw.js"></script>

    ';

}

}
