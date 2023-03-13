<?php

/*
There are two ways to define constants in PHP
1. define() method 
2. const keyword
*/

//define method uses the first argument as constant name and the second as constant value. 
//earlier there was a third argument which was used to specify case sensitive or not. 
define("MESSAGE", "Hello christites");
//declaring case sensitive constants has been deprecated in php since php7.3
echo MESSAGE;
//echo "<br>".message; //it won't print this as now all the php constants are case sensitive 

//const keyword
const HELLO = "Hello Bhosdiwaalon";
echo "<br>".HELLO;


?>