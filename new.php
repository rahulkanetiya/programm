<?php
$Event_name = readline("Enter event name : ");
$First_name = readline("Enter your first name : ");
$Last_name = readline("Enter your last name : ").PHP_EOL;
$Number_of_guest = readline("Enter the number of guest : ").PHP_EOL;
$Number_of_minute = readline("Enter the number of minute : ").PHP_EOL;
echo ("YOUR NAME IS $First_name $Last_name");
$CostPerHour = 18.50;
$CostPerMinute = 0.40;
$CostOfDinner = 20.70;
$server = ceil($Number_of_guest/20);
$cost1 = ($Number_of_minute/60) * $CostPerHour;
$cost2 = ($Number_of_minute%60) * $CostPerMinute;
$Total = $cost1 + $cost2;
echo $Total;
$Food_cost = $Number_of_guest * $CostOfDinner;
$Avrg_cost = $Food_cost / $Number_of_guest;
$Total_estimate = $Food_cost + ($Total * $server);
echo ("Your estimation is : $Total_estimate");
?>