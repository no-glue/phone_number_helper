<?php
require "phone.php";
require __DIR__."/vendor/autoload.php";

$phone = new Phone(\libphonenumber\PhoneNumberUtil::getInstance(), $argv[1]);
$numberOne = "+38640123456";
echo "region ".$phone->getRegion()."\n";
echo "code ".$phone->getCode()."\n";
echo "national number ".$phone->getNationalNumber()."\n";
echo "type ".$phone->getType()."\n";
echo "to string ".$phone->toString()."\n";
