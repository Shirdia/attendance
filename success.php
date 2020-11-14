<?php 
    $title = "Success";
    require_once "includes/header.php";
    require_once "db/conn.php";

    if(isset($_POST["submit"])){
        $_POST["firstname"];
        $_POST["lastname"];
        $_POST["dateofbirth"];
        $_POST["email"];
        $_POST["phone"];

        $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email, $contract, $specialty);

        if($isSuccess){
            echo '<h1 class="text-center text-success">You Have Been Successfully Registered!</h1>';
        }
        else{
            echo '<h1 class="text-center text-danger"> Processing Error</h1>';
        }
    }
?>

    <h1 class="text-center text-success">You Have Been Successfully Registered!<h1>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST["firstname"] . " " . $_POST["lastname"]; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $_POST["specialty"]; ?>
            </h6>
            <p class="card-text">
                Date of Birth: <?php echo $_POST["DOB"]; ?>         
            </p>
            <p class="card-text">
                Email Address: <?php echo $_POST["email"]; ?>         
            </p>
           <p class="card-text">
                Contact Number: <?php echo $_POST["phone"]; ?>
                       
            </p>

        </div>
    </div>

    <?php

       //echo $_GET["firstname"];
       //echo $_GET["lastname"];
       //echo $_GET["DOB"];
      // echo $_GET["specialty"];
       //echo $_GET["email"];
       //echo $_GET["phone"];

     

    ?>

<?php 
    $title = "Index";
    require_once "includes/header.php" 
?>
