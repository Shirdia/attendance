
<?php 
    $title = "Index";
    require_once "includes/header.php";
    require_once "db/conn.php";
   
    if(isset($_GET['id'])){
        $result = $_GET['id'];
        $result = $crud->getAttendeeDetails();
    } else{
        echo "<h1 class= 'text-danger'>Check details and retry</h1>";
    }
?>
<div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $result["firstname"] . " " . $result["lastname"]; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $result["specialty"]; ?>
            </h6>
            <p class="card-text">
                Date of Birth: <?php echo $result["DOB"]; ?>         
            </p>
            <p class="card-text">
                Email Address: <?php echo $result["email"]; ?>         
            </p>
           <p class="card-text">
                Contact Number: <?php echo $result["phone"]; ?>
                       
            </p>

<br>
<br>

<?php require_once "includes/footer.php" ?>