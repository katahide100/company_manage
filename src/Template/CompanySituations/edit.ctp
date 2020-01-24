<?=$this->Html->script("https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js");?>
<?=$this->Html->script("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js");?>
<?=$this->Html->css("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css");?>
<script>
    $(document).ready(function(){
        $('.date').datetimepicker({
			locale: 'ja',
			format : 'YYYY-MM-DD'
		});

		$('.time').datetimepicker({
			locale: 'ja',
			format : 'HH:mm'
		});
    });
</script>
 <div class="row">
     <div class="col-md-6 col-md-offset-3">
 		<div class="panel panel-primary">
 			<div class="panel-heading">
 			<h3 class="panel-title"><?php echo __('Edit Company Situation'); ?></h3>
 			</div>
 			<div class="panel-body table-responsive">

 			<?php echo $this->Form->create('CompanySituations', array('role' => 'form')); ?>

 				<fieldset>

 										<div class="form-group">
						<?php echo $this->Form->input('id', array('type' => 'hidden', 'class' => 'form-control', 'value' => $companySituation->id)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('user_id', array('type' => 'hidden', 'class' => 'form-control', 'value' => $companySituation->user_id)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('company_id', array('type' => 'hidden', 'class' => 'form-control', 'value' => $companySituation->company_id)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('start_date', array('class' => 'form-control date', 'value' => $companySituation->start_date)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('end_date', array('class' => 'form-control date','value' => $companySituation->end_date)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('overview', array('type' => 'textarea', "cols" => 10, "rows" => 4, 'class' => 'form-control', 'value' => $companySituation->overview)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('language', array('class' => 'form-control', 'value' => $companySituation->language)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('tool', array('class' => 'form-control', 'value' => $companySituation->tool)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('number_of_people', array('class' => 'form-control', 'value' => $companySituation->number_of_people)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('working_hours_from', array('class' => 'form-control time', 'value' => $companySituation->working_hours_from)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('working_hours_to', array('class' => 'form-control time', 'value' => $companySituation->working_hours_to)); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('other', array('type' => 'textarea', "cols" => 10, "rows" => 4, 'class' => 'form-control', 'value' => $companySituation->other)); ?>
					</div><!-- .form-group -->
					
					
					<div class="row" style="padding-bottom:30px">
					<div class="col-sm-5"><?= $this->Html->link(__('戻る'), "javascript:history.back()", ['class' => 'btn btn-large btn-success', 'data-toggle' => 'tooltip', 'title' => 'View', 'escape' => false]) ?></div>
					<div class="col-sm-7" style="text-align:right;"><?php echo $this->Form->submit('更新', array('class' => 'btn btn-large btn-primary')); ?></div>
        </div>
 				</fieldset>

 						<?php echo $this->Form->end(); ?>

 		</div><!-- /.form -->

 	</div><!-- /#page-content .col-sm-9 -->

 </div><!-- /#page-container .row-fluid -->
 </div>
