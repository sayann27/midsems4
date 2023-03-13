<?php

$name = "Sayan";
$age = 19;
function name_age(){
    global $name;
    global $age; //this is how to use global variables
    echo "His name is ".$name." and he is ".$age." years old";
    //using . operator to concat multiple strings together

}

function static_rep(){
    static $num1 = 16;
    $num2 = 10;
    $num1++;
    $num2++;
    echo "<br>Static: ".$num1."<br>";
    echo "<br>Non-Static: ".$num2."<br>";
}
name_age();

static_rep(); //first call
static_rep(); //second call
// for static variables, the value is shared amongst all the instances, so if the function is called again, the variable is not treated as a local variable value. 
// incase of non static, since its not shared, num2 for first call and num2 for second call are two distinct local variables, so both will give same value after incrementing. 


?>