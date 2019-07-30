<?php namespace View\Back\Users;


class Users
{

    function render(){

        $bdd = (new \Manager\Connexion())->getBdd();

        $p_name     = "Utilisateurs";
        $p_data     = (new \Manager\Users($bdd))->get_list();
        $p_id       = "Users_table";
        $p_link     = "";
        $p_update   = "/www/Kalaweit/Users/update?user_id=";
        $p_delete   = "/www/Kalaweit/Users/delete?user_id=";
        $p_add      = "/www/Kalaweit/Users/add";


        $table_user = (new \Controller\Back\htmlElement\Table($p_name,$p_data,$p_id,$p_link,$p_update,$p_delete,$p_add))->render();

        $fields =["name","actif"];
        $data = ["head" => "","table"=>[]];


        $table_user2 = (new \Controller\Back\htmlElement\Table_filter())->render($fields,$data);

        require_once( __DIR__ .'/../Head.php');

        ?>
        <div class="container-fluid">
            <div class="content">
                    <div class="container-fluid" style="padding-left:0px;">
                        <div class="row">

                            <?php echo $table_user ?>
                            <?php echo $table_user2 ?>

                        </div>
                    </div>
            </div>

        </div>

    <?php

        require_once( __DIR__ .'/../Footer.php');

    }
}
