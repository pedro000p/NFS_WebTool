<?php

/*DB_connection*/
require "db_files/DB_conn.php";


/*DB_Queries*/
require "db_files/DB_queries.php";


?>

<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       <!-- ICON LIB -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="node_modules/datatables.net-select-bs4/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="node_modules/datatables.net-buttons-bs4/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="css/datatables_checkboxes.css">
    <link type="text/css" rel="stylesheet" href="css/custom.css"/> 


    

    <!-- <script src="js/datatables_custom.js"></script> -->
        <!-- FAVICON -->
    <link rel="icon" type="image/png" sizes="24x24" href="img/favicon/icons8-administrative-tools-filled-24.png">


    <title>Isilon Admin</title>
  </head>
  <body>
   
 
    <div class="container">
        <div class="jumbotron text-center pt-3 pb-2 mt-4 mb-3" id="jumbotron">
         <h1 class="display-4 ">ISILON</h1>
         <i class="badge badge-pill badge-secondary">WebTool Version: 1.1.2</i>
         
         <hr class="my-8">
         <p>NFS Resources</p>
         <!-- <i class="badge badge-pill badge-white">NFS Resources</i> -->
         <!--    -->
        </div>

     
  
        <!-- NAVBAR to select Isilon DB tables -->
       <nav class="navbar navbar-dark bg-dark rounded pos-f-t">
          <div class="btn-toolbar text-right mb-1 mt-1" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group-sm" role="group" aria-label="First group">
              <span class=" ml-2" style="color: #bdc1bd;">Isilon DB ➡ Choose Table ➡ </span>
              <button title="Access, main table from DB - Active" type="button" class="btn btn-sm btn-success" onclick="window.location.href='index.php'">Access</button>
              <button title="Exports table from DB" type="button" class="btn btn-sm btn-secondary" onclick="window.location.href='exports.php'">Exports</button>
              <button title="Clients table from DB" type="button" class="btn btn-sm btn-secondary "onclick="window.location.href='clients.php'">Clients</button>
            </div>
        </div>
        <button title="Reload page/table" type="button" class="btn btn-sm btn-secondary mr-2" style="background-color: #44445e; color: white;" onclick="window.location.reload()"><i class="fa fa-refresh"></i></button>

      </nav>
      <?php
        /*NAV BARs*/
        require "navs_upper.php";

        ?>

    <table id="myTable" class="table table-hover table-bordered table-striped rounded">
      
        
     
      <thead class="thead-dark text-center rounded">
        <tr class="rounded">
          <th>
           <span class="btn btn-info bg-transparent text-white" id="myTable_btn">
                <i class="fa fa-square"></i>  
                </span>
          </th>
          <th scope="col">EXPORT</th>
          <th scope="col">DNS</th>
          <th scope="col">OUTBOUND</th>
          <th scope="col">ISILON</th>
        </tr>
      </thead>
      <tbody>
      
          <?php

         /*POPULATE TABLE WITH DB DATA */
         $result = mysqli_query($conn, $sql2access);
         if($result):
            if(mysqli_num_rows($result) == 0){
                  $output = "No search results";
                } else {
                    while($row = mysqli_fetch_assoc($result)){ ?>
                      <tr class="paginate text-center">
                        <td>
      
              </td>
                        <!-- In this case we have this rows. You can change to your convenience -->
                        <td><?php echo $row['EXPORT']?></td>
   
                        <td><?php echo $row['DNS']?></td>

                        <td><?php echo  $row['OUTBOUND']?></td>
              
                        <td><?php echo $row['NFS']?></td>
                      </tr>
        <?php 
            }
          }
        
        endif;

       ?>

    </tbody>
  
    <tfoot class="thead-dark text-center rounded">
       <tr>
          <th>
     
          </th>
          <th scope="col">EXPORT</th>
          <th scope="col">DNS</th>
          <th scope="col">OUTBOUND</th>
          <th scope="col">NFS</th>
        </tr>
    </tfoot>
    </table>

     <?php
      /*NAV BARs LOGS*/
      require "navs_upper2.php";
   
      ?>

    
    <div> <!-- close container --> 
      
 

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!-- Datatables JS with jquery.dataTables.js first -->
    <script src="node_modules/datatables/media/js/jquery.dataTables.js"></script>
    <script src="node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="node_modules/datatables.net-select-bs4/js/select.bootstrap4.js"></script>
    <script src="node_modules/datatables.net-select/js/dataTables.select.js"></script>
    <script src="node_modules/datatables.net-buttons/js/dataTables.buttons.js"></script>
    <!-- <script src="js/datatables_checkboxes.js"></script> -->
    <script src="node_modules/datatables.net-buttons/js/buttons.html5.js"></script>
    <script src="node_modules/datatables.net-buttons/js/buttons.colVis.js"></script>
    <script src="node_modules/datatables.net-buttons/js/buttons.flash.js"></script>
    <script src="node_modules/datatables.net-buttons/js/buttons.print.js"></script>
    <script src="node_modules/datatables.net-buttons-bs4/js/buttons.bootstrap4.js"></script>
    <script src="node_modules/pdfmake/build/pdfmake.js"></script>
    <script src="node_modules/pdfmake/build/vfs_fonts.js"></script>
    <script src="node_modules/jszip/dist/jszip.js"></script>
  
    
    <!-- Custom Datatables JS  -->
    <script src="js/datatables_custom_main.js"></script>
    

<!-- Append class to datatables element after load -->
<script type="text/javascript">
   $(document).ready(function() {

    document.getElementById('myTable_info').className += ' font-italic';

  });


</script>



  </body>
</html>
