<?php

/**
 * Created by Bill Aylward on 17/04/2011.
 * Copyright 2011 Moorfields Eye Hospital. All rights reserved.
 */
 
class DatasetTest extends CDbTestCase
{
	public function testCreate()
	{
        // Create a new dataset
        $newDataset = new Dataset;
        $newDatasetUUID = uuid();
        $newDataset->setAttributes(
                                   array(
                                         'uuid' => $newDatasetUUID,
                                         'pt_age' => 36,
                                         'asmt_date' => '2011-04-17',
                                         ));
        
        // Set user_id
        Yii::app()->user->setId(2);
        
        // Save the dataset triggering attribute validation
        $this->assertTrue($newDataset->save());

	}
}

    // Taken from http://php.net/manual/en/function.uniqid.php
    function uuid()
    {
        // version 4 UUID
        return sprintf(
                       '%08x-%04x-%04x-%02x%02x-%012x',
                       mt_rand(),
                       mt_rand(0, 65535),
                       bindec(substr_replace(
                                             sprintf('%016b', mt_rand(0, 65535)), '0100', 11, 4)
                              ),
                       bindec(substr_replace(sprintf('%08b', mt_rand(0, 255)), '01', 5, 2)),
                       mt_rand(0, 255),
                       mt_rand()
                       );
    }

?>

