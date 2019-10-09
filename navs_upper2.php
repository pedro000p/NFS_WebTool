
<!-- NAV BAR LOGS-->
<div class="pos-f-t ">
	<div class="collapse show" id="navbarToggleExternalContent2">
		<div class="bg-white">
			<div class="card card-body pb-2 mt-2" style="max-height: 10rem; overflow-y: auto;">
		    <table style='height: 20px;'>

	        	<tbody class="p-2 rounded">
	        		

	 			<?php

	       /*POPULATE TABLE WITH DB DATA */
                $result_logs = mysqli_query($conn, $sql2Showlogs);
                if($result_logs){
                        if(mysqli_num_rows($result_logs) == 0){
                                $output_logs = "No search results";
                                }
                else {
                        while($row2 = mysqli_fetch_assoc($result_logs)){ 
                ?>
                                <tr class="">

                                <td class="align-left text-monospace" style="font-size:12px"><?php echo $row2['MODIFIED']?> ⇨&nbsp;</td>

                                <td class="align-middle text-monospace" style="font-size:12px"><?php echo $row2['ACTION']?></td>

                              </tr>
                         <?php

                                }
                                }
                                };
	 
	       		?>
	 
				</tbody>
			</table>

	

	
		 </div>
		</div>
	</div>
	<nav class="navbar  navbar-header navbar-light bg-light rounded pos-f-t" id="nav_logs">
	<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent2" aria-controls="navbarToggleExternalContent2" aria-expanded="true" aria-label="Toggle navigation">

	  <span title="Logs: See the last changes in ISILON" class="badge badge-pill badge-dark">Logs</span>

	</button>
	
	<button class="btn btn-secondary btn-sm mr-2" style="background-color: #44445e;" type="button" onClick="document.getElementById('jumbotron').scrollIntoView();" /><i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
</button>
	</nav>
</div>

	








