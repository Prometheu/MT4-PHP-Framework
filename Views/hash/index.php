<div class="container">
    <div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<a class="list-group-item list-group-item-action active" style="color: white; margin-top: 5%;"> Hash. </a>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="?controller=hash&action=doHash" style="margin-top: 5%;"> 
                        <div class="form-group">
                            <label for="hostname" class="col control-label"> Text: </label>
                            <div class="col">
                                <textarea class="form-control" id="textToHash" name="textToHash" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="hostname" class="col control-label"> Hash to Compare: </label>
                            <div class="col">
                                <select class="form-control" name="secondHash">
                                    <option value=""> Select a Hash to Compare </option>
                                    <option value="SHA512"> SHA512 </option>
                                    <option value="HMAC"> HMAC </option>
                                    <option value="MYHASH"> THE THIRD </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col">
                                <button type="submit" style="width:100%;" class="btn btn-primary">
                                    Hash
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
