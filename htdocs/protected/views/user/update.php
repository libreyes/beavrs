<?php

//in your view where you want to include JavaScripts
$cs = Yii::app()->getClientScript();
    
// Use javascript to give username field focus 
$cs->registerScript(
                    'loginInit',
                    'function init(){var el =  document.getElementById("User_new_password");
                    el.focus();}',
                    CClientScript::POS_END
                    );
                    
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Change details</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>