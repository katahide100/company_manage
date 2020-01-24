<div class="row">
    <div class="col-md-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
			<h3 class="panel-title"><?php echo __('Add User'); ?></h3>
			</div>
			<div class="panel-body table-responsive">

			<?php echo $this->Form->create('Users', array('role' => 'form')); ?>

				<fieldset>

										<div class="form-group">
						<?php echo $this->Form->input('id', array('type' => 'hidden', 'class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('name', array('class' => 'form-control', 'label' => '名前')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('email', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('password', array('class' => 'form-control', 'label' => 'パスワード')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('user_type', array('class' => 'form-control', 'label' => 'ユーザー区分')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('destination', array('type' => 'hidden', 'class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<div class="row" style="padding-bottom:30px">
					<div class="col-sm-5"><?= $this->Html->link(__('戻る'), "javascript:history.back()", ['class' => 'btn btn-large btn-success', 'data-toggle' => 'tooltip', 'title' => 'View', 'escape' => false]) ?></div>
					<div class="col-sm-7" style="text-align:right;"><?php echo $this->Form->submit('登録', array('class' => 'btn btn-large btn-primary')); ?></div>
        </div>
					

				</fieldset>

						<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->

	</div><!-- /#page-content .col-md-9 -->

</div><!-- /#page-container .row-fluid -->

