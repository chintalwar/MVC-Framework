<?php

   include_once "book.php";

   //creating model calss to create the objects and set the value according to the title
   Class Model{

            //creating the function to create the object for the book class
            public function getBookDetailed(){
                  
                return array(
                     
                    //creating the object for the book class and return to the book class
                    "C"         => new Book ('C','Bruce Eckel','IT Book'),
                    "Success"     => new Book ('Success','Shiv Khera','Success Book'),
                    "LoveStory"   => new Book ('LoveStory','Chetan Bhagat ','Love Story Book')
                );
            }

            public function getBook($title){
                $allBookks = $this->getBookDetailed();
                return $allBookks[$title];
            }
           
   }

?>