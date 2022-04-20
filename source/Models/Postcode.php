<?php


namespace Source\Models;


use Source\Core\Model;

class Postcode extends Model
{
    public function __construct()
    {
        parent::__construct('postcode', ['id'], ['postcode']);
    }
}