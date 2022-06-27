<?php require 'connection.php'; 

$id = $_GET['id'];

?>

<?php require './partials/header_view.php';  ?>


<div class="ch_pw">
    <h1>Change password :</h1>
</div>

<div class="ch_pw_sett">
    <div class="ch_pw_sett_staffs">
        <form action="new_password.php?id=<?php echo $id ?>" method="post" >
        <h4>Your new password :</h4>
        <input type="password" placeholder="New password" name="new_pass" >
        <button type="submit"  name="btn">Change password</button>
        </form>
    </div>
</div>


<?php require './partials/footer_view.php'; ?>