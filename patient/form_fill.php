<?php
    session_start();
    include('include/config.php');
    $email=$_SESSION['email'];
    $sql="update patientlogin set completed='completed' where email='$email'";
    $result=mysqli_query($con,$sql);
    if($result){
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
                window.location="dashboard.php";
            });
        });
    </script>';
    }

?>