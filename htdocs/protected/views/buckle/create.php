<?php
$this->breadcrumbs=array(
	'Buckles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Buckle', 'url'=>array('index')),
	array('label'=>'Manage Buckle', 'url'=>array('admin')),
);
?>

<h1>Create Buckle</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>