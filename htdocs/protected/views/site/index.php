<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to the BEAVRS retinal detachment dataset system (Version 1.1)</h1>

<p>This is an online web application for the collection, review, and analysis of anonymised retinal detachment data</p>

<h3>Instructions</h3>
<p>'Create Dataset' brings up a form to submit a new dataset. This action generates a unique number (UUID) which can be saved in the notes (by printing the form) to allow you to identify the patient when entering follow up data later on.</p>
<p>'Manage Datasets' displays a searchable table of your previously entered datasets. This allows you to review and augment data on previous sets.<br />Clicking the <img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/view.png" alt="View" />icon will display an operation note which can be printed and stored in the notes.<br />Clicking the <img src="<?php echo Yii::app()->request->baseUrl; ?>/graphics/update.png" alt="Update" />icon will display the entire dataset and allow editing.</p>
<h3>What's new in 1.1</h3>
<ul>
<li>The retina drawing no longer needs to be saved in order to fill in the retinal description fields, which now update automatically</li>
<li>The 'Management complete' checkbox has been removed, since it added no additional information</li>
<li>When a user logs on, all the cases which don't have follow up date entered and had an operation date older than 4 months are set to 'Failure'</li>
<p>The graph on the admin page defines as 'complete' any case that has follow up data included AND those which have an operation date older than 4 months</p>
</ul>