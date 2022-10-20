<?php
// Định nghĩa namespace theo tên thư mục từ ngoài vào trong;
namespace App\Models;

// Đây là model base chứa các phương thức để truy vấn
// VD: where, join,...
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Gán bảng cho đối tượng
    protected $table = 'categories';
    protected $primaryKey = 'id';

    public $timestamps = false;
}
