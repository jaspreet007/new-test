<?php 
include('connection.php');
include('theader.php');
?>
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
			echo"<li><a href='manage_tpassword.php'?id=".$result['id']."'>".$result['login_url']."</a></li>";
			}
	

?>
                            </ul>
                        </li>
                       
                </nav>
            </div>
        </aside>