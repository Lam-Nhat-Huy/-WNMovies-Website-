<?php

class WatchingController extends Controller
{
    public function index()
    {
        $this->view('ClientMasterView', [
            'pages' => '/client/WatchingClientView',
        ]);
    }
}
