<?php 
include('connection.php');
include('theader.php');
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
                    <img src="images/icon/logot1.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
							
                               <?php
				include("connection.php");
           $str="select * from add_user";
				$res=mysqli_query($con,$str);
			while($result=mysqli_fetch_array($res))
			{
			echo"<li><a href=''?id=".$result['id']."'>".$result['user_name']."".$result['login_url']."</a></li>";
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
                                                    <span class="email"><?php ob_start(); session_start();?><?phpif (isset($_SESSION['email_adress']));
													echo .$_SESSION['email_adress'];
													?></span>
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
			
<?php
include_once("connection.php");
$str="select* from add_user";
$res=mysqli_query($con,$str);
echo "<tr><th>user_name</th><th>login_url</th><th>password</th><th>notes</th><</tr> ";
while($result=mysqli_fetch_array($res))
{
//echo"<tr><td>".$result['user_id']."</td>";
echo"<td>".$result['user_name']."</td>";
echo "<td>".$result['login_url']."</td>";
echo "<td>".$result['password']."</td>";
echo "<td>".$result['notes']."</td>";
echo "<td> <a class='btn btn-success' href='manage_edit.php?id=".$result['id']."'><i class='icon_check_alt2'></i>edit</a></td>";
echo"<td><a  class='btn btn-danger' onclick=\"return confirm('are you sure to want to delete?')\"href='manage_delete4.php? id=".$result['id']."'><i class='icon_close_alt2'></i>delete</a></td></tr>";
}
?>

}?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
				</div>

					<form action=""method="post">
    <div id="autofill-detected" style="display:none" class="alert alert-warning">Warning: Your browser is set to autofill, which will overwrite shared account information. <a href="https://support.jungledisk.com/hc/en-us/articles/360003299994" alt="Disable Browser Autofill" target="_blank">Learn how to disable autofill for TeamPassword.</a></div>

      <legend>
        Add Login
      </legend>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="account_name">Name</label>
        <div class="col-sm-9">
          <input id="account_name" class="form-control" name="user_name" type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" value="" autofocus="">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="url">Login URL</label>
        <div class="col-sm-9">
          <input id="url" name="login_url" class="form-control" type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" value="">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="account_username">Username</label>
        <div class="col-sm-9">
          <input id="account_username" class="form-control fixed-width-font" type="text" name="user_name" autocomplete="new-password" autocorrect="off" autocapitalize="off" spellcheck="false" value="">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="account_password">Password</label>
        <div class="col-sm-9">
          <div class="input-group">
            <input id="account_password" class="form-control fixed-width-font" name="password" type="password" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" value="">
            <span class="input-group-btn">
              <button id="show-password-generator" title="Generate random password" class="btn btn-default" type="button">
                Generate
              </button>
            </span>
          </div>
          <div class="pw-strength">
            <div class="pull-left progress progress-pw-strength">
              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
              <span class="sr-only">Password Strength: Very Weak</span>
              </div>
            </div>
          </div>
          <div class="checkbox">
            <label class="checkbox toggle-pw">
              <input id="togglePw" type="checkbox"> Show password text
            </label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label" for="account_notes">Notes</label>
        <div class="col-sm-9">
          <textarea class="form-control fixed-width-font" id="account_notes" name="notes" autocomplete="off" autocorrect="off" autocapitalize="off"></textarea>
        </div>
      </div>

      <div id="account-save-error" class="alert alert-danger text-center" style="display:none"> Unable to save account, please try again or <a href="/dashboard#support">contact support.</a> </div>
      <div id="save-or-cancel" class="form-actions form-group">
        <div class="col-sm-9 col-sm-offset-3">
          <button class="btn btn-primary" name="save" type="submit" data-loading-text="Encrypting...">Save</button>
            <a class="btn btn-default account-list-nav" href="#">Cancel</a>
        </div>
      </div>
  </form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

</body>
</html>
            
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
