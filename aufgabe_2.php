
<link rel='stylesheet' type='text/css' href='style.css'>

<?php 
include 'db_connection.php';
$sql ='SELECT id,name,address ,(hoehe * breite * laenge) as falche ,(preis_1 + preis_2) as gesamtpreis from adeltests WHERE hoehe > 1500';

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>address</th>";
                echo "<th>falche</th>";
                echo "<th>gesamtpreis</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['falche'] . "</td>";
                echo "<td>" . $row['gesamtpreis'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>
<div class="link">
    <a  style="margin:auto auto" href="index.php">zurück</a>
</div>   