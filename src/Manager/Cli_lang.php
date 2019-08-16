<?php
namespace Manager;

/**
 * Ile manager
 *
 * @author blaison damien
 */
class Cli_lang
{

    /**
     * Retourne toutes les langues
     *
     * @return array(\Model\Langue)
     */

     public function getAll()
     {

        include( __DIR__ .'/../../config/config.php');

        return $config['cli_lang'];

     }
}
