
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-signal"></i> <?=$this->lang->line('panel_title')?></h3>

       
        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><i class="fa fa-laptop"></i> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li><a href="<?=base_url("grade/index")?>"><?=$this->lang->line('menu_grade')?></a></li>
            <li class="active"><?=$this->lang->line('menu_add')?> <?=$this->lang->line('menu_grade')?></li>
        </ol>
    </div><!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-8">
                <form class="form-horizontal" role="form" method="post">
                    <?php 
                        if(form_error('classesID')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="classesID" class="col-sm-2 control-label">
                            <?=$this->lang->line('grade_classes')?>
                        </label>
                        <div class="col-sm-6">
                            <?php
                                $array = array("0" => $this->lang->line("grade_select_classes"));
                                foreach ($classes as $classa) {
                                    $array[$classa->classesID] = $classa->classes;
                                }
                                echo form_dropdown("classesID", $array, set_value("classesID", $set_classes), "id='classesID' class='form-control'");
                            ?>
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('classesID'); ?>
                        </span>
                    </div>

                    <?php 
                        if(form_error('subjectID')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="subjectID" class="col-sm-2 control-label">
                            <?=$this->lang->line('grade_subject')?>
                        </label>
                        <div class="col-sm-6">
                            <?php
                                $array = array("0" => $this->lang->line("grade_select_subject"));
                                if($subjects != 0) {
                                    foreach ($subjects as $subject) {
                                        $array[$subject->subjectID] = $subject->fullsubjectname;
                                    }
                                }
                                echo form_dropdown("subjectID", $array, set_value("subjectID", $set_subject), "id='subjectID' class='form-control'");
                            ?>
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('subjectID'); ?>
                        </span>
                    </div>
                    
                    <?php 
                        if(form_error('grade')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="grade" class="col-sm-2 control-label">
                            <?=$this->lang->line("grade_name")?>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="grade" name="grade" value="<?=set_value('grade')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('grade'); ?>
                        </span>
                    </div>

                    <?php 
                        if(form_error('point')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="point" class="col-sm-2 control-label">
                            <?=$this->lang->line("grade_point")?>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="point" name="point" value="<?=set_value('point')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('point'); ?>
                        </span>
                    </div>

                    <?php 
                        if(form_error('gradefrom')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="gradefrom" class="col-sm-2 control-label">
                            <?=$this->lang->line("grade_gradefrom")?>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="gradefrom" name="gradefrom" value="<?=set_value('gradefrom')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('gradefrom'); ?>
                        </span>
                    </div>

                    <?php 
                        if(form_error('gradeupto')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="gradeupto" class="col-sm-2 control-label">
                            <?=$this->lang->line("grade_gradeupto")?>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="gradeupto" name="gradeupto" value="<?=set_value('gradeupto')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('gradeupto'); ?>
                        </span>
                    </div>

                    <?php 
                        if(form_error('note')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="note" class="col-sm-2 control-label">
                            <?=$this->lang->line("grade_note")?>
                        </label>
                        <div class="col-sm-6">
                            <textarea style="resize:none;" class="form-control" id="note" name="note"><?=set_value('note')?></textarea>
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('note'); ?>
                        </span>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <input type="submit" class="btn btn-success" value="<?=$this->lang->line("add_class")?>" >
                        </div>
                    </div>
                </form>
            </div>    
        </div>
    </div>
</div>
<script type="text/javascript">
$("#classesID").change(function() {
var id = $(this).val();
if(parseInt(id)) {
    if(id === '0') {
        $('#subjectID').val(0);
    } else {
        $.ajax({
            type: 'POST',
            url: "<?=base_url('mark/subjectcall')?>",
            data: {"id" : id},
            dataType: "html",
            success: function(data) {
               $('#subjectID').html(data);
            }
        });
    }
}
});
</script>