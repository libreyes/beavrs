<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uuid')); ?>:</b>
	<?php echo CHtml::encode($data->uuid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_age')); ?>:</b>
	<?php echo CHtml::encode($data->pt_age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_sex')); ?>:</b>
	<?php echo CHtml::encode($data->pt_sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pt_postcode')); ?>:</b>
	<?php echo CHtml::encode($data->pt_postcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_date')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_date_vision_loss')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_date_vision_loss); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_eye')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_eye); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_refraction')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_refraction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_acuity')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_acuity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_lens')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_lens); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_iop')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_iop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_previous_op_date')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_previous_op_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asmt_vitreous')); ?>:</b>
	<?php echo CHtml::encode($data->asmt_vitreous); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_refraction')); ?>:</b>
	<?php echo CHtml::encode($data->fe_refraction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_acuity')); ?>:</b>
	<?php echo CHtml::encode($data->fe_acuity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_vitreous')); ?>:</b>
	<?php echo CHtml::encode($data->fe_vitreous); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_retinal_detachment')); ?>:</b>
	<?php echo CHtml::encode($data->fe_retinal_detachment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_date')); ?>:</b>
	<?php echo CHtml::encode($data->op_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_surgeon_grade')); ?>:</b>
	<?php echo CHtml::encode($data->op_surgeon_grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_cause_of_failure')); ?>:</b>
	<?php echo CHtml::encode($data->op_cause_of_failure); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_foveal_attachment')); ?>:</b>
	<?php echo CHtml::encode($data->op_foveal_attachment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_extent_st')); ?>:</b>
	<?php echo CHtml::encode($data->op_extent_st); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_extent_sn')); ?>:</b>
	<?php echo CHtml::encode($data->op_extent_sn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_extent_in')); ?>:</b>
	<?php echo CHtml::encode($data->op_extent_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_extent_it')); ?>:</b>
	<?php echo CHtml::encode($data->op_extent_it); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_chronic')); ?>:</b>
	<?php echo CHtml::encode($data->op_chronic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_pvr_type')); ?>:</b>
	<?php echo CHtml::encode($data->op_pvr_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_pvr_cp')); ?>:</b>
	<?php echo CHtml::encode($data->op_pvr_cp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_pvr_ca')); ?>:</b>
	<?php echo CHtml::encode($data->op_pvr_ca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_subretinal_bands')); ?>:</b>
	<?php echo CHtml::encode($data->op_subretinal_bands); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_choroidals')); ?>:</b>
	<?php echo CHtml::encode($data->op_choroidals); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_breaks_detached')); ?>:</b>
	<?php echo CHtml::encode($data->op_breaks_detached); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_breaks_attached')); ?>:</b>
	<?php echo CHtml::encode($data->op_breaks_attached); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_largest_break_type')); ?>:</b>
	<?php echo CHtml::encode($data->op_largest_break_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_largest_break_size')); ?>:</b>
	<?php echo CHtml::encode($data->op_largest_break_size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_lowest_break_position')); ?>:</b>
	<?php echo CHtml::encode($data->op_lowest_break_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_positioning')); ?>:</b>
	<?php echo CHtml::encode($data->op_positioning); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('as_lens_surgery')); ?>:</b>
	<?php echo CHtml::encode($data->as_lens_surgery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_volume')); ?>:</b>
	<?php echo CHtml::encode($data->pr_volume); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roo_route')); ?>:</b>
	<?php echo CHtml::encode($data->roo_route); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vity_gauge')); ?>:</b>
	<?php echo CHtml::encode($data->vity_gauge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vity_pvd_induced')); ?>:</b>
	<?php echo CHtml::encode($data->vity_pvd_induced); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vity_peel')); ?>:</b>
	<?php echo CHtml::encode($data->vity_peel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vity_rr')); ?>:</b>
	<?php echo CHtml::encode($data->vity_rr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sb_drainage')); ?>:</b>
	<?php echo CHtml::encode($data->sb_drainage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rp_cryo')); ?>:</b>
	<?php echo CHtml::encode($data->rp_cryo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rp_endolaser')); ?>:</b>
	<?php echo CHtml::encode($data->rp_endolaser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rp_indirect')); ?>:</b>
	<?php echo CHtml::encode($data->rp_indirect); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rp_transcleral_diode')); ?>:</b>
	<?php echo CHtml::encode($data->rp_transcleral_diode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rp_360')); ?>:</b>
	<?php echo CHtml::encode($data->rp_360); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tamp_type')); ?>:</b>
	<?php echo CHtml::encode($data->tamp_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tamp_percent')); ?>:</b>
	<?php echo CHtml::encode($data->tamp_percent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comps_choroidal')); ?>:</b>
	<?php echo CHtml::encode($data->comps_choroidal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comps_lens_touch')); ?>:</b>
	<?php echo CHtml::encode($data->comps_lens_touch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comps_esb')); ?>:</b>
	<?php echo CHtml::encode($data->comps_esb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comps_other_breaks')); ?>:</b>
	<?php echo CHtml::encode($data->comps_other_breaks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comps_deep_suture')); ?>:</b>
	<?php echo CHtml::encode($data->comps_deep_suture); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comps_drain_haem')); ?>:</b>
	<?php echo CHtml::encode($data->comps_drain_haem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comps_incarceration')); ?>:</b>
	<?php echo CHtml::encode($data->comps_incarceration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fu_date')); ?>:</b>
	<?php echo CHtml::encode($data->fu_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fu_type')); ?>:</b>
	<?php echo CHtml::encode($data->fu_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fu_man_complete')); ?>:</b>
	<?php echo CHtml::encode($data->fu_man_complete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fu_number_ops')); ?>:</b>
	<?php echo CHtml::encode($data->fu_number_ops); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fu_attached')); ?>:</b>
	<?php echo CHtml::encode($data->fu_attached); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fu_oil')); ?>:</b>
	<?php echo CHtml::encode($data->fu_oil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fu_acuity')); ?>:</b>
	<?php echo CHtml::encode($data->fu_acuity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fu_lens')); ?>:</b>
	<?php echo CHtml::encode($data->fu_lens); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fu_iop_problem')); ?>:</b>
	<?php echo CHtml::encode($data->fu_iop_problem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fu_foveal_attachment')); ?>:</b>
	<?php echo CHtml::encode($data->fu_foveal_attachment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fu_erm')); ?>:</b>
	<?php echo CHtml::encode($data->fu_erm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fu_macular_hole')); ?>:</b>
	<?php echo CHtml::encode($data->fu_macular_hole); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fu_macular_fold')); ?>:</b>
	<?php echo CHtml::encode($data->fu_macular_fold); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fu_hypotony')); ?>:</b>
	<?php echo CHtml::encode($data->fu_hypotony); ?>
	<br />

</div>