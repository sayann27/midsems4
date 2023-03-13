<?php

//Arrays can be declared using array(values) in a variable;

$names = array("Sayan", "Harshit", "Sanskar", "Subroto");
echo "THE ROOMMATES ARE:<br>";
$i;
//using normal for loops
for($i = 0; $i < sizeof($names); $i++){
    echo $names[$i]."<br>";
}


//foreach loops can only be used with arrays and objects. It makes the process of array traversal much easier as compared to normal for loops
echo "<br>FLATMATES ARE:<br>";
foreach($names as $element){
    echo "$element<br>";
}


//MULTIDIMENSIONAL ARRAYS
echo "<br>";
$employees = array(
    array("id"=>101, "name"=>"Sayan", "salary"=>100000),
    array("id"=>102, "name"=>"Subroto", "salary"=>110000),
    array("id"=>103, "name"=>"Harshit", "salary"=>90000),
    array("id"=>104, "name"=>"Sanskar", "salary"=>130000),
);
//inside the parent array there are multiple associative arrays

//instead of foreach loop we can also use traditional for loop but this method reduces code
foreach($employees as $elements){ //first all subarrays are stored as $elements
    foreach($elements as $key=>$value){ //$elements array is traversed as $key and $value
        echo $key.": ".$value;
        echo "<br>";
    }
    echo "<br><br>";
}

?>