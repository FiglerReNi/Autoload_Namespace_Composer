<?php

include "src\animal1\sub\Cat.php";
include "src\animal1\sub\Dog.php";
include "src\animal2\sub\Dog.php";

//namespace + use
//A
use animal1\sub\Cat;
use animal1\sub\Dog as dog1;
use animal2\sub\Dog as dog2;
$dog1 = new dog1();
$dog2 = new dog2();
$cat = new Cat();
$dog1->teszt1();
$dog2->teszt2();
$cat->teszt3();
////B
//use animal1\sub;
//$dog1 = new sub\Dog();
//$cat = new sub\Cat();

////namespace
//$dog1 = new \animal1\sub\Dog();
//$dog2 = new \animal2\sub\Dog();
//$cat = new \animal1\sub\Cat();
//$dog1->teszt1();
//$dog2->teszt2();
//$cat->teszt3();


////namespace nélkül
//$dog1 = new Dog();
//$dog2 = new Dog();
//$cat = new Cat();
//$dog1->teszt1();
////hibás
//$dog1->teszt2();
//$dog2->teszt2();
////hibás
//$dog2->teszt1();
//$cat->teszt3();














