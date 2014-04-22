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
		<h4>Summary:</h4>
		<table class='reportTable'>
			<thead>
				<th width="30%">Item</th>
				<th width="70%">Result</th>
			</thead>		
			<tbody>		
				<tr>
					<td>Total number of cases:</td>
					<td><?php echo $reportArray['total']; ?></td>
				</tr>
				<tr>
					<td>Eye:</td>
					<td>
						<?php echo 'Right: '.$reportArray['right'].' ('.$reportArray['right_percent'].'%), '; ?>
						<?php echo 'Left: '.$reportArray['left'].' ('.$reportArray['left_percent'].'%)'; ?>
					</td>
				</tr>
			</tbody>	
		</table>
				
		<h4>Extent of detachment by quadrant:</h4>
		<?php
			// Graph of results		
			$this->Widget('ext.highcharts.HighsoftWidget', array(
				'options'=>array(
					'chart' => array(
						'type' => 'bar',
						'width' => '700',
						'height' => '200',
					),
					'credits' => array(
						'enabled' => false,
					),
					'title' => array('text' => null),
					'xAxis' => array('categories'=> array('Ext')),
					'yAxis' => array(
						'min' => '0',
						'max' => '12',
						'title' => array('text' => 'Average clock hours')
					),
					'plotOptions' => array(
						'series' => array('stacking' => 'normal', 'animation' => false),
														
					),
					'legend' => array(
						'reversed' => true,
					),
					'series' => array(
						array('name' =>'IT', 'data' => array($reportArray['avg_extent_it'])),
						array('name' =>'IN', 'data' => array($reportArray['avg_extent_in'])),
						array('name' =>'SN', 'data' => array($reportArray['avg_extent_sn'])),
						array('name' =>'ST', 'data' => array($reportArray['avg_extent_st'])),
					)
				)
			));
		?>

		<h4>State of fovea:</h4>
		<?php
			// Graph of results		
			$this->Widget('ext.highcharts.HighsoftWidget', array(
				'options'=>array(
					'chart' => array(
						'plotBackgroundColor' => null,
						'plotBorderWidth' => null,
						'plotShadow' => false,
						//'width' => 400,
					),
					'credits' => array(
						'enabled' => false,
					),
					'title' => array('text' => null),
					'tooltip' =>  array('pointFormat' => '<b>{point.percentage:.1f}%</b>'),
					'plotOptions' => array(
						'pie' => array(
							'allowPointSelect' => true,
							'cursor' => 'pointer',
							'dataLabels' => array(
								'enabled' => true,
								'color' => '#000000',
								'connectorColor' => '#000000',
								'format' => '<b>{point.name}</b>: {point.percentage:.1f} %'
							),
							'animation' => false
						),
					),
					'series' => array(
						array(
							'type' => 'pie',
							'name' => 'PVR type',
							'data' => array(
								array('On', (int)$reportArray['fovea_on']),
								array('Off', (int)$reportArray['fovea_off']),
								array('Bisected', (int)$reportArray['fovea_bisected']),
							),
						),
					),																
				)
			));
		?>
		<h4>Type of largest break:</h4>
		<?php
			// Graph of results		
			$this->Widget('ext.highcharts.HighsoftWidget', array(
				'options'=>array(
					'chart' => array(
						'plotBackgroundColor' => null,
						'plotBorderWidth' => null,
						'plotShadow' => false,
						//'width' => 400,
					),
					'credits' => array(
						'enabled' => false,
					),
					'title' => array('text' => null),
					'tooltip' =>  array('pointFormat' => '<b>{point.percentage:.1f}%</b>'),
					'plotOptions' => array(
						'pie' => array(
							'allowPointSelect' => true,
							'cursor' => 'pointer',
							'dataLabels' => array(
								'enabled' => true,
								'color' => '#000000',
								'connectorColor' => '#000000',
								'format' => '<b>{point.name}</b>: {point.percentage:.1f} %'
							),
							'animation' => false
						),
					),
					'series' => array(
						array(
						'type' => 'pie',
							'name' => 'PVR type',
							'data' => array(
								array('Not found', (int)$reportArray['break_type_not_found']),
								array('U tear', (int)$reportArray['break_type_u_tear']),
								array('Round hole', (int)$reportArray['break_type_round_hole']),
								array('Dialysis', (int)$reportArray['break_type_dialysis']),
								array('GRT', (int)$reportArray['break_type_grt']),
								array('Macular hole', (int)$reportArray['break_type_macular_hole']),
								array('Outer leaf break', (int)$reportArray['break_type_outer_leaf_break']),
								array('Peripapillary break', (int)$reportArray['break_type_peripapillary_break'])
							),
						),
					),																
				)
			));
		?>
		<h4>Type of PVR:</h4>
		<?php
			// Graph of results		
			$this->Widget('ext.highcharts.HighsoftWidget', array(
				'options'=>array(
					'chart' => array(
						'plotBackgroundColor' => null,
						'plotBorderWidth' => null,
						'plotShadow' => false,
						//'width' => 400,
					),
					'credits' => array(
						'enabled' => false,
					),
					'title' => array('text' => null),
					'tooltip' =>  array('pointFormat' => '<b>{point.percentage:.1f}%</b>'),
					'plotOptions' => array(
						'pie' => array(
							'allowPointSelect' => true,
							'cursor' => 'pointer',
							'dataLabels' => array(
								'enabled' => true,
								'color' => '#000000',
								'connectorColor' => '#000000',
								'format' => '<b>{point.name}</b>: {point.percentage:.1f} %'
							),
							'animation' => false
						),
					),
					'series' => array(
						array(
						'type' => 'pie',
							'name' => 'PVR type',
							'data' => array(
								array('None', (int)$reportArray['pvr_none']),
								array('A', (int)$reportArray['pvr_a']),
								array('B', (int)$reportArray['pvr_b']),
								array('C', (int)$reportArray['pvr_c'])
							),
						),
					),																
				)
			));
		?>
	</div>
</div>
