Fitness App:
<?php
function determineFitnessLevel($steps) {
    if ($steps < 5000) {
        return "Beginner";
    } elseif ($steps >= 5000 && $steps <= 10000) {
        return "Inetrmediate";
    } else {
        return "Advanced";
    }
}

//Example Usage:-
$steps 7500;
$fitnessLevel = determineFitnessLevel($steps);
echo "Fitness Leve: ".$fitnessLevel;
?>