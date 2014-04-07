<?php
$this->breadcrumbs=array(
	'Buckles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Buckle', 'url'=>array('index')),
	array('label'=>'Create Buckle', 'url'=>array('create')),
	array('label'=>'View Buckle', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Buckle', 'url'=>array('admin')),
);
?>

<h1>Update Buckle <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>