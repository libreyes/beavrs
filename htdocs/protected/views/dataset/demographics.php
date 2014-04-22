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
						<?php
							echo (
								array_key_exists('right', $reportArray) ?
									'Right: '.$reportArray['right'].' ('.$reportArray['right_percent'].'%), ' :
									'Right: 0 (0%)'
							);
							echo (
								array_key_exists('left', $reportArray) ?
									'Left: '.$reportArray['left'].' ('.$reportArray['left_percent'].'%), ' :
									'Left: 0 (0%)'
							);
						?>
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
						array('name' =>'IT', 'data' => (
							array_key_exists('avg_extent_it', $reportArray) ?
							array($reportArray['avg_extent_it']) :
							array()
						)),
						array('name' =>'IN', 'data' => (
							array_key_exists('avg_extent_in', $reportArray) ?
							array($reportArray['avg_extent_in']) :
							array()
						)),
						array('name' =>'SN', 'data' => (
							array_key_exists('avg_extent_sn', $reportArray) ?
							array($reportArray['avg_extent_sn']) :
							array()
						)),
						array('name' =>'ST', 'data' => (
							array_key_exists('avg_extent_st', $reportArray) ?
							array($reportArray['avg_extent_st']) :
							array()
						)),
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
								array('On', (array_key_exists('fovea_on',$reportArray) ? (int)$reportArray['fovea_on'] : 0)),
								array('Off',(array_key_exists('fovea_off',$reportArray) ? (int)$reportArray['fovea_off'] : 0)),
								array('Bisected', (array_key_exists('fovea_bisected',$reportArray) ? (int)$reportArray['fovea_bisected'] : 0)),
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
								array('Not found', (array_key_exists('break_type', $reportArray) ? (int)$reportArray['break_type_not_found'] : 0)),
								array('U tear', (array_key_exists('break_type', $reportArray) ? (int)$reportArray['break_type_u_tear'] : 0)),
								array('Round hole', (array_key_exists('break_type', $reportArray) ? (int)$reportArray['break_type_round_hole'] : 0)),
								array('Dialysis', (array_key_exists('break_type', $reportArray) ? (int)$reportArray['break_type_dialysis'] : 0)),
								array('GRT', (array_key_exists('break_type', $reportArray) ? (int)$reportArray['break_type_grt'] : 0)),
								array('Macular hole', (array_key_exists('break_type', $reportArray) ? (int)$reportArray['break_type_macular_hole'] : 0)),
								array('Outer leaf break', (array_key_exists('break_type', $reportArray) ? (int)$reportArray['break_type_outer_leaf_break'] : 0)),
								array('Peripapillary break', (array_key_exists('break_type', $reportArray) ? (int)$reportArray['break_type_peripapillary_break'] : 0)),
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
								array('None', (array_key_exists('pvr_none',$reportArray) ? (int)$reportArray['pvr_none'] : 0)),
								array('A',    (array_key_exists('pvr_a',   $reportArray) ? (int)$reportArray['pvr_a']    : 0)),
								array('B',    (array_key_exists('pvr_b',   $reportArray) ? (int)$reportArray['pvr_b']    : 0)),
								array('C',    (array_key_exists('pvr_c',   $reportArray) ? (int)$reportArray['pvr_c']    : 0)),
							),
						),
					),																
				)
			));
		?>
	</div>
</div>
