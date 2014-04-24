<?php

/**
 * This is the model class for table "{{dataset}}".
 *
 * The followings are the available columns in table '{{dataset}}':
 * @property string $id
 * @property string $userId
 * @property string $uuid
 * @property integer $pt_age
 * @property string $pt_sex
 * @property string $pt_postcode
 * @property string $asmt_date
 * @property string $asmt_date_vision_loss
 * @property string $asmt_eye
 * @property string $asmt_refraction
 * @property integer $asmt_acuity
 * @property string $asmt_lens
 * @property integer $asmt_iop
 * @property string $asmt_previous_op_date
 * @property string $asmt_vitreous
 * @property string $asmt_vithaem
 * @property string $fe_refraction
 * @property integer $fe_acuity
 * @property string $fe_vitreous
 * @property integer $fe_retinal_detachment
 * @property string $op_date
 * @property string $op_surgeon_grade
 * @property string $op_cause_of_failure
 * @property string $op_foveal_attachment
 * @property string $op_extent_st
 * @property string $op_extent_sn
 * @property string $op_extent_in
 * @property string $op_extent_it
 * @property integer $op_chronic
 * @property string $op_pvr_type
 * @property string $op_pvr_cp
 * @property string $op_pvr_ca
 * @property integer $op_subretinal_bands
 * @property integer $op_choroidals
 * @property integer $op_breaks_detached
 * @property integer $op_breaks_attached
 * @property string $op_largest_break_type
 * @property string $op_largest_break_size
 * @property string $op_lowest_break_position
 * @property string $op_positioning
 * @property string $op_notes
 * @property string $drawing
 * @property string $as_lens_surgery
 * @property string $pr_volume
 * @property string $roo_route
 * @property string $vity_gauge
 * @property integer $vity_pvd_induced
 * @property integer $vity_peel
 * @property integer $vity_rr
 * @property string $sb_drainage
 * @property integer $rp_cryo
 * @property integer $rp_endolaser
 * @property integer $rp_indirect
 * @property integer $rp_transcleral_diode
 * @property integer $rp_360
 * @property string $tamp_type
 * @property integer $tamp_percent
 * @property integer $comps_choroidal
 * @property integer $comps_lens_touch
 * @property integer $comps_esb
 * @property integer $comps_other_breaks
 * @property integer $comps_deep_suture
 * @property integer $comps_drain_haem
 * @property integer $comps_incarceration
 * @property string $fu_date
 * @property string $fu_type
 * @property integer $fu_man_complete
 * @property integer $fu_readmission
 * @property integer $fu_number_ops
 * @property integer $fu_attached
 * @property integer $fu_oil
 * @property integer $fu_acuity
 * @property string $fu_lens
 * @property integer $fu_iop_problem
 * @property string $fu_foveal_attachment
 * @property integer $fu_erm
 * @property integer $fu_macular_hole
 * @property integer $fu_macular_fold
 * @property integer $fu_hypotony
 * @property integer $fu_primary_success
 * @property string $fu_comments
 * ALTER TABLE `tbl_dataset` CHANGE `fu_primary_success` `fu_primary_success` ENUM('Unknown','Failure','Success')  NOT NULL  DEFAULT 'Unknown';

 *
 * The followings are the available model relations:
 * @property Buckle[] $buckles
 * @property User $user
 */
class Dataset extends CActiveRecord
{
	/*
	 * Properties to use to return search results
	 */
	public $intResult = 0;
	//public $stringResult = "";
	
