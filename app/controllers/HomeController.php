<?php
class HomeController extends Controller
{

    protected $HomeModel;

    public function __construct()
    {
        $this->HomeModel = $this->model('HomeModel');
    }

    public function index()
    {
        $this->view('ClientMasterView', [
            'pages' => '/client/HomeClientView',
        ]);
    }
}
