
    
    <?php if(!empty($upcomingEvents)){?>
    <div class="events">
        <div class="title">Upcoming events</div>
        <div class="event-number"><?php echo count($upcomingEvents);?></div>
        <hr>
    </div>
    
    <div class="all-upcoming-events">
        <?php $upcomingEvents = isset($upcomingEvents) ? $upcomingEvents : array(); ?>
        <?php foreach ($upcomingEvents as $key => $upcomingEvent) { ?>
            <?php $this->load->view('account/activity/activity_template.php',array('activity' => $upcomingEvent,'date' => 'date','accepted_invitation' => $accepted_invitation['upcoming']));?>
        <?php } ?>
    </div>
    <?php }?>
    <?php if(!empty($openEvents)){?>
        <div class="events">
            <div class="title">Open events</div>
            <div class="event-number"><?php echo count($openEvents);?></div>
            <hr>
        </div>
        <div class="all-upcoming-events">
            <?php $openEvents = isset($openEvents) ? $openEvents : array(); ?>
            <?php foreach ($openEvents as $openEvent) { ?>
                <?php $this->load->view('account/activity/activity_template.php',array('activity' => $openEvent,'date' => 'date','accepted_invitation' => $accepted_invitation['open']));?>
            <?php } ?>
        </div>
     <?php } ?>
    <!-- <div class="events">
        <div class="title">Your friends invited you to</div>
        <div class="event-number">2</div>
        <hr>
    </div> -->

    <!-- <div class="events">
        <div class="title">Your galleries</div>
        <div class="event-number">3</div>
        <hr>
    </div> -->
    <?php if(!empty($endedEvents)){?>
    <div class="events">
        <div class="title">Past events</div>
        <div class="event-number-finished"><?php echo count($endedEvents);?></div>
        <hr>
    </div>

    <div class="all-ended-events">
        <?php $endedEvents = isset($endedEvents) ? $endedEvents : array(); ?>
        <?php foreach ($endedEvents as $endedEvent) { ?>
            <?php $this->load->view('account/activity/activity_template.php',array('activity' => $endedEvent,'date' => 'end_date','accepted_invitation' => $accepted_invitation['ended']));?>
        <?php } ?>
    </div>
    <?php }?>


