<?php
include ("../partials/db.php");
include ("admin_partial/Head.php");






?>
<div class="row">
<div class="col-sm-4">
<form role="form" method="post" action="adminCheck.php">
<div class="box-body">
<div class="form-group">
<label for="exampleInputEmail1">Email:</label>
<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
</div>
<div>
<label for="pass">Password:</label>
<input type="password" class="form-control" id="pass" name="password" placeholder="Enter password">
</div>
<div>
<label for="pass">Password-confirmation:</label>
<input type="password" class="form-control" id="pass" name="password" placeholder="Enter password">
</div>
<div class="box-footer">
<button type="submit" class="btn btn-primary">Register</button>
</div>            
</form>
</div>
<div class="col-sm-4">

</div>
</div>