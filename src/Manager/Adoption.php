<?php  namespace Manager;

/**
 * Ile manager
 *
 * @author blaison damien
 */
class Adoption
{

    /**
     * Retourne toutes les îles
     *
     * @return array(\Model\Adoption)
     */
    public function getAll()
    {

        include( __DIR__ .'/../../config/config.php');

        return $config['adoption'];
    }
}
