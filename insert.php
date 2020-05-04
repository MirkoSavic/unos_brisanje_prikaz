<?php
include 'baza.php';

if(isset($_POST['submit'])){
$brend = $_POST['brend'];
$parfem = $_POST['parfem'];
$kolicina = $_POST['kolicina'];
$unos = "INSERT INTO table1 (brend, parfem, kolicina) VALUES ('$brend', '$parfem', '$kolicina')"; 
if(mysqli_query($conn,$unos)){
    echo 'Data inserted succesfuly';
}else{
    echo 'Error: ' . $unos . ':=' . mysqli_error($conn);
}

mysqli_close($conn);

}
?>
<!doctype html>
<html>
    <br><br><a href='unos.html'>Nazad na unos podataka</a>
</html>