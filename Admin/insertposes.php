<html>

<head>
    <title>
       insert pose form
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
                        <p style="background-color: blue; margin-right: 20px; "> <a href="poses.php"><button style="font-size: 24px;">BACK</button></a></p>
                    </div>

                </header>

            </th>

        </tr>
        <tr class=" row2 ">
            <th colspan="3">
                <h1 align="center" style="font-size: 100px;">Form</h1>
            </th>
        </tr>
        <tr class="row4" style="padding-right: 200px;">
            <td width="20%" height="50%" style="padding-bottom: 5px;">
                <div class="loginForm" style="float:left;">

                    <legend>Choose</legend>
                    <div class="reg" style="padding-bottom: 0px; margin-right:0px; margin-left:0px;">

                        <pre>
                        <a href="insertposes.php"><button style="font-size: 24px;">upload poses </button></a>
                        <a href="retrieveposes.php"><button style="font-size: 24px;">display poses with databases</button></a>
                        <a href=""><button style="font-size: 24px;">posted poses</button></a>
                        <a href=""><button style="font-size: 24px;">Delete poses</button></a>
                        <a href=""><button style="font-size: 24px;">Poses that have never been posted</button></a>
                            </pre>
                    </div>
                </div>   <div class="loginForm" style="float:left;">
                    <form action="insert.php" name="myform" onsubmit="return(vform());" method="POST">
                        <fieldset>
                            <legend>insert poses</legend>
                           
                            <label for="pose">pose: </label><br>
                            <input type="file" accept="image/*" name="pose"><br>
                            
                            <div>
                                <select name="category" id="select">
                                    <option value="female_poses">female_poses</option>
                                    <option value="male_poses">male_poses</option>
                                    <option value="group_poses">group_poses</option>
                                    <option value="wedding_poses">wedding_poses</option>
                                    <option value="male_selifie">male_selifie</option>
                                    <option value="female_selifie">female_selifie</option>
                                    <option value="group_selifie">group_selifie</option>
                                    <option value="wedding_selifie">wedding_selifie</option>
                                </select>

                            </div>
                            <label for="kind">kind: </label><br>
                            <div>
                                <select name="kind" id="select">
                                    <option value="real_photo">real_photo</option>
                                    <option value="drawn_photo">drawn_photo</option>
                                </select>

                            </div>
                            <label for="describution">decribution: </label><br>
                            <input type="text" name="describution"><br>
                            <input type="submit" value="SAVE">
                          
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