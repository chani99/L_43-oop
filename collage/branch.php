<?php
class branch {
    private $address;
    private $city;
    private $phone;

    public function __construct($address, $city, $phone) {
        $this->address = $address;
        $this->city = $city;
        $this->phone = $phone;

    }

    public function getaddress() {
        return $this->getaddress;
    }
    public function getCity() {
        return $this->city;
    }
    public function getPhone() {
        return $this->phone;
    }
}


