       
       <!--++++++++++++++++++++++++++++++++++++-->

         <!---Verbindungsseite zum Server-->

       <!--++++++++++++++++++++++++++++++++++++-->


      <!--höher Aufruf der CSS-Datei -->
      <link rel='stylesheet' type='text/css' href='style.css'>

<?php

      //Definition aller Variablen für die Verbindung zum Server und  Datenbank 

      /////////////////////////////
      $dbhost = "localhost";   // Server Name
      $dbuser = "root";       // Benutzer Name
      $dbpass = "";          // Passwort
      $db = "pimbase";      //Datenbank Name
      ////////////////////////



      
      /////////////////////////////
      /*$dbhost = "188.68.61.223";   // Server Name
      $dbuser = "plan";       // Benutzer Name
      $dbpass = "5sZqMmBXu";          // Passwort
      $db = "pimbase";  */    //Datenbank Name
      ////////////////////////



      $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
             // Wählen Sie die Zieldaten aus Datenbank aus
               ///////////////////////////////////////////////////////////////////////
               $sql ='SELECT p_hoehe,p_breite,p_laenge,(p_hoehe * p_breite * p_laenge) as p_flaeche,p_testpreis1,testpreis2 ,(p_testpreis1 + testpreis2) as p_gesamtpreis from adeltest_eingang where p_hoehe < 1500 and p_testpreis1 <>"" and testpreis2<>""';
               $sql1 ='SELECT DISTINCT p_hoehe,p_breite,p_laenge,(p_hoehe * p_breite * p_laenge) as p_flaeche,p_testpreis1,testpreis2 ,(p_testpreis1 + testpreis2) as p_gesamtpreis from adeltest_eingang where p_hoehe < 1500 and p_testpreis1 <>"" and testpreis2<>""';
            /////////////////////////////////////////////////////////////////////////

            // Wählen Sie die Zieldaten aus Datenbank aus
               ///////////////////////////////////////////////////////////////////////
               $sql2 ='SELECT p_hoehe,p_breite,p_laenge,(p_hoehe * p_breite * p_laenge) as p_flaeche,p_testpreis1,testpreis2 ,(p_testpreis1 + testpreis2) as p_gesamtpreis from adeltest_eingang where p_breite < 350 and p_testpreis1 <>"" and testpreis2<>""';
               $sql3 ='SELECT DISTINCT p_hoehe,p_breite,p_laenge,(p_hoehe * p_breite * p_laenge) as p_flaeche,p_testpreis1,testpreis2 ,(p_testpreis1 + testpreis2) as p_gesamtpreis from adeltest_eingang where p_breite < 350 and p_testpreis1 <>"" and testpreis2<>""';
            /////////////////////////////////////////////////////////////////////////

      function CloseCon($conn)    //um die Verbindung nach Beendigung der Arbeit zu schließen
      {
      $conn -> close();
      }
      
?>