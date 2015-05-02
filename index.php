<?php
require "phone.php";
require __DIR__."/vendor/autoload.php";

$phone = new \Phone\Phone(\libphonenumber\PhoneNumberUtil::getInstance());
$numberOne = "+38640123456";
$phone->setNumber($numberOne);
$str = $phone->toString();
assert($str == "si.mobile, 386, 40123456, SI", "slovenia number format");
$numberTwo = "+442081231234";
$phone->setNumber($numberTwo);
$str = $phone->toString();
assert($str == "gb.other, 44, 2081231234, GB", "gb number format");
$numberThree = "+41446681800";
$phone->setNumber($numberThree);
$str = $phone->toString();
assert($str == "ch.other, 41, 446681800, CH", "ch number format");
