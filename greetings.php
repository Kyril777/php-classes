<?php
/* PHP class that greets guests per their citizenship. Default greeting  is "hello." */
abstract class Greeting {
  abstract protected function prefixName($citizenship);
}

class GreetingName extends Greeting {
  public function prefixName($citizenship, $name = "", $punctuation = "!") {
    if ($citizenship == "German") {
      $greeter = "Guten Tag, ";
    } elseif ($citizenship == "French") {
      $greeter = "Bonjour, ";
    } else {
      $greeter = "Hello, ";
    }
    return "{$greeter} {$name}{$punctuation}";
  }
}

$class = new GreetingName;
echo $class->prefixName("German", "Condrad Veidt"); // Guten Tag, Condrad Veidt!
echo "<br>";  
echo $class->prefixName("French", "Antoine Lavoisier"); // Bonjour, Antoine Lavoisier!
echo "<br>";  
echo $class->prefixName("", "Giles Corey"); // Hello, Giles Corey!
