<?php
// Use set_exception_handler() to handle  uncaught exceptions.

function exception($exception) {
  echo "<b>Exception:</b> " . $exception->getMessage();
}

set_exception_handler('exception');

throw new Exception('Uncaught exception occurred');

// Output: <b>Exception:</b> Uncaught exception occurred
