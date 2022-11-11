<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedCare</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <table>
                <tr>
                    <td><img src="../images/icons8-telemedicine-50.png" alt="Logo"></td>
                    <td>MedCare</td>
                </tr>
            </table>
        </div>
            <ul class="links">
                <li><a href="index.html">HOME</a></li>
                <li><a href="services.html">OUR SERVICES</a></li>
                <li><a href="map.html">NEAREST HOSPITAL</a></li>
                <li><a href="contact.html">CONTACT US</a></li>
                <li><a href="https://webrtc-video-call-ec3b9.web.app">CONSULT DOCTOR</a></li>
            </ul>
    </div>
    <div class="container">
        <div class="left">
            <div class="info">
            <p>MedCare is the one website you need for all your medical needs. We provide you with the functionality to book appointments with the best doctors 
                and locate nearby hospitals in your area. We also provide you with the 
                best medicines and medical equipment. We also provide the functionality to 
                video call your doctor for ease of use.</p>
            </div>

            <div class="reg" id="reg">
                <div class="form-container sign-up-container">
                    <form action="register.php" name="register" method="post">
                        <h1>Create Account</h1>
                        <input type="text" placeholder="Username" required name="name"/>
                        <input type="email" placeholder="Email" required name="email"/>
                        <input type="password" placeholder="Password" name="password" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$"/>
                        <button>Sign Up</button>
                    </form>
                </div>
                <div class="form-container sign-in-container">
                    <form action="validation.php" name="login" method="post">
                        <h1>Sign in</h1>
                        <input type="email" placeholder="Email" required name="email"/>
                        <input type="password" placeholder="Password" name="password" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$"/>
                        <a href="#" id="fp">Forgot your password?</a>
                        <button>Sign In</button>
                    </form>
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1>Welcome Back!</h1>
                            <p>To keep connected with us please login with your personal info</p>
                            <button class="ghost" id="signIn">Sign In</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h1>Hello, Friend!</h1>
                            <p>Enter your personal details and start journey with us</p>
                            <button class="ghost" id="signUp">Sign Up</button>
                        </div>
                    </div>
                </div>
            <!-- newly added ends -->
            </div>
        </div>
        <div class="right">
            <!-- <h2>Picture here</h2> -->
            
            <img src="../images/bg9.jpg" alt="">
        </div>
    </div>
    <div class="services">
        <div class="nearestDoc">
            <!-- <a href="https://www.flaticon.com/free-icons/ambulance" title="ambulance icons"></a> -->
            <img src="../images/doctor.png" alt="">
            <h3>Doctor</h3>
            <h3><a href="index.php">Click Here</a></h3>
        </div>
        <div class="cart">
            <!-- <a href="https://www.flaticon.com/free-icons/ambulance" title="ambulance icons"></a> -->
            <img src="../images/trolley.png" alt="">
            <h3>Product</h3>
            <h3><a href="../product/index.php">Click Here</a> </h3>
        </div>
        <div class="telemed">
            <!-- <a href="https://www.flaticon.com/free-icons/ambulance" title="ambulance icons"></a> -->
            <img src="../images/hospital.png" alt="">
            <h3>Nearby Hospitals</h3>
            <h3><a href="map.html">Click Here</a> </h3>
        </div>
    </div>
</div>
</body>
<script src="script.js"></script>
</html>