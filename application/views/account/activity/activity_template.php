
<?php if($date == 'end_date') {
    $class = 'ended';
    $participation_text = 'participated';
} else {
    $class = 'upcoming';
    $participation_text = 'will be there';
}



?>
<div class="all-<?php echo $class;?>-event" >
    <div class="ended-events-top">
        <img src="<?php echo  base_url() .$activity['path'] ; ?>">
        <div class="approve-reject-event">
            <?php if($date != 'end_date'): ?>
            <div class="event-attend">
                <?php if($this->session->userdata('id') == $activity['user_id'] || (isset($activity['accepted']) && $activity['accepted'])):?>
                    <a class="no-hover" href="javascript:void(0)">Going</a>
                <?php else: ?>
                    <a href="<?php echo base_url(); ?>activity/accept_invite/<?php echo $activity['hash']?>">
                        <i class="fa fa-check"></i> Attend
                    </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <div class="event-view">
                <a href="<?php echo base_url(); ?>activity/view/<?php echo $activity['id']?>">
                    <i class="fa fa-eye"></i> View
                </a>
            </div>
        </div>
    </div>
    <div class="<?php echo $class;?>-events-bottom">
        <div class="<?php echo $class;?>-events-date">
            <div class="<?php echo $class;?>-events-date-day">
                <?php echo intval(date("d", strtotime($activity[$date]))); ?>
            </div>
            <div class="<?php echo $class;?>-events-date-month">
                <?php echo strtoupper(date("M", strtotime($activity[$date]))); ?>
            </div>
        </div>
        <div class="<?php echo $class;?>-events-info">
            <div class="<?php echo $class;?>-events-description">
                <?php echo $activity['title']; ?>
            </div>
            <div class="<?php echo $class;?>-events-votes">
                <i class="fa fa-lg fa-users" aria-hidden="true"></i>
                <?php if(isset($accepted_invitation) and !empty($accepted_invitation) and is_array($accepted_invitation)) { ?>
                   <?php foreach($accepted_invitation[$activity['id']] as $value){ ?>
                       <?php echo $value+1 . ' ' . $participation_text; ?>
                   <?php } ?>
                <?php } else { ?>
                <?php echo 1 . ' ' . $participation_text; ?>
                <?php }?>


            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>