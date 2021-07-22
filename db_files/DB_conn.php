<?php

	/*DB Connection -> user -- pass -- DB */
    $conn = mysqli_connect('<host>', '<user>', '<pass>', '<db>');
        if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                //exit the script, if there is an error
                exit();
            }

