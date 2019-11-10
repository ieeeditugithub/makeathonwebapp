<?php include("../include/common_config.php");
 $ch_user=null;
 $ch_user = @$_SESSION['user_id'];
 $error='';

		if(isset($_REQUEST['login']))  {
			  // username and password sent from form 
			 $myusername = $db->quote($_REQUEST['username']);
			  $myusername = $_REQUEST['username'];
			$mypassword= md5($_REQUEST['password']);//."<br>";
			//$mypassword = $db->quote($mypassword)."<br>";
			 //echo "myusername = ".$myusername;
			 //echo "mypassword = ".$mypassword;
		
			 $sql = "SELECT * FROM ".ADMIN." WHERE username = '$myusername' and password ='$mypassword' and switch=1";
			//$result = $conn->query($sql);
			
				 $result = $db->select($sql);
			// If result matched $myusername and $mypassword, table row must be 1 row
			//echo "<br>-->result:";
		//print_r($result);
					//die;
			//echo "<br>-->".count($result);
			if(count($result) == 1) {
					
				foreach($result as $key=>$res)
					{
						$_SESSION['user_id'] = $res['user_id'];
						$_SESSION['user_name'] = $res['username'];
					}
					//echo "<script>    window.location = 'dashboard.php';</script>";
					//header("Location:dashboard.php");
					//die;
					exit(header("Location:".MAIN_CMS));
				}
			else
			{
				 $error = "Your Login Name or Password is invalid<hr>";
				 //header("Location:index.php");
			}
		}else if($ch_user)
		   {  //echo "<script>    window.location = 'dashboard.php';</script>";
			 //header("Location:dashboard.php");
			  // exit;
			  exit(header("Location:".MAIN_CMS));
		}
		$title="Login-Local Kabadi";
include "headertop.php";?>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="<?php echo $DomianName;?>/assets/img/top-logo34.png" />
                </a>

            </div>

            <div class="left-div">
                <i class="fa fa-user-plus login-icon" ></i>
        </div>
            </div>
        </div>
    <!-- LOGO HEADER END-->
   
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Please Login To Enter </h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
				<form method='post'>
                 <div class="form-group">
                     <label>Username : </label>
                        <input type="text" name="username" class="form-control" required placeholder="Enter Username "/>
						</div><div class="form-group">
                        <label>Password :  </label>
                        <input type="password" name="password"class="form-control" required placeholder="Enter Password "/></div>
                        <hr />
						<div class="form-group">
                       <?php echo $error;?> </div>
                        
						
                      <button type="submit" name="login" id="login" class="btn btn-default"> <span class="glyphicon glyphicon-user"></span> &nbsp;Log Me In&nbsp;</button>
</form>            
			</div>
             
            </div>
        </div>
		
    </div>
	
    <?php include "footer.php"; ?>