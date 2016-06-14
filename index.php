<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        print_r($_POST);
        /* echo "Bang Nguyen checking"."<br>";
        // put your code here
        if(isset($_POST['name'])){
          //  echo "Bang Nguyen checking"."<br>";
        print_r($_POST['name']);
          */
        $content = "BangNguen";
         file_put_contents('http://192.168.1.193',$content);
        //}
        ?>
    </body>
</html>
