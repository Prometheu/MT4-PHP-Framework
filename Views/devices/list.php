<div class="container">
    <div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<a class="list-group-item list-group-item-action active" style="color: white; margin-top: 5%;">  Here is a list of all Devices  </a>
                </div>
                <div class="panel-body"> 
					<?php
						echo "<table class='table table-hover' style='width:100%;margin-top: 5%;'>";
						echo "<tr>
								<th> ID </th>
								<th> Hostname </th>
								<th> IP </th>
								<th> Type </th>
								<th> Manufacturer </th>
								<th> Model </th>
								<th> Active </th>
								<th> Register Date </th>
								<th> Last Update Date </th>
							   </tr>";
						for ($i=0; $i < sizeof($devices); $i++) { 

							echo "<tr>";	
							for ($j=0; $j < sizeof($devices[$i]); $j++) { 
								echo "<td>".$devices[$i][$j]."</td>";
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
