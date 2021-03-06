
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><i class="fa icon-feetype"></i> <?=$this->lang->line('panel_title')?></h3>

        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><i class="fa fa-laptop"></i> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li><a href="<?=base_url("feetype/index")?>"><?=$this->lang->line('menu_feetype')?></a></li>
            <li class="active"><?=$this->lang->line('menu_edit')?> <?=$this->lang->line('menu_feetype')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-8">
                <form class="form-horizontal" role="form" method="post">

                   <?php 
                        if(form_error('feetype')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="feetype" class="col-sm-2 control-label">
                            <?=$this->lang->line("feetype_name")?>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="feetype" name="feetype" value="<?=set_value('feetype', $feetype->feetype)?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('feetype'); ?>
                        </span>
                    </div>

                    <?php 
                        if(form_error('amount')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="amount" class="col-sm-2 control-label">
                            <?=$this->lang->line("feetype_amount")?>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="amount" name="amount" value="<?=set_value('amount', $feetype->amount)?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('amount'); ?>
                        </span>
                    </div>

                    <?php 
                        if(form_error('note')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="note" class="col-sm-2 control-label">
                            <?=$this->lang->line("feetype_note")?>
                        </label>
                        <div class="col-sm-6">
                            <textarea class="form-control" style="resize:none;" id="note" name="note"><?=set_value('note', $feetype->note);?></textarea>
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('note'); ?>
                        </span>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <input type="submit" class="btn btn-success" value="<?=$this->lang->line("update_feetype")?>" >
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

