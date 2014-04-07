<?php
$this->breadcrumbs=array(
	'Buckles',
);

$this->menu=array(
	array('label'=>'Create Buckle', 'url'=>array('create')),
	array('label'=>'Manage Buckle', 'url'=>array('admin')),
);
?>

<h1>Buckles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
