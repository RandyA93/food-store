<?php
Class Pages extends Controller{
    private $employeeModel;

    public function __construct(){
        $this->employeeModel = $this->model("Employee");
    } 
    public function index(){
        $data = [
            "title" => "home"
        ];
        $this->view("pages/index", $data);
    }
    public function about(){
        $employees = $this->employeeModel->getEmployees();
        $data = [
            "title" => "about"
            ,"employees"=>$employees
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