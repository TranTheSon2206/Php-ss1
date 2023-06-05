Câu lệnh switch-case trong PHP được sử dụng để kiểm tra một biến hoặc giá trị và thực hiện các hành động khác nhau dựa trên giá trị đó.
đây là cú pháp của câu lệnh switch-case trong PHP:

    switch (expression) {
    case value1:
        // Thực hiện hành động 1
        break;
    case value2:
        // Thực hiện hành động 2
        break;
    //...
    default:
        // Thực hiện hành động mặc định nếu không có case nào khớp
        break;
}


<?php
$a = 0.5;
$check = is_int($a); // Kiểm tra $a có phải là số nguyên không
switch ($check) {
    case "true": // Nếu $a là số nguyên thì thực thi dòng lệnh bên dưới
        switch ($a) {
            case 0:
                echo "a bằng 0";
                break;
            case 2:
                echo "a bằng 2";
                break;
            case 3:
                echo "a bằng 3";
                break;
            case 4:
                echo "a bằng 4";
                break;
            case 5:
                echo "a bằng 5";
                break;
            default:
                echo "$a";
        }
        break;
    default: // Nếu $a không là số nguyên thì thực thi dòng lệnh bên dưới
        echo "a không là số nguyên";
}
?>
