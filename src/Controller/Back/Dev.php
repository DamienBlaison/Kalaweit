<?php
namespace Controller\Back;

class Dev {

    function test_donation(){

        $year = 2018;

        $bdd = (new \Manager\Connexion())->getBdd();

        $ids = [];
        $causes = [];
        $status = ['OK','WAIT'];

        $members_infos = (new \Manager\Member($bdd))->get_all_id();
        $causes_infos = (new \Manager\Asso_cause($bdd))->get_all_id();

        foreach ($members_infos as $key => $value) {
            $ids []= $value[0];

        }

        foreach ($causes_infos as $key => $value) {
            $causes []= $value[0];
        }

        for ($i=0; $i < 500; $i++) {

            $key_id = array_rand($ids);
            $key_cause = array_rand($causes);
            $key_status = array_rand($status);

            $mnt = rand(0,150);

            $don_id = (new \Manager\Asso_donation($bdd))->add_random($ids[$key_id],$causes[$key_cause],$mnt,$status[$key_status],$year);


            if($key_status == 'OK'){

                (new \Manager\Receipt($bdd))->(add(["type" => 'donation', "don_id" => $don_id]){)
            }

        }

        /// for ($i=0; $i < 100; $i++) {
        ///
        ///    $key_id = array_rand($ids);
        ///   $key_status = array_rand($status);
        ///   $mnt = rand(0,150);

        ///    (new \Manager\Asso_donation($bdd))->add_random($ids[$key_id],700,$mnt,$status[$key_status],$year);

        ///}

        ///for ($i=0; $i < 100; $i++) {

            ///$key_id = array_rand($ids);
            ///$key_status = array_rand($status);
            ///$mnt = rand(0,150);

            ///(new \Manager\Asso_donation($bdd))->add_random($ids[$key_id],703,$mnt,$status[$key_status],$year);

        ///}

        ///for ($i=0; $i < 100; $i++) {

            ///$key_id = array_rand($ids);
            ///$key_status = array_rand($status);
            ///$mnt = rand(0,150);

            ///(new \Manager\Asso_donation($bdd))->add_random($ids[$key_id],704,$mnt,$status[$key_status],$year);

        ///}





    }
}
