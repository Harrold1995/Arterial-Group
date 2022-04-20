<?php


namespace Source\Models;


use Source\Core\Model;

/**
 * Class Representative
 * @package Source\Models
 */
class Representative extends Model
{

    /**
     * Representative constructor.
     */
    public function __construct()
    {
        parent::__construct('representative', ['id'], ['representative','email']);
    }


    /**
     * Find email from the name
     * @param $representativeName
     * @return array|mixed|Model|null
     */
    public function findEmailByName($representativeName)
    {
        return $this->find('representative = :r', "r={$representativeName}")->fetch()->email;

    }


    public function findNameByEmail($mail)
    {
        return $this->find('email = :r', "r={$mail}")->fetch();
    }

}