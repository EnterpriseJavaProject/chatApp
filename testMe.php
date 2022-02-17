<?php

$connection = pg_connect("host=ec2-3-212-143-188.compute-1.amazonaws.com port=5432 dbname=dfmlibde0ugb8m user=zvgmbzipahfthh password=4d0f3e0f3b2857779e9a29cc9ad00865670b7970d3a8bedf8a495d7158d5440ff");



if($connection)
{

echo "connected";

}
else{

echo "Database connection error".mysqli_connect_error();

}

        ?>







