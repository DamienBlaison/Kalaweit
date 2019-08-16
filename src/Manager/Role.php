<?php
namespace Manager;

/**
 * Ile manager
 *
 * @author blaison damien
 */
class Role
{

    /**
     * Retourne toutes les langues
     *
     * @return array(\Model\Role)
     */

     public function getAll()
     {

        include( __DIR__ .'/../../config/config.php');

        return $config['role'];

     }
}
