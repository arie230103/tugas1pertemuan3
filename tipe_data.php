<?php
//String
$nama = 'Arie Satria';
 
echo "Hello nama saya $nama";

echo "<br>";

echo "<br></br>";

//Integer
$umur = 20;

var_dump($umur);

echo "<br></br>";

//float 
$nilai = 3.72;

var_dump($nilai);
  
echo "<br></br>";

//boolean
 
$is_student = true;

var_dump($is_student);

echo "<br></br>";

// Array Biasa
$mahasiswa1 = ["Arie", 29, 28, 3, 72, false];

var_dump($mahasiswa1[1]);

echo "<br></br>";

echo "Umur saya  $mahasiswa1[1]";

// Array Asosiatif
$mahasiswa2 = [
    "nama" =>  "Arie",
    "umur" => 19,
    "nilai" => 3.50,
    "is_active" =>  true
];

var_dump($mahasiswa2);

 echo "<br>";

 echo "Halo, saya" . $mahasiswa2['nama'];
 



