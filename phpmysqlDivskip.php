<?php

$servername = "localhost";
$username = "";
$password = "";
$dbname = "";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
$row = $ip['id']; 
$row = $ip['quote'];  
$row = $ip['topic'];
$row = $ip['author'];
$nr = 0;


$sql = "SELECT * FROM quotes ORDER BY date DESC limit 10";
$result = $conn->query($sql);

$chngrow=0;

if ($result->num_rows > 0) {



     while($row = $result->fetch_assoc() ) {
         $nr++;

   $chngrow = $chngrow + 1;

          echo  
        "<div class='container row'>
          <div class='col s12 m6 l4 z-depth-1'>
          <div class='card-panel grey darken-4 white-text center'><h5>Citat: ". $row["id"] ."</h5></div> <pre class='flow-text black-text' wrap='soft'>" ."<p class=''>Författare: ". $row["author"] ."</p>" 
          . "<p class=''>Citat: ". $row["quote"] ."</p>" .  $row["topic"] ."</pre>

        <div class='content_wrapper'>
    <h4>Vote </h4> 

        <div class='voting_wrapper' id='". $row["id"] ."'>
            <div class='voting_btn'>
                <div class='up_button'>&nbsp;</div><span class='up_votes'>0</span>
            </div>
            <div class='voting_btn'>
                <div class='down_button'>&nbsp;</div><span class='down_votes'>0</span>
            </div>
             <br>
        </div>


        </div>
        </div>
</div>";

          $mod = ($chngrow % 3);
          echo ($mod==0) ? "<br>" : "";

}
 }else {
     echo "0 results";
}

$conn->close();
?> 
