<!--<nav class="col-lg-2 col-md-3" id="actions-sidebar">
    <div class="btn-group-vertical text-left">
        <?= $this->Html->link(__('<i class="fa fa-plus"></i> New Company Situation'), ['action' => 'add'], ['class' => 'btn btn-sm btn-success', 'data-toggle' => 'tooltip', 'title' => 'New Company Situation', 'escape' => false]) ?>
        <?= $this->Html->link(__('<i class="fa fa-list-alt"></i> List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'btn btn-sm btn-default', 'data-toggle' => 'tooltip', 'title' => 'List Users', 'escape' => false]) ?>
        <?= $this->Html->link(__('<i class="fa fa-plus"></i> New User'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'btn btn-sm btn-default', 'data-toggle' => 'tooltip', 'title' => 'New User', 'escape' => false]) ?>
        <?= $this->Html->link(__('<i class="fa fa-list-alt"></i> List Companies'), ['controller' => 'Companies', 'action' => 'index'], ['class' => 'btn btn-sm btn-default', 'data-toggle' => 'tooltip', 'title' => 'List Companies', 'escape' => false]) ?>
        <?= $this->Html->link(__('<i class="fa fa-plus"></i> New Company'), ['controller' => 'Companies', 'action' => 'add'], ['class' => 'btn btn-sm btn-default', 'data-toggle' => 'tooltip', 'title' => 'New Company', 'escape' => false]) ?>
    </div>
</nav>-->
<div class="companySituations index col-lg-10 col-md-9 content">
    <div class="panel panel-primary">
        
        <div class="panel-heading">
            <h3 class="panel-title"><?= __('Company Situations') ?></h3>
        </div>
        <div class="panel-body">
        <div class="row" style="padding-bottom:30px">
        
        <div class="col-sm-5"><?php if ($currentCompanyId !== '') { echo $this->Html->link(__('現状確認'), ['controller' => 'Companies', 'action' => 'view', $currentCompanyId], ['class' => 'btn btn-sm btn-info', 'data-toggle' => 'tooltip', 'title' => __('現状確認'), 'escape' => false]);  } ?></div>
        
        <div class="col-sm-7" style="text-align:right;"><?= $this->Html->link(__('<i class="fa fa-plus"></i>'), ['action' => 'add'], ['class' => 'btn btn-sm btn-success', 'data-toggle' => 'tooltip', 'title' => __('追加'), 'escape' => false]) ?></div>
        </div>
            <table class="table table-hover table-striped" id="companySituations">
                <thead>
                    <tr>
                                <!--<th><?= __('Id') ?></th>-->
                                <!--<th><?= __('User Id') ?></th>-->
                                <th><?= __('会社名') ?></th>
                                <th><?= __('入場期間') ?></th>
                                <!--<th><?= __('End Date') ?></th>-->
                                <!--<th><?= __('Overview') ?></th>-->
                                <!--<th><?= __('Language') ?></th>-->
                                <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($companySituations as $companySituation): ?>
                    <tr>
                                <!--<td><?= $this->Number->format($companySituation->id) ?></td>-->
                                <!--<td><?= $companySituation->has('user') ? $this->Html->link($companySituation->user->id, ['controller' => 'Users', 'action' => 'view', $companySituation->user->id]) : '' ?></td>-->
                                <td><?= $companySituation->has('company') ? $this->Html->link($companySituation->company->company_name, ['action' => 'view', $companySituation->id]) : '' ?></td>
                                <td><?= h($companySituation->start_date) ?> 〜 <?= h($companySituation->end_date) ?></td>
                                <!--<td><?= h($companySituation->end_date) ?></td>-->
                                <!--<td><?= h($companySituation->overview) ?></td>-->
                                <!--<td><?= h($companySituation->language) ?></td>-->
                                <td class="actions">
                            <!--<?= $this->Html->link(__('<i class="fa fa-eye"></i>'), ['action' => 'view', $companySituation->id], ['class' => 'btn btn-sm btn-primary', 'data-toggle' => 'tooltip', 'title' => __('詳細'), 'escape' => false]) ?>-->
                            <?= $this->Html->link(__('<i class="fa fa-pencil"></i>'), ['action' => 'edit', $companySituation->id], ['class' => 'btn btn-sm btn-warning', 'data-toggle' => 'tooltip', 'title' => __('編集'),  'escape' => false]) ?>
                            <?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), ['action' => 'delete', $companySituation->id], ['class' => 'btn btn-sm btn-danger', 'data-toggle' => 'tooltip', 'title' => __('削除'), 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $companySituation->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?= $this->Html->script('datatables.min'); ?>
<script type="text/javascript">
    $('#companySituations').DataTable();
</script>
