<?php

class Home extends Controller
{
    function index()
    {
        $rows = array();
        $db = new Database();
        $data = $db->query("SELECT * FROM admins");

        $this->view('admins', 'test',  array('rows' => $data));
    }

}
?>