	/**
	 * Returns the static model of the specified AR class.
	 * @return Dataset the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{dataset}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('op_date, pt_age', 'required'),
			array('pt_age, asmt_acuity, asmt_iop, fe_acuity, fe_retinal_detachment, op_chronic, op_subretinal_bands, op_choroidals, op_breaks_detached, op_breaks_attached, vity_pvd_induced, vity_peel, vity_rr, rp_cryo, rp_endolaser, rp_indirect, rp_transcleral_diode, rp_360, tamp_percent, comps_choroidal, comps_lens_touch, comps_esb, comps_other_breaks, comps_deep_suture, comps_drain_haem, comps_incarceration, fu_man_complete, fu_number_ops, fu_attached, fu_oil, fu_acuity, fu_iop_problem, fu_erm, fu_macular_hole, fu_macular_fold, fu_hypotony', 'numerical', 'integerOnly'=>true),
			array('userId, roo_route, tamp_type', 'length', 'max'=>10),
			array('pt_sex, asmt_refraction, fe_refraction', 'length', 'max'=>6),
			array('pt_postcode, op_pvr_type, pr_volume', 'length', 'max'=>4),
			array('asmt_eye', 'length', 'max'=>5),
			array('asmt_lens, fu_lens, fu_primary_success', 'length', 'max'=>24),
			array('asmt_vitreous, fe_vitreous', 'length', 'max'=>17),
			array('op_surgeon_grade', 'length', 'max'=>20),
			array('op_cause_of_failure', 'length', 'max'=>18),
			array('op_foveal_attachment, fu_foveal_attachment', 'length', 'max'=>8),
			array('op_extent_st, op_extent_sn, op_extent_in, op_extent_it', 'length', 'max'=>1),
			array('op_pvr_cp, op_pvr_ca, op_lowest_break_position', 'length', 'max'=>2),
			array('op_largest_break_type, as_lens_surgery', 'length', 'max'=>19),
			array('op_positioning', 'length', 'max'=>16),
			array('vity_gauge', 'length', 'max'=>4),
			array('sb_drainage', 'length', 'max'=>15),
			array('asmt_date, asmt_date_vision_loss, asmt_previous_op_date, op_date, op_notes, fu_date, fu_date_of_failure, fu_comments, uuid, buckles, asmt_vithaem, fu_readmission', 'safe'),
			
			// Ensure drawing has content
			array('drawing', 'length', 'min'=>200, 'tooShort'=>'The drawing must be completed'),
			
			// Validation range for numeric values
			array('pt_age', 'compare','operator'=>'<=','compareValue'=>150, 'message'=>'Maximum age is 150'),
			array('pt_age', 'compare','operator'=>'>=','compareValue'=>0),
			array('asmt_refraction', 'compare','operator'=>'<=','compareValue'=>20),
			array('asmt_refraction', 'compare','operator'=>'>=','compareValue'=>-30),			
			array('fe_refraction', 'compare','operator'=>'<=','compareValue'=>20),
			array('fe_refraction', 'compare','operator'=>'>=','compareValue'=>-30),	
			array('vity_rr', 'compare','operator'=>'<=','compareValue'=>360),
			array('vity_rr', 'compare','operator'=>'>=','compareValue'=>0),	
			array('tamp_percent', 'compare','operator'=>'<=','compareValue'=>100),
			array('tamp_percent', 'compare','operator'=>'>=','compareValue'=>0),							
						
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, userId, uuid, pt_age, pt_sex, pt_postcode, asmt_date, asmt_date_vision_loss, asmt_eye, asmt_refraction, asmt_acuity, asmt_lens, asmt_iop, asmt_previous_op_date, asmt_vitreous, fe_refraction, fe_acuity, fe_vitreous, fe_retinal_detachment, op_date, op_surgeon_grade, op_cause_of_failure, op_foveal_attachment, op_extent_st, op_extent_sn, op_extent_in, op_extent_it, op_chronic, op_pvr_type, op_pvr_cp, op_pvr_ca, op_subretinal_bands, op_choroidals, op_breaks_detached, op_breaks_attached, op_largest_break_type, op_largest_break_size, op_lowest_break_position, op_positioning, as_lens_surgery, pr_volume, roo_route, vity_gauge, vity_pvd_induced, vity_peel, vity_rr, sb_drainage, rp_cryo, rp_endolaser, rp_indirect, rp_transcleral_diode, rp_360, tamp_type, tamp_percent, comps_choroidal, comps_lens_touch, comps_esb, comps_other_breaks, comps_deep_suture, comps_drain_haem, comps_incarceration, fu_date, fu_date_of_failure, fu_type, fu_man_complete, fu_number_ops, fu_attached, fu_oil, fu_acuity, fu_lens, fu_iop_problem, fu_foveal_attachment, fu_erm, fu_macular_hole, fu_macular_fold, fu_hypotony, fu_primary_success', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'buckles' => array(self::HAS_MANY, 'Buckle', 'dataset_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'userId' => 'User',
			'uuid' => 'UUID',
			'pt_age' => 'Age',
			'pt_sex' => 'Sex',
			'pt_postcode' => 'Postcode (First half)',
			'asmt_date' => 'Date of Assessment',
			'asmt_date_vision_loss' => 'Date of Central Vision Loss',
			'asmt_eye' => 'Eye',
			'asmt_refraction' => 'Refraction (SE)',
			'asmt_acuity' => 'Acuity',
			'asmt_lens' => 'Lens',
			'asmt_iop' => 'IOP',
			'asmt_previous_op_date' => 'Date of Previous Operation',
			'asmt_vitreous' => 'Vitreous',
			'asmt_vithaem' => 'Vitreous haemorrhage',
			'fe_refraction' => 'Refraction (SE)',
			'fe_acuity' => 'Acuity',
			'fe_vitreous' => 'Vitreous',
			'fe_retinal_detachment' => 'Retinal Detachment',
			'op_date' => 'Date of Operation',
			'op_surgeon_grade' => 'Surgeon Grade',
			'op_cause_of_failure' => 'Cause of last Failure',
			'op_foveal_attachment' => 'Foveal Attachment',
			'op_extent_st' => 'Extent ST Quadrant',
			'op_extent_sn' => 'Extent SN Quadrant',
			'op_extent_in' => 'Extent IN Quadrant',
			'op_extent_it' => 'Extent IT Quadrant',
			'op_chronic' => 'Chronic',
			'op_pvr_type' => 'PVR Type',
			'op_pvr_cp' => 'PVR CP',
			'op_pvr_ca' => 'PVR CA',
			'op_subretinal_bands' => 'Subretinal Bands',
			'op_choroidals' => 'Choroidals',
			'op_breaks_detached' => 'Breaks in Detached Retina',
			'op_breaks_attached' => 'Breaks in Attached Retina',
			'op_largest_break_type' => 'Largest Break Type',
			'op_largest_break_size' => 'Largest Break Size',
			'op_lowest_break_position' => 'Lowest Break Position',
			'op_positioning' => 'Positioning',
			'op_notes' => 'Notes',
            'drawing' => 'Drawing',
			'as_lens_surgery' => 'Lens Surgery',
			'pr_volume' => 'PR Volume of gas',
			'roo_route' => 'Route for ROO',
			'vity_gauge' => 'Vitrectomy Gauge',
			'vity_pvd_induced' => 'PVD Induced',
			'vity_peel' => 'Peel',
			'vity_rr' => 'RR',
			'sb_drainage' => 'Drainage',
			'rp_cryo' => 'Cryo',
			'rp_endolaser' => 'Endolaser',
			'rp_indirect' => 'Indirect',
			'rp_transcleral_diode' => 'Transcleral Diode',
			'rp_360' => '360 Retinopexy',
			'tamp_type' => 'Tamponade',
			'tamp_percent' => 'Gas Percent',
			'comps_choroidal' => 'Choroidal haemorrhage',
			'comps_lens_touch' => 'Lens Touch',
			'comps_esb' => 'Entry Site Break',
			'comps_other_breaks' => 'Other Breaks',
			'comps_deep_suture' => 'Deep Suture',
			'comps_drain_haem' => 'Drain Haem',
			'comps_incarceration' => 'Incarceration',
			'fu_date' => 'Follow up Date',
			'fu_type' => 'Follow up Type',
			'fu_man_complete' => 'Management Complete',
			'fu_readmission' => 'Readmitted within 28 days',
			'fu_number_ops' => 'Number of Ops',
			'fu_attached' => 'Attached',
			'fu_oil' => 'Oil in Situ',
			'fu_acuity' => 'Acuity',
			'fu_lens' => 'Lens',
			'fu_iop_problem' => 'IOP Problem',
			'fu_foveal_attachment' => 'Foveal Attachment',
			'fu_erm' => 'ERM',
			'fu_macular_hole' => 'Macular Hole',
			'fu_macular_fold' => 'Macular Fold',
			'fu_hypotony' => 'Hypotony',
			'fu_primary_success' => 'Primary Success at 2 months',
			'fu_date_of_failure' => 'Date of failure',
			'fu_comments' => 'Reasons for Unknown',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
        
        // Ensure search is only on user's records
        $criteria->addColumnCondition(array('userId' => Yii::app()->user->id));

		$criteria->compare('uuid',$this->uuid,true);
		$criteria->compare('pt_age',$this->pt_age);
		$criteria->compare('pt_sex',$this->pt_sex,true);
		$criteria->compare('pt_postcode',$this->pt_postcode,true);
		$criteria->compare('asmt_date',$this->asmt_date,true);
		$criteria->compare('asmt_date_vision_loss',$this->asmt_date_vision_loss,true);
		$criteria->compare('asmt_eye',$this->asmt_eye,true);
		$criteria->compare('asmt_refraction',$this->asmt_refraction,true);
		$criteria->compare('asmt_acuity',$this->asmt_acuity);
		$criteria->compare('asmt_lens',$this->asmt_lens,true);
		$criteria->compare('asmt_iop',$this->asmt_iop);
		$criteria->compare('asmt_previous_op_date',$this->asmt_previous_op_date,true);
		$criteria->compare('asmt_vitreous',$this->asmt_vitreous,true);
		$criteria->compare('asmt_vithaem',$this->asmt_vithaem,true);
		$criteria->compare('fe_refraction',$this->fe_refraction,true);
		$criteria->compare('fe_acuity',$this->fe_acuity);
		$criteria->compare('fe_vitreous',$this->fe_vitreous,true);
		$criteria->compare('fe_retinal_detachment',$this->fe_retinal_detachment);
		$criteria->compare('op_date',$this->op_date,true);
		$criteria->compare('op_surgeon_grade',$this->op_surgeon_grade,true);
		$criteria->compare('op_cause_of_failure',$this->op_cause_of_failure,true);
		$criteria->compare('op_foveal_attachment',$this->op_foveal_attachment,true);
		$criteria->compare('op_extent_st',$this->op_extent_st,true);
		$criteria->compare('op_extent_sn',$this->op_extent_sn,true);
		$criteria->compare('op_extent_in',$this->op_extent_in,true);
		$criteria->compare('op_extent_it',$this->op_extent_it,true);
		$criteria->compare('op_chronic',$this->op_chronic);
		$criteria->compare('op_pvr_type',$this->op_pvr_type,true);
		$criteria->compare('op_pvr_cp',$this->op_pvr_cp,true);
		$criteria->compare('op_pvr_ca',$this->op_pvr_ca,true);
		$criteria->compare('op_subretinal_bands',$this->op_subretinal_bands);
		$criteria->compare('op_choroidals',$this->op_choroidals);
		$criteria->compare('op_breaks_detached',$this->op_breaks_detached);
		$criteria->compare('op_breaks_attached',$this->op_breaks_attached);
		$criteria->compare('op_largest_break_type',$this->op_largest_break_type,true);
		$criteria->compare('op_largest_break_size',$this->op_largest_break_size,true);
		$criteria->compare('op_lowest_break_position',$this->op_lowest_break_position,true);
		$criteria->compare('op_positioning',$this->op_positioning,true);
		$criteria->compare('as_lens_surgery',$this->as_lens_surgery,true);
		$criteria->compare('pr_volume',$this->pr_volume,true);
		$criteria->compare('roo_route',$this->roo_route,true);
		$criteria->compare('vity_gauge',$this->vity_gauge,true);
		$criteria->compare('vity_pvd_induced',$this->vity_pvd_induced);
		$criteria->compare('vity_peel',$this->vity_peel);
		$criteria->compare('vity_rr',$this->vity_rr);
		$criteria->compare('sb_drainage',$this->sb_drainage,true);
		$criteria->compare('rp_cryo',$this->rp_cryo);
		$criteria->compare('rp_endolaser',$this->rp_endolaser);
		$criteria->compare('rp_indirect',$this->rp_indirect);
		$criteria->compare('rp_transcleral_diode',$this->rp_transcleral_diode);
		$criteria->compare('rp_360',$this->rp_360);
		$criteria->compare('tamp_type',$this->tamp_type,true);
		$criteria->compare('tamp_percent',$this->tamp_percent);
		$criteria->compare('comps_choroidal',$this->comps_choroidal);
		$criteria->compare('comps_lens_touch',$this->comps_lens_touch);
		$criteria->compare('comps_esb',$this->comps_esb);
		$criteria->compare('comps_other_breaks',$this->comps_other_breaks);
		$criteria->compare('comps_deep_suture',$this->comps_deep_suture);
		$criteria->compare('comps_drain_haem',$this->comps_drain_haem);
		$criteria->compare('comps_incarceration',$this->comps_incarceration);
		$criteria->compare('fu_date',$this->fu_date,true);
		$criteria->compare('fu_type',$this->fu_type,true);
		$criteria->compare('fu_man_complete',$this->fu_man_complete);
		$criteria->compare('fu_readmission',$this->fu_readmission);
		$criteria->compare('fu_number_ops',$this->fu_number_ops);
		$criteria->compare('fu_attached',$this->fu_attached);
		$criteria->compare('fu_oil',$this->fu_oil);
		$criteria->compare('fu_acuity',$this->fu_acuity);
		$criteria->compare('fu_lens',$this->fu_lens,true);
		$criteria->compare('fu_iop_problem',$this->fu_iop_problem);
		$criteria->compare('fu_foveal_attachment',$this->fu_foveal_attachment,true);
		$criteria->compare('fu_erm',$this->fu_erm);
		$criteria->compare('fu_macular_hole',$this->fu_macular_hole);
		$criteria->compare('fu_macular_fold',$this->fu_macular_fold);
		$criteria->compare('fu_hypotony',$this->fu_hypotony);
		$criteria->compare('fu_primary_success',$this->fu_primary_success);
		
		// Following sort array returns cases in descending order of op_date (ie most recent cases first)
		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
			'sort'=>array(
				'defaultOrder'=>'op_date DESC'
				),
		));
	}
    
    /**
     * Override the before validate method to put in the current userId
     *
     */
    protected function beforeValidate()
    {
        // Save current userId
        if ($this->isNewRecord)
        {
            $this->userId = Yii::app()->user->id;
        }
        
        return parent::beforeValidate();
    }
    
    
    /**
     * Allows Yii to save fields as null (eg dates which otherwise save as 0000-00-00 or trigger an exception
     * http://www.prettyscripts.com/framework/yii/yii-date-field-save-as-null-value
     */
    protected function beforeSave()
    {
        foreach ($this->getTableSchema()->columns as $column)
        {
            if ($column->allowNull == 1 && $this->getAttribute($column->name) == '')
            {
                $this->setAttribute($column->name, null);
            }
        }
        
        return parent::beforeSave();
    }
    
