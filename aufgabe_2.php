

<?php 
include 'db_connection.php';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Holen Sie sich Daten aus der Abfrage und zeigen Sie sie im Browser an, indem Sie die Wiederholungsdaten anzeigen

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>p_hohehe</th>";
                echo "<th>p_breite</th>";
                echo "<th>p_laenge</th>";
                echo "<th>p_flaeche</th>";
                echo "<th>p_testpreis1</th>";
                echo "<th>p_testpreis_2</th>";
                echo "<th>p_gesamtpreis</th>";
            echo "</tr>";
            $counter=0;
        while($row = mysqli_fetch_array($result)){
            if($counter >0){
            echo "<tr>";
                echo "<td>" . $row['p_hoehe'] . "</td>";
                echo "<td>" . $row['p_breite'] . "</td>";
                echo "<td>" . $row['p_laenge'] . "</td>";
                echo "<td>" . $row['p_flaeche'] . "</td>";
                echo "<td>" . $row['p_testpreis1'] . "</td>";
                echo "<td>" . $row['testpreis2'] . "</td>";
                echo "<td>" . $row['p_gesamtpreis'] . "</td>";
            echo "</tr>";
            }
            $counter+=1;
        }
        
        echo "</table>";
     /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////7   
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
///////////////////////////////////////////////////////////////////////////////////////////////// 
//Daten aus der Abfrage abrufen und im Browser anzeigen, ohne die Wiederholungsdaten anzuzeigen

if($result = mysqli_query($conn, $sql1)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>p_hohehe</th>";
                echo "<th>p_breite</th>";
                echo "<th>p_laenge</th>";
                echo "<th>p_flaeche</th>";
                echo "<th>p_testpreis1</th>";
                echo "<th>p_testpreis_2</th>";
                echo "<th>p_gesamtpreis</th>";
            echo "</tr>";
            $counter=0;
        while($row = mysqli_fetch_array($result)){
            if($counter >0){
            echo "<tr>";
                echo "<td>" . $row['p_hoehe'] . "</td>";
                echo "<td>" . $row['p_breite'] . "</td>";
                echo "<td>" . $row['p_laenge'] . "</td>";
                echo "<td>" . $row['p_flaeche'] . "</td>";
                echo "<td>" . $row['p_testpreis1'] . "</td>";
                echo "<td>" . $row['testpreis2'] . "</td>";
                echo "<td>" . $row['p_gesamtpreis'] . "</td>";
            echo "</tr>";
            }
            $counter+=1;
        }
     //////////////////////////////////////////////////////////////////////////////////////////////77777777   
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "Es wurden keine Datensätze gefunden, die Ihrer Abfrage entsprechen.";
    }
} else{
    echo "FEHLER: Konnte nicht ausgeführt werden $sql1. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>

<!--Zurück zur MainSeite-->
<div class="link">
    <a  style="margin:auto auto" href="index.php">zurück</a>
</div>   