<?php

class EmailCommand extends CConsoleCommand
{    
    public function actionIndex() {
    	error_log('Index');
    }
    
    public function actionList($type='new', $limit=5) {
    	error_log($type.' '.$limit);
    	
    	//$dataset = Dataset::model()->findByPk($limit);

/*
		foreach (Dataset::model()->findAll() as $dataset) {
			error_log($dataset->pt_postcode);
		}
*/
/*
    	$model=new Dataset('search');
    	$criteria = new CDbCriteria;
    	error_log($model->count($criteria));
*/
    }
}

?>