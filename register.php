<?php
$pageTitle = "register";
require "doctype.template.php"
?>
<h1>Register</h1>
<body>
<form action="register.submit.php" method="post">
    <div>
        <label for="">Name</label>
        <input type="text" required name="nom">
    </div>
    <div>
        <label for="">Password</label>
        <input type="password" required name="password">
    </div>
    <div>
        <label for="">E-Mail</label>
        <input type="email" required name="mail">
    </div>
    <button type="submit">Register</button>
</form>
<a href="index.php">Go to index.</a>
</body>
