<?php

include('includes/database.php');
include('includes/config.php');
include('includes/functions.php');
secure();

include('includes/header.php');



?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
           <h3 class="display-1">Dashboard</h3>
           <a href="users.php">Users Management</a> | 
           <a href="posts.php">Posts Management</a>
        </div>
    </div>
</div>



<?php

include('includes/footer.php');
?>