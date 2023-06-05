
Mảng(Array) là một cấu trúc dữ liệu quan trọng trong PHP cho phép lưu trữ nhiều giá trị trong một biến duy nhất.
Mỗi giá trị trong mảng được gọi là một phần tử và được xác định bằng một chỉ số duy nhất.

    - Mảng chỉ số (indexed array) trong PHP là một loại mảng trong đó các phần tử được xác định bằng một chỉ số số nguyên duy nhất. 
        Chỉ số bắt đầu từ 0 và tăng dần theo thứ tự.

    - Mảng kết hợp (associative array) trong PHP là một loại mảng mà các phần tử được xác định bằng các khóa (key) thay vì chỉ số 
        số nguyên như trong mảng chỉ số. Mỗi khóa trong mảng kết hợp được gắn liền với một giá trị tương ứng.

    - Mảng đa chiều (multidimensional array) trong PHP là một mảng chứa các mảng khác làm phần tử của nó.
         Mỗi mảng con trong mảng đa chiều được gọi là một chiều của mảng đa chiều. Các mảng con có thể có cùng kích thước hoặc khác nhau.


<?php

//MẢNG CHỈ SỐ
// Khai báo một mảng chỉ số chứa danh sách các số nguyên
$numbers = [10, 20, 30, 40, 50];

// Truy cập và in ra giá trị của một phần tử trong mảng chỉ số
echo $numbers[0]; // Output: 10
echo $numbers[2]; // Output: 30

// Thay đổi giá trị của một phần tử trong mảng chỉ số
$numbers[3] = 45;
echo $numbers[3]; // Output: 45

// Đếm số phần tử trong mảng chỉ số
$length = count($numbers);
echo $length; // Output: 5

// Lặp qua tất cả các phần tử trong mảng chỉ số
foreach ($numbers as $number) {
    echo $number . " ";
}
// Output: 10 20 30 45 50

//-------------------------------------------------------------------------//

//MẢNG KẾT HỢP
// Khai báo một mảng kết hợp chứa thông tin về một người
$person = [
    "name" => "sƠN",
    "age" => 25,
    "gender" => "NAM"
];

// Truy cập và in ra giá trị của một phần tử trong mảng kết hợp
echo $person["name"]; // Output: John
echo $person["age"]; // Output: 25

// Thay đổi giá trị của một phần tử trong mảng kết hợp
$person["age"] = 30;
echo $person["age"]; // Output: 30

// Đếm số phần tử trong mảng kết hợp
$length = count($person);
echo $length; // Output: 3

// Lặp qua tất cả các phần tử trong mảng kết hợp
foreach ($person as $key => $value) {
    echo $key . ": " . $value . " ";
}
// Output: name: John age: 30 gender: Male

//--------------------------------------------------------------------------//


//MẢNG ĐA CHIỀU
// Khai báo một mảng đa chiều chứa thông tin về các sinh viên
$students = [
    ["Sơn", 20, "Nam"],
    ["Hà", 22, "Nữ"],
    ["Vũ", 19, "Nam"]
];

// Truy cập và in ra giá trị của một phần tử trong mảng đa chiều
echo $students[0][0]; // Output: Sơn
echo $students[1][1]; // Output: 22

// Thay đổi giá trị của một phần tử trong mảng đa chiều
$students[2][2] = "Nữ";
echo $students[2][2]; // Output: Nữ

// Lặp qua tất cả các phần tử trong mảng đa chiều
foreach ($students as $student) {
    foreach ($student as $value) {
        echo $value . " ";
    }
    echo "\n";
}
// Output:
// Sơn 20 Nam
// Hà 22 Nữ
// Vũ 19 Nam



?>