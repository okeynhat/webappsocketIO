<!--Đây là thư viện chứa các hàm để thực thi các hành động 
trong PHP thuần theo một chuẩn nào đó và nhanh, ngắn gọn hơn.-->

<?php
 
// Hàm điều hướng trang
class Redirect {
    public function __construct($url = null) {
        if ($url)
        {
            echo '<script>location.href="'.$url.'";</script>';
        }
    }
}
 
?>