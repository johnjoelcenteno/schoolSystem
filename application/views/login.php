<h1>Login page</h1>

<form action="" method="post">
    <?= validation_errors("<p>") ?>
    <label for="">Username</label><br>
    <input type="text" name="username" placeholder="Enter username" autocomplete="off"><br><br>

    <label for="">Username</label><br>
    <input type="password" name="password" placeholder="Enter password" autocomplete="off"><br><br>

    <button type="submit">Login</button>
</form>