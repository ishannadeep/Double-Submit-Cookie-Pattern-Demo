<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 if ($_POST['userName'] == "ishan" && $_POST['password'] == "ishan123") {
        
       $Name = $_POST['userName'];
     
       $cookie= $_COOKIE["user"];

       echo  $cookie;
        header("Location: form.html"); /* Redirect browser */
        
 }
  ?>