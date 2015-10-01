<?php
//lol was playing a game of hearthstone
//xmas tree paladin vs mage
//computer lagged out and my turn 7 was skipped
//still won
//deck op af lol

function cleanData($mydata, $mydata2)
{
    $abc = "";
    //$name = "Frank";
    $name = strtolower($mydata);
    $name2 = strtoupper($mydata2);
    $name3 = $name." ".$name2;
    //return $name;
    return $name3;
}

$x = cleanData("FRANK", "jones");
//echo "X is ".$x;
echo "<h1>X is ".$x."</h1>".$name;

function addSomeData($datax)
{
    $temp = $datax." XXXXX ";
    return $temp;
}

function callMe($num)
{
    echo "Running Call Me<br>";
    callMe(1);
}

//callMe(1); //recursive obv
?>