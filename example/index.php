<?php

require_once '../SimpleOMRPHP.php';



$mappath = __DIR__ . DIRECTORY_SEPARATOR . 'examv1.json';
$imagepath = __DIR__ . DIRECTORY_SEPARATOR . 'examx0.jpg';
$debugfilepath = __DIR__ . DIRECTORY_SEPARATOR . '';
$debugfilename = 'debugexample.jpeg';


try{
$exam = new SimpleOMRPHP($mappath,$imagepath,28,$debugfilepath,$debugfilename);
}catch(Exception $e){
    echo $e->getMessage();
}



renderView($exam->getResult());



function renderView($output){

echo 
    "<html>
        <head>
        <meta charset='UTF-8'>
        </head>
        <body>


        <pre>";
        var_dump($output);

}
?>





