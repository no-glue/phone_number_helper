<?php
class Phone {
  protected $instance;
  protected $phone;

  public function __construct($instance, $phone) {
    $this->instance = $instance;
    $this->phone = $this->instance->parse($phone, "AD", null, true);
  }
  public function setInstance($intance) {
    $this->intance = $intance;
  }
  public function getInstance() {
    return $this->instance;
  }
  public function setPhone($phone) {
    $this->phone = $phone;
  }
  public function getPhone() {
    return $this->phone;
  }
  public function getRegion() {
    return $this->instance->getRegionCodeForNumber($this->phone);
  }
  public function getCode() {
    return $this->phone->getCountryCode();
  }
  public function getNationalNumber() {
    return $this->phone->getNationalNumber();
  }
  public function getType() {
    return ($this->instance->getNumberType($this->phone)) ? "mobile" : "other";
  }
  public function convert() {
  }
};
