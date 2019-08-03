<?php

/* classe permettant de gérer les dons*/

namespace Controller\Back;

class Asso_donation
{
    /** méthode d'appel pour l'ajout d'un don **/

    function add () {

        /* instanciation de la connexion a la bdd */

        $bdd = new \Manager\Connexion();
        $bdd = $bdd->getBdd();


        /* verification de la présence des données d'entrée et appel de la methode d'ajout du manager */


        if ( isset($_POST['donation_mnt']) &&  $_POST['donation_mnt'] > 0 )
        {

            $check_don_mnt = (new \Manager\Asso_donation($bdd))->get_mnt_donation_current_year_post();

            if ( ($check_don_mnt[1] - $_POST['donation_mnt']) >= 0) {

                (new \Manager\Asso_donation($bdd))->add();

            }

            else {

                echo '<script>alert("Le don peut etre de '.$check_don_mnt[1].' € maximum");</script>';
            }


        }

        /* instanciation du composant Box_add */

        (new \Controller\Back\Component\Asso_donation\Box_add)->render();

    }

    /** méthode d'appel pour la suppression d'un don **/

    function delete()

    {

        /* instanciation de la connexion a la bdd */

        $bdd = new \Manager\Connexion();
        $bdd = $bdd->getBdd();

        /* lancement du traitemetn de suppression */

            (new \Manager\Asso_donation($bdd))->delete($_GET['don_id']);

    }

    /** méthode d'appel pour la MAJ d'un don **/

    function update()

    {
        $p_render = [
            "add_don"=>(new \Controller\Back\Component\Asso_donation\Asso_donation)->update()
        ];

        return (new \View\Back\Asso_donation\Asso_donation)->render_update($p_render);

    }

    /** méthode d'appel pour la liste des dons **/

    function get_list()

    {
        $p_render = (new \Controller\Back\Component\Asso_donation\Table_list_donation)->render();

        /* passage des param à la vue et instanciation de cette derniere */

        return (new \View\Back\Table\Table_filter)->render($p_render);

    }





}
