<?php 
include 'header_footer/header_admin.php';
?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                  

                            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="proses/register_admin_proses.php" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Nama Admin</label>
                                    <input class="au-input au-input--full" type="text" name="nama" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                 
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                            
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
            </div>

<?php 
include 'header_footer/footer_admin.php';
?>