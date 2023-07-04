<?php
/* Use class for a library collection. */

class Collections {
  public $author = "";
  public $volumes = 0;
  public function message() {
    echo "<p>The '{$this->author}' collection has {$this->volumes} volumes.</p>" .PHP_EOL;
  }
}

$austen = new Collections();
$austen->author = "Jane Austen";
$austen->volumes = 9;

$austen->message(); // The 'Jane Austen' collection has 9 volumes.

// Extend the class to add edition(s).
class Edition extends Collections {
  use Archived;
  public $editions = "";
  public function message() {
    echo "<p>The '{$this->author}' collection has {$this->volumes} volumes and is in the {$this->editions} edition(s).</p>" .PHP_EOL;
  }
}

$britannica = new Edition();
$britannica->author = "Wagnals Britannica";
$britannica->volumes = 26;
$britannica->editions = "3rd";
 
$britannica->message(); // The 'Wagnals Britannica' collection has 26 volumes and is in the 3rd edition(s).

$encarta = new Edition();
$encarta->author = "Caldicott Bohr";
$encarta->volumes = 26;
$encarta->editions = "5th";
 
$encarta->message(); // The 'Caldicott Bohr' collection has 26 volumes and is in the 5th edition(s).

