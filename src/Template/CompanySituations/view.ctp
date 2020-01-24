<!--<nav class="col-lg-2 col-md-3 columns" id="actions-sidebar">
    <div class="btn-group-vertical text-left">
        <?= $this->Html->link(__('<i class="fa fa-pencil"></i> Edit Company Situation'), ['action' => 'edit', $companySituation->id], ['class' => 'btn btn-warning btn-sm', 'title' => 'Edit Company Situation', 'data-toggle' => 'tooltip', 'escape' => false]) ?>
        <?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i> Delete Company Situation'), ['action' => 'delete', $companySituation->id], ['class' => 'btn btn-danger btn-sm', 'title' => 'Delete Company Situation', 'data-toggle' => 'tooltip', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $companySituation->id)]) ?>
        <?= $this->Html->link(__('<i class="fa fa-list-alt"></i> List Company Situations'), ['action' => 'index'], ['class' => 'btn btn-primary btn-sm', 'title' => 'List Company Situations', 'data-toggle' => 'tooltip', 'escape' => false]) ?>
        <?= $this->Html->link(__('<i class="fa fa-plus"></i> New Company Situation'), ['action' => 'add'], ['class' => 'btn btn-success btn-sm', 'title' => 'New Company Situation', 'data-toggle' => 'tooltip', 'escape' => false]) ?>
        <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'btn btn-default btn-sm', 'title' => 'List Users', 'data-toggle' => 'tooltip', 'escape' => false]) ?>
        <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'btn btn-default btn-sm', 'title' => 'New User', 'data-toggle' => 'tooltip', 'escape' => false]) ?>
        <?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index'], ['class' => 'btn btn-default btn-sm', 'title' => 'List Companies', 'data-toggle' => 'tooltip', 'escape' => false]) ?>
        <?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add'], ['class' => 'btn btn-default btn-sm', 'title' => 'New Company', 'data-toggle' => 'tooltip', 'escape' => false]) ?>
    </div>
</nav>-->
<div class="companySituations view col-lg-10 col-md-9 columns content">
<div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">現場状況詳細</h3>
        </div>
        <div class="panel-body">
            <table class="vertical-table table table-striped">
                                        <!--<tr>
                    <th><?= __('User') ?></th>
                    <td><?= $companySituation->has('user') ? $this->Html->link($companySituation->user->id, ['controller' => 'Users', 'action' => 'view', $companySituation->user->id]) : '' ?></td>
                </tr>-->
                                        <tr>
                    <th><?= __('会社名') ?></th>
                    <!--<td><?= $companySituation->has('company') ? $this->Html->link($companySituation->company->company_name, ['controller' => 'Companies', 'action' => 'view', $companySituation->company->id]) : '' ?></td>-->
                    <td><?= h($companySituation->company->company_name) ?></td>
                </tr>
                                        <tr>
                    <th><?= __('Overview') ?></th>
                    <td><?= h($companySituation->overview) ?></td>
                </tr>
                                        <tr>
                    <th><?= __('Language') ?></th>
                    <td><?= h($companySituation->language) ?></td>
                </tr>
                                        <tr>
                    <th><?= __('Tool') ?></th>
                    <td><?= h($companySituation->tool) ?></td>
                </tr>
                                        <tr>
                    <th><?= __('Other') ?></th>
                    <td><?= h($companySituation->other) ?></td>
                </tr>
                                                                <!--<tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($companySituation->id) ?></td>
                </tr>-->
                        <tr>
                    <th><?= __('Number Of People') ?></th>
                    <td><?= $this->Number->format($companySituation->number_of_people) ?>人</td>
                </tr>
                                                <tr>
                    <th><?= __('入場期間') ?></th>
                    <td><?= h($companySituation->start_date) ?> 〜 <?= h($companySituation->end_date) ?></td>
                </tr>
                        <!--<tr>
                    <th><?= __('End Date') ?></th>
                    <td><?= h($companySituation->end_date) ?></td>
                </tr>-->
                        <tr>
                    <th><?= __('勤務時間') ?></th>
                    <td><?= h($companySituation->working_hours_from->format('H:i')) ?> 〜 <?= h($companySituation->working_hours_to->format('H:i')) ?></td>
                </tr>
                        <!--<tr>
                    <th><?= __('Working Hours To') ?></th>
                    <td><?= h($companySituation->working_hours_to->format('H:i')) ?></td>
                </tr>-->
                
                                    </table>
                                    <div style="padding-top:15px;">
            <?= $this->Html->link(__('戻る'), "javascript:history.back()", ['class' => 'btn btn-sm btn-success', 'data-toggle' => 'tooltip', 'title' => __('戻る'), 'escape' => false]) ?>
            </div>
                </div>
                
