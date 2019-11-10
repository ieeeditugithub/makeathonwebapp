<?php  require_once "conf_session.php" ;
$entry_no=pickup_count($conn);
$entry_no=ceil($entry_no/20);
$title="Pickup Requests";
 include "header.php" ;
?>

    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Pickup Requests</h1>
                    </div>
                </div>
                
						<div class="row">
                	<div class="col-md-12" >
                    <div class="panel panel-default">
                       <div class="panel-heading">
                  <!--   Kitchen Sink -->
					  <button type="button" id="pre"value=-1 class="chng">Previous</button>
		
					<input type="number" value=1 id="page" data-max=<?php echo $entry_no;?> />
	 <button type="button" style="float:right;" value=1 id="nxt" class="chng">Next</button>
						  
					   </div>
                        <div class="panel-body"  id="state">
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
                                    <tbody id="data">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
         
            </div>
			  
    </div> </div>

    <!-- CONTENT-WRAPPER SECTION END-->
   <?php include "footer.php";?>
	<script src="assets/js/pickup.js"></script>