<?php
require "phone.php";
require __DIR__."/vendor/autoload.php";

$phone = new Phone(\libphonenumber\PhoneNumberUtil::getInstance(), $argv[1]);
echo "region ".$phone->getRegion()."\n";
echo "code ".$phone->getCode()."\n";
echo "national number ".$phone->getNationalNumber()."\n";
echo "type ".$phone->getType()."\n";
echo "to string ".$phone->toString()."\n";
