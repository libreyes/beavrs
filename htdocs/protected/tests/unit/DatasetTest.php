<?php

/**
 * Created by Bill Aylward on 17/04/2011.
 * Copyright 2011 Moorfields Eye Hospital. All rights reserved.
 */
 
    class DatasetTest extends CDbTestCase
    {
        public function testCRUD()
        {
            // Create a new dataset
            $newDataset = new Dataset;
            $newDatasetUUID = uuid();
            $newDataset->setAttributes(
                array(
                      'id' =>'NULL',
                      'userId' => 1,
                      'uuid' => $newDatasetUUID,
                      'pt_age' => 36,
                      'asmt_date' => '2011-04-17',
                      ));
            $this->assertTrue($newDataset->save(false));
            
            // Read back the newly created dataset
            $retrievedDataset = Dataset::model()->findByPk($newDataset->id);
            $this->assertTrue($retrievedDataset instanceof Dataset);
            $this->assertEquals($newDatasetUUID, $retrievedDataset->uuid);
            
            // Update the newly created dataset
            $updatedUUID = uuid();
            $newDataset->uuid = $updatedUUID;
            $this->assertTrue($newDataset->save(false));
            
            // Read back the record to ensure the update worked
            $updatedDataset = Dataset::model()->findByPk($newDataset->id);
            $this->assertTrue($updatedDataset instanceof Dataset);
            $this->assertEquals($updatedUUID, $updatedDataset->uuid);
            
            // Delete the dataset
            $newDatasetId = $newDataset->id;
            $this->assertTrue($newDataset->delete());
            $deletedDataset = Dataset::model()->findByPk($newDatasetId);
            $this->assertEquals(NULL, $deletedDataset);
                      
            
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

