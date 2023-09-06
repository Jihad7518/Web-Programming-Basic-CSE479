
<!-- You are creating a user registration system. Define a class named User that has properties for
username, email, and password. Implement methods to set and get these properties securely.
Additionally, add a method to display the user's information. -->

<?php
class User {
    private $username;
    private $email;
    private $password;

    public function setUsername($username) {
        // Add validation logic here if needed
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setEmail($email) {
        // Add validation logic here if needed
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setPassword($password) {
        // Add validation logic here if needed
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }

    public function displayInfo() {
        echo "Username: " . $this->getUsername() . "\n";
        echo "Email: " . $this->getEmail() . "\n";
        // Note: It's generally not a good practice to display passwords in the user info.
        // You might want to omit the password or display a placeholder instead.
    }
}

// Example usage:
$user = new User();
$user->setUsername("john_doe");
$user->setEmail("john@example.com");
$user->setPassword("my_secure_password");



$user->displayInfo();
?>
