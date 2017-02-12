
<div class="all-ended-events">
    <?php $activities = isset($activities) ? $activities : array(); ?>
    <?php foreach ($activities as $activity) { ?>
        <?php $this->load->view('account/activity/activity_template.php',array('activity' => $activity,'date' => 'end_date','accepted_invitation' => $accepted_invitation['ended']));?>
    <?php } ?>
</div>
