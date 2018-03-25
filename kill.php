<?php
$result = mysqli_query("SHOW processlist");
while ($myrow = mysqli_fetch_assoc($result)) {
if ($myrow['Command'] == "Sleep") {
mysqli_query("KILL {$myrow['Id']}");}
}
