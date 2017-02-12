<form method="post" action="<?=base_url();?>activity/invite_friend/<?=$activity_id?>" name="invitation_form" id="invitation_form">
    <div class="col-md-12 form-group">
        <div class="input-group col-md-12 padding">
            <input class="input form-control" name="friend_email" id="invitation" placeholder="Email..." type="text"/>
        </div>
        <div class="input-group col-md-12 padding">
            <input class="input btn btn-primary green-background" name="submit" type="submit" value="Send" id="invitation" />
        </div>
    </div>
</form>
