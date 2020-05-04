<?php
include 'baza.php';

$select = 'select * from table1';
$result = mysqli_query($conn, $select);
if(mysqli_num_rows($result) > 0){
while($row=mysqli_fetch_assoc($result)){
    echo 'ID: ' . $row['id'] . ' Brend: ' . $row['brend'] . ' , - Parfem: ' . $row['parfem'] . ' - kolicina u ml: ' . $row['kolicina'] . '<br>';
    }   
}

else{
    echo 'Nema podataka';
    }

mysqli_close($conn);

?>
<html><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <a href='unos.html'>Nazad na unos podataka</a></html>