Câu lệnh if-else trong PHP được sử dụng để kiểm tra một điều kiện và thực hiện các hành động khác nhau dựa trên kết quả của điều kiện đó.
 đây là cú pháp của câu lệnh if-else trong PHP:

       if (condition) {
            // Thực hiện các hành động khi điều kiện là true
        } else {
            // Thực hiện các hành động khi điều kiện là false
        }


<?php
 $score = 85;
    if ($score >= 90) {
        echo "Điểm số là $score. Bạn đạt hạng A.";
    } elseif ($score >= 80) {
        echo "Điểm số là $score. Bạn đạt hạng B.";
    } elseif ($score >= 70) {
        echo "Điểm số là $score. Bạn đạt hạng C.";
    } else {
        echo "Điểm số là $score. Bạn chưa đạt hạng đủ điều kiện.";
    }
    
?>
