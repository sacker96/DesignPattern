<?php
// Lớp gốc
class Baokim {
 
    public function __construct() {
        // Hàm khởi tạo
    }
 
    public function sendPayment($amount){
        // Code xử lý gửi thanh toán tại đây
        echo $amount;
    }
}
 
// Tạo một interface để các adapter không có quyền đổi tên hàm 
interface paymentAdapter{
    public function pay($amount);
}
 
// Lớp adapter sử dụng
class baokimAdapter implements paymentAdapter{
    private $__baokim;
    public function __construct(Baokim $baokim) {
        $this->__baokim = $baokim;
    }
     
    public function pay($amount){
        $this->__baokim->sendPayment($amount);
    }
}
 
// Cách dùng
$baokimAdapter = new baokimAdapter(new Baokim());
$baokimAdapter->pay(1234);

// thay doi ten ham sendPayment thoai mai ma khong so phai sua nhieu lan.