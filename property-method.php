<?php

class T_Komputer {
    public  $nama = "nama",
            $kelas = "kelas",
            $nim = 0;
    public function sayHello(){
        return "Komputer Bisa!!";
    }
}
$Mhs1 = new T_Komputer();
$Mhs1->nama = "Vanza Arya";
$Mhs1->kelas = "Kelas F";
$Mhs1->nim = 19040134;

echo "Mahasiswa : $Mhs1->nama, $Mhs1->kelas, $Mhs1->nim";
echo "<br>";
echo $Mhs1->sayHello();
echo "<br>";

$Mhs2 = new T_Komputer();
$Mhs2->nama = "Rafi Gunawan";
$Mhs2->kelas = "Kelas F";
$Mhs2->tambahProperty = "orang pemalang";
$Mhs2->nim = 19040179;

echo "Mahasiswa : $Mhs2->nama, $Mhs2->kelas, $Mhs2->nim";
echo "<br>";
echo $Mhs2->sayHello();
echo "<br>";

$Mhs3 = new T_Komputer();
$Mhs3->nama = "Galur Pangestu";
$Mhs3->kelas = "Kelas F";
$Mhs3->nim = 19040086;

echo "Mahasiswa : $Mhs3->nama, $Mhs3->kelas, $Mhs3->nim"; 
echo "<br>";
echo $Mhs3->sayHello();
?>