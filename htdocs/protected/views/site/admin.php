<?php
$this->breadcrumbs=array(
	'Reports',
);
?>

<h1>Admin</h1>

<div class="section" style="height:480px;" align="left">
						
	<!-- Admin selection -->
	<div style="width: 150px; float:left;">
		<p>Sidebar</p>
	
		<?php $this->renderPartial('admin_sidebar')?> 	
		
	</div>

	<!-- Report body-->
	<div style="width:758px; float:left;">
		<p>body</p>
		<?php
		
		switch ($adminId) {
			case 0:
				echo "No admin";
				break;
				
			// One
			case 1:
				echo "Admin one";
				break;

			// Two
			case 2:
				echo "Admin Two";
				break;
								
			default:
				break;
			
		}
		
		?>


		
		
	</div>

</div>
