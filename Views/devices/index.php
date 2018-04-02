<div class="container">
    <div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<a class="list-group-item list-group-item-action active" style="color: white; margin-top: 5%;">Devices Control Panel</a>
                </div>
                <div class="panel-body">					
					<div class="row">
					  	<div class="col">
					    	<div class="list-group" id="list-tab" role="tablist" style="color: white; margin-top: 5%;">
					      		<a class="list-group-item list-group-item-action" href="?controller=devices&action=registerDevice">
					      			Register New Device
					      		</a>
					      		<a class="list-group-item list-group-item-action" href="?controller=devices&action=listDevices">
					      			List Devices
					      		</a>
					      		<a class="list-group-item list-group-item-action" href="?controller=devices&action=alterDevice">
					      			Alter Existing Device
					      		</a>
					      		<a class="list-group-item list-group-item-action" href="?controller=devices&action=removeDevice">
					      			Remove Existing Device 
					      		</a>
					    	</div>
					  	</div>					  	
					</div>
					<div class="row">
					  	<div class="col">
                            <?php 
						        if(isset($bool)){ 
						            if($bool[0]){
						    ?>                        
						                <div class="form-group">
						                    <div class="alert alert-success">
						                        <strong>Success!</strong> <?php echo $bool[1]; ?>
						                    </div>
						                </div>
						    <?php 
						            }else{
						    ?>
						               	<div class="form-group">
						                    <div class="alert alert-danger">
						                        <strong>Error!</strong> <?php echo $bool[1]; ?>
						                    </div>
						                </div>
						    <?php
						            }
						        } 
						    ?>
                        </div>					  	
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
