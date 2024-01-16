<?php

class BlogController extends Controller
{
    public function index()
    {
        $this->view('ClientMasterView', [
            'pages' => '/client/BlogClientView',
        ]);
    }
}
