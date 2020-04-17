<?php 

    
    require_once "libs/function.php";


 ?>

<!DOCTYPE html>
<html lang="en" class=" ">

<head>
    <meta charset="utf-8" />
    <title>Scale | Web Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">
    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xl"> <a class="navbar-brand block" href="index.html">Scale</a>
            <section class="m-b-lg">
                <header class="wrapper text-center"> <strong>Sign in to get in touch</strong> </header>


                <?php  

                           if( isset($_POST['submit']) ){


                               $pass = $_POST['pass'];
                               $email = $_POST['email'];



                               if( empty($email) || empty($pass) ){
                                   $mess = "<p class='alert alert-danger'> Field Must not be Empty !<button class='close' data-dismiss='alert'>&times;</button></p>";
                               }else {

                                   $sql = "SELECT * FROM user_admin WHERE email='$email'";
                                   $data = $conn -> query($sql);
                                   $login_data = $data -> fetch_assoc();
                                    
                                   if($login_data['email'] == $email ){

                                        

                                        if( password_verify($pass, $login_data['pass']) == true){

                                            // $_SESSION['name'] = $login_data['name'];

                                            header("location:dashboard.php");

                                        }else{
                                            $mess = "<p class='alert alert-danger'> Password is wrong !<button class='close' data-dismiss='alert'>&times;</button></p>";
                                        }


                                   }else{
                                        $mess = "<p class='alert alert-danger'> Email is not valid !<button class='close' data-dismiss='alert'>&times;</button></p>";
                                   }


                               }   


                           }


                       ?>


                 <div class="mess">
                    <?php  

                        if( isset($mess) ){
                        echo $mess;
                        
                        }

                    ?>
                </div>
    


                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="list-group">
                        <div class="list-group-item">
                            <input name="email" type="text" placeholder="Email" class="form-control no-border"> </div>
                        <div class="list-group-item">
                            <input name="pass" type="password" placeholder="Password" class="form-control no-border"> </div>
                    </div>
                    <button name="submit" type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                    <div class="text-center m-t m-b"><a href="#"><small>Forgot password?</small></a></div>
                    <div class="line line-dashed"></div>
                    <p class="text-muted text-center"><small>Do not have an account?</small></p> <a href="signup.php" class="btn btn-lg btn-default btn-block">Create an account</a> 
                </form>



            </section>
        </div>
    </section>
    <!-- footer -->
    <footer id="footer">
        <div class="text-center padder">
            <p> <small>Web app framework base on Bootstrap<br>&copy; 2013</small> </p>
        </div>
    </footer>
    <!-- / footer -->
    <!-- Bootstrap -->
    <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/app.plugin.js"></script>
</body>

</html>