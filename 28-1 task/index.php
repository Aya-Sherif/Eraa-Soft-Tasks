<?php require_once "HtmlElemnt.php"?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$head=new HtmlElemnt("h1");
$head->id="name";
$head->class="text-center border";
// $head->getAttributes(); 
echo $head->renderElement("this is the first content from htmlemt class");
$head=new HtmlElemnt("p");
$head->id="hamada-paragraph";
$head->class="text-right bordar p-3";
// $head->getAttributes(); 
echo $head->renderElement("this is the first content from paragraph class");
 

?>
   <h1 class="text-center border" id="head"> Content </h1> 
</body>
</html>