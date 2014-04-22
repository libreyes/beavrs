<?php
$this->breadcrumbs=array(
	'Reports',
);
?>

<h1>Reports</h1>

<div class="section" style="height:480px;" align="left">
						
	<!-- Report selection -->
	<div style="width: 150px; float:left;">
	
		<?php $this->renderPartial('reports_sidebar')?> 				
		
	</div>

	<!-- Report body-->
	<div style="width:758px; float:left;">
		<?php
			if ($hasNoData) {
				?>
					<span class="no-report-data">There is no data to show in this report</span>
				<?php
			}
		?>
	</div>
</div>


