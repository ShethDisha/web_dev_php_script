<?php
$city=array("mumbai","goa","rajkot","beirut","bangalor");

rsort($city);

foreach($city as $city)
{
  print_r($city);
  echo "<br>";
}

?>