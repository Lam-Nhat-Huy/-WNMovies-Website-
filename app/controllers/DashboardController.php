<?php
class DashboardController extends Controller {

    protected $DashboardModel;
    protected $AuthModel;

    public function __construct()
    {
        $this->DashboardModel = $this->model('DashboardModel');
        $this->AuthModel = $this->model('AuthModel');
        checkLogin();
    }

    public function index(){
        $setTimeLogout = $this->AuthModel->setTimeLogout();
        $this->view('AdminMasterView', [
            'pages' => '/admin/DashboardAdminView',
        ]);
    }
}