    /**
     * Creates an array of visual acuity values
     */
    public function acuityArray()
    {
        return array(
        			 '0'=>'Not recorded',
                     '93'=>'6/5',
                     '89'=>'6/6',
                     '80'=>'6/9',
                     '74'=>'6/12',
                     '65'=>'6/18',
                     '59'=>'6/24',
                     '50'=>'6/36',
                     '39'=>'6/60',
                     '30'=>'3/60',
                     '4'=>'CF',
                     '3'=>'HM',
                     '2'=>'PL',
                     '1'=>'NPL');
    }
    
    /**
     * Creates an array of buckle values
     */
    public function buckleArray()
    {
        return array(
                     '1'=>'Other',
                     '2'=>'3mm sponge',
                     '3'=>'4mm sponge',
                     '4'=>'5mm sponge',
                     '5'=>'7mm sponge',
                     '6'=>'276',
                     '7'=>'277',
                     '8'=>'279',
                     '9'=>'280',
                     '10'=>'40 band',
                     '11'=>'240 band',
                     '12'=>'Encircling buckle');
    }
    
    /**
     * Returns index of buckle array for a type
     */
    public function indexForBuckleType($type)
    {
        $types = array(
                       '1'=>'Other',
                       '2'=>'3mm sponge',
                       '3'=>'4mm sponge',
                       '4'=>'5mm sponge',
                       '5'=>'7mm sponge',
                       '6'=>'276',
                       '7'=>'277',
                       '8'=>'279',
                       '9'=>'280',
                       '10'=>'40 band',
                       '11'=>'240 band');
        //$types = $this.buckleArray();
        
        return array_search($type, $types);
        
    }
    
