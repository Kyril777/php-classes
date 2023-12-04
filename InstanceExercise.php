<?php
// The 'new static()' returns the instance of the parent class in fact itself. The 'new self()' returns the instance in the child class.
class Model {
	public static function newStaticInstance(): static {
		return new static();
	}

	public static function newSelfInstance(): self {
		return new self();
	}
	
	public function getTableName(): string {
		return 'User (parent)';
	}
}

class Users extends Model {
	public function getTableName(): string {
		return 'User2 (child)';
	}

}

echo Users::newSelfInstance()->getTableName(); // User (parent)
echo Users::newStaticInstance()->getTableName(); // Output: User2 (child)
