<?php 
include 'connect.php';

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $emailaddress=$_POST['emailaddress'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql = "INSERT INTO crud(name,emailaddress,mobile,password) 
     VALUES ('$name','$emailaddress','$mobile','$password')";
  $result = $conn->query($sql);
    if ($result== TRUE) {
        header('location:display.php');
    }else {
        echo "Error:". $sql . "<br>". $conn->error;
    }
 $conn->close(); 
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <form  action="" method="POST">
            <div class="form=group mb-3">
                <label >name</label>
                <input type="text" class="form-control" placeholder="Enter your name"  name="name"  required>
            </div>
            <div class="form=group mb-3">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="emailaddress"  required>
            </div>
            <div class="form=group mb-3">
                <label>mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile"  name="mobile"  required>
            </div>
            <div class="form=group mb-3">
                <label >Password</label>
                <input type="password" class="form-control"  placeholder="Enter your password" name="password"  required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>