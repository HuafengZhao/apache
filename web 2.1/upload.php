
<?php
//连接数据库
include './connect.php';
//获取表单数据
$name = $_POST["product_name"];
$price = $_POST["price"];
$info = $_POST["product_description"];

// 检查文件是否上传
if(isset($_FILES['product_image'])) {
    $file_name = $_FILES['product_image']['name'];
    $file_size = $_FILES['product_image']['size'];
    $file_tmp = $_FILES['product_image']['tmp_name'];
    $file_type = $_FILES['product_image']['type'];
    // 上传三张额外的照片
    $detail_photo1 = upload_file('detail_photo1');
    $detail_photo2 = upload_file('detail_photo2');
    $detail_photo3 = upload_file('detail_photo3');
    
    // 检查文件类型，这里假设只允许上传jpeg和png格式的图片
    if(($file_type == "image/jpeg" || $file_type == "image/png") && $file_size < 5000000) {
        // 将文件从临时文件夹移动到存储文件的文件夹中
        move_uploaded_file($file_tmp, "./img/" . $file_name);        
        // 将文件路径保存到数据库中
        $path = "./img/" . $file_name;
        $sql="insert into goods (name, price, info, path, detail_photo1, detail_photo2, detail_photo3) values ( '$name', '$price','$info', '$path','$detail_photo1','$detail_photo2','$detail_photo3')";
        $res=mysqli_query($link,$sql);
        echo "PRODUCT UPLOADED SUCCESSFULLY!";
    } else {
        echo "ONLY JPEG OR PNG FILES CAN BE UPLOADED, AND THE FILE SIZE CANNOT EXCEED 5MB.";
    }
}

// 上传文件并返回文件路径
function upload_file($field_name) {
    if(isset($_FILES[$field_name])) {
        $file_name = $_FILES[$field_name]['name'];
        $file_size = $_FILES[$field_name]['size'];
        $file_tmp = $_FILES[$field_name]['tmp_name'];
        $file_type = $_FILES[$field_name]['type'];
        
        // 检查文件类型，这里假设只允许上传jpeg和png格式的图片
        if(($file_type == "image/jpeg" || $file_type == "image/png") && $file_size < 5000000) {
            // 将文件从临时文件夹移动到存储文件的文件夹中
            move_uploaded_file($file_tmp, "./img/" . $file_name);
            // 返回文件路径
            return "./img/" . $file_name;
        } else {
            return "";
        }
    } else {
        return "";
    }
}

//关闭数据库连接
mysqli_close($link);
?>

