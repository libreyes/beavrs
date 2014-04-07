<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    /*'action' =>CHtml::normalizeUrl(array('dataset/debug/4')),*/
	'id'=>'dataset-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
    
    <div class="twocolumndiv">
        <div class="leftcolumn">
        </div>
        <div class="rightcolumn">
        </div>
    </div>

    <h3>Patient:</h3>
    <div class="twocolumndiv">
        <div class="leftcolumn">

            <div class="row">
                <?php echo $form->labelEx($model,'uuid',array('class'=>'reval')); ?>
                <?php echo $form->textField($model,'uuid',array('style'=>'width:250px')); //, 'readonly'=>'readonly'?>
            	<span class="tooltip"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/info.png"/><span><?php echo $model->tooltipForAttribute('uuid'); ?></span></a></span>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'pt_age'); ?>
                <?php echo $form->textField($model,'pt_age',array('style'=>'width:40px')); ?>
                <?php echo $form->error($model,'pt_age'); ?>
            </div>

        </div>
        <div class="rightcolumn">

            <div class="row">
                <?php echo $form->labelEx($model,'pt_sex'); ?>
                <?php echo ZHtml::enumDropDownList($model,'pt_sex', array()); ?>
                <?php echo $form->error($model,'pt_sex'); ?>
            </div>

<!--
            <div class="row">
                <?php echo $form->labelEx($model,'pt_postcode'); ?>
                <?php echo $form->textField($model,'pt_postcode',array('style'=>'width:40px')); ?>
                <?php echo $form->error($model,'pt_postcode'); ?>
            </div>
