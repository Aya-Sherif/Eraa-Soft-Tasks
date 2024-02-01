<?php 

class Str
{
  
    public function __construct(private string $string )
    { }
private $functions=[
    "upper"=>"strtoupper",
    "lower"=>"strtolower",
    "ucf"=>"ucfirst",
    "ucw"=>"ucwords",
    "repeat"=>"str_repeat",
    "length"=>"strlen"
];
    
public function __call(string $method,array $args )
{
if (!array_key_exists($method,$this->functions))
{
 throw new BadMethodCallException();    
}
$args=[$this->string,...$args];
return call_user_func_array($this->functions[$method],$args);
}
}