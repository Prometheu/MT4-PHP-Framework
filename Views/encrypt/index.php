<div class="container">
    <div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<a class="list-group-item list-group-item-action active" style="color: white; margin-top: 5%;"> Encryption. </a>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="?controller=encryption&action=encrypt" style="margin-top: 5%;"> 
                        <div class="form-group">
                            <label for="hostname" class="col control-label"> Text: </label>
                            <div class="col">
                                <textarea class="form-control" id="textToEncrypt" name="textToEncrypt" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col">
                                <button type="submit" style="width:100%;" class="btn btn-primary">
                                    Encrypt
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
