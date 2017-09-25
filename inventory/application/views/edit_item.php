<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
		<div class="row">
				<div class="col-md-12">
						<div class="panel panel-default panel-line-bottom">
								<div class="panel-heading">
										<i class="fa fa-pencil " style="color:  #428bca;" aria-hidden="true"></i>
										Edit Item
								</div>
								<form action='<?php echo base_url();?>item/update/<?php echo $id; ?>' method="post">
										<div class="panel-body">
												<div class="form-group">
														<label for="inputdefault">Item Name</label>
														<input value="<?php echo $itemName;?>" class="form-control" placeholder="e.g Soft drink"name="tbxItemName" type="text">
												</div>
												<div class="form-group">
														<label for="inputlg">Item Quantity</label>
														<input value="<?php echo $itemQuantity;?>" class="form-control" placeholder="e.g 10" name="tbxItemQuantity" type="text">
												</div>
										</div>
										<div class="panel-footer">
												<center>
														<input type="submit" class="btn btn-primary" value="Update Item">
												</center>
										</div>
								</form>
						</div>
				</div>
		</div>
</div>
</body>