<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
</head>
<body>
    
    <?php
    // Chuỗi gốc
    $originalString = "Chào mừng Việt Nam";
    
    // Chuỗi con cần thay thế và chuỗi thay thế
    $search = "Việt Nam";
    $replace = "Diệu Linh";
    
    // Thay thế chuỗi con
    $updatedString = str_replace($search, $replace, $originalString);
    
    // Hiển thị kết quả
    echo "Chuỗi gốc: " . $originalString . "<br>";
    echo "Chuỗi sau khi thay thế: " . $updatedString;
    ?>

</body>
</html>
