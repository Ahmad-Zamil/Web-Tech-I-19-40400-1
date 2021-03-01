<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
   $chome=$nLogin=$rregistration="";
   $chome=$nLogin=$rregistration="";

   function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }

     ?>

     <fieldset align = "right">
      
        <h1 align="left"><b> Company</b></h1>
          <meta ><a href = "A-public home.php">Home |</a> </meta>
          <meta ><a href ="C-Log-In.php">Login |</a></meta> 
          <meta ><a href ="B-store.php">Registration </a> </meta> 
         


    
      </fieldset>
      
  </body>
</html>