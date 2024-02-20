<!-- Q5.Scenario: Suppose you are developing a website for 
an online store. The store offers a discount on orders over 
Rs. 
1000. Write 
a piece of PHP code using conditional control structures 
to 
check if the total order amount qualifies for the discount 
and display an appropriate message to the user.  -->

<?php
$orderAmount = 1200; //Example order amount

if ($orderAmount > 1000) {
    echo "Congratulatins! You qualify for a Discount.";
}else {
    echo"YOu nees to spend more to qualify for the discount."; 
}
?>    