<?php include "includes/header.php"; ?>

<nav class="navbar navbar-light bg-dark">
    <a class="navbar-brand" href="dashboard.php">
      <img src="img/contacts.svg" width="30" height="30">
      <label class="text-white">Phone Book</label>
    </a>
</nav>

<div class="container col-md-8 border marginContainer styleTable">

<form action="../controller/ContactController.php?action=insert" method="POST">
  <div class="form-row marginForm">
    <div class="col-md-3 mb-3">
      <label for="validationDefault01">Name</label>
      <input type="text" class="form-control" id="validationDefault01" name="name" placeholder="Name" value="" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault02">Surname</label>
      <input type="text" class="form-control" id="validationDefault02" name="surname" placeholder="Surname" value="" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault02">Phone Number</label>
      <input type="text" class="form-control" id="validationDefault02" name="phone_number" placeholder="Phone Number" value="" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefaultUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Email" name="email" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>

  <div class="form-row d-flex justify-content-center marginButton">
    <a  class="btn btn-secondary" href="dashboard.php">back</a>
  	<input class="btn btn-success ml-2" type="submit" name="action" value="insert">
  </div>

</form>

</div>


<?php include "includes/footer.php" ?>