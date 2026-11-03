<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

    $errors =[];
$price = $_POST['price'];
$count =  $_POST['count'];


if(empty($price) ){
        $errors[] = "plz enter the value price";
}
elseif(!is_numeric($price) ){
        $errors[] = "plz enter the price";
}
elseif($price < 0 ){
        $errors[] = "plz enter positive price";
}

if( empty ($count)){
         $errors[] = "plz enter the value count";
}elseif( !is_numeric($count)){
      $errors[] = "plz enter the count";
}elseif( $count < 0){
        $errors[] = "plz enter positive count";

}
if($errors){
        $_SESSION['errors'] = $errors;
        header("location:form.php");
        exit();
    }
    else{
        $totalBefore = $price * $count;
        $discount = ($totalBefore < 1000)? 0.10 : 0.15;
        $discountAmount = $totalBefore * $discount;
        $totalAfter = $totalBefore - $discountAmount;
        echo "before : " . $totalBefore  ."<br>";
        echo "count discount : " . $discountAmount . "<br>";
        echo "after : " . $totalAfter . "<br>";
    }


    
?>
<a href="./form.php">return back</a>



