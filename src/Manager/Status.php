<?php
namespace Manager;

/**
 * Ile manager
 *
 * @author blaison damien
 */
class Status
{

    /**
     * Retourne toutes les langues
     *
     * @return array(\Model\Status)
     */

     public function getAll()
     {
         include( __DIR__ .'/../../config/config.php');

         return $config['status'];
     }
}
