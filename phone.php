<?php
namespace Phone;

class Phone {
  protected $instance;
  protected $number;

  public function __construct($instance, $number = null) {
    $this->instance = $instance;
    if($number) {
      $this->number = $this->instance->parse($number, "AD", null, true);
    }
  }
  public function setInstance($intance) {
    $this->intance = $intance;
  }
  public function getInstance() {
    return $this->instance;
  }
  public function setNumber($number) {
    $this->number = $this->instance->parse($number, "AD", null, true);
  }
  public function getNumber() {
    return $this->number;
  }
  public function getRegion() {
    return $this->instance->getRegionCodeForNumber($this->number);
  }
  public function getCode() {
    return $this->number->getCountryCode();
  }
  public function getNationalNumber() {
    return $this->number->getNationalNumber();
  }
  public function getType() {
    return ($this->instance->getNumberType($this->number)) ? "mobile" : "other";
  }
  public function toString() {
    return strtolower($this->getRegion()).".".$this->getType().", ".$this->getCode().", ".$this->getNationalNumber().", ".$this->getRegion();
  }
  public function call($call) {
    call_user_func_arraty(array($this, $call["method"]), $call["params"]);
  }
};
