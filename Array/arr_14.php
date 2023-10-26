<?php
$person=array("name"=>"priya","age"=>20,"email"=>"priya@gmail.com");

$remove=array_pop($person);

    echo"removed array is :";
    print_r($remove);

    echo "<br>";
    print_r ($person);
?>
