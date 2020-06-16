<?php
namespace Domain;

class Customer
{
    private $customer_id;
    private $name;
    private $email;
    private $contact;
    private $password;
    private $user_role_id;
    private $customer_type_id;
    
    public function __construct($customer_id = null, $name = null, $email = null, $contact = null, $user_roll_id = null , $customer_type_id = null){
        $this->customer_id = $customer_id;
        $this->name = $name;
        $this->email = $email;
        $this->contact = $contact;
        $this->user_role_id = $user_roll_id;
        $this->customer_type_id = $customer_type_id;
    }
    
    
    /**
     * @return string
     */
    public function getCustomer_id()
    {
        return $this->customer_id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getUser_role_id()
    {
        return $this->user_role_id;
    }

    /**
     * @return string
     */
    public function getCustomer_type_id()
    {
        return $this->customer_type_id;
    }    
}

