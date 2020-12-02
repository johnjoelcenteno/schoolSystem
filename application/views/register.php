<h1>Register page</h1>

<form action="" method="post">
    <?= validation_errors("<p>") ?>
    <label for="">Username</label><br>
    <input type="text" name="username" placeholder="Username" autocomplete="off"><br><br>

    <label for="">Password</label><br>
    <input type="password" name="password" placeholder="Password" autocomplete="off"><br><br>

    <label for="">Full name</label><br>
    <input type="text" name="fullname" placeholder="Full name" autocomplete="off"><br><br>

    <label for="">Email</label><br>
    <input type="email" name="email" placeholder="Email" autocomplete="off"><br><br>

    <label for="">Mobile number</label><br>
    <input type="number" name="mobileNumber" placeholder="Mobile number" autocomplete="off"><br><br>

    <?php $register = base_url() . "Login" ?>
    <a href="<?= $register ?>">Back</a>

    <button type="submit">Register</button>
</form>