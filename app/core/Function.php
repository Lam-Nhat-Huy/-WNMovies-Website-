<?php
// Hàm format tiền Việt Nam
function currency_format($number, $suffix = 'đ')
{
    if (!empty($number)) {
        return number_format($number, 0, ',', '.') . "{$suffix}";
    }
}

// Khi đăng nhập mới được chuyển trang
function checkLogin()
{
    if (!isset($_SESSION['authentication']) || $_SESSION['authentication'] != true) {
        header('Location: /admin/');
    }
}

// Khi đăng nhập mới được dùng database
function canActive(){
    if ($_SESSION['exp'] > time()) {
        return true;
    } else {
        echo  '<div class="alert alert-danger">Vui lòng đăng nhập để sử dụng chức năng này</div>';
    }
}

// Hàm hiển thì thời gian khi thêm một cái mới
function calculateTimeDifference($timestamp)
{
    $currentTimestamp = time();
    $difference = $currentTimestamp - $timestamp;

    $seconds = $difference;
    $minutes = round($difference / 60);
    $hours = round($difference / 3600);
    $days = round($difference / 86400);

    if ($seconds < 60) {
        return $seconds . " seconds ago";
    } elseif ($minutes < 60) {
        return $minutes . " minute ago";
    } elseif ($hours < 24) {
        return $hours . " hours ago";
    } elseif ($days < 30) {
        return $days . " days ago";
    } else {
        $months = round($days / 30);
        $years = round($days / 365);
        if ($months < 12) {
            return $months . " last month";
        } else {
            return $years . " last year";
        }
    }
}

function alertSuccess($message) {
    return "
           <script>
                    Swal.fire({
                        title: 'Thành công!',
                        text: '. $message .',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 15000
                    });
                </script>               
           ";
}

function alertError(){
    return "
           <script>
                    Swal.fire({
                        title: 'Không thành công!',
                        text: 'Công chiếu phim không thành công',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 15000
                    });
                </script>               
           ";
}