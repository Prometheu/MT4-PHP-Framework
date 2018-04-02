<div class="container">
    <div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="form-group">
                        <label for="user" class="col control-label"> SenhaSegura powered by MT4 Tecnologia. </label>
                    </div> 
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="?controller=base&action=auth"> 
 
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
