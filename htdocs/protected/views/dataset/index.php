<?php
$this->breadcrumbs=array(
	'Datasets',
);
?>

<h1>Datasets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
