<?php


//Import file
require ('Dpr.php');

//Membuat list class Dpr
$arraydpr = array();

//Create Data List
$Dpr1 = new Dpr('1', 'Anies Baswedan', 'Pendidikan', 'Nasdem', 'images\image1.jpg');
array_push($arraydpr, $Dpr1);
$Dpr2 = new Dpr('2', 'Gemoy', 'Pertanian', 'Gerada', 'images\image2.jpg');
array_push($arraydpr, $Dpr2);
$Dpr3 = new Dpr('3', 'Ganjar Pranowo', 'Pertanian', 'PDIP', 'images\image3.jpg');
array_push($arraydpr, $Dpr3);



//Read list sebelum di update dan delete
echo "List sebelum Update dan Delete" . '<br><br>';
echo "Daftar Nama Dpr" . '<br>';
echo "<table border='3'>";
echo "<tr>
    <th> ID </th>
    <th> Nama </th>
    <th> Nama Bidang </th>
    <th> Nama Partai </th>
    <th> Foto </th>
    </tr>";
for($i = 0; $i < 3; $i++){
    echo "<tr><td>";
    echo $arraydpr[$i]->getID();
    echo "</td><td>";
    echo $arraydpr[$i]->getNama();
    echo "</td><td>";
    echo $arraydpr[$i]->getBidang();
    echo "</td><td>";
    echo $arraydpr[$i]->getPartai();
    echo "</td><td>";
    echo "<img src='" . $arraydpr[$i]->getFoto(). "'style='width: 200px'>";
    echo "</td>";
     echo "</tr>";
}
echo "</table>";
echo '<br><hr><br>';

//Update Data
$arraydpr[1]->setNama("Prabowo Subianto");
$arraydpr[1]->setBidang("Pertahanan");
$arraydpr[1]->setPartai("Gerindra");

//Read list setelah di update
echo "List setelah Update" . '<br><br>';
echo "Daftar Nama Dpr" . '<br>';
echo "<table border='3'>";
echo "<tr>
    <th> ID </th>
    <th> Nama </th>
    <th> Nama Bidang </th>
    <th> Nama Partai </th>
    <th> Foto </th>
    </tr>";
for($i = 0; $i < 3; $i++){
    echo "<tr><td>";
    echo $arraydpr[$i]->getID();
    echo "</td><td>";
    echo $arraydpr[$i]->getNama();
    echo "</td><td>";
    echo $arraydpr[$i]->getBidang();
    echo "</td><td>";
    echo $arraydpr[$i]->getPartai();
    echo "</td><td>";
    echo "<img src='" . $arraydpr[$i]->getFoto(). "'style='width: 200px'>";
    echo "</td>";
     echo "</tr>";
}
echo "</table>";
echo '<br><hr><br>';

//Delete Data
array_splice($arraydpr, 1, 1);
//Read list setelah di delete
echo "List setelah Delete" . '<br><br>';
echo "Daftar Nama Dpr" . '<br>';
echo "<table border='3'>";
echo "<tr>
    <th> ID </th>
    <th> Nama </th>
    <th> Nama Bidang </th>
    <th> Nama Partai </th>
    <th> Foto </th>
    </tr>";
for($i = 0; $i < 2; $i++){
    echo "<tr><td>";
    echo $arraydpr[$i]->getID();
    echo "</td><td>";
    echo $arraydpr[$i]->getNama();
    echo "</td><td>";
    echo $arraydpr[$i]->getBidang();
    echo "</td><td>";
    echo $arraydpr[$i]->getPartai();
    echo "</td><td>";
    echo "<img src='" . $arraydpr[$i]->getFoto(). "'style='width: 200px'>";
    echo "</td>";
     echo "</tr>";
}
echo "</table>";
echo '<br><hr><br>';
?>