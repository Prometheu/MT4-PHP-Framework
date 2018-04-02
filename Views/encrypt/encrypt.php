<div class="container">
    <div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<a class="list-group-item list-group-item-action active" style="color: white; margin-top: 5%;"> Encryption. </a>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="?controller=encryption&action=decrypt" style="margin-top: 5%;"> 
                        <div class="form-group">
                            <label for="hostname" class="col control-label"> Original Text: </label>
                            <div class="col">
                                <textarea class="form-control" id="original" name="original" rows="5"><?php echo $text; ?></textarea>
                            </div>
                        </div>

                        <?php
                            for ($e=0; $e < $sizeE; $e++) { 

                        ?>
                        
                            <div class="form-group">
                                <label for="hostname" class="col control-label"> <?php echo $enc[$e][0] ?> </label>
                                <div class="col">
                                    <textarea class="form-control" id="<?php echo $inputName[$e]  ?>" name="<?php echo $inputName[$e]  ?>" rows="5"><?php echo $enc[$e][1] ?></textarea>
                                </div>
                            </div>

                        <?php
                            }
                        ?>

                        <div class="form-group">
                            <div class="col">
                                <button type="submit" style="width:100%;" class="btn btn-primary">
                                    Decrypt
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
