<?php
include "connect.php";

$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql);
?>

<?php if(mysqli_num_rows($result)) {?>
<table>
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
    </thead>
    <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)) {?>    
<!-- dynamic row -->
        <tr>
            <td> <?php echo $row["id"]; ?> </td>
            <td> <?php echo $row["stu_name"]; ?> </td>
            <td> <?php echo $row["stu_email"]; ?> </td>
            <td> <?php echo $row["stu_password"]; ?> </td>
            <td>
                <button class="edit_btn" data-id="<?php echo $row["id"]; ?>">Edit</button> 
                <button class="delete_btn" data-id="<?php echo $row["id"]; ?>">Delete</button>
            </td>
        </tr>

    <?php } ?>    
    </tbody>
</table>
<?php } ?>