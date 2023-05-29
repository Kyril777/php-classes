<?php
/* Use class for a library collection. */
class Collections {
  public $author = "";
  public $volumes = 0;
  public function message() {
    echo "<p>The '{$this->author}' collection has {$this->volumes} volumes.</p>";
  }
}

$collection = new Collections();
$collection->author = "Jane Austen";
$collection->volumes = 9;

$collection->message(); // The 'Jane Austen' collection has 9 volumes.
