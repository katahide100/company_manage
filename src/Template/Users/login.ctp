<div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
<div class="form-group">
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <div class="form-group">
						<?php echo $this->Form->input('email', array('class' => 'form-control')); ?>
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
					</div>
    </fieldset>
<?= $this->Form->button(__('Login'), array('class' => 'btn btn-large btn-success')); ?>
<?= $this->Form->end() ?>

<div style="padding-top:15px;">
<?= $this->Html->link(__('新規登録'), ['action' => 'add'], ['class' => 'btn btn-large btn-primary', 'data-toggle' => 'tooltip', 'title' => 'View', 'escape' => false]) ?>
</div>
</div>