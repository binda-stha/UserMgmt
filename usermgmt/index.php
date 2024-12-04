<?php include "./header.php";?>
    <div class="form-box">
        <h1>Login user</h1>

    <form action="./login_controller.php" method="POST" name="user_form" >
    <div class="field-group">
        <label for="uname">Username/Email</label>
        <input type="text" id="uname" name="username" value="">
</div>
<div class="field-group">
        <label for="pwd">Password</label>
        <input type="password" id="pwd" name="password" value="">
</div>
<button type="submit" name="submit" class="btn">Login </button>

</form>
</div>
<?php include "./footer.php";?>