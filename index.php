<?php
$conn = new mysqli('localhost', 'root', '', 'contact_form');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $conn->query("INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')");
    echo "Message saved!";
}
$messages = $conn->query("SELECT * FROM messages");
?>
<form method="POST">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Message: <textarea name="message"></textarea><br>
    <button type="submit">Send</button>
</form>
<h2>Messages:</h2>
<ul>
    <?php while ($msg = $messages->fetch_assoc()): ?>
        <li><?php echo $msg['name'] . ": " . $msg['message']; ?></li>
    <?php endwhile; ?>
</ul>
