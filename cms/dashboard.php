<?php   require_once "conf_session.php" ;

$list=pickup_list_dash($conn,0);

$title="Dashboard";

include "header.php";


?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Dashboard</h4>

                </div>

            </div>
      
            <div class="row">
			<a href="pickup.php" >
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <i  class="fa fa-university	 dashboard-div-icon" ></i>
        
                         <h5>Pickup Requests</h5>
                    </div>
                </div></a>
				
				
				<a href="<?php //echo //$DomainName;?>" >
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <i  class="fa fa-laptop dashboard-div-icon" ></i>
                        <!--div class="progress progress-striped active">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
  </div>
                           
</div-->
                         <h5></h5>
                    </div>
                </div></a>
				<a href="user.php" >
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <i  class="fa fa-cogs dashboard-div-icon" ></i>
                        <!--div class="progress progress-striped active">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
  </div>
                           
</div-->
                         <h5>User Settings</h5>
                    </div>
                </div></a>
				<a href="<?php //echo $DomainName;?>/#" >
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-four">
                        <i  class="fa fa-envelope-o dashboard-div-icon" ></i>
                        <!--div class="progress progress-striped active">
  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
  </div>
                           
</div-->
                         <h5>Mail</h5>
                    </div>
                </div></a>

            </div>
           
            <div class="row">
                <div class="col-md-12">
				    <!--div class="text-center alert alert-warning">
                        <a href="https://www.facebook.com/Dragon-Ball-Fan-Club-1261175853910479/" class="btn btn-social btn-facebook" target="_blank">
                            <i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                        <a href="#" class="btn btn-social btn-google">
                            <i class="fa fa-google-plus"></i>&nbsp; Google</a>
                        <a href="#" class="btn btn-social btn-twitter">
                            <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                        <a href="#" class="btn btn-social btn-linkedin">
                            <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a>
                    </div>
					<hr-->
                    
                  
                     <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Pickup ID</th>
                                            <th>Name</th>
                                            <th>Time</th>
                                            <th>Pincode</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
 <?php include "pickup_table.php" ?>
                                    </tbody>
                                </table>
                            </div>

                </div>
		
            </div>
        </div>
    </div>
    <?php include "footer.php";?>
