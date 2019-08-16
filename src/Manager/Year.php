<?php  namespace Manager;

/**
 * Ile manager
 *
 * @author blaison damien
 */
class Year
{

    /**
     * Retourne toutes les îles
     *
     * @return array(\Model\Year)
     */
    public function getAll()
    {
        include( __DIR__ .'/../../config/config.php');

        return $config['year'];
    }
}
