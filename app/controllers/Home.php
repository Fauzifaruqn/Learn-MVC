<?php

class Home extends Controller{
    // Membuat Method default yaitu method index.
    public function index()
    {
        // Memamnggil view
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}