    /**
     * Converts fu_man_complete 0 and 1 to No and Yes
     */
    public function fuManCompleteAsText()
    {
        if ($this->fu_man_complete == 0) return "No";
        else return "Yes";        
    }

    /**
     * Converts fu_attached 0 and 1 to No and Yes
     */
    public function fuAttachedAsText()
    {
        if ($this->fu_attached == 0) return "No";
        else return "Yes";        
    }

    /**
     * Converts fu_primary_success 0 and 1 to No and Yes
     */
    public function fuPrimaryPuccessAsText()
    {
        if ($this->fu_primary_success == 0) return "No";
        else return "Yes";        
    }
    
    /**
     * Returns an optional tooltip for an attribute
     */
    public function tooltipForAttribute($_attribute)
    {
		$tooltips = array(
			'uuid' => 'An identifier guaranteed to be unique and assigned to this patient. It is printed out with the operation note, and allows identification of the patient record when follow up data is to be entered',
		    'asmt_vithaem' => 'Grade 0: No blood present in the vitreous, the entire retina is visible.<br /><br />Grade 1: Some haemorrhage present, which obscures between a total of 1 to 5 clock hours of retina.<br /><br />Grade 2: Hemorrhage obscures between a total of 5 to 10 clock hours of central and/or peripheral retina, or a large haemorrhage is located posterior to the equator, with varying clock hours of anterior retina visible.<br /><br />Grade 3: A red reflex is present, with no retinal detail seen posterior to the equator.<br /><br />Grade 4: Dense VH with no red reflex present',
			'fu_date' => "Follow up with an attached retina must be for a minimum of 2 months after initial surgery or oil removal for primary success to be achieved. Cases with less than 2 months follow up will not be included in a revalidation audit. It is accepted that in oil cases final follow up reporting to achieve the 2 months follow up after oil removal may need be prolonged depending on the duration of oil tamponade",
			'fu_man_complete' => "No additional retinal management planned regardless of the state of the retina<br /><br />For example, this would be true for patients with oil and no plans to remove it",
			'fu_readmission' => "Unplanned readmission or surgery for ophthalmic reasons required within 28 days for reasons other than RD and as a complication of the original surgery",
			'fu_attached' => "Retinal reattachment is defined as attachment of the retina with no tamponade present, and no subretinal fluid which could spread. This would include those eyes with small traction detachments posterior to a circumferential or encircling buckle. It would also include eyes with anterior fluid walled off by 360 degree retinopexy",
			'fu_iop_problem' => "Whether RRD management has induced an ongoing pressure problem (pressure requiring either monitoring or treatment in an eye that had neither pre-operatively)",
			'fu_primary_success' => "Primary retinal reattachment is defined as attachment of the retina with no tamponade present, and no subretinal fluid which could spread. This would include those eyes with small traction detachments posterior to a circumferential or encircling buckle. It would also include eyes with anterior SRF walled off by 360 degree retinopexy. It excludes patients who have any intervention to achieve reattachment after the original procedure including laser or intravitreal gas injection",
			'op_pvr_type' => "Grade A is the presence of vitreous cells or haze<br /><br />Grade B is the presence of rolled or irregular edges of a tear or inner retinal surface wrinkling<br /><br />Grade C is the presence of preretinal or subretinal membranes, either anterior to the equator (grade CA) or posterior to the equator (grade CP), and described by the number of clock hours involved",
			'fu_number_ops' => "Total number of operations for retinal detachment prior to this point, including removal of silicone oil",
			'fu_date_of_failure' => "If the patient re-attends after the above follow up, and the retina has re-detached, enter the date of failure here",
		);
		return (
			array_key_exists($_attribute, $tooltips) ? $tooltips[$_attribute] : ""
		);
    }
    
