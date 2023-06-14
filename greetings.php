<?php
abstract class Greeting {
  abstract protected function prefixName($name);
}

class NameGreeting extends Greeting {

  public function prefixName($name, $greeting = "", $punctuation = "!") {
    if ($name == "Wilhelm Rontgen") {
      $greeting = "Guten Tag, ";
    } elseif ($name == "Hugo Drax") {
      $greeting = "Bonjour, ";
    } else {
      $greeting = "Hello, ";
    }
    return "{$greeting} {$name} {$punctuation}";
  }
}

$class = new NameGreeting;
echo $class->prefixName("Wilhelm Rontgen");
echo "<br>";  
echo $class->prefixName("Jane Doe");
?>
