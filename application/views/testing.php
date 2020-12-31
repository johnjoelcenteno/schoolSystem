<h1>Hello world testing curd</h1>

<form action="" method="post">
    <label for="">Full name</label><br>
    <input type="text" placeholder="Enter Name" name="fullname"><br><br>

    <label for="">Email</label><br>
    <input type="text" placeholder="Enter Name" name="email"><br><br>

    <label for="">Mobile number</label><br>
    <input type="text" placeholder="Enter Name" name="mobile_number"><br><br>

    <label for="">address</label><br>
    <input type="text" placeholder="Enter Name" name="address"><br><br>

    <label for="">credentials</label><br>
    <input type="text" placeholder="Enter Name" name="credentials_id"><br><br>

    <input type="hidden" name="table" value="users">

    <button type="submit">Submit</button>
</form>

<script>
    $(document).ready(function() {
        alert('hello world');
    });
</script>