<?php
// Përpunimi i një kërkese nga një formë
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Trego të dhënat e përdoruesit (për testim)
    echo "Emri: " . htmlspecialchars($name) . "<br>";
    echo "Emaili: " . htmlspecialchars($email);
} else {
    echo "Asnjë të dhënë nuk u dërgua.";
}


?>
