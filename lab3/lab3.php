<?php
//$say = function($name) 
//{ echo "Hello".$name;
//};
$say ("World"); // "Hello World" function myCaller ($myCallback)
{
     echo $myCallback();
}
// // "Hello"
// myCaller( function() { echo "Hello"; } );
// $a = array(1, 2, 3, 4, 5); 
// $b = array_map (function($n)
// {
// return $n * $n * $n; }, 
// $a);
// print_r($b);
// //

// function countToFive()
// {
// yield 1; yield from [2, 3, 4];
// yield 5;
// }

// foreach (countToFive() as $v) 
// echo $v; 

//


function formatTime($inputString) {
    // Chắc chắn rằng chuỗi đầu vào có đúng định dạng 6 chữ số
    if (preg_match('/^\d{6}$/', $inputString)) {
        // Chia chuỗi thành giờ, phút và giây bằng hàm substr
        $hour = substr($inputString, 0, 2);
        $minute = substr($inputString, 2, 2);
        $second = substr($inputString, 4, 2);

        // Ghép chuỗi theo định dạng "hh:mm:ss" bằng hàm chunk_split
        $formattedTime = chunk_split("$hour$minute$second", 2, ":");
        return rtrim($formattedTime, ":"); // Loại bỏ dấu hai chấm cuối cùng
    } else {
        // Trả về null nếu đầu vào không đúng định dạng
        return null;
    }
}
// Ví dụ sử dụng
$inputString = "082307";
$formattedTime = formatTime($inputString);
if ($formattedTime !== null) {
    echo "Chuỗi đã được chuyển đổi: " . $formattedTime;
} else {
    echo "Chuỗi đầu vào không hợp lệ!";
}


