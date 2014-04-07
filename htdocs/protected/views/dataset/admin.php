<?php
$this->breadcrumbs=array(
	'Datasets'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('dataset-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Datasets</h1>

<!-- Results -->
<?php

// Only show for testers until OK for release
//if (Yii::app()->user->getState('role') == 'Tester')
if (true)
{
	// Your results
	$resultArray = $model->results(true);
	$successYou = (int)$resultArray['success'];
	$unknownYou = (int)$resultArray['unknown'];
	$totalYou = (int)$resultArray['total'];
	$failureYou = $totalYou - $successYou - $unknownYou;
	
	// Total results
	$resultArray = $model->results(false);
	$successBVS = (int)$resultArray['success'];
	$unknownBVS = (int)$resultArray['unknown'];
	$totalBVS = (int)$resultArray['total'];
	$failureBVS = $totalBVS - $successBVS - $unknownBVS;
	
	// Graph of results		
	$this->Widget('ext.highcharts.HighsoftWidget', array(
		'options'=>array(
			'chart' => array(
				'type' => 'bar',
				'height' => '200',
			),
			'legend' => array(
				'enabled' => false,
			),
			'credits' => array(
				'enabled' => false,
			),
			'colors' => array(
				'#89A54E', 
				'#AA4643',
				'#4572A7',  
				'#80699B', 
				'#3D96AE', 
				'#DB843D', 
				'#92A8CD', 
				'#A47D7C', 
				'#B5CA92'
				),
			'exporting' => array('enabled' => false),
			'title' => array('text' => 'Results (not adjusted for casemix)'),
			'xAxis' => array(
				'categories' => array('You', 'BEAVRS')
			),
			'yAxis' => array(
				'title' => array('text' => 'Percent')
			),
			'plotOptions' => array(
				'bar' => array('stacking' => 'percent'),
				'column' => array('animation' => 'false'),
			),
			'series' => array(
				array('name' =>'Unknown','data' => array($unknownYou, $unknownBVS), 'stack' => 0),
				array('name' =>'Failure', 'data' => array($failureYou, $failureBVS), 'stack' => 0),
				array('name' =>'Success', 'data' => array($successYou, $successBVS), 'stack' => 0),
		)
		)
	));
}
?>


<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dataset-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'uuid',
		array(
			'name'=>'pt_age',
			'htmlOptions'=>array('width'=>'40px'),
			),

		'op_date',
		'fu_date',
/*
         array(
               'name'=>'fu_man_complete',
               'filter' => array(0 => 'No', 1 => 'Yes'),
               'value'=>'$data->fuManCompleteAsText()',
               ),
*/
         array(
               'name' => 'fu_primary_success',
/*                'filter' => array(0 => 'No', 1 => 'Yes'), */
/*                'value'=>'$data->fuPrimaryPuccessAsText()', */
               ),
		array(
			'class'=>'CButtonColumn',
			'template' => '{view} {update} {delete}',
			'htmlOptions'=>array('width'=>'80px'),

		),
	),
)); ?>
