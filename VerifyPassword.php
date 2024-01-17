$plainPassword = "plain password";

// Hash password.
$hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);
// Store this variable in database.

// Authetnicate.
public function authenticate(): bool {
  $user = $this->authentRepository->findByUsername();

  if(!$user) {
    return false;
  }
  return password_verify($plaintextPassword, $user->getPassword());
}
