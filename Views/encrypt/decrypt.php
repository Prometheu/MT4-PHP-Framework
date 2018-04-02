<div class="container">
    <div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="list-group-item list-group-item-action active" style="color: white; margin-top: 5%;"> Decryption. </a>
                </div>
                <div class="panel-body">
                    <div class="form-group" style="margin-top: 5%;">
                        <?php
                            for ($d=0; $d < $sizeD; $d++) {
                        ?>
                            <div class="container" style="margin-bottom: 5%;">
                                <div class="row">
                                    <label class="col control-label"> <?php echo $dec[$d][0] ?> </label>
                                </div>
                                <div class="row">                                    
                                    <div class="col">
                                        <label class="col control-label"> Encrypted </label>
                                        <textarea class="form-control" rows="5"><?php echo $dec[$d][1] ?></textarea>
                                    </div>
                                </div>
                                <div class="row">                                    
                                    <div class="col">
                                        <label class="col control-label"> Decrypted </label>
                                        <textarea class="form-control" rows="5"><?php echo $dec[$d][2] ?></textarea>
                                    </div>
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
</div>
