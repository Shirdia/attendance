<?php 
    $title = "Index";
    require_once "includes/header.php";
    require_once "db/conn.php";

    $results = $crud->getAttendees();
?>

    <table class="table">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Email Address</th>
            <th>Contact Number</th>
            <th>Specialty</th>
            <th>Actions</th>
        </tr>
        <?php while ($r = $results->fetch(PDO::FETCH_ASSOC) ){?>
            <tr>
                <td><?php echo $r['attendee_id']?></th> </td>
                <td><?php echo $r['firstname']?>1</th> </td>
                <td><?php echo $r['lastname']?>1</th> </td>
                <td><?php echo $r['dateofbirth']?>1</th> </td>
                <td><?php echo $r['emailaddress']?>1</th> </td>
                <td><?php echo $r['cintactnumber']?>1</th> </td>
                <td><?php echo $r['specialy_id']?>1</th> </td>
                <td><a href="view.php?id=<?php echo $r['attendee_id']?>" class="btn btn-primary">view</a></td>
        </tr>

        <?php }?>
       
    </table>
<br>
<br>
<br>

<?php require_once "includes/footer.php" ?>