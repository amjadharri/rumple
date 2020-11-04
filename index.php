<?php
require_once('config/db.php'); //database file included
$db = new connect(); 

include 'include/header.php'; //header file included

require_once('config/operations.php');

$db = new operations();
$result = $db->fetch_record();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Rumple Test Task</h1>
        </div>
        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
            <table class="table table-bordered table-responsive table-striped">
                <thead class="bg-primary">
                    <tr>
                        <th>Id</th>
                        <th colspan="2">Name</th>
                        <th>Teams</th>
                    </tr>
                </thead>

                <tbody>
                    <?php     
                    while($row = mysqli_fetch_assoc($result)) { 
                        ?>
                        <tr>
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['team']; ?></td>
                        </tr>

                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- container closes here -->

<?php include 'include/footer.php'; ?>