	/**
	* Returns an array of results
	*
	* @param {Bool} True if results just for current user, otherwise returns results for all users
	* @returns {Array} Associative array containing results
	*/
    public function results($_isForUser)
    {
	    $criteria = new CDbCriteria;
	    
	    // For current user or for all
	    if ($_isForUser)
	    {
		    $criteria->addColumnCondition(array('userId' => Yii::app()->user->id));
	    }
	    
	    // Array for returning results
		$returnArray = array();
		
		// Total number of cases
		$returnArray['total'] = $this->count($criteria);
		
		// Number of cases whose management is complete (defined as more than three months since surgery)
		//$criteria->addCondition(array('condition' => 'NOW() > DATE_ADD(op_date,INTERVAL 4 MONTH)'));
		$criteria->select="SUM(CASE WHEN `fu_primary_success` LIKE 'Unknown' THEN 1 ELSE 0 END) AS intResult";
		$res = $this->find($criteria);
		$returnArray['unknown'] = $res->intResult;
		
		// Number of cases with single operation success
		$criteria->addColumnCondition(array('fu_primary_success' => 'Success'));
		$returnArray['success'] = $this->count($criteria);
				
		return $returnArray;
    }
    
	/**
	* Sets primary success to failure if follow up period more than 4 months, and follow up date is blank
	*/
    public function setFailures()
    {
    	$criteria = new CDbCriteria;
    	$criteria->addColumnCondition(array('userId' => Yii::app()->user->id));
    	$criteria->addCondition(array('condition' => 'NOW() > DATE_ADD(op_date,INTERVAL 4 MONTH)'));
    	$criteria->addCondition(array('condition' => 'fu_date IS NULL'));
		$this->updateAll(array('fu_primary_success' => 'Failure'), $criteria, array());
    }
}