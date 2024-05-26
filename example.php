<?php
include_once("stopwords/autoload.php");
//You can choose to include autoload.php or just include your specific library here such as class.stopwords.php in your project

//example of removing stop words from a sentence:
print("<hr>English example <p>");
$sentence="james is a good boy"; # a simple sentence

$newsentence=new stopwords($sentence);

echo $newsentence->results;


print("<p><hr>French example:<p>");
$sentence_in_french="James est un bon garçon";




$newsentence_in_french=new stopwords($sentence_in_french," ","french");
echo $newsentence_in_french->results; //stop words removed

print("<hr>");

$obj=new stopwords();
$languages=$obj->language_meta;
foreach($languages as $key=>$value){
	print($value."<br>");
}




?>