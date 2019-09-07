<?php session_start(); ?>
<?php include "includes/header.php"; ?>

<nav class="navbar navbar-light bg-dark">
    <a class="navbar-brand" href="dashboard.php">
      <img src="img/contacts.svg" width="30" height="30">
      <label class="text-white">Phone Book</label>
    </a>
</nav>

 <?php
  if(isset($_SESSION['msgSuccess'])){
      echo $_SESSION['msgSuccess'];
      unset($_SESSION['msgSuccess']);
  }

  if(isset($_SESSION['msgError'])){
  echo $_SESSION['msgError'];
  unset($_SESSION['msgError']);
  }
?>

<div class="container marginContainer">
<div class="row">

  <div class="col"></div>

  <div class="">
    <a href="createContact.php" class="btn btn-sm">
    <div class="card text-center styleCard">
      <div class="card-body">
        <h5 class="card-title">Create Contact</h5>
        <hr>
            <img src="img/create.svg" width="40"> 
      </div> 
    </div>
    </a>
  </div>
  
  <div class="">  
  <a href="showContact.php" class="btn btn-sm ">  
    <div class="card text-center styleCard">
      <div class="card-body">
        <h5 class="card-title">Show Contacts</h5>
        <hr>
        <img src="img/read.svg" width="40"> 
      </div>      
    </div>
    </a>
  </div>

<div class="col"></div>

</div>
</div>

<!-- PAGE'S FOOTER -->
<?php include "includes/footer.php"; ?>