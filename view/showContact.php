<?php session_start(); ?>
<?php include "includes/header.php"; ?>
<?php include "../model/DAO.php"; ?>

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

<div class="container col-md-8 marginContainer">
  <table class="table table-hover styleTable">
  	<thead class="thead-dark">
  		<tr>
  			<th>Id</th>
  			<th>Name</th>
  			<th>Surname</th>
  			<th>Phone Number</th>
  			<th>Email</th>
  			<th class="text-center">Update</th>
  			<th class="text-center">Delete</th>
  		</tr>
  	</thead>
    <?php
      $DAO = new DAO();
      foreach ($DAO->select() as $aux) {
    ?>   
  	<tbody>
  		<tr>
  			<td><?php echo $aux['id'];?></td>
        <td><?php echo $aux['name'];?></td>
        <td><?php echo $aux['surname'];?></td>
        <td><?php echo $aux['phone_number'];?></td>
        <td><?php echo $aux['email'];?></td>

  			<td class="text-center">
          <a href="updateContact.php?id=<?php echo $aux['id']; ?>"><img src="img/edit.svg" width="30"></a>   
        </td>
  			<td class="text-center">
          <a href="../controller/ContactController.php?id=<?php echo $aux['id'];?>&action=delete" onclick="return confirm('Are you sure about this action?'); "><img src="img/delete.svg" width="30"></a>     
        </td>
  		</tr>
  	</tbody>
    <?php } ?>
  </table>
 </div>

  <?php include "includes/footer.php"; ?>