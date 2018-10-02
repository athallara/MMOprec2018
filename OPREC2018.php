/*---------------------------------------

OPREC PROGRAMMING 2018 - MULTIMEDIA LAB
        ATHALLA RIZKY ARSYAN
            130 118 445 1
       INFORMATIKA - 42 - 09

----------------------------------------*/

<?php

// 1. PROGRAM MENENTUKAN BILANGAN GANJIL/GENAP

$bilangan = 5;
echo $bilangan % 2 == 0 ? $bilangan. ' adalah genap.' : $bilangan. ' adalah ganjil.';

// 2. PROGRAM ARITMATIKA MATRIKS 2X2

$arr  = array(1,2);
$arr2 = array(3,4);
$row  = count($arr);
$col  = count($arr2);
//PENJUMLAHAN & PENGURANGAN
for($i=0; $i<$row;$i++){
    echo $temp[$i] = $arr[$i] + $arr2[$i] . ' ';  //UNTUK PENGURANGAN, HANYA TINGGAL MENGUBAH OPERASI (+) --> (-) 
}


//PERKALIAN
$temp=array();
for($i=0; $i<$row; $i++){
    $temp[$i]=0;
    for($j=0; $j<$col; $j++){
        $temp[$i] += $arr[$j] * $arr2[$i]; 
    }
}
print_r($temp); //HASIL BERUPA ARRAY

//PERPANGKATAN
$temp=array();
for($i=0; $i<$row; $i++){
    $temp[$i]=0;
    for($j=0; $j<$col; $j++){
        $temp[$i] += pow($arr[$j],$arr2[$i]); 
    }
}
print_r($temp); //HASIL BERUPA ARRAY

// 3. PROGRAM ARITMATIKA MATRIKS 2X2
$nim = "1301184451";
echo $universitas = substr($nim,0,1) .' : menyatakan kode universitas <br>' ;
echo $fakultas = substr($nim,1,3) .' : menyatakan kode fakultas <br>';
echo $jurusan = substr($nim,4,1) .' : menyatakan kode jurusan <br>';
echo $angkatan = substr($nim,5,1) .' : menyatakan kode angkatan <br>';
echo $mahasiswa = substr($nim,6) .' : menyatakan kode nomor mahasiswa <br>';



?>
