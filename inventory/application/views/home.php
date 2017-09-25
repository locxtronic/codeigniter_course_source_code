<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
		<div class="row">
			<div class="col-md-4">
					<div class="panel panel-default panel-line-bottom ">
							<div class="panel-body">
									<div class="col-md-4">
											 <i class="fa fa-list fa-4x" style="color:  #428bca;" aria-hidden="true"></i>
									</div>
									<div class="col-md-8">
											<h1><?php echo $itemCount;?></h1>
											<p>Unique item in inventory</p>
									</div>
							</div>
					</div>
			</div>

			<div class="col-md-4">
					<div class="panel panel-default panel-line-bottom ">
							<div class="panel-body">
									<div class="col-md-4">
											<i class="fa fa-thumbs-up fa-4x" style="color:  #428bca;" aria-hidden="true"></i>
									</div>
									<div class="col-md-8">
											<h1><?php echo $itemAvailable;?></h1>
											<p>Item with available stock</p>
									</div>
							</div>
					</div>
			</div>

			<div class="col-md-4">
					<div class="panel panel-default panel-line-bottom ">
							<div class="panel-body">
									<div class="col-md-4">
											<i class="fa fa-exclamation-triangle fa-4x" style="color:  #428bca;" aria-hidden="true"></i>
									</div>
									<div class="col-md-8">
											<h1><?php echo $itemUnavailable;?></h1>
											<p>Out of stock</p>
									</div>
							</div>
					</div>
			</div>
			
			<div class="col-md-12">
					<div class="panel panel-default panel-line-bottom ">
							<div class="panel-body">
									<?php
											echo $tableContent;
									?>
							</div>
					</div>
			</div>
		</div>
</div>
</body>