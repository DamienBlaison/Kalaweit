<?php namespace Controller\Back;

/**
*
*/
class Maintenance
{
    function update(){

        $bdd = (new \Manager\Connexion())->getBdd();


        if(isset($_POST["delete_receipt"]) && $_POST['name_receipt'] != ''){

            $file = $_POST['name_receipt'];
            $folder = explode('_',$file);

            if (file_exists( __DIR__ .'/../../../Ged/Receipt/R_'.$folder[1].'/'.$file)){

                echo '<script> alert("Le fichier a bien été supprimé");</script>';

                (new \Manager\Receipt($bdd))->delete($file);

            } else {

                echo '<script> alert("Le fichier n\'existe pas");</script>';
            }

        };



        $delete_receipt = (new \Controller\Back\htmlElement\Form_group_input_submit(
            'name_receipt',
            'nom du reçu',
            '',
            '',
            'delete_receipt',
            'btn btn-danger w100',
            'Supprimer le reçu'

        ));

        $box_maintenance_content = [

            "delete_receipt" => $delete_receipt->render(),

        ];

        $box_maintenance = (new \Controller\Back\htmlElement\Box('Opérations de maintenance','box-primary',$box_maintenance_content,''));


        $param = [

            "box_maintenance" => $box_maintenance


        ];


        return (new \View\Back\Maintenance\Maintenance())->render($param);

    }

}
?>
