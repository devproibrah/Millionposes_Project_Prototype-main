<html>

<head>
    <title>
     Jobs
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="newscc.css">
    <link rel="stylesheet" href="sample.css">
    

</head>

<body>
    <table border="0">
        <tr class=" row1 ">
            <th colspan="2">
                <header>


                    <div style="float: left;">
                        <p style="background-color: blue; margin-left: 20px; ">
                            <a href="user.php"><button style="font-size: 24px;">HOME</button></p>
                    </div>
                    <div style="float: right;">
                        <p style="background-color: blue; margin-right: 20px; "> <a href="login.html"><button style="font-size: 24px;">SIGN OUT</button></a></p>
                    </div>

                </header>

            </th>

        </tr>
        <tr class=" row2 ">
            <th colspan="3">
                <h1 align="center" style="font-size: 100px;">Welcome <?php
session_start();
echo $_SESSION['Fname']." ". $_SESSION['Lname'];

?> </h1>
            </th>
        </tr>
        <tr class="row4" style="padding-right: 200px;">
            <td width="20%" height="50%" style="padding-bottom: 5px;">
                <div class="loginForm" style="float:left;">

                    <legend>serves for register users</legend>
                    <div class="reg" style="padding-bottom: 0px; margin-right:0px; margin-left:0px;">

                        <pre>
                      
                        <a href="userAdert.php"><button style="font-size: 24px;">1.Advertisment services</button></a>
                        <a href="userTraining.php"><button style="font-size: 24px;">2.trainings</button></a>
                        <a href="userSH.php"><button style="font-size: 24px;">3.Become stakeholder</button></a>
                        <a href="userJob.php"><button style="font-size: 24px;">4.Jobs available on Millionposes</button></a>
                        <a href="userAskH.php"><button style="font-size: 24px;">5.Ask question</button></a>
                        <a href="userPost.php"><button style="font-size: 24px;">6.post to earn reward</button></a>
                        <a href="update.php"><button style="font-size: 24px;">7.Updates</button></a>

                            </pre>
                    </div>
                </div><div style="color:white;">          
<h2>Jobs available</h2>

<dl>
    <dt><strong style="color:blue;">>>>>>>>>> system works <<<<<<<<<</strong></dt>
    <dd>1.Web developers</dd>
    <dd>2.graphic designers</dd>
    <dd>3.system admnisters</dd>
    <dt><strong style="color:blue;">>>>>>>>>> Ordinary workers <<<<<<<<<</strong></dt>
    <dd>1.cleaners</dd>
    <dd>2.drivers</dd>
</dl>



        </div>
    </td>
        </tr>
        <tr>
            <th colspan="2 ">
            <div class="last " style="width: 100%; float: right; ">

<div class="footer-clean">
    <footer>
        <div class="container">
            <div class="row justify-content-center">


                <div>
                    <h3>Contacts</h3>
                    Address:
                    <Address>kigali</Address> email:
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

            </th>
        </tr>
    </table>

</body>

</html>