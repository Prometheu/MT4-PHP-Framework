<div class="container">
    <div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<a class="list-group-item list-group-item-action active" style="color: white; margin-top: 5%;"> Generated Hash. </a>
                </div>
                <div class="panel-body">                    
                    <?php
                        echo "<table class='table table-hover' style='margin-top: 5%;'>";
                        echo "<tr style='margin-bottom:5%;'>
                                    <th> Text Hashed</th>
                                    <th>".$text."</th>
                              </tr>";
                        echo "</table><br>";

                        echo "<table class='table table-hover' style='margin-top: 5%;'>";
                        for ($i=0; $i < sizeof($tbl); $i++) { 
                            echo "<tr>"; 
                            for ($j=0; $j < sizeof($tbl[$i]); $j++) { 
                                if($i ==0){
                                    echo "<th>".$tbl[$i][$j]."</th>";
                                }else{
                                    if($bool){
                                        if($j != 2){
                                            echo "<td>".$tbl[$i][$j]."</td>";
                                        }else{
                                            echo "<td>".$tbl[$i][$j]."</td>";
                                        }
                                    }else{
                                        if($j != 1){
                                            echo "<td>".$tbl[$i][$j]."</td>";
                                        }else{
                                            echo "<td>".$tbl[$i][$j]."</td>";
                                        }
                                    }
                                }
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
