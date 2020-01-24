<nav class="col-lg-2 col-md-3 columns" id="actions-sidebar">
    <div class="btn-group-vertical text-left">
        <?= $this->Html->link(__('<i class="fa fa-pencil"></i> Edit User'), ['action' => 'edit', $user->id], ['class' => 'btn btn-warning btn-sm', 'title' => 'Edit User', 'data-toggle' => 'tooltip', 'escape' => false]) ?>
        <?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i> Delete User'), ['action' => 'delete', $user->id], ['class' => 'btn btn-danger btn-sm', 'title' => 'Delete User', 'data-toggle' => 'tooltip', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
        <?= $this->Html->link(__('<i class="fa fa-list-alt"></i> List Users'), ['action' => 'index'], ['class' => 'btn btn-primary btn-sm', 'title' => 'List Users', 'data-toggle' => 'tooltip', 'escape' => false]) ?>
        <?= $this->Html->link(__('<i class="fa fa-plus"></i> New User'), ['action' => 'add'], ['class' => 'btn btn-success btn-sm', 'title' => 'New User', 'data-toggle' => 'tooltip', 'escape' => false]) ?>
        <?= $this->Html->link(__('List Company Situations'), ['controller' => 'CompanySituations', 'action' => 'index'], ['class' => 'btn btn-default btn-sm', 'title' => 'List Company Situations', 'data-toggle' => 'tooltip', 'escape' => false]) ?>
        <?= $this->Html->link(__('New Company Situation'), ['controller' => 'CompanySituations', 'action' => 'add'], ['class' => 'btn btn-default btn-sm', 'title' => 'New Company Situation', 'data-toggle' => 'tooltip', 'escape' => false]) ?>
    </div>
</nav>
<div class="users view col-lg-10 col-md-9 columns content">
<div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Details</h3>
        </div>
        <div class="panel-body">
            <table class="vertical-table table table-striped">
                                        <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($user->name) ?></td>
                </tr>
                                        <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                                        <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr>
                                                                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                        <tr>
                    <th><?= __('User Type') ?></th>
                    <td><?= $this->Number->format($user->user_type) ?></td>
                </tr>
                        <tr>
                    <th><?= __('Destination') ?></th>
                    <td><?= $this->Number->format($user->destination) ?></td>
                </tr>
                                            </table>
                            <div class="related">
                <h4><?= __('Related Company Situations') ?></h4>
                <?php if (!empty($user->company_situations)): ?>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('User Id') ?></th>
                                <th><?= __('Company Id') ?></th>
                                <th><?= __('Start Date') ?></th>
                                <th><?= __('End Date') ?></th>
                                <th><?= __('Overview') ?></th>
                                <th><?= __('Language') ?></th>
                                <th><?= __('Tool') ?></th>
                                <th><?= __('Number Of People') ?></th>
                                <th><?= __('Working Hours From') ?></th>
                                <th><?= __('Working Hours To') ?></th>
                                <th><?= __('Other') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($user->company_situations as $companySituations): ?>
                    <tr>
                        <td><?= h($companySituations->id) ?></td>
                        <td><?= h($companySituations->user_id) ?></td>
                        <td><?= h($companySituations->company_id) ?></td>
                        <td><?= h($companySituations->start_date) ?></td>
                        <td><?= h($companySituations->end_date) ?></td>
                        <td><?= h($companySituations->overview) ?></td>
                        <td><?= h($companySituations->language) ?></td>
                        <td><?= h($companySituations->tool) ?></td>
                        <td><?= h($companySituations->number_of_people) ?></td>
                        <td><?= h($companySituations->working_hours_from) ?></td>
                        <td><?= h($companySituations->working_hours_to) ?></td>
                        <td><?= h($companySituations->other) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'CompanySituations', 'action' => 'view', $companySituations->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'CompanySituations', 'action' => 'edit', $companySituations->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'CompanySituations', 'action' => 'delete', $companySituations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companySituations->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
