<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TITLE</title>
    <meta name="description" content="DESCRIPTION">
   <link rel="stylesheet" href="PATH">

    <!--[if lt IE 9]>
      <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<h1>PHP test page</h1>

<?php


$pic = false;

$path = "/test/img/";

// test
$folder = opendir($path);

while(false !== ($file = readdir($folder))){

   $fileName = $path.$file;

   $info = pathinfo($path.$file);
   $ext = strtolower($info['extension']);

 $allowed =array("jpg","bmp","png","gif");

   if(filetype($fileName) == "file"){

       if(in_array($ext,$allowed)){
           echo"
           <div style='display:inline-block'>

           <img src='/img/$file' style='width:96px;height:70px;' title='Filename: $file'>
           </div>
           ";

           $pic = true;
           }
       }

   }

 //  error check
if($pic == false){
   echo "There are no images in $path";
   }


/*
$dir = "/test/img/*.jpg";

$images = glob( $dir );

var_dump($images);
foreach( $images as $image ):
   echo "<img src='" . $image . "' />";
endforeach;
*/


?>






</body>

</html>
