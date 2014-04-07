<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userId'); ?>
		<?php echo $form->textField($model,'userId',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uuid'); ?>
		<?php echo $form->textField($model,'uuid',array('size'=>36,'maxlength'=>36)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pt_age'); ?>
		<?php echo $form->textField($model,'pt_age'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pt_sex'); ?>
		<?php echo $form->textField($model,'pt_sex',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pt_postcode'); ?>
		<?php echo $form->textField($model,'pt_postcode',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_date'); ?>
		<?php echo $form->textField($model,'asmt_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_date_vision_loss'); ?>
		<?php echo $form->textField($model,'asmt_date_vision_loss'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_eye'); ?>
		<?php echo $form->textField($model,'asmt_eye',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_refraction'); ?>
		<?php echo $form->textField($model,'asmt_refraction',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_acuity'); ?>
		<?php echo $form->textField($model,'asmt_acuity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_lens'); ?>
		<?php echo $form->textField($model,'asmt_lens',array('size'=>24,'maxlength'=>24)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_iop'); ?>
		<?php echo $form->textField($model,'asmt_iop'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_previous_op_date'); ?>
		<?php echo $form->textField($model,'asmt_previous_op_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asmt_vitreous'); ?>
		<?php echo $form->textField($model,'asmt_vitreous',array('size'=>17,'maxlength'=>17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fe_refraction'); ?>
		<?php echo $form->textField($model,'fe_refraction',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fe_acuity'); ?>
		<?php echo $form->textField($model,'fe_acuity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fe_vitreous'); ?>
		<?php echo $form->textField($model,'fe_vitreous',array('size'=>17,'maxlength'=>17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fe_retinal_detachment'); ?>
		<?php echo $form->textField($model,'fe_retinal_detachment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_date'); ?>
		<?php echo $form->textField($model,'op_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_surgeon_grade'); ?>
		<?php echo $form->textField($model,'op_surgeon_grade',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_cause_of_failure'); ?>
		<?php echo $form->textField($model,'op_cause_of_failure',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_foveal_attachment'); ?>
		<?php echo $form->textField($model,'op_foveal_attachment',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_extent_st'); ?>
		<?php echo $form->textField($model,'op_extent_st',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_extent_sn'); ?>
		<?php echo $form->textField($model,'op_extent_sn',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_extent_in'); ?>
		<?php echo $form->textField($model,'op_extent_in',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_extent_it'); ?>
		<?php echo $form->textField($model,'op_extent_it',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_chronic'); ?>
		<?php echo $form->textField($model,'op_chronic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_pvr_type'); ?>
		<?php echo $form->textField($model,'op_pvr_type',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_pvr_cp'); ?>
		<?php echo $form->textField($model,'op_pvr_cp',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_pvr_ca'); ?>
		<?php echo $form->textField($model,'op_pvr_ca',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_subretinal_bands'); ?>
		<?php echo $form->textField($model,'op_subretinal_bands'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_choroidals'); ?>
		<?php echo $form->textField($model,'op_choroidals'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_breaks_detached'); ?>
		<?php echo $form->textField($model,'op_breaks_detached'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_breaks_attached'); ?>
		<?php echo $form->textField($model,'op_breaks_attached'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_largest_break_type'); ?>
		<?php echo $form->textField($model,'op_largest_break_type',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_largest_break_size'); ?>
		<?php echo $form->textField($model,'op_largest_break_size',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_lowest_break_position'); ?>
		<?php echo $form->textField($model,'op_lowest_break_position',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'op_positioning'); ?>
		<?php echo $form->textField($model,'op_positioning',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'as_lens_surgery'); ?>
		<?php echo $form->textField($model,'as_lens_surgery',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pr_volume'); ?>
		<?php echo $form->textField($model,'pr_volume',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'roo_route'); ?>
		<?php echo $form->textField($model,'roo_route',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vity_gauge'); ?>
		<?php echo $form->textField($model,'vity_gauge',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vity_pvd_induced'); ?>
		<?php echo $form->textField($model,'vity_pvd_induced'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vity_peel'); ?>
		<?php echo $form->textField($model,'vity_peel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vity_rr'); ?>
		<?php echo $form->textField($model,'vity_rr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sb_drainage'); ?>
		<?php echo $form->textField($model,'sb_drainage',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rp_cryo'); ?>
		<?php echo $form->textField($model,'rp_cryo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rp_endolaser'); ?>
		<?php echo $form->textField($model,'rp_endolaser'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rp_indirect'); ?>
		<?php echo $form->textField($model,'rp_indirect'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rp_transcleral_diode'); ?>
		<?php echo $form->textField($model,'rp_transcleral_diode'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rp_360'); ?>
		<?php echo $form->textField($model,'rp_360'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tamp_type'); ?>
		<?php echo $form->textField($model,'tamp_type',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tamp_percent'); ?>
		<?php echo $form->textField($model,'tamp_percent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comps_choroidal'); ?>
		<?php echo $form->textField($model,'comps_choroidal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comps_lens_touch'); ?>
		<?php echo $form->textField($model,'comps_lens_touch'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comps_esb'); ?>
		<?php echo $form->textField($model,'comps_esb'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comps_other_breaks'); ?>
		<?php echo $form->textField($model,'comps_other_breaks'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comps_deep_suture'); ?>
		<?php echo $form->textField($model,'comps_deep_suture'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comps_drain_haem'); ?>
		<?php echo $form->textField($model,'comps_drain_haem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comps_incarceration'); ?>
		<?php echo $form->textField($model,'comps_incarceration'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fu_date'); ?>
		<?php echo $form->textField($model,'fu_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fu_type'); ?>
		<?php echo $form->textField($model,'fu_type',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fu_man_complete'); ?>
		<?php echo $form->textField($model,'fu_man_complete'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fu_number_ops'); ?>
		<?php echo $form->textField($model,'fu_number_ops'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fu_attached'); ?>
		<?php echo $form->textField($model,'fu_attached'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fu_oil'); ?>
		<?php echo $form->textField($model,'fu_oil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fu_acuity'); ?>
		<?php echo $form->textField($model,'fu_acuity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fu_lens'); ?>
		<?php echo $form->textField($model,'fu_lens',array('size'=>24,'maxlength'=>24)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fu_iop_problem'); ?>
		<?php echo $form->textField($model,'fu_iop_problem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fu_foveal_attachment'); ?>
		<?php echo $form->textField($model,'fu_foveal_attachment',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fu_erm'); ?>
		<?php echo $form->textField($model,'fu_erm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fu_macular_hole'); ?>
		<?php echo $form->textField($model,'fu_macular_hole'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fu_macular_fold'); ?>
		<?php echo $form->textField($model,'fu_macular_fold'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fu_hypotony'); ?>
		<?php echo $form->textField($model,'fu_hypotony'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->