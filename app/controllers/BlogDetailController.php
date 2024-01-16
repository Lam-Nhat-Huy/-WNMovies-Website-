<?php

class BlogDetailController extends Controller
{
    public function index()
    {
        $this->view('ClientMasterView', [
            'pages' => '/client/BlogDetailClientView',
        ]);
    }
}
