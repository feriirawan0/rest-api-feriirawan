<?php 

// $mahasiswa =[[
//     "nama"  => " Feri Irawan",
//     "nim" => "12891820102",
//     "email" => "feri@gmail.com"
// ],
// [
//     "nama"  => " Feri Irawan",
//     "nim" => "12891820102",
//     "email" => "feri@gmail.com"
// ]
// ];


$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);



$data = json_encode($mahasiswa);
echo $data;

?>