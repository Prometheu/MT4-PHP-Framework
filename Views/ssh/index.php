<div class="container">
    <div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<a class="list-group-item list-group-item-action active" style="color: white; margin-top: 5%;"> Login for SSH Commands. </a>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="?controller=ssh&action=login"> 
                        <div class="form-group">
                            <label for="user" class="col control-label"> User </label>
                            <div class="col">
                                <input type="text" id="user"  class="form-control" name="user">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col control-label"> Password </label>
                            <div class="col">
                                <input type="password" id="password"  class="form-control" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <button type="submit" style="width:100%;" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form> 
                    <?php 
			            if(isset($bool)){ 
			        ?>      
			                <div class="form-group">
			                    <div class="alert alert-danger">
			                        <strong>Error!</strong> <?php echo $bool; ?>
			                    </div>
			                </div>
			        <?php
			            } 
			        ?>                
                </div>
            </div>
        </div>
    </div>
</div>
