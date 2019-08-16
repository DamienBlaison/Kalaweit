<?php
namespace Manager;

/**
 * Ile manager
 *
 * @author blaison damien
 */
class Specie
{

    /**
     * Retourne toutes les especes
     *
     * @return array(\Model\Specie)
     */


     public function getAll()
     {

         include( __DIR__ .'/../../config/config.php');

         return $config['especes'];

     }
}
