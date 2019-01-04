<?php

   include('../include/connection.php');
    
   if (isset($_POST['update']))
   {
      $id      = htmlentities($_POST['id']);
      $address = htmlentities($_POST['address']);
      $email   = htmlentities($_POST['email']);
      $contact = htmlentities($_POST['contact']);

      mysqli_query($con, "UPDATE tblcontactusinfo SET Address = '$address', EmailId = '$email', ContactNo = '$contact' WHERE id = '$id'")or die(mysqli_error()); ?>

      <script>
      window.location="../dashboard.php";
      </script>

<?php } ?>