<?php
  class Employee {
    public function getEmployeeTask(string $userId): array {
      // Return empty array if employee has no task.
      return [];
    }
  }

  $employee = new Employee();
  $tasks = $employee->getEmployeeTask('Report.');

  // Iterate through the array.
  foreach ($tasks as $task) {
    echo $task . PHP_EOL;
  }

  if(empty($task)) {
    echo "No tasks found." . PHP_EOL;
  }
  
// No tasks found.
// Why? 
