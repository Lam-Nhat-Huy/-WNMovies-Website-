<?php
class AdminController extends Controller
{

    protected $AuthModel;

    public function __construct()
    {
        $this->AuthModel = $this->model('AuthModel');
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
                $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                $this->AuthModel->login($username, $password);
            } else {
                return false;
            }
        }
        $this->view('AuthMasterView', [
            'pages' => '/admin/AuthLoginView',
        ]);
    }

    public function logout()
    {
        $this->AuthModel->logout();
    }

}
