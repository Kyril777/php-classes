<?php
/* Create an extended class that shuffles a word by amending the method. A practice in polymorphism.*/
class Word
{
  public function formatWord($message)
  {
    return printf("%s", $message);
  }
}
class ShuffleWord extends Word
{
  public function formatWord($message)
  {
    return printf("%s", str_shuffle($message));
  }
}
$message = new Word();
$message->formatWord('pneumonoultramicroscopicsilicovolcanoconiosis '); // prints "pneumonoultramicroscopicsilicovolcanoconiosis" 
$message = new ShuffleWord();
$message->formatWord('pneumonoultramicroscopicsilicovolcanoconiosis'); // prints "ciaulonnocesnicoiuorsicolontolmopicsprcavsmoi"
