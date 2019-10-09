<?php

	/*Conexão DB -> user -- pass -- DB */
    $conn = mysqli_connect('localhost', 'root', 'abc', 'isilon');
        if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                //exit the script, if there is an error
                exit();
            }

/*    $sql2pages = "Select * from access";

    $sql2logs = "SELECT * FROM audit ORDER BY MODIFIED ASC ";

     $query2 = "SELECT * FROM access
		WHERE  EXPORT LIKE '%".$search."%'
		  OR DNS LIKE '%".$search."%' 
		  OR OUTBOUND LIKE '%".$search."%' 
		  OR ISILON LIKE '%".$search."%' 
		 ";
*/