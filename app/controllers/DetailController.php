<?php
class DetailController extends Controller
{
    public function index()
    {
        $this->view('ClientMasterView', [
            'pages' => '/client/DetailClientView',
        ]);
    }
}
