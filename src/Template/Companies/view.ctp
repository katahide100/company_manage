<!--<nav class="col-lg-2 col-md-3 columns" id="actions-sidebar">
    <div class="btn-group-vertical text-left">
        <?= $this->Html->link(__('<i class="fa fa-pencil"></i> Edit Company'), ['action' => 'edit', $company->id], ['class' => 'btn btn-warning btn-sm', 'title' => 'Edit Company', 'data-toggle' => 'tooltip', 'escape' => false]) ?>
        <?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i> Delete Company'), ['action' => 'delete', $company->id], ['class' => 'btn btn-danger btn-sm', 'title' => 'Delete Company', 'data-toggle' => 'tooltip', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?>
        <?= $this->Html->link(__('<i class="fa fa-list-alt"></i> List Companies'), ['action' => 'index'], ['class' => 'btn btn-primary btn-sm', 'title' => 'List Companies', 'data-toggle' => 'tooltip', 'escape' => false]) ?>
        <?= $this->Html->link(__('<i class="fa fa-plus"></i> New Company'), ['action' => 'add'], ['class' => 'btn btn-success btn-sm', 'title' => 'New Company', 'data-toggle' => 'tooltip', 'escape' => false]) ?>
        <?= $this->Html->link(__('List Company Situations'), ['controller' => 'CompanySituations', 'action' => 'index'], ['class' => 'btn btn-default btn-sm', 'title' => 'List Company Situations', 'data-toggle' => 'tooltip', 'escape' => false]) ?>
        <?= $this->Html->link(__('New Company Situation'), ['controller' => 'CompanySituations', 'action' => 'add'], ['class' => 'btn btn-default btn-sm', 'title' => 'New Company Situation', 'data-toggle' => 'tooltip', 'escape' => false]) ?>
    </div>
</nav>-->
<div class="companies view col-lg-10 col-md-9 columns content">
<div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">会社詳細</h3>
        </div>
        <div class="panel-body">
            <table class="vertical-table table table-striped">
                                        <tr>
                    <th><?= __('Company Name') ?></th>
                    <td><?= h($company->company_name) ?></td>
                </tr>
                <tr>
                <th><?= __('入場中の社員') ?></th>
                <td><?= h($members) ?></td>
                </tr>
                                            </table>
                            <div class="related">
                <h4><?= __('Related Company Situations') ?></h4>
                <?php if (!empty($company->company_situations)): ?>
                <table>
                    <tr>
                                <th><?= __('社員名') ?></th>
                                <th><?= __('入場期間') ?></th>
                                <!--<th class="actions"><?= __('Actions') ?></th>-->
                    </tr>
                    <?php foreach ($company->company_situations as $companySituations): ?>
                    <tr>
                        <td><?= $this->Html->link(h($companySituations->user->name), ['controller' => 'CompanySituations', 'action' => 'view', $companySituations->id]) ?></td>
                        <td><?= h($companySituations->start_date) ?> 〜 <?= h($companySituations->end_date) ?></td>
                        <!--<td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'CompanySituations', 'action' => 'view', $companySituations->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'CompanySituations', 'action' => 'edit', $companySituations->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'CompanySituations', 'action' => 'delete', $companySituations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companySituations->id)]) ?>
                        </td>-->
                    </tr>
                    <?php endforeach; ?>
                </table>
                <?php endif; ?>
            </div>
            <div style="padding-top:15px;">
            <?= $this->Html->link(__('戻る'), "javascript:history.back()", ['class' => 'btn btn-sm btn-success', 'data-toggle' => 'tooltip', 'title' => __('戻る'), 'escape' => false]) ?>
            </div>
        </div>
    </div>
</div>
