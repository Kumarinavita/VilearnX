<?php 
    include("class/adminback.php");
    $obj= new adminback();

    if(isset($_POST['admin_btn'])){
        $log_msg = $obj->admin_login($_POST);
    }
    session_start();
    if(isset($_SESSION['admin_id'])){
        header("location:dashboard.php");
    }
?>

<?php 
    include ("includes/head.php")
?>

<style>
    .common-img-bg {
    background: linear-gradient(to right, #56B4D3, #348F50);
}
.auth-box {
    background-color: #fff;
    border-radius: 8px;
    margin: 20px 0 0 0;
    padding: 20px;
    -webkit-box-shadow: 0 2px 18px -2px black;
    box-shadow: 1px 2px 0px -2px #8d8989;
}
    </style>
  <body>

  <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form action="" method="post" class="md-float-material">
                            <div class="text-center">
                              
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Admin Sign In</h3>
                                        <h6 class="text-danger text-left">
                                            <?php 
                                                if(isset($log_msg)){
                                                    echo $log_msg;
                                                }
                                            ?>
                                        </h6>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Your Email Address" name="admin_email">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="Password" name="admin_pass">
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    
                                    <div class="col-sm-12 col-xs-12 forgot-phone text-left">
                                        <a href="admin_password_recover.php" class="text-left f-w-600 text-inverse"> Forgot Your Password?</a>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <input type="submit" name="admin_btn" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="Sign in">
                                    </div>
                                </div>
                               
                             

                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
	

  

<?php 
    include ("includes/script.php")
?>

