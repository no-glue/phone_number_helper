<?php
class Phone {
  protected $instance;
  protected $phone;

  public function __construct($instance, $phone) {
    $this->instance = $instance;
    $this->phone = $phone;
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
  public function getRegionCode() {
    return $this->instance->getRegionCodeForNumber($this->phone);
  }
  public function convert() {
  }
};
