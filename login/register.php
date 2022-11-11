<?php
session_start();
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'medcare');
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$name = substr($email, 0, 6);
if ($name == 'doctor') {
    $sql = "select * from doctorlogin where email='$email'";
} else {
    $sql = "select * from patientlogin where email='$email'";
}
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
if ($num == 1) {
    echo '<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
    
        $(document).ready(function() {
            swal({
                title: "Login failed",
                text: "User with given email id already exists",
                icon: "warning",
                button: "Ok",
                timer: 5000
            }).then(function(){
                window.location="index.php";
            });
        });
    </script>';
} else {
    if ($name == 'doctor') {
        $reg = "insert into doctorlogin values('$name','$email','$password')";
    } else {
        $reg = "insert into patientlogin values('$name','$email','$password','na')";
    }
    mysqli_query($con, $reg);
    echo '<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
    
        $(document).ready(function() {
            swal({
                title: "Registration success",
                text: "Registration success.Click OK to login",
                icon: "success",
                button: "Ok",
                timer: 5000
            }).then(function(){
                window.location="index.php";
            });
        });
    </script>';
}
?>
