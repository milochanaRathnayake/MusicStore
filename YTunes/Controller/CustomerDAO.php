<?php

namespace  Controller;
use DataBase\DataBase;

class CustomerDAO implements DAO{
    
    private $connection;
    
    public function __construct() {
        return $this->connection = DataBase::getConnection();
    }
    
    public function getAll()
    {}

    public function getById($Id)
    {
        //TODO implement when needed
        return false;
    }

    public function getByName($name)
    {
        //TODO implement when needed
        return false;
    }

    public function save()
    {
        //TODO implement when needed
        return false;
    }

    public function update()
    {
        //TODO implement when needed
        return false;
    }

    public function delete()
    {
        //TODO implement when needed
        return false;
    }

    
}