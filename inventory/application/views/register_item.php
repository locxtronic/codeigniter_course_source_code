<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
		<div class="row">
				<div class="col-md-12">
						<div class="panel panel-default panel-line-bottom">
								<div class="panel-heading">
										<i class="fa fa-plus wrench " style="color:  #428bca;" aria-hidden="true"></i>
										New Item Registration
								</div>
								<form action="<?php echo base_url(); ?>item/insert" method="post">
										<div class="panel-body">
												<div class="form-group">
														<label for="inputdefault">Item Name</label>
														<input class="form-control" placeholder="e.g Soft drink"name="tbxItemName" type="text">
												</div>
												<div class="form-group">
														<label for="inputlg">Item Quantity</label>
														<input class="form-control" placeholder="e.g 10" name="tbxItemQuantity" type="text">
												</div>
										</div>
										<div class="panel-footer">
												<center>
														<input type="submit" class="btn btn-primary" value="Add New Item">
												</center>
										</div>
								</form>
						</div>
				</div>
		</div>
</div>
</body>