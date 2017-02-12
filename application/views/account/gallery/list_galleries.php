<link href="<?php echo base_url();?>app_assets/css/gallery.css" rel="stylesheet"/>

<div class="events">
    <div class="title">Gallery From Lasts Events</div>
    <div class="event-number"><?php echo count($activities);?></div>
    <hr>
</div>

<?php foreach($activities as $activity) { ?>
<div class=" margin_container">

    <div class="photo">
        <img width="75%" height="300px" src="<?php echo base_url().$activity['path']; ?>" />
    </div>

    <div class="details">
        <div class="details_left">
            <div class="event-info">
                <div class="event-title">
                    <?php echo "#".$activity['title']; ?>
                </div>

                <div class="event-title">

                   <div class="event-income">
                       <i class="fa fa-lg fa-users event-users-icon" aria-hidden="true"></i><?php echo $activity['votes'].' Photos'; ?>
                   </div>
                </div>
            </div>
        </div>

        <div class="button_gallery text-center pull-right"><a class="anchor_gallery" href="<?=base_url();?>gallery/view/<?=$activity['id']?>"><i class="fa fa-picture-o"></i>View Gallery</a></div>
        <div class="clear"></div>
    </div>
</div>
<?php } ?>

