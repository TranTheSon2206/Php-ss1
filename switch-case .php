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