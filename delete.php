<?php

use phpDocumentor\Reflection\Location;

include 'baza.php';

$select = 'select * from table1';
$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
      ?> <html><table id='table'><tr> <?php echo 'Id: ' . $row['id'] . '<br>Brend: ' . $row['brend'] . '<br> Parfem: ' . 
       $row['parfem'] . '<br>Kolicina: ' . $row['kolicina'] . '<br>'; ?> 
       
        <p>Selektuj da obrises: <form method='POST' action=''>
            <input type='checkbox'  name='mirko[]' value='<?php echo $row['id']; ?>' ></input></p></tr></table></html>
        <?php 
    }
}
else {
    echo 'No data in table!';
}
?>
<html>Potvrdi brisanje  <input type='submit' name='delete' id='delete' value='Obrisi' ></input></form>
<br><br><a href='unos.html'>Nazad na unos podataka</a></html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<?php
#include 'baza.php';

if(isset($_POST['delete'])){
    $checkboxRecords = count($_POST['mirko']);
    #echo $checkboxRecords;

    #$i=0;
    for( $i=0; $i<$checkboxRecords; $i++ ){

        $keyToDelete = $_POST['mirko'][$i];
        mysqli_query($conn, "DELETE FROM table1 WHERE id = '$keyToDelete' ");
        #$i++;   
        
    }
        header('Location:delete.php'); #refresh page   
}


mysqli_close($conn);

?>