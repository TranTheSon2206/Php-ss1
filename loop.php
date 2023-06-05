Vòng lặp for sử dụng biến đếm và định rõ điều kiện lặp.
Vòng lặp while sử dụng điều kiện lặp để kiểm tra và tiếp tục lặp cho đến khi điều kiện trở thành sai.
Vòng lặp do-while cũng sử dụng điều kiện lặp, nhưng kiểm tra điều kiện sau mỗi vòng lặp, đảm bảo ít nhất một vòng lặp sẽ được thực hiện trước khi kiểm tra điều kiện.
Vòng lặp foreach  sẽ lặp các giá trị và khoá trong mảng, chúng ta không có gắn điều kiện hay số lần lặp gì cả mà nó sẽ lặp khi nào hết mảng thì thôi.

<?php

for ($x = 0; $x <= 20; $x++) {
    echo "$x <br>";
}
/*$x = 0 : Dữ liệu cần lặp, do nó chưa có giá trị nên mình gán nó là 0.
$x <= 20 : Điều kiện lặp, ví dụ này nghĩa là nó sẽ lặp đến khi nào $x nhỏ hơn hoặc bằng 20.
$x++ : Toán tử đếm khi vòng lặp thực hiện, $x++ nó giống như $x + 1, tức là tăng 1 giá trị mỗi chu kỳ lặp.*/

//--------------------------------------------------------------//

$x = 1;
while ( $x <= 20) {
    $x++;
    echo "$x <br>";
}
/* lặp cho đến khi $x nhỏ hơn hoặc bằng 20  */

//--------------------------------------------------------------//

$x = 0;
do {
    $x++;
    echo "$x <br>";
} while ( $x <= 20 );
/*Cái vòng lặp này thì cũng tương tự while mà thôi, nhưng nó sẽ thực hiện các đoạn code trước rồi mới kiểm tra điều kiện sau. */

//---------------------------------------------------------------//

$colors = ["Red", "Green", "Blue"];

foreach ($colors as $color) {
    echo $color . " ";
}
//Kết quả: Red Green Blue


?>