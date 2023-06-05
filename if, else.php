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
