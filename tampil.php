<?php
$json_data=file_get_contents("datapribadi.json");
$obj = json_decode($json_data);
echo "NIM : "; echo $obj->Nim;
echo "<br>";
echo "Nama : "; echo $obj->Nama;
echo "<br>";
echo "Email : "; echo $obj->Email;
echo "<br>";
echo "No_HP : "; echo $obj->No_hp;
echo "<br>";
echo "Mata Kuliah 1: ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "Mata Kuliah 2: ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "Mata Kuliah 3: ";echo $obj->mata_kuliah[2];
?>