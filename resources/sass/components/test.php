<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php //heredoc to echo the form contingently
if (isset($_SESSION["isLoggedIn"])) {
    echo "You are already logged in donkey!";
}
else {


$theForm = <<<THEFORM
<h1>Welcome to PoundTown </h1>
    <ul>
        <li><a href="test.php">Login</a></li>
        <li><a href="protected-page.php">members area</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="log-out.php">Log out</a></li>
    </ul>
    <form method="post" action="process-form.php">
        <input type="text" placeholder="Name" name="name" class="name">
    </form>
// note theform below must be adjacent to wall
THEFORM;
    echo $theForm
}