<h1>Operation Note</h1>

<div class="twocolumndiv">
    <div class="leftcolumn">
        <h5>Label:</h5>
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/lable.gif" width="260" height="140"/>
    </div>
    <div class="rightcolumn">
        <h5>Patient details:</h5>
        <b><?php echo CHtml::activeLabel($model, 'uuid'); ?>:</b>
        <?php echo $model->uuid ?><br />
        <b><?php echo CHtml::activeLabel($model, 'pt_age'); ?>:</b>
        <?php echo $model->pt_age ?><br />
        <b><?php echo CHtml::activeLabel($model, 'pt_sex'); ?>:</b>
        <?php echo $model->pt_sex ?><br />
    </div>
</div>

<!--   This script handles the drawings for the page   -->
<script type="text/javascript">

    // Variables assigned to each drawing on this page
    var drawing;

    // Runs on page load
    function init()
    {
        // Get reference to RPS canvas
        var canvasRPS = document.getElementById('canvasRPS');
        
        // Create blank posterior segment drawing
        drawing = new ED.Drawing(canvasRPS, ED.eye.Right, 'RPS', false);
        
        // Get reference to eye from drop down and change eye appropriately
        var eye = <?php echo '"',$model->asmt_eye.'"'; ?>;
        drawing.setEye(eye);
        
        // Preload any images
        drawing.preLoadImagesFrom("<?php echo Yii::app()->request->baseUrl; ?>/graphics/");
        
        // Wait for drawing object to be ready before adding objects or drawings
        drawing.onLoaded = function()
        {
            // Load doodleSet (for existing drawings)
            drawing.load(doodleSet);
            
            // Draw doodles
            drawing.drawAllDoodles();
        }
    }

</script>
<div class="twocolumndiv">
    <div class="leftcolumn">
        <h5>Date:</h5>
        <?php if (!is_null($model->op_date)) echo Yii::app()->dateFormatter->formatDateTime($model->op_date, 'medium', null)."<br />"; ?>
        <h5>Eye:</h5>
        <?php echo $model->asmt_eye."<br />"; ?>
        <h5>Anterior segment surgery:</h5>
        <?php echo $model->as_lens_surgery == "None"?"":$model->as_lens_surgery."<br />"; ?>
        <?php echo $model->roo_route == "None"?"":"Removal of oil through ".$model->roo_route."<br />"; ?>
        <h5>Vitrectomy:</h5>
        <?php echo $model->vity_gauge == "None"?"":$model->vity_gauge." vitrectomy<br />"; ?>
        <?php echo $model->vity_peel == 0?"":"Peel<br />"; ?>
        <?php echo $model->vity_rr == 0?"":"Relaxing retinectomy ".$model->vity_rr." degrees<br />"; ?>
        <h5>Retinopexy:</h5>
        <?php echo $model->rp_cryo == 0?"":"Cryo<br />"; ?>
        <?php echo $model->rp_endolaser == 0?"":"Endolaser<br />"; ?>
        <?php echo $model->rp_indirect == 0?"":"Indirect laser<br />"; ?>
        <?php echo $model->rp_transcleral_diode == 0?"":"Transcleral diode laser<br />"; ?>
        <?php echo $model->rp_360 == 0?"":"360 degree retinopexy<br />"; ?>
        <h5>Tamponade:</h5>
        <?php echo $model->tamp_type."<br />"; ?>
        <?php echo $model->pr_volume == 0?"":"Pneumatic retinopexy using ".$model->pr_volume." mls<br />"; ?>
        <?php echo ($model->tamp_percent < 1 || $model->tamp_type == "None")?"":$model->tamp_percent."%<br />"; ?>
        <h5>Scleral buckling:</h5>
        <?php echo $model->sb_drainage == "None"?"":"Drainage of SRF using ".$model->sb_drainage."<br />"; ?>
        <?php
            $buckles = $model->buckles;
            $buckleString = "";
            foreach($buckles as $b)
            {
                $buckleString = $buckleString.$b->type.", ";
            }
            echo substr($buckleString, 0, -2);
        ?><br />
        <h5>Complications:</h5>
        <?php echo $model->comps_choroidal == 0?"":"Choroidal<br />"; ?>
        <?php echo $model->comps_lens_touch == 0?"":"Lens touch<br />"; ?>
        <?php echo $model->comps_esb == 0?"":"Entry site break<br />"; ?>
        <?php echo $model->comps_other_breaks == 0?"":"Other breaks<br />"; ?>
        <?php echo $model->comps_deep_suture == 0?"":"Deep suture<br />"; ?>
        <?php echo $model->comps_drain_haem == 0?"":"Drain related haemorrrhage<br />"; ?>
        <?php echo $model->comps_incarceration == 0?"":"Incarceration<br />"; ?>
        <h5>Positioning:</h5>
        <?php echo $model->op_positioning."<br />"; ?>
    </div>
    <div class="rightcolumn">
        <h5>Surgeon: </h5><br />
        <h5>Drawing: </h5>
        <canvas class="view" id="canvasRPS" width="401" height="401"></canvas>
        <h5>Notes: </h5><br />
        <?php echo $model->op_notes."<br />"; ?>
        <br /><br />
    </div>
</div>