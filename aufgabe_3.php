

<?php 
include 'db_connection.php';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Holen Sie sich Daten aus der Abfrage und zeigen Sie sie im Browser an, indem Sie die Wiederholungsdaten anzeigen

if($result = mysqli_query($conn, $sql2)){
    if(mysqli_num_rows($result) > 0){
        echo "<table style=background-color:#fcfcfc>";
            echo "<tr>";
            echo "<th>p_breite</th>";
                echo "<th style=width:400px >p_abmessung </th>";
            echo "</tr>";
            $counter=0;
        while($row = mysqli_fetch_array($result)){
            if($counter>0){
                echo "<tr>";
                echo "<td>" . $row['p_breite'] . "</td>";
                echo "<td>" .'['. $row['p_hoehe'] .']'.' X '.'['.$row['p_breite'].']'.' X '.'['.$row['p_laenge'].']'. "</td>";
                echo "</tr>";
            }
           $counter+=1;  
        }
     /////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
}
 


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////Daten aus der Abfrage abrufen und im Browser anzeigen, ohne die Wiederholungsdaten anzuzeigen


if($result = mysqli_query($conn, $sql3)){
    if(mysqli_num_rows($result) > 0){
        echo "<table style=background-color:#fcfcfc>";
            echo "<tr>";
            echo "<th>p_breite</th>";
                echo "<th style=width:400px >p_abmessung </th>";
            echo "</tr>";
            $counter=0;
        while($row = mysqli_fetch_array($result)){
            if($counter>0){
                echo "<tr>";
                echo "<td>" . $row['p_breite'] . "</td>";
                    echo "<td>" .'['. $row['p_hoehe'] .']'.' X '.'['.$row['p_breite'].']'.' X '.'['.$row['p_laenge'].']'. "</td>";
                echo "</tr>";
            }
           $counter+=1;  
        }        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "Es wurden keine Datensätze gefunden, die Ihrer Abfrage entsprechen.";
    }
} else{
    echo "FEHLER: Konnte nicht ausgeführt werden $sql3. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>

<!--Zurück zur MainSeite-->
<div class="link">
    <a href="index.php">zurück</a>
</div> 