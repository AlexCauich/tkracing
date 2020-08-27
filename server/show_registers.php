<?php 

include('connection.php');
$name_track = $_GET['name_track'];

$query = "SELECT lap, P.name_pilot, P.category, lap_time, P.model, P.brand, event_date, T.name_track FROM records 
INNER JOIN tracks T ON records.id_track = T.name_track
INNER JOIN pilots P ON records.id_pilot = P.id_pilot
WHERE lap_time = ANY (SELECT MIN(lap_time) FROM records WHERE lap_time > '00.01:00.00' AND T.name_track = '$name_track' GROUP BY (id_pilot)) ORDER BY lap_time ASC limit 5

    ";
$result = mysqli_query($db, $query);

?>