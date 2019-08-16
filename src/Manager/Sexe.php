<?php  namespace Manager;

/**
 * Ile manager
 *
 * @author blaison damien
 */
class Sexe
{

    /**
     * Retourne toutes les îles
     *
     * @return array(\Model\Sexe)
     */
    public function getAll()
    {
        include( __DIR__ .'/../../config/config.php');

        return $config['sexe'];
    }
}
