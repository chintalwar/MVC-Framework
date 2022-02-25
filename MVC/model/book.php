<!-- Hello Suhasini I am included with book :) -->
<?php
   
   //class created for the book
   Class Book{

         public $title;
         public $author;
         public $discription;

         //here creating the constructor to amke the class dynamic
         public function __construct($title,$author,$discription){
             $this->title       = $title;
             $this->author      = $author;
             $this->discription = $discription;
         }
        }
   

?>