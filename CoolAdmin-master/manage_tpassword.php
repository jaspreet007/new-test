<?php 
include('connection.php');
include('theader.php');
ob_start();

?>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                              <?php
											  
           $str="select * from add_user";
				$res=mysqli_query($con,$str);
			while($result=mysqli_fetch_array($res))
			{
			echo"<li><a href='manage_tpassword.php'?id=".$result['id']."'>".$result['user_name']." ".$result['login_url']."</a></li>";
			} 
			?>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                               
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
							<form class="form-horizontal" autocomplete="nope">
    <div id="login-saved" style="display:none" class="alert alert-success">Login saved.</div>
	<?php
	
//$id=$_GET['id'];
$str="select*from add_user ";
$res=mysqli_query($con,$str);
$result=mysqli_fetch_array($res);

/*<form method= "post" action="">

//echo "c_id:<input type='text' name='c_id' value='".$result['c_id']."'/><br/>";
echo "c_name:<input type='text' name='c_name' value='".$result['c_name']."'/><br/>";
echo "c_contact:<input type='text' name='c_contact' value='".$result['c_contact']."'/><br/>";

echo"<input type='submit' name='update' value='update'/></form>";*/
       echo'<div class="col-lg-12">';
        echo'<section class="panel">';
        /* echo' <header class="panel-heading">';
                customer 
             echo'</header>';*/
              echo'<div class="panel-body">';
               echo' <div class="form">';
                echo'  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="" novalidate="novalidate">';
                   echo '<div class="form-group ">';
				  echo' <legend>';
        echo'Add Login';
     echo' </legend>';
                     echo' <label for="cname" class="control-label col-lg-2">user name <span class="required">*</span></label>';
                    echo' <div class="col-lg-10">';
                    echo' <input class="form-control" id="cname" name="user_name" minlength="5" type="text" value="'.$result['user_name'].'" required="">';
                  echo' </div>';
                   echo' </div>';
				     echo' <div class="form-group ">';
                    echo'  <label for="cemail" class="control-label col-lg-2">login url<span class="required">*</span></label>';
                    echo'  <div class="col-lg-10">';
                       echo' <input class="form-control " id="cemail" type="text" name="login_url" value="'.$result['login_url'].'" required="">';
                     echo' </div>';
                    echo'</div>';
                   echo' <div class="form-group ">';
                    echo'  <label for="cemail" class="control-label col-lg-2">password<span class="required">*</span></label>';
                    echo'  <div class="col-lg-10">';
                       echo' <input class="form-control " id="cemail" type="text" name="password" value="'.$result['password'].'" required="">';
                     echo' </div>';
                    echo'</div>';
					    echo' <div class="form-group ">';
                    echo'  <label for="cemail" class="control-label col-lg-2">notes<span class="required">*</span></label>';
                    echo'  <div class="col-lg-10">';
                       echo' <input class="form-control " id="cemail" type="text" name="notes" value="'.$result['notes'].'" required="">';
                     echo' </div>';
                    echo'</div>';
                   
					echo'<div class="form-group">';                    
                    echo'  <div class="col-lg-offset-2 col-lg-10">';
                     echo'   <button class="btn btn-primary" type="submit" name="edit" value=update"></button>';
                    echo'    <button class="btn btn-default" type="button">Cancel</button>';
					 
                   echo'   </div>';
                   echo' </div>';
                  echo'</form>';
                echo'</div>';

            echo' </div>';
           echo' </section>';
          echo'</div>';



if(isset($_POST['edit']))
{
	//$c_id=$_POST['c_id'];
	$user_name=$_POST['user_name'];
	$login_url=$_POST['login_url'];
	$password=$_POST['password'];
	$notes=$_POST['notes'];
	$qr1="update add_user set user_name='$user_name', login_url='$login_url',password='$password',notes='$notes' where id=$id";
	$str=mysqli_query($con,$qr1)or die(mysqli_error($con));
	if($str)
	{
		header("location:manage_tpassword.php");
	}
}
?>
</div>
    
  </form>
							

                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->

