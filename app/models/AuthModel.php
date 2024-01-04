<?php
require_once './library/jwt/vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthModel extends Database
{
    public function login($username, $password)
    {
        try {
            $secret_key = '85ldofi';
            $sql = "SELECT * FROM users WHERE username = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('s', $username);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if (password_verify($password, $row['password'])) {
                    $_SESSION['authentication'] = true;
                    $payload =[
                        'user_id' => $row['id'],
                        'username' => $row['username'],
                        'email' => $row['email'],
                        'role' => $row['role_id'],
                        'exp' => time() + 2300,
                    ];

                    $jwt = $this->encode($payload, $secret_key);
                    $decoded = JWT::decode($jwt, new Key($secret_key, 'HS256'));
                    $_SESSION['user_id'] = $decoded->user_id;
                    $_SESSION['username'] = $decoded->username;
                    $_SESSION['email'] = $decoded->email;
                    $_SESSION['role'] = $decoded->role;
                    $_SESSION['exp'] = $decoded->exp;

                    echo '<script>localStorage.setItem("jwt_token_admin", "' . $jwt . '");window.location.href = "/dashboard/";</script>';
                    exit();
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function encode($payload, $secret_key, $alg = 'HS256')
    {
        try {
            $encode = JWT::encode($payload, $secret_key, $alg);
            return $encode;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function setTimeLogout()
    {
        if ($_SESSION['exp'] < time()) {
            return $this->logout();
        }
    }

    public function logout()
    {
        if (isset($_SESSION['authentication'])) {
            session_destroy();
            $_SESSION = [];
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"],
                    $params["secure"], $params["httponly"]
                );
            }
            echo '<script>localStorage.clear();window.location.href = "/admin/";</script>';
            exit();
        }
    }
}
