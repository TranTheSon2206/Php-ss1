<?php

$sinhvien = [
    [
        "name" => "Sơn",
        "age" => 20,
        "score" => 50
    ],
    [
        "name" => "Hà",
        "age" => 22,
        "score" => 39
    ],
    [
        "name" => "Vũ",
        "age" => 19,
        "score" => 98
    ],
    [
        "name" => "Ngọc",
        "age" => 19,
        "score" => 27
    ],
    [
        "name" => "Nguyên",
        "age" => 21,
        "score" => 11
    ]
];

foreach ($sinhvien as $sinhvien) {
    $diemthi=$sinhvien["score"];
    $ten=$sinhvien["name"];
    if($diemthi<40){
        echo "$ten - Trượt";
        echo "<br>";
    }
    else{
        echo "$ten - Đỗ";
        echo "<br>";
    }
}



?>