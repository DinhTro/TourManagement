<?php if($_SESSION['login'])
{?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li class="prnt"><a href="profile.php">Hồ Sơ</a></li>
				<li class="prnt"><a href="change-password.php">Thay Đổi Mật Khẩu</a></li>
			<li class="prnt"><a href="tour-history.php">Lịch sử đặt</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Xin Chào:</li>				
			<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
			<li class="sigi"><a href="logout.php" >/ Đăng xuất</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
				<li class="hm"><a href="admin/index.php">Admin Login</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Toll Number : 123-4568790</li>				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Sign In</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<?php }?>
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s" style="background-color: rgba(54, 19, 84, .85)">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1 " style="background-color: rgba(54, 19, 84, .85)">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Trang chủ</a></li>
								<li><a href="package-list.php">Tour du lịch </a></li>
								<li><a href="#" data-toggle="modal" data-target="#myModal3">Write Us </a>  </li>
								<li><a href="page.php?type=contact">Liên hệ</a></li>
								<?php if($_SESSION['login'])
{?>
								
								<?php } else { ?>
								
								<?php } ?>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div>
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
