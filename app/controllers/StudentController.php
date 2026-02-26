<?php
    namespace App\Controllers;

    class StudentController
    {

         Public function index()
         {
           require_once './app/views/students/index.php';
         }
         
         Public function create()
         {
            require_once './app/views/students/create.php';
         }

    }

?>