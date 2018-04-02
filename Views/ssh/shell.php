<div class="container">
    <div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<a class="list-group-item list-group-item-action active" style="color: white; margin-top: 5%;"> SSH Commands. </a>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="?controller=ssh&action=sshcommands" style="margin-top: 5%;"> 
                        <div class="form-group">
                            <label for="hostname" class="col control-label"> Shell commands for <?php echo $device; ?>: </label>
                            <div class="col">
                                <textarea class="form-control" name="commands" rows="10"> </textarea>
                            </div>
                        </div>
                        <input type="hidden" name="device" value="<?php echo $device; ?>">
                        <div class="form-group">
                            <div class="col">
                                <button type="submit" style="width:100%;" class="btn btn-primary">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>                 
                </div>
            </div>
        </div>
    </div>
</div>
