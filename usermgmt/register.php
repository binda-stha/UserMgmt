<?php  session_start();

include "./header.php";
echo isset($_SESSION['msg']) ? $_SESSION['msg'] : "";
?>
    <div class="form-box">
        <h1>Register user</h1>

    <form action="./insert.php" method="POST" name="user_form" enctype="multipart/form-data" >
    <div class="field-group">
        <label for="fname">Fullname</label>
        <input type="text" id="fname" name="fullname" value="">
</div>
<div class="field-group">
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" value="">
</div>
    <div class="field-group">
        <label for="uname">Username/Email</label>
        <input type="text" id="uname" name="username" value="">
</div>
<div class="field-group">
        <label for="pwd">Password</label>
        
        <input type="text" id="pwd" name="password" value="">
</div>
<div class="field-group">
        <label for="cpwd">Confirm Password</label>
        <input type="text" id="cpwd" name="cpassword" value="">
</div>
<div class="field-group">
        <label for="photo">Photo</label>
        <input type="file" id="photo" name="photo" value="">
</div>

<button type="submit" name="submit" class="btn">Sign up </button>

</form>
</div>
<?php include "./footer.php";
session_destroy(); ?>