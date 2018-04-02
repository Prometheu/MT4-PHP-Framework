<div class="container">
    <div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<a class="list-group-item list-group-item-action active" style="color: white; margin-top: 5%;"> Remove an existing device: </a>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="?controller=devices&action=removeDeviceOnBase" style="margin-top: 5%;"> 
                        <div class="form-group">
                            <label for="hostname" class="col control-label"> Select the Hostname of a device to remove: </label>
                            <div class="col">
                                <select class="form-control" name='hostname'>
									<option value=""> Selecione </option>
									<?php
										for ($i=0; $i < sizeof($devices); $i++) { 
											echo "<option value='".$devices[$i][1]."'>".$devices[$i][1]."</option>";
										}
									?>
								</select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col">
                                <button type="submit" style="width:100%;" class="btn btn-primary">
                                    Remove
                                </button>
                            </div>
                        </div>
                    </form>
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
