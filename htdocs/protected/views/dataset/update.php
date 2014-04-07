<?php
$this->breadcrumbs=array(
	'Datasets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>

<h1>Edit Dataset</h1><p>This form shows all the mandatory fields for the dataset. Fields required for revalidation are indicated in <span class="reval">this colour</span></p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>