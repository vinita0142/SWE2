<?php
session_start();
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'medcare');
$email = $_POST['email'];
$password = $_POST['password'];
$name = substr($_POST['email'], 0, 6);
if ($name == 'doctor') {
    $sql = "select * from doctorlogin where email='$email' && password='$password'";
} else {
    $sql = "select * from patientlogin where email='$email' && password='$password'";
}
$result = mysqli_query($con, $sql);
$name = '';
if ($num = mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_array($result)) {
        $name = $row['username'];
    }
    $_SESSION['uname'] = $name;
    $_SESSION['email'] = $email;
    $name = substr($_POST['email'], 0, 6);
    if ($name == 'doctor') {
        echo "<script>window.location.href='../doctor/dashboard.php';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../patient/dashboard.php';</script>";
        exit();
    }
} else {
    echo '<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></sodium_crypto_sign_ed25519_pk_to_curve25519>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
    
        $(document).ready(function() {
            swal({
                title: "Login failed",
                text: "Click OK to go to login page",
                icon: "error",
                button: "Ok",
                timer: 5000
            }).then(function(){
                window.location="index.php";
            });
        });
    </script>';
}
?>

