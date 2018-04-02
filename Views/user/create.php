<div class="container">
    <div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<a class="list-group-item list-group-item-action active" style="color: white; margin-top: 5%;"> Create a new User. </a>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="?controller=user&action=userToBase" style="margin-top: 5%;"> 
                        <div class="form-group">
                            <label for="user" class="col control-label"> User </label>
                            <div class="col">
                                <input type="text" id="user"  class="form-control" name="user">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col control-label"> Name </label>
                            <div class="col">
                                <input type="text" id="name"  class="form-control" name="name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col control-label"> Last Name </label>
                            <div class="col">
                                <input type="text" id="lastname"  class="form-control" name="lastname">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col control-label"> E-mail </label>
                            <div class="col">
                                <input type="text" id="email"  class="form-control" name="email">
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
                                    Create User
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
