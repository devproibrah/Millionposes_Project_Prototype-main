<html>

<head>
    <title>
        Ask
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="newscc.css">
    <link rel="stylesheet" href="sample.css">
    <script type="text/javascript">
        function vform() {
            if (document.myform.names.value == "") {
                alert("Enter your names");
                document.myform.names.focus();
                return false;
            };
            if (document.myform.nid.value == "") {
                alert("Enter your national id");
                document.myform.nid.focus();
                return false;
            };

            if (document.myform.telephone.value == "") {
                alert("Enter your telphone number");
                document.myform.telephone.focus();
                return false;
            };
          
            if (document.myform.email.value == "") {
                alert("Enter yourn email");
                document.myform.email.focus();
                return false;
            };
           
            if (document.myform.date.value == "") {
                alert(" enter new accoout eg:name33@pos.com");
                document.myform.date.focus();
                return false;
            };
            if (document.myform.btime.value == "") {
                alert("Select when  starting time");
                document.myform.ftime.focus();
                return false;
            };
            if (document.myform.ftime.value == "") {
                alert("Select end time");
                document.myform.ftime.focus();
                return false;
            };
            if (document.myform.ckeckbox.value == "") {
                alert("enter comfirmation password");
                document.myform.cpassword.focus();
                return false;
            };
          
            
        }

        function Vemail(field, alerttxt) {
            with(field) {
                apos = value.indexOf("@");
                dotpos = value.lastlndexOf(".");
                if (apos < 1 || dotpos - apos < 2) {
                    alert(alerttxt);
                    return false;
                } else {
                    return
                    return true;
                }
            }

        }
    </script>

    

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
                 
                </div>    <div style=" position: fixed; top: 260px; right: 0px;">   <div class="loginForm" style="float:left;">
                    <form action="send_message.php" name="myform" onsubmit="return(vform());" method="POST">
                        <fieldset>
                            <legend>chat with us</legend>
                            <?php
              
             echo $_SESSION['message']."<br>";
             echo $_SESSION['sent'];
              
           
             ?>
                            
                        <pre> Massage:<input type="text" name="message"  width="90 ">
                                    </input type="text">
                                            <input type="submit" value="SEND" width="10"></pre>
                         </div>  
                        </fieldset>
                    </form>
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


            </th>
        </tr>
    </table>

</body>

</html>