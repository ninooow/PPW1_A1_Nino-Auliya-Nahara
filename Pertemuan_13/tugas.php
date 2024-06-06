<?php 
    $fruits = array("Apple", "Banana", "Orange", "Mango");
    $vegetables = array("Carrot", "Spinach", "Cabbage", "Mustard");
    $cek = array("Carrot", "Apple", "Mango", "Spinach", "Orange", "Cabbage", "Mustard", "Banana");
    foreach ($cek as $wht){
        if(in_array ($wht,$fruits)){
            echo "$wht is a fruit. <br>";
        }else if (in_array ($wht,$vegetables) ){
            echo "$wht is a vegetable. <br>";
        }
    }

    echo "<br><br>";
    echo "<br><br>";
    echo "<br><br>";

    $students = array(
        array("Nafi", "Informatika", 685),
        array("Nino", "Matematika", 700),
        array("Dwi", "Statistika", 715),
        array("Isa", "Teknik Sipil", 730),
    );
    for ($row = 0; $row<4; $row++){
        if($students[$row][2]>700){
            echo "Selamat Anda diterima menjadi mahasiswa " . $students[$row][1] . ". <br>";
        }else{
            echo "Mohon maaf Anda tidak diterima menjadi mahasiswa " . $students[$row][1] . ". <br>";
        }
    }


?>