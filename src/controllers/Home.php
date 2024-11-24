<?php

class Home extends Controller
{
    public function index($data = "") {
        $this->view('home/index', ['name' => $data]);
    }
}