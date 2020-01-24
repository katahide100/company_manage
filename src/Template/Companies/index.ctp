<nav class="col-lg-2 col-md-3" id="actions-sidebar">
    <div class="btn-group-vertical text-left">
        <?= $this->Html->link(__('<i class="fa fa-plus"></i> New Company'), ['action' => 'add'], ['class' => 'btn btn-sm btn-success', 'data-toggle' => 'tooltip', 'title' => 'New Company', 'escape' => false]) ?>
        <?= $this->Html->link(__('<i class="fa fa-list-alt"></i> List Company Situations'), ['controller' => 'CompanySituations', 'action' => 'index'], ['class' => 'btn btn-sm btn-default', 'data-toggle' => 'tooltip', 'title' => 'List Company Situations', 'escape' => false]) ?>
        <?= $this->Html->link(__('<i class="fa fa-plus"></i> New Company Situation'), ['controller' => 'CompanySituations', 'action' => 'add'], ['class' => 'btn btn-sm btn-default', 'data-toggle' => 'tooltip', 'title' => 'New Company Situation', 'escape' => false]) ?>
    </div>
</nav>
<div class="companies index col-lg-10 col-md-9 content">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?= __('Companies') ?></h3>
        </div>
        <div class="panel-body">
            <table class="table table-hover table-striped" id="companies">
                <thead>
                    <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Company Name') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($companies as $company): ?>
                    <tr>
                                <td><?= $this->Number->format($company->id) ?></td>
                                <td><?= h($company->company_name) ?></td>
                                <td class="actions">
                            <?= $this->Html->link(__('<i class="fa fa-eye"></i>'), ['action' => 'view', $company->id], ['class' => 'btn btn-sm btn-primary', 'data-toggle' => 'tooltip', 'title' => 'View', 'escape' => false]) ?>
                            <?= $this->Html->link(__('<i class="fa fa-pencil"></i>'), ['action' => 'edit', $company->id], ['class' => 'btn btn-sm btn-warning', 'data-toggle' => 'tooltip', 'title' => 'Edit',  'escape' => false]) ?>
                            <?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), ['action' => 'delete', $company->id], ['class' => 'btn btn-sm btn-danger', 'data-toggle' => 'tooltip', 'title' => 'Delete', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?>
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
    $('#companies').DataTable();
</script>
