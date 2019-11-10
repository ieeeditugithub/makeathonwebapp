<?php 
	$user=get_user_data($conn,$_SESSION['user_id']);
	include "headertop.php";
?>
<!-- LOGO HEADER start-->
<div class="navbar navbar-inverse set-radius-zero">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
            </button>
           
		   <a class="navbar-brand" href="dasboard.php">
				<img src="<?php echo $DomianName;?>/assets/img/top-logo34.png" style="margin:10 auto;"/>
           </a>

		</div>

		<div class="left-div">
			<div class="user-settings-wrapper">
				<ul class="nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
							<span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                         </a>
                         <div class="dropdown-menu dropdown-settings">
							<div class="media">
								<div class="media-body">
									<h4 class="media-heading"><?php echo $user[0]['name'];?></h4>
								</div>
							</div>
							<hr />
                            &nbsp;
							<a href="user.php"  class="btn btn-success btn-sm">User Settings</a>
							&nbsp; <a href="logout.php"  class="btn btn-danger btn-sm">Logout</a>

						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- LOGO HEADER END-->
	
	
<!--modal hidden button-->
<button data-toggle="modal" data-target="#msg" id="msg_bt" style="display:none;" ></button>

<section class="menu-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="navbar-collapse collapse ">
					<ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li><a  href="pickup.php">Pickup Request</a></li>
                        <li><a href="table.php">Data Tables</a></li>
						<li><a  href="dashboard.php">Dashboard</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
