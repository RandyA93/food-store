<?php
Class Pages extends Controller{
    private $postModel;

    public function __construct(){

    } 
    public function index(){

        $data = [
            "title" => "home"
        ];
        $this->view("pages/index", $data);
    }
    public function about(){
        $data = [
            "title" => "about"


        ];
        $this->view("pages/about", $data);
    }

    public function products(){
        $data = [
            "title" => "products"


        ];
        $this->view("pages/products", $data);
    }

    public function product(){
        $data = [

        ];

        $this->view("pages/product", $data);
    }
}