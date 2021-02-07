<?php
require_once "vendor/autoload.php";
session_start();

$data = !empty($_SESSION['data']) ? unserialize($_SESSION['data']) : [];

if (isset($_POST['captcha'])) {
    if ($_POST['captcha'] === $_SESSION['captcha']) {
        $_SESSION['captcha'] = null;
        $data[] = $_POST;
        $_SESSION['data'] = serialize($data);
        header('Location: /');
        exit;
    } else {
        die('Error');
    }
}
?>
<html>
<head></head>
<body>
<div>
    <h1>List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Questions</th>
        </tr>
    <?php for ($i = 0;  $i < count($data); $i++) { ?>
        <tr>
            <td><?=htmlspecialchars($data[$i]['name'])?></td>
            <td><?=htmlspecialchars($data[$i]['email'])?></td>
            <td><?=htmlspecialchars($data[$i]['questions'])?></td>
        </tr>
    <?php } ?>
    </table>
    <h1>Contact Us</h1>
    <form method="post" action="">
        <label>Your Name <input type="text" name="name"/></label><br/>
        <label>Your Email <input type="text" name="email"/></label><br/>
        <label>
            Enter numbers from the image <img src="captcha.php" alt="Captcha"/>:
            <input type="text" name="captcha"/>
        </label><br/>
        <label>
            Your Questions:
            <textarea name="questions"></textarea>
        </label><br/>
        <button type="submit">Send</button>
    </form>
</div>
</body>
</html>
