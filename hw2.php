<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
</head>
<body>
    
    <?php

    // 1. Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
        echo strlen("Xin chào Diệu Linh!");

    // 2. Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
        echo str_word_count("Xin chào Diệu Linh!");

    // 3. Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
        echo strrev("Xin chào Diệu Linh!");

    // 4. Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
        // Chuỗi cần tìm kiếm
        $string = "Xin chào Diệu Linh!"; 
        // Chuỗi con cần tìm
        $substring = "Diệu";
        
        // Sử dụng hàm strpos() để tìm vị trí của chuỗi con
        $position = strpos($string, $substring);
        
        // Kiểm tra kết quả và hiển thị thông báo
        if ($position !== false) {
            echo "Chuỗi con '" . $substring . "' được tìm thấy tại vị trí: " . $position;
        } else {
            echo "Chuỗi con '" . $substring . "' không được tìm thấy trong chuỗi.";
        }
        
    // 5. Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
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

    // 6. Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
        // Chuỗi cần kiểm tra
        $string = "Xin chào Diệu Linh!";
        // Chuỗi con cần kiểm tra
        $substring = "Xin chào";

        // Sử dụng hàm strncmp() để kiểm tra xem chuỗi có bắt đầu bằng chuỗi con không
        if (strncmp($string, $substring, strlen($substring)) === 0) {
            echo "Chuỗi bắt đầu bằng '" . $substring . "'.";
        } else {
            echo "Chuỗi không bắt đầu bằng '" . $substring . "'.";
        }

    // 7. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
        echo strtoupper("Xin chào Diệu Linh!");

    // 8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
        echo strtolower("Xin chào Diệu Linh!");

    // 9. Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
        echo ucwords("xin chào diệu linh!");

    // 10. Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
        echo "'" . trim("   Xin chào Diệu Linh!   ") . "'";

    // 11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
        // Chuỗi cần loại bỏ ký tự đầu tiên
        $string = "Xin chào Diệu Linh!";

        // Sử dụng hàm ltrim() để loại bỏ ký tự đầu tiên
        $trimmedString = ltrim($string, $string[0]);

        // Hiển thị kết quả
        echo "Chuỗi sau khi loại bỏ ký tự đầu tiên là: " . $trimmedString;

    // 12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
        // Chuỗi cần loại bỏ ký tự cuối cùng
        $string = "Diệu Linh!";

        // Sử dụng hàm rtrim() để loại bỏ ký tự cuối cùng
        $trimmedString = rtrim($string, $string[strlen($string) - 1]);

        // Hiển thị kết quả
        echo "Chuỗi sau khi loại bỏ ký tự cuối cùng là: " . $trimmedString;

    // 13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
        // Chuỗi cần tách
        $string = " Xin chào Diệu Linh";

        // Dấu phân cách
        $delimiter = " ";

        // Sử dụng hàm explode() để tách chuỗi thành mảng
        $array = explode($delimiter, trim($string));

        // Loại bỏ các phần tử rỗng
        $array = array_filter($array);

        // Hiển thị kết quả
        print_r($array);

    // 14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
        // Mảng cần nối
        $array = array("Xin", "chào", "Diệu", "Linh");

        // Dấu phân cách
        $delimiter = " ";

        // Sử dụng hàm implode() để nối các phần tử của mảng thành một chuỗi
        $string = implode($delimiter, $array);

        // Hiển thị kết quả
        echo "Chuỗi sau khi nối các phần tử của mảng là: " . $string;

    // 15. Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
        // Chuỗi gốc
        $string = "Diệu Linh";

        // Chuỗi cần thêm vào cuối
        $addition = " Xin chào";

        // Độ dài của chuỗi sau khi thêm
        $length = strlen($string) + strlen($addition);

        // Sử dụng hàm str_pad() để thêm chuỗi vào cuối
        $paddedString = str_pad($string, $length, $addition, STR_PAD_RIGHT);

        // Sử dụng hàm str_pad() để thêm chuỗi vào đầu
        $paddedString = str_pad($string, $length, $addition, STR_PAD_LEFT);

        // Hiển thị kết quả
        echo "Chuỗi sau khi thêm vào cuối là: " . $paddedString;

        echo "Chuỗi sau khi thêm vào đầu là: " . $paddedString;

    // 16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr()
        // Chuỗi cần kiểm tra
        $string = "Xin chào Diệu Linh";

        // Chuỗi con cần kiểm tra
        $substring = "Diệu Linh";

        // Kiểm tra xem chuỗi có kết thúc bằng chuỗi con không
        if (substr($string, -strlen($substring)) === $substring) {
            echo "Chuỗi kết thúc bằng '" . $substring . "'.";
        } else {
            echo "Chuỗi không kết thúc bằng '" . $substring . "'.";
        }
    
    // 17. Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
        // Chuỗi cần kiểm tra
        $string = "Diệu Linh là một nhà lập trình viên";

        // Chuỗi con cần tìm
        $substring = "nhà lập trình";

        // Sử dụng hàm strpos() để kiểm tra sự tồn tại của chuỗi con
        if (strpos($string, $substring) !== false) {
            echo "Chuỗi chứa '" . $substring . "'.";
        } else {
            echo "Chuỗi không chứa '" . $substring . "'.";
        }

    // 18. Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
        // Chuỗi cần thay thế
        $string = "Xin chào Diệu Linh sinh ngày 17/09";

        // Ký tự thay thế
        $replacement = "#";

        // Biểu thức chính quy để tìm tất cả các ký tự không phải chữ cái hoặc số
        $pattern = "/[^a-zA-Z0-9]/";

        // Sử dụng hàm preg_replace() để thay thế các ký tự không phải chữ cái hoặc số
        $modifiedString = preg_replace($pattern, $replacement, $string);

        // Hiển thị kết quả
        echo $modifiedString;

    // 19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
        // Chuỗi cần kiểm tra
        $string = "123";

        // Chuyển đổi chuỗi thành số nguyên
        $number = (int)$string;

        // Kiểm tra xem số đã chuyển đổi có phải là số nguyên không
        if (is_int($number) && strval($number) === $string) {
            echo "'" . $string . "' là một số nguyên.";
        } else {
            echo "'" . $string . "' không phải là một số nguyên.";
        }

    // 20. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
        // Chuỗi cần kiểm tra
        $email = "linh1709@gmail.com";

        // Kiểm tra xem chuỗi có phải là một email hợp lệ không
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "'" . $email . "' là một email hợp lệ.";
        } else {
            echo "'" . $email . "' không phải là một email hợp lệ.";
        }

    ?>

</body>
</html>