-->

        </div>
    </div>

    <h3>Assessment:</h3>
    <div class="twocolumndiv">
        <div class="leftcolumn">

            <div class="row">
                <?php echo $form->labelEx($model,'asmt_date'); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model'=>$model,
                    'attribute'=>'asmt_date',
                    'value'=>$model->asmt_date,
                    // additional javascript options for the date picker plugin
                    'options'=>array(
                                     'showAnim'=>'fold',
                                     'showButtonPanel'=>true,
                                     'autoSize'=>true,
                                     'dateFormat'=>'yy-mm-dd',
                                     'defaultDate'=>$model->asmt_date,
                                     ),
                    )); ?>
                <?php echo $form->error($model,'asmt_date'); ?>
            </div>


            <div class="row">
                <?php echo $form->labelEx($model,'asmt_eye'); ?>
                <?php echo ZHtml::enumDropDownList($model,'asmt_eye', array('onChange'=>'drawing.setEye(this.value);')); ?>
                <?php echo $form->error($model,'asmt_eye'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'asmt_refraction'); ?>
                <?php echo $form->textField($model,'asmt_refraction',array('size'=>6,'maxlength'=>6)); ?>
                <?php echo $form->error($model,'asmt_refraction'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'asmt_date_vision_loss'); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model'=>$model,
                    'attribute'=>'asmt_date_vision_loss',
                    'value'=>$model->asmt_date_vision_loss,
                    // additional javascript options for the date picker plugin
                    'options'=>array(
                                     'showAnim'=>'fold',
                                     'showButtonPanel'=>true,
                                     'autoSize'=>true,
                                     'dateFormat'=>'yy-mm-dd',
                                     'defaultDate'=>$model->asmt_date_vision_loss,
                                     ),
                    )); ?>
                <?php echo $form->error($model,'asmt_date_vision_loss'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'asmt_acuity'); ?>
                <?php echo $form->dropDownList($model,'asmt_acuity',$model->acuityArray()); ?>
                <?php echo $form->error($model,'asmt_acuity'); ?>
            </div>
            
        </div>
        <div class="rightcolumn">

            <div class="row">
                <?php echo $form->labelEx($model,'asmt_lens',array('class'=>'reval')); ?>
                <?php echo ZHtml::enumDropDownList($model,'asmt_lens', array('onChange'=>'setLens(this.value);')); ?>
                <?php echo $form->error($model,'asmt_lens'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'asmt_iop'); ?>
                <?php echo $form->textField($model,'asmt_iop',array('style'=>'width:40px')); ?>
                <?php echo $form->error($model,'asmt_iop'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'asmt_previous_op_date'); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model'=>$model,
                    'attribute'=>'asmt_previous_op_date',
                    'value'=>$model->asmt_previous_op_date,
                    // additional javascript options for the date picker plugin
                    'options'=>array(
                                     'showAnim'=>'fold',
                                     'showButtonPanel'=>true,
                                     'autoSize'=>true,
                                     'dateFormat'=>'yy-mm-dd',
                                     'defaultDate'=>$model->asmt_previous_op_date,
                                     ),
                    )); ?>
                <?php echo $form->error($model,'asmt_previous_op_date'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'asmt_vitreous'); ?>
                <?php echo ZHtml::enumDropDownList($model,'asmt_vitreous', array()); ?>
                <?php echo $form->error($model,'asmt_vitreous'); ?>
            </div>

            <div class="row">     
                <?php echo $form->labelEx($model,'asmt_vithaem',array('class'=>'reval')); ?>
                <?php echo ZHtml::enumDropDownList($model,'asmt_vithaem', array()); ?>
                <?php echo $form->error($model,'asmt_vithaem'); ?>
            	<span class="tooltip"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/info.png"/><span><?php echo $model->tooltipForAttribute('asmt_vithaem'); ?></span></a></span>
            </div>
            
        </div>
    </div>

    <h3>Fellow Eye:</h3>
    <div class="twocolumndiv">
        <div class="leftcolumn">

            <div class="row">
                <?php echo $form->labelEx($model,'fe_refraction'); ?>
                <?php echo $form->textField($model,'fe_refraction',array('size'=>6,'maxlength'=>6)); ?>
                <?php echo $form->error($model,'fe_refraction'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'fe_acuity'); ?>
                <?php echo $form->dropDownList($model,'fe_acuity',$model->acuityArray()); ?>
                <?php echo $form->error($model,'fe_acuity'); ?>
            </div>

        </div>
        <div class="rightcolumn">

            <div class="row">
                <?php echo $form->labelEx($model,'fe_vitreous'); ?>
                <?php echo ZHtml::enumDropDownList($model,'fe_vitreous', array()); ?>
                <?php echo $form->error($model,'fe_vitreous'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'fe_retinal_detachment'); ?>
                <?php echo $form->checkBox($model,'fe_retinal_detachment', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'fe_retinal_detachment'); ?>
            </div>

        </div>
    </div>

    <h3>Operation:</h3>
    <div class="twocolumndiv">
        <div class="leftcolumn">

            <div class="row">
                <?php echo $form->labelEx($model,'op_date',array('class'=>'reval')); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model'=>$model,
                    'attribute'=>'op_date',
                    'value'=>$model->op_date,
                    // additional javascript options for the date picker plugin
                    'options'=>array(
                                     'showAnim'=>'fold',
                                     'showButtonPanel'=>true,
                                     'autoSize'=>true,
                                     'dateFormat'=>'yy-mm-dd',
                                     'defaultDate'=>$model->op_date,
                                     ),
                    )); ?>
                <?php echo $form->error($model,'op_date'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_surgeon_grade'); ?>
                <?php echo ZHtml::enumDropDownList($model,'op_surgeon_grade', array()); ?>
                <?php echo $form->error($model,'op_surgeon_grade'); ?>
            </div>

        </div>
        <div class="rightcolumn">

            <div class="row">
                <?php echo $form->labelEx($model,'op_cause_of_failure'); ?>
                <?php echo ZHtml::enumDropDownList($model,'op_cause_of_failure', array()); ?>
                <?php echo $form->error($model,'op_cause_of_failure'); ?>
            </div>

        </div>
    </div>

    <h3>Operative findings:</h3><span class="suffix label">(Click on one of the icons below to add to the drawing)</span>

    <!--   This script handles the drawings for the page   -->
    <script type="text/javascript">

    // Variables assigned to each drawing on this page
    var drawing;

    // Runs on page load
    function init()
    {
        // Get reference to canvas
        var canvas = document.getElementById('canvas');
        
        // Create blank posterior segment drawing defaulting to right eye
        drawing = new ED.Drawing(canvas, ED.eye.Right, 'RPS', true);
        
        // Get reference to eye from drop down and change eye appropriately
        var eye = document.getElementById('Dataset_asmt_eye').value;
        drawing.setEye(eye);

        // Preload any images
        drawing.preLoadImagesFrom("<?php echo Yii::app()->request->baseUrl; ?>/graphics/");
        
        // Set focus to canvas element
        canvas.focus();
        
        // Wait for drawing object to be ready before adding objects or drawings
        drawing.onLoaded = function()
        {
            // Load doodleSet (for existing drawings)
            drawing.load(doodleSet);
            
            // Use fundus as template (for new drawings)
            if (doodleSet.length == 0)
            {
                drawing.addDoodle('Fundus');
                drawing.lock();
            }
            
            // Draw doodles
            drawing.drawAllDoodles();
            
            // Updates don't call this, so do it here
            //fill();
        }
        
    	// Function to detect changes in parameters (eg from mouse dragging)
        drawing.parameterListener = function()
        {
        	// Set changes to report elements
        	fill();
        }
         
        // Set focus to first element that needs editing
        var ptAgeElement = document.getElementById('Dataset_pt_age');
        if (ptAgeElement.value.length == 0) ptAgeElement.focus();
        else document.getElementById('Dataset_fu_date').focus();
    }


    // Setting lens status in assessment sets follow up value appropriately
    function setLens(_value)
    {
        // Get reference to follow up lens select
        var lensSelect = document.getElementById('Dataset_fu_lens');
        
        lensSelect.value = _value;
    }

    // If phakoemulsification chosen, then follow up select defaults to something more appropriate than phakic
    function setLensFromOperation(_value)
    {
        // Get reference to follow up lens select
        var lensSelect = document.getElementById('Dataset_fu_lens');
        
        if (_value == 'Phakoemulsification') lensSelect.value = 'PC IOL';
        if (_value == 'Lensectomy') lensSelect.value = 'Aphakic';
    }

	// Returns true if browser is firefox
	function isFirefox()
	{
		var index = 0;
		var ua = window.navigator.userAgent;
		index = ua.indexOf("Firefox");

		if (index > 0)
		{
			return true;
		}
			else
		{
			return false;
		}
	}

    /**
     * Save
     *
     * RRD dataset specific method - sets form values from drawing
     */
    function fill()
    {

       // Get handle of textArea containing data to save
        var saveTextArea = document.getElementById('Dataset_drawing');
        
        // Store current data in textArea
        saveTextArea.value = "var doodleSet = " + drawing.save();

        // Generate report
        var report = new ED.Report(drawing);
    
        // Status of macula
        document.getElementById("Dataset_op_foveal_attachment").value = report.isMacOff()?"Off":"On";
          
        // Get array of extents and populate form
        var extentArray = report.extent();
        document.getElementById("Dataset_op_extent_st").value = extentArray['ST'];
        document.getElementById("Dataset_op_extent_it").value = extentArray['IT'];
        document.getElementById("Dataset_op_extent_in").value = extentArray['IN'];
        document.getElementById("Dataset_op_extent_sn").value = extentArray['SN'];
        
        // PVR type
        document.getElementById("Dataset_op_pvr_type").value = report.pvrType;
        
        // Star folds
        document.getElementById("Dataset_op_pvr_cp").value = report.pvrCClockHours;
        
        // Anterior PVR
        document.getElementById("Dataset_op_pvr_ca").value = report.antPvrClockHours;
        
        // Breaks in detached retina
        document.getElementById("Dataset_op_breaks_detached").value = report.breaksInDetached;
        
        // Breaks in attached retina
        document.getElementById("Dataset_op_breaks_attached").value = report.breaksInAttached;
        
        // Largest break type
        document.getElementById("Dataset_op_largest_break_type").value = report.largestBreakType;
        
        // Largest break size
        document.getElementById("Dataset_op_largest_break_size").value = report.largestBreakSize;
        
        // Lowest break position
        document.getElementById("Dataset_op_lowest_break_position").value = report.lowestBreakPosition;

    }

    </script>
    <div class="twocolumndiv">
        <div class="leftcolumn">

            <div class="row">
                <?php echo $form->textArea($model,'drawing',array('width'=>80,'height'=>10)); ?>
                <?php echo $form->error($model,'drawing'); ?>
            </div>

            <!-- Doodle toolbar -->
            <button class="imgbutton" class="imgbutton" disabled="true" id="moveToFrontRPS" title="Move to front" onclick="drawing.moveToFront(); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/moveToFront.gif"/></button>
            <button class="imgbutton" disabled="true" id="moveToBackRPS" title="Move to back" onclick="drawing.moveToBack(); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/moveToBack.gif" /></button>
            <button class="imgbutton" disabled="true" id="deleteRPS" title="Delete" onclick="drawing.deleteDoodle(); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/delete.gif" /></button>
            <button class="imgbutton" disabled="true" id="lockRPS" title="Lock" onclick="drawing.lock(); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/lock.gif" /></button>
            <button class="imgbutton" disabled="true" id="unlockRPS" title="Unlock" onclick="drawing.unlock(); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/unlock.gif" /></button>
            <br />
            <!-- Doodle selection toolbar -->
            <button class="imgbutton" id="RRDRPS" title="Retinal detachment" onclick="drawing.addDoodle('RRD'); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/rrd.gif" /></button>
            <button class="imgbutton" id="uTearRPS" title="U tear" onclick="drawing.addDoodle('UTear'); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/uTear.gif" /></button>
            <button class="imgbutton" id="roundHoleRPS" title="Round hole" onclick="drawing.addDoodle('RoundHole'); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/roundHole.gif" /></button>
            <button class="imgbutton" id="dialysisRPS" title="Dialysis" onclick="drawing.addDoodle('Dialysis'); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/dialysis.gif" /></button>
            <button class="imgbutton" id="grtRPS" title="GRT" onclick="drawing.addDoodle('GRT'); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/grt.gif" /></button>
            <button class="imgbutton" id="macularHoleRPS" title="Macular hole" onclick="drawing.addDoodle('MacularHole'); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/macularHole.gif" /></button>
            <button class="imgbutton" id="starFoldRPS" title="Star Fold" onclick="drawing.addDoodle('StarFold'); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/starFold.gif" /></button>
            <button class="imgbutton" id="antPVRRPS" title="Anterior PVR" onclick="drawing.addDoodle('AntPVR'); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/antPVR.gif" /></button>
            <button class="imgbutton" id="latticeRPS" title="Lattice" onclick="drawing.addDoodle('Lattice'); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/lattice.gif" /></button>
            <button class="imgbutton" id="cryoRPS" title="Cryo" onclick="drawing.addDoodle('Cryo'); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/cryo.gif" /></button>
            <button class="imgbutton" id="laserCircleRPS" title="Laser" onclick="drawing.addDoodle('LaserCircle'); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/laserCircle.gif" /></button>
            <button class="imgbutton" id="buckleRPS" title="Buckle" onclick="drawing.addDoodle('Buckle'); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/buckle.gif" /></button>
            <br />
            <button class="imgbutton" id="retinoschisisRPS" title="Retinoschisis" onclick="drawing.addDoodle('Retinoschisis'); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/retinoschisis.gif" /></button>
            <button class="imgbutton" id="outerleafbreakRPS" title="Outer leaf break" onclick="drawing.addDoodle('OuterLeafBreak'); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/outerLeafBreak.gif" /></button>
            <button class="imgbutton" id="innerleafbreakRPS" title="Inner leaf break" onclick="drawing.addDoodle('InnerLeafBreak'); return false;" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/innerLeafBreak.gif" /></button>
            <br /> 
            <!-- add tabindex="1" to canvas after testing and remove highlighted border with css -->
            <canvas class="edit" id="canvas" width="401" height="401"></canvas>
<!--
            <br />
            <button title="Save drawing and auto-fill form" onclick="fill(); return false;" >Save Drawing</button><br />
-->
        </div>
        <div class="rightcolumn">

            <div class="row">
                <?php echo $form->labelEx($model,'op_foveal_attachment', array('class'=>'reval')); ?>
                <?php echo ZHtml::enumDropDownList($model,'op_foveal_attachment', array()); ?>
                <?php echo $form->error($model,'op_foveal_attachment'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_extent_st', array('class'=>'reval')); ?>
                <?php echo ZHtml::enumDropDownList($model,'op_extent_st', array()); ?><span class="suffixLabel">clock hours</span>
                <?php echo $form->error($model,'op_extent_st'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_extent_sn', array('class'=>'reval')); ?>
                <?php echo ZHtml::enumDropDownList($model,'op_extent_sn', array()); ?><span class="suffixLabel">clock hours</span>
                <?php echo $form->error($model,'op_extent_sn'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_extent_in', array('class'=>'reval')); ?>
                <?php echo ZHtml::enumDropDownList($model,'op_extent_in', array()); ?><span class="suffixLabel">clock hours</span>
                <?php echo $form->error($model,'op_extent_in'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_extent_it', array('class'=>'reval')); ?>
                <?php echo ZHtml::enumDropDownList($model,'op_extent_it', array()); ?><span class="suffixLabel">clock hours</span>
                <?php echo $form->error($model,'op_extent_it'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_chronic'); ?>
                <?php echo $form->checkBox($model, 'op_chronic', array('class'=>'checkBox')); ?> 
                <?php echo $form->error($model,'op_chronic'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_pvr_type', array('class'=>'reval')); ?>
                <?php echo ZHtml::enumDropDownList($model,'op_pvr_type', array()); ?>
                <?php echo $form->error($model,'op_pvr_type'); ?>
                <span class="tooltip"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/info.png"/><span><?php echo $model->tooltipForAttribute('op_pvr_type'); ?></span></a></span>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_pvr_cp', array('class'=>'reval')); ?>
                <?php echo ZHtml::enumDropDownList($model,'op_pvr_cp', array()); ?><span class="suffixLabel">clock hours</span>
                <?php echo $form->error($model,'op_pvr_cp'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_pvr_ca', array('class'=>'reval')); ?>
                <?php echo ZHtml::enumDropDownList($model,'op_pvr_ca', array()); ?><span class="suffixLabel">clock hours</span>
                <?php echo $form->error($model,'op_pvr_ca'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_subretinal_bands', array('class'=>'reval')); ?>
                <?php echo $form->checkBox($model,'op_subretinal_bands', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'op_subretinal_bands'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_choroidals'); ?>
                <?php echo $form->checkBox($model,'op_choroidals', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'op_choroidals'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_breaks_detached'); ?>
                <?php echo $form->textField($model,'op_breaks_detached'); ?>
                <?php echo $form->error($model,'op_breaks_detached'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_breaks_attached'); ?>
                <?php echo $form->textField($model,'op_breaks_attached'); ?>
                <?php echo $form->error($model,'op_breaks_attached'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_largest_break_type', array('class'=>'reval')); ?>
                <?php echo ZHtml::enumDropDownList($model,'op_largest_break_type', array()); ?>
                <?php echo $form->error($model,'op_largest_break_type'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_largest_break_size'); ?>
                <?php echo ZHtml::enumDropDownList($model,'op_largest_break_size', array()); ?><span class="suffixLabel">clock hours</span>
                <?php echo $form->error($model,'op_largest_break_size'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_lowest_break_position'); ?>
                <?php echo ZHtml::enumDropDownList($model,'op_lowest_break_position', array()); ?><span class="suffixLabel">clock hours</span>
                <?php echo $form->error($model,'op_lowest_break_position'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_notes'); ?>
                <?php echo $form->textArea($model, 'op_notes', array('rows'=>3, 'cols'=>30)); ?>
                <?php echo $form->error($model,'op_notes'); ?>
            </div>
        </div>
    </div>

    <h3>Operation details:</h3>
    <div class="twocolumndiv">
        <div class="leftcolumn">

            <div class="row">
                <?php echo $form->labelEx($model,'as_lens_surgery'); ?>
                <?php echo ZHtml::enumDropDownList($model,'as_lens_surgery', array('onChange'=>'setLensFromOperation(this.value);')); ?>
                <?php echo $form->error($model,'as_lens_surgery'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'roo_route'); ?>
                <?php echo ZHtml::enumDropDownList($model,'roo_route', array()); ?>
                <?php echo $form->error($model,'roo_route'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'vity_gauge'); ?>
                <?php echo ZHtml::enumDropDownList($model,'vity_gauge', array()); ?>
                <?php echo $form->error($model,'vity_gauge'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'vity_pvd_induced'); ?>
                <?php echo $form->checkBox($model,'vity_pvd_induced', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'vity_pvd_induced'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'vity_peel'); ?>
                <?php echo $form->checkBox($model,'vity_peel', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'vity_peel'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'vity_rr'); ?>
                <?php echo $form->textField($model,'vity_rr',array('style'=>'width:40px', 'title'=>'Relaxing retinectomy')); ?>&nbsp; degrees
                <?php echo $form->error($model,'vity_rr'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'sb_drainage'); ?>
                <?php echo ZHtml::enumDropDownList($model,'sb_drainage', array()); ?>
                <?php echo $form->error($model,'sb_drainage'); ?>
            </div>

            <div class="row">
            	<label for="Dataset_buckles">Add Buckles</label>

                <?php 
                    // Write a select containing all the buckle options ***TODO*** replace with a ZHtml function
                    echo '
                    <select id="buckleSelector" onchange="addBuckle();">';
                    foreach ($model->buckleArray() as $key=>$value)
                    {
                        echo '
                        <option value="'.$key.'">'.$value.'</option>';
                    }
                    echo '
                    </select>'; ?>
            </div>

            <div class="row">                    
                <?php echo $form->labelEx($model,'buckles'); ?>
                
                <?php
                    
                    $buckles = $model->buckles;
                    $arr = array();
                    foreach($buckles as $b)
                    {
                        $arr[$b->id] = $b->type;
                    }
                    ?>

                    <table name="table" id="buckleTable" align="center" cellspacing="0" width="40">
                        <thead class="tabletitles">
                            <tr>
                                <th align="left" width="60%">Type</th>
                                <th align="left" width="40%"></th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                        <?php
                            // Write out existing buckles for updating
                            $buckles = $model->buckles;
                            $arr = array();
                            foreach($buckles as $b)
                            {
                                //$arr[$b->id] = $b->type;
                                $index = $model->indexForBuckleType($b->type);
                                
                                echo '
                                <tr>
                                <td>'.$b->type.'<input name="buckleArray[]" type="hidden" value="'.$index.'"></td>
                                <td><a onclick="deleteBuckle(this);">Delete</a></td></tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

        </div>
        <div class="rightcolumn">

            <div class="row">
                <?php echo $form->labelEx($model,'rp_cryo'); ?>
                <?php echo $form->checkBox($model,'rp_cryo', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'rp_cryo'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'rp_endolaser'); ?>
                <?php echo $form->checkBox($model,'rp_endolaser', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'rp_endolaser'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'rp_indirect'); ?>
                <?php echo $form->checkBox($model,'rp_indirect', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'rp_indirect'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'rp_transcleral_diode'); ?>
                <?php echo $form->checkBox($model,'rp_transcleral_diode', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'rp_transcleral_diode'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'rp_360'); ?>
                <?php echo $form->checkBox($model,'rp_360', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'rp_360'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'pr_volume'); ?>
                <?php echo $form->textField($model,'pr_volume',array('size'=>4,'maxlength'=>4, 'title'=>'Pneumatic retinopexy')); ?>
                <?php echo $form->error($model,'pr_volume'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'tamp_type'); ?>
                <?php echo ZHtml::enumDropDownList($model,'tamp_type', array()); ?>
                <?php echo $form->error($model,'tamp_type'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'tamp_percent'); ?>
                <?php echo $form->textField($model,'tamp_percent',array('style'=>'width:40px')); ?>
                <?php echo $form->error($model,'tamp_percent'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'op_positioning'); ?>
                <?php echo ZHtml::enumDropDownList($model,'op_positioning', array()); ?>
                <?php echo $form->error($model,'op_positioning'); ?>
            </div>

        </div>
    </div>

    <h3>Complications:</h3>
    <div class="twocolumndiv">
        <div class="leftcolumn">

            <div class="row">
                <?php echo $form->labelEx($model,'comps_choroidal'); ?>
                <?php echo $form->checkBox($model,'comps_choroidal', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'comps_choroidal'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'comps_lens_touch'); ?>
                <?php echo $form->checkBox($model,'comps_lens_touch', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'comps_lens_touch'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'comps_esb'); ?>
                <?php echo $form->checkBox($model,'comps_esb', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'comps_esb'); ?>
            </div>

        </div>
        <div class="rightcolumn">

            <div class="row">
                <?php echo $form->labelEx($model,'comps_other_breaks'); ?>
                <?php echo $form->checkBox($model,'comps_other_breaks', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'comps_other_breaks'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'comps_deep_suture'); ?>
                <?php echo $form->checkBox($model,'comps_deep_suture', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'comps_deep_suture'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'comps_drain_haem'); ?>
                <?php echo $form->checkBox($model,'comps_drain_haem', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'comps_drain_haem'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'comps_incarceration'); ?>
                <?php echo $form->checkBox($model,'comps_incarceration', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'comps_incarceration'); ?>
            </div>

        </div>
    </div>

    <h3>Follow up: (2 months or later)</h3>
    <div class="twocolumndiv">
        <div class="leftcolumn">

            <div class="row">
                <?php echo $form->labelEx($model,'fu_date', array('class'=>'reval')); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model'=>$model,
                    'attribute'=>'fu_date',
                    'value'=>$model->fu_date,
                    // additional javascript options for the date picker plugin
                    'options'=>array(
                                     'showAnim'=>'fold',
                                     'showButtonPanel'=>true,
                                     'autoSize'=>true,
                                     'dateFormat'=>'yy-mm-dd',
                                     'defaultDate'=>$model->fu_date,
                                     ),
                    )); ?>
                <?php echo $form->error($model,'fu_date'); ?>
            	<span class="tooltip"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/info.png"/><span><?php echo $model->tooltipForAttribute('fu_date'); ?></span></a></span>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'fu_type'); ?>
                <?php echo ZHtml::enumDropDownList($model,'fu_type', array()); ?>
                <?php echo $form->error($model,'fu_type'); ?>
            </div>

<!--  NB Removed July 2013 as part of changes to next version
            <div class="row">
                <?php echo $form->labelEx($model,'fu_man_complete'); ?>
                <?php echo $form->checkBox($model,'fu_man_complete', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'fu_man_complete'); ?>
            	<span class="tooltip"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/info.png"/><span><?php echo $model->tooltipForAttribute('fu_man_complete'); ?></span></a></span>
            </div>
-->

            <div class="row">
                <?php echo $form->labelEx($model,'fu_readmission', array('class'=>'reval')); ?>
                <?php echo $form->checkBox($model,'fu_readmission', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'fu_readmission'); ?>
            	<span class="tooltip"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/info.png"/><span><?php echo $model->tooltipForAttribute('fu_readmission'); ?></span></a></span>                
            </div>
            
            <div class="row">
                <?php echo $form->labelEx($model,'fu_number_ops'); ?>
                <?php echo $form->textField($model,'fu_number_ops',array('style'=>'width:40px')); ?>
                <?php echo $form->error($model,'fu_number_ops'); ?>
            	<span class="tooltip"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/info.png"/><span><?php echo $model->tooltipForAttribute('fu_number_ops'); ?></span></a></span>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'fu_attached', array('class'=>'reval')); ?>
                <?php echo $form->checkBox($model,'fu_attached', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'fu_attached'); ?>
            	<span class="tooltip"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/info.png"/><span><?php echo $model->tooltipForAttribute('fu_attached'); ?></span></a></span>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'fu_oil'); ?>
                <?php echo $form->checkBox($model,'fu_oil', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'fu_oil'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'fu_acuity'); ?>
                <?php echo $form->dropDownList($model,'fu_acuity',$model->acuityArray()); ?>
                <?php echo $form->error($model,'fu_acuity'); ?>
            </div>

        </div>
        <div class="rightcolumn">

            <div class="row">
                <?php echo $form->labelEx($model,'fu_lens'); ?>
                <?php echo ZHtml::enumDropDownList($model,'fu_lens', array()); ?>
                <?php echo $form->error($model,'fu_lens'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'fu_iop_problem'); ?>
                <?php echo $form->checkBox($model,'fu_iop_problem', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'fu_iop_problem'); ?>
            	<span class="tooltip"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/info.png"/><span><?php echo $model->tooltipForAttribute('fu_iop_problem'); ?></span></a></span>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'fu_foveal_attachment'); ?>
                <?php echo ZHtml::enumDropDownList($model,'fu_foveal_attachment', array()); ?>
                <?php echo $form->error($model,'fu_foveal_attachment'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'fu_erm'); ?>
                <?php echo $form->checkBox($model,'fu_erm', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'fu_erm'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'fu_macular_hole'); ?>
                <?php echo $form->checkBox($model,'fu_macular_hole', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'fu_macular_hole'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'fu_macular_fold'); ?>
                <?php echo $form->checkBox($model,'fu_macular_fold', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'fu_macular_fold'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'fu_hypotony'); ?>
                <?php echo $form->checkBox($model,'fu_hypotony', array('class'=>'checkBox')); ?>
                <?php echo $form->error($model,'fu_hypotony'); ?>
            </div>

        </div>
    </div>


    <h3>Success:</h3>
    <div class="twocolumndiv">
        <div class="leftcolumn">
	        <?php echo $form->labelEx($model,'fu_primary_success', array('style'=>'width: 200px', 'class'=>'reval')); ?>
	        <?php echo ZHtml::enumDropDownList($model,'fu_primary_success', array()); ?>
	        <?php echo $form->error($model,'fu_primary_success'); ?>
	        <span class="tooltip"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/info.png"/><span><?php echo $model->tooltipForAttribute('fu_primary_success'); ?></span></a></span>

		</div>
		<div class="rightcolumn">
    	
		    <div class="row">
		        <?php echo $form->labelEx($model,'fu_comments'); ?>
		        <?php echo $form->textArea($model, 'fu_comments', array('rows'=>3, 'cols'=>30)); ?>
		        <?php echo $form->error($model,'fu_comments'); ?>
		    </div>
		    
		</div>
    </div>
    
    <h3>Failure during later follow up:</h3>
    <div class="onecolumndiv">
    
        <div class="row">
        <?php echo $form->labelEx($model,'fu_date_of_failure', array('class'=>'reval')); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model'=>$model,
            'attribute'=>'fu_date_of_failure',
            'value'=>$model->fu_date,
            // additional javascript options for the date picker plugin
            'options'=>array(
                             'showAnim'=>'fold',
                             'showButtonPanel'=>true,
                             'autoSize'=>true,
                             'dateFormat'=>'yy-mm-dd',
                             'defaultDate'=>$model->fu_date_of_failure,
                             ),
            )); ?>
        <?php echo $form->error($model,'fu_date_of_failure'); ?>
    	<span class="tooltip"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/info.png"/><span><?php echo $model->tooltipForAttribute('fu_date_of_failure'); ?></span></a></span>
        </div>

    </div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->