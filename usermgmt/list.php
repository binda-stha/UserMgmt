<?php session_start();

if(!isset($_SESSION['login']) && $_SESSION['login']== false) {
    header("location: ./index.php"); //Redirect to login page
}

include "./connection.php";
$sql = "SELECT id, fullname, photo, phone, email FROM tbl_users";
$res = mysqli_query($conn, $sql);

include "./header-admin.php";



include "./header.php";?>

   <div classs="data-box">
    <h1>All user </h1>
    <table border="1" cellspacing="0" cellpadding="6">
        <thead>
            <tr>
                <th>#</th>
                <th>Fullname</th>
                <th>Photo</th>
                <th>Phone</th>
                <th>Username</th>
                <th>Action</th>
</tr>

</thead>
<tbody>
    <?php $i = 0;
     while($row = mysqli_fetch_assoc($res)):
     $i++; ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row['fullname']; ?></td>
        <td>
            <img src="./public/<?php echo $row['photo']; ?>"alt="" width="90" heoght="90">
        </td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['email']; ?></td>

        <td>
            <a href="./edit.php?id=<?php echo $row['id']; ?>" class="btn btn--small">Edit</a>
            <a href="./delete.php?id=<?php echo $row['id']; ?>" class="btn btn--small btn--danger">Delete</a>

        </td>
</tr>
<?php endwhile; ?>

     </tbody>
</table>
</div>
<?php include "./footer.php";?>

