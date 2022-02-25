<?php
   
   require_once "model/model.php";
   //creating the controller class 
   class Controller{

     //creating Model variable for creating object for the model class
     public $model;
     
     //creating the constructor for the controller class
     public function __construct(){

        $this->model = new Model();
     }
     public function invoke(){
              
        //cheaking condition here
        if(!isset($_GET['book'])){
               $books = $this->model->getBookDetailed();
               require_once "./view/bookList.php";
        }else{
               $book =  $this->model->getBook($_GET['book']);
               require_once "./view/viewBook.php";
        }
     }
   }

?>