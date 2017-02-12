<form method="post" action="<?=base_url()?>activity/question/<?=$id;?>" name="add_question_form" id="add_question_form" enctype="multipart/form-data"">
<div  class="col-md-12 form-group" >
    <div id="question_answer">
        <div class="input-group col-md-3 item">
                <textarea class="input form-control" name="question" id="question"
                          placeholder="Enter a question..."></textarea>
        </div>

        <div class="input-group col-md-3 items">
                <input class="input form-control" name="answer[]" id="answer1"
                          placeholder="Enter a answer..."/>
        </div>


    </div>

    <div id="add_answer" class="input-group col-md-3 item">
        <a >Add answer</a>
    </div>

    <div class="input-group col-md-3">
        <input id="question_add" class="input button_activity" name="submit" type="submit" value="Add" />
    </div>
</div>
</form>