<html>

<head>
    <title>
       reply
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
                            <a href="home.php"><button style="font-size: 24px;">HOME</button></p>
                    </div>
                    <div style="float: right;">
                        <p style="background-color: blue; margin-right: 20px; "> <a href="message.php"><button style="font-size: 24px;">BACK</button></a></p>
                    </div>

                </header>

            </th>

        </tr>
        <tr class=" row2 ">
            <th colspan="3">
                <h1 align="center" style="font-size: 100px;">Reply form </h1>
            </th>
        </tr>
        <tr class="row4" style="padding-right: 200px;">
            <td width="20%" height="50%" style="padding-bottom: 5px;">
                <div class="loginForm" style="float:left;">

                    <legend>choose</legend>
                    <div class="reg" style="padding-bottom: 0px; margin-right:0px; margin-left:0px;">

                        <pre>
                        <a href="usermessages.php"><button style="font-size: 24px;">view users messages table</button></a>
                        <a href="adminreply.php"><button style="font-size: 24px;">Reply to users messages</button></a>
                        <a href="adminmessege.php"><button style="font-size: 24px;">view admin responces table</button></a>
                            </pre>
                    </div>
                </div>   <div class="loginForm" style="float:left;">
                    <form action="reply.php" name="myform" onsubmit="return(vform());" method="POST">
                        <fieldset>
                            <legend>insert poses</legend>
                           <div>
                            <label for="id">enter sender ID : </label><br>
                            <input type="number" name="u_id"><br>
                            <label for="mid">Message ID: </label><br>
                            <input type="number" name="M_ID"><br>
                            </div>
                            <label for="describution">Reply: </label><br>
                            <input type="text" name="reply"><br>
                            <input type="submit" value="REPLY">
                          
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