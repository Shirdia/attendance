
<?php 
    $title = "Index";
    require_once "includes/header.php";
    require_once "db/conn.php";
    $results = $crud->getSpecialties();
    
?>

    <!-- 
        -First Name
        -Last Name
        -Date of Birth (Use DatePicker)
        -Specialty (Database Admin, Software Developer, Web Administrator, Other)
        -Email Address
        -Contact Number
    -->

    <h1 class="text-center"> Registration for IT Conference </h1>

    <form method="post" action="success.php">
    
    <div class="form-group">
        <label for="firstname"> First Name</label>
        <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstname"> 
    </div>

    <div class="form-group">
        <label for="lastname"> Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastname"> 
    </div>

    <div class="form-group">
        <label for="DOB"> Date of Birth</label>
        <input type="text" class="form-control" id="DOB" name="DOB" aria-describedby="DOB"> 
    </div>

    <div class="form-group">
        <label for="specialty"> Area of Expertise</label>
        <select class="form-control" id="specialty" name="specialty">
            <option>Database Admin</option>
            <option>Software Develper</option>
            <option>Web Administrator</option>
            <option>Other</option>
        </select>
    </div>

    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="phone">Contact Number</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
        <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
    </div>

       <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<br>
<br>
<br>

<?php require_once "includes/footer.php" ?>
    