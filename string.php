Trong PHP, chuỗi (string) là một loại dữ liệu được sử dụng để lưu trữ và xử lý các dãy ký tự. PHP hỗ trợ nhiều loại chuỗi và cung cấp các hàm và phương thức để làm việc với chuỗi.
Dưới đây là một số loại chuỗi phổ biến trong PHP và ví dụ minh họa:

    - Chuỗi đơn (single-quoted string): Được bao quanh bởi dấu nháy đơn ('...'). Trong chuỗi đơn,
        các biến và các ký tự đặc biệt sẽ không được xử lý, nghĩa là chúng sẽ được hiển thị như chuỗi gốc.
    
    - Chuỗi kép (double-quoted string): Được bao quanh bởi dấu nháy kép ("..."). Trong chuỗi kép, các biến 
    và các ký tự đặc biệt sẽ được xử lý và giá trị của biến sẽ được chèn vào chuỗi.

    - Heredoc: Được đặt trong cặp dấu <<< và ký tự định danh, heredoc cho phép xây dựng một chuỗi đa dòng mà không cần truyền biến hoặc xử lý các ký tự đặc biệt.

    - Nowdoc: Tương tự như heredoc, nowdoc cho phép xây dựng một chuỗi đa dòng nhưng không xử lý biến hoặc ký tự đặc biệt.


<?php

//Chuỗi đơn (single-quoted string)
$name = 'John';
echo 'Hello, $name'; // Output: Hello, $name


//Chuỗi kép (double-quoted string)
$name = 'John';
echo "Hello, $name"; // Output: Hello, John


//Heredoc
$name = 'John';
$message = <<<EOT
Hello, $name!
This is a multi-line string.
EOT;

echo $message;
/*
Output:
Hello, John!
This is a multi-line string.
*/



//Nowdoc
$name = 'John';
$message = <<<'EOT'
Hello, $name!
This is a multi-line string.
EOT;

echo $message;
/*
Output:
Hello, $name!
This is a multi-line string.
*/
?>


Một số hàm phổ biến để xử lý chuỗi trong PHP:

- strlen(): Trả về độ dài của một chuỗi.
<?php
    $str = "Hello";
    $length = strlen($str); // Output: 5    
?>

- strtolower(): Chuyển đổi chuỗi thành chữ thường.
<?php 
    $str = "HEllo";
    $newStr = strtolower($str); // Output: hello
?>

- strtoupper(): Chuyển đổi chuỗi thành chữ hoa.
<?php
    $str = "Hello, World!";
    $newStr = str_replace("World", "PHP", $str); // Output: Hello, PHP!    
?>

- substr(): Trích xuất một phần của chuỗi dựa trên vị trí và độ dài.
<?php
    $str = "Hello, World!";
    $subStr = substr($str, 7, 5); // Output: World    
?>

- strpos(): Tìm vị trí đầu tiên của một chuỗi con trong chuỗi.
<?php
    $str = "Hello, World!";
    $position = strpos($str, "World"); // Output: 7    
?>

- explode(): Phân tách chuỗi thành một mảng các phần tử dựa trên một ký tự phân tách.
<?php
    $str = "Apple, Banana, Orange";
    $array = explode(", ", $str); // Output: ['Apple', 'Banana', 'Orange']
?>

- implode(): Ghép một mảng các phần tử thành một chuỗi bằng cách sử dụng một ký tự ngăn cách.
<?php
    $array = ['Apple', 'Banana', 'Orange'];
    $str = implode(", ", $array); // Output: Apple, Banana, Orange    
?>