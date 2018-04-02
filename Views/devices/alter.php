<div class="container">
    <div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<a class="list-group-item list-group-item-action active" style="color: white; margin-top: 5%;"> Alter an existing device: </a>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="?controller=devices&action=alterDeviceOnBase" style="margin-top: 5%;"> 
                        <div class="form-group">
                            <label for="hostname" class="col control-label"> Select the Hostname of a device to alter: </label>
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
                            <label for="ip" class="col control-label"> New IP </label>
                            <div class="col">
                                <input type="text" id="ip"  class="form-control" name="ip">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="type" class="col control-label"> New Type </label>
                            <div class="col">
                                <input type="text" id="type"  class="form-control" name="type">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="manufacturer" class="col control-label"> New Manufacturer </label>
                            <div class="col">
                                <input type="text" id="manufacturer"  class="form-control" name="manufacturer">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="model" class="col control-label"> New Model </label>
                            <div class="col">
                                <input type="text" id="model"  class="form-control" name="model">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="active" class="col control-label"> New Status </label>
                            <div class="col">
                                <div class="form-check">
								  	<input class="form-check-input" type="radio" name="active" id="active" value="TRUE" checked>
								  	<label class="form-check-label" for="active">
								    	Activate
								  	</label>
								</div>
								<div class="form-check">
								  	<input class="form-check-input" type="radio" name="active" id="active" value="FALSE">
								  	<label class="form-check-label" for="active">
								    	Deactivate
								  	</label>
								</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col">
                                <button type="submit" style="width:100%;" class="btn btn-primary">
                                    Alter
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


