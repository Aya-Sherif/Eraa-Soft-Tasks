<?php 


class HtmlElemnt{
    private $attributes=[];
public function __construct(private $tag)
{}
public function __set(string $name, string $value)  
{
$this->attributes[$name]=$value;
} 
 public function renderElement($innerHrml='')
 {
$html="<{$this->tag} ";
foreach($this->attributes as $name=>$value )
{
$html .=''.$name.'="'.$value.'" ';
}
$html.=">";
 $html.=$innerHrml;
 $html.="</{$this->tag}>";
 return $html;
 }
public function getAttributes()
{
    var_dump($this->attributes); 
}
} 