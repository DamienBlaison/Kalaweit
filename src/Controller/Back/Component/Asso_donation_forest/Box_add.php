<?php
namespace Controller\Back\Component\Asso_donation_forest;

/** classe permettant de creer un don et de l'injecter en bdd **/

/**
*
*/
class Box_add

{
    public function render(){

        /* instanciation connexion à la bdd */

        $bdd = new \Manager\Connexion();
        $bdd = $bdd->getBdd();
        $status_config = (new \Manager\Status)->getAll($bdd);

        /* initialisation de la variable $cli_id */

        if( isset($_GET["cli_id"] ) ){ $cli_id = $_GET["cli_id"]; } else { $cli_id ='';}

        /* creation des composant html */

        $payment_type = (new \Manager\Asso_payment_type)->getAll($bdd);
        $cli = (new \Manager\Member($bdd))->get_select();

        $donation_forest_mnt = (new \Controller\Back\htmlElement\Form_group_input('donation_forest_mnt','montant du don','','fa fa-euro'));
        $devise  = (new \Controller\Back\htmlElement\Form_group_select('ptyp_id',$payment_type,'','fa fa-internet-explorer',"ptyp_code"));
        $donator = (new \Controller\Back\htmlElement\Form_group_select('cli_id',$cli,$cli_id,'fa fa-user',"cli_identity" ));
        $status =  (new \Controller\Back\htmlElement\Form_group_select('don_status',$status_config,'','fa fa-check',"config" ));
        $look = (new \Controller\Back\htmlElement\Form_group_input_span('search_member','fa fa-search'));


        $submit  = '';
        $submit .=                      '<div class="form-group">';
        $submit .=                          '<!--<label style="color:white;" for="submit"> test</label>-->';
        $submit .=                          '<button id="submit" type="submit" class="form-control btn btn-primary"><i class="fa fa-save"></i></button>';
        $submit .=                      '</div>';

        /* tableau des différentes composants à passer à la vue */

        $box_donation_forest_content = [
            $donator->render(),
            $look->render(),
            $donation_forest_mnt->render(),
            $devise->render(),
            $status->render(),
            $submit
        ];
        /* mise en forme des éléments à passer */

        $col_md = [11,1,12,12,12,12];

        /* instanciation des composants BOX dans lequel les details des dons seront affichés */

        $box_donation_forest = (new \Controller\Back\htmlElement\Box('Ajouter un don Foret','box-primary',$box_donation_forest_content,$col_md))->render();


        $box_last_donation_forest = (new \Controller\Back\Component\Asso_donation_forest\Table_last_donation_forest)->render();

        /* passage des composants de la vue */

        $param = [
            "box_donation_forest"=> $box_donation_forest,
            "last_donation_forest" => $box_last_donation_forest

        ];

        return (new \View\Back\Asso_donation_forest\Asso_donation_forest)->render_add($param);
    }
}
