<?php

  include 'conn.php';

  if(isset($_POST['done'])){

  $id = $_GET['id'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $q = " update curdyoutube set id=$id, username='$username', password='$password' where id=$id";

  $query = mysqli_query($con,$q);

  header('location:display.php');
 }

 $showq = "select * from curdyoutube";
 $query = mysqli_query($con, $showq);
 while($res = mysqli_fetch_array($query)){
    $userid = $res['id'];
    $username = $res['username'];
    $password = $res['password'];
 }
 
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

  <label> Username: </label>
 <input type="text" name="username" class="form-control" value="<?php echo $username ?>"> <br>

  <label> Password: </label>
 <input type="text" name="password" class="form-control" value="<?php echo $password ?>"> <br>

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>
</body>
</html>