Traffic Light Simulation:
<?php
$color ="Red";//Assuming the color of the traffic lights

if($color == "Green") {
    echo "Green - Go";
} elseif($color == "Yellow") {
    echo "Yellow -Slow Down";
} elseif ($color == "Red") {
    echo "Red - Stop";
} else {
    echo "Invalid Color";
}
?>