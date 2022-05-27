
<link rel='stylesheet' type='text/css' href='style.css'>

<?php 
include 'db_connection.php';
$sql ='SELECT * from adeltests WHERE breite < 350 ';

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table style=background-color:#fcfcfc;margin:200px auto>";
            echo "<tr>";
                echo "<th style=width:400px >p_abmessung </th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" .'['. $row['name'] .']'.'['.$row['hoehe'].']'.'x'. "</td>";
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
    <a href="index.php">zurück</a>
</div> 