<?php


class NewA extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $data = [];
        $arrivalsModel = new NewArrivals;
        $data = $arrivalsModel-> findAll();
        $this->view('home',$data,'NewArrivals');
    }
    
}

