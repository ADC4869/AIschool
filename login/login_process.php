<?php
// Kết nối tới cơ sở dữ liệu
include '../database/db_config.php';

// Bắt đầu phiên làm việc
session_start();

// Kiểm tra xem dữ liệu từ form có được truyền vào không
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Kiểm tra dữ liệu nhập vào
    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Vui lòng nhập tên đăng nhập và mật khẩu!";
        header("Location: login.php");
        exit;
    }

    // Câu truy vấn để lấy thông tin người dùng bao gồm ID
    $query = "SELECT id, password, role, fullname, dob, gender FROM users WHERE cccd = ?";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        // Bind giá trị username
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Lấy ID, mật khẩu đã mã hóa và vai trò của người dùng
            $user = $result->fetch_assoc();
            $user_id = $user['id'];
            $hashed_password = $user['password'];
            $role = $user['role'];
            $fullname = $user['fullname'];
            $dob = $user['dob'];
            $gender = $user['gender'];

            // Kiểm tra mật khẩu bằng password_verify
            if (password_verify($password, $hashed_password)) {
                // Kiểm tra mã giáo viên (nếu có)
                if ($role == 'teacher' && empty($_POST['teacher_code'])) {
                    $_SESSION['error'] = "Vui lòng nhập mã giáo viên!";
                    header("Location: login.php");
                    exit;
                }
                
                // Lưu thông tin người dùng vào session
                $_SESSION['user_id'] = $user_id;
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $role;
                $_SESSION['fullname'] = $fullname;
                $_SESSION['dob'] = $dob;
                $_SESSION['gender'] = $gender;
                $_SESSION['teacher_code'] = $_POST['teacher_code'] ?? '';

                // Chuyển hướng đến trang home.php với tham số role
                header("Location: ../home.php?role=" . urlencode($role));
                exit;
            } else {
                $_SESSION['error'] = "Tên đăng nhập hoặc mật khẩu không đúng!";
                header("Location: login.php");
                exit;
            }
        } else {
            $_SESSION['error'] = "Tên đăng nhập hoặc mật khẩu không đúng!";
            header("Location: login.php");
            exit;
        }
    } else {
        $_SESSION['error'] = "Lỗi trong quá trình chuẩn bị câu truy vấn: " . $conn->error;
        header("Location: login.php");
        exit;
    }
} else {
    $_SESSION['error'] = "Vui lòng nhập tên đăng nhập và mật khẩu!";
    header("Location: login.php");
    exit;
}
?>