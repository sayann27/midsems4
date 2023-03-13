<?php
//in associative arrays, instead of an index value, we give names to different values of the array

$names = array("First"=>"Sayan", "Second"=>"Subroto");
echo $names["Second"];

//this foreach loop will only print the elements and not the keys
echo "<br>";
foreach($names as $elements){
    echo "$elements<br>";
}

$employee = array(
    "name"=>"Sayan",
    "age"=>19,
    "salary"=>100000,
    "designation"=>"SDE"
);
echo "<br>";
foreach($employee as $key=>$element){
    echo $key.": ".$element;
    echo"<br>";
}
?>