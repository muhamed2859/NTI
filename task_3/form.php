<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
  
<?php 
if(isset($_SESSION['errors'])){
    foreach($_SESSION['errors'] as $error){
        echo "<p style='color: red;'>$error</p> ";
        unset($_SESSION['errors']);
    }
}

?>


    <form action="./handle.php" method="post" class="w-75 m-auto my-5">
    <div class="form-group ">
   <label >price:</label>
    <input name="price" type="text" >

     <br>
       <div class="form-group ">
     <label >count:</label>
    <input name="count" type="text" >
    </div>
     <button type="submit" name="submit" class="btn btn-primary">Calck</button>

   
    </form>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>