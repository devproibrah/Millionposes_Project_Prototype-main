<html>

<head>
    <title>
        login page
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="newscc.css">
</head>

<body>
    <table style="height: 10% ; background-color: rgb(117, 100, 77);" border="0">
        <tr class="row2">
            <th colspan="">
                <header>


                    <div style="float: left;">
                        <p style="background-color: blue; margin-left: 20px; "> <a href="newhome.html"><button style="font-size: 24px;">HOME <i class="fas fa-sliders-h"></i></button></a></p>

                    </div>


                </header>

            </th>

        </tr>
    </table>
    <tr class=" row2 ">
        <th>
            <h1 align="center" style="font-size: 100px;">millionposes</h1>

        </th>

    </tr>
    </table>

    <div class="loginform" align="center">

        <form action="login.php" method="POST">
            <fieldset>
                <legend style="text-align: center;">
                    <h2>logn in your account</h2>
                </legend>

                <label for="email">Username: </label><br>
                <input type="email" name="email"><br>
                <label for="password">password: </label><br>
                <input type="password" name="password"><br>
                <input type="submit" value="login">
                <div class="reg">
                    <p  style="color:red;">
                    <?php
              session_start();
                echo$_SESSION['flogin']; ?> </p>
                    <p>do not have account? <a href="registration.html">register</a></p>
                    <p><a href="">forgot password</a></p>


                </dip>

            </fieldset>
        </form>
    </div>
    </th>



    <div class="last " style="width: 100%; float: right; ">

<div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                  
                 
                    <div>
                        <h3>Contacts</h3>
                        Address:
                        <Address>kigali</Address>
                        email:
                        <email:a>millionposes@email.com </email:a>
                       
                       <p> phone:+25078519290 </p>

                    </div>
                
            
                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">millionposes© 2021</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>

    </div>





</body>

</html>