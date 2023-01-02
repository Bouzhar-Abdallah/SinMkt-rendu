<?php


class Feat extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $data = [];
        $featuresModel = new Features;
        $data = $featuresModel-> findAll();
        $this->view('home',$data,'Features');
    }
    
}

