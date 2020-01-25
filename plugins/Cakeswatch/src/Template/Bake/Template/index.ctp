<%
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Utility\Inflector;

$fields = collection($fields)
    ->filter(function($field) use ($schema) {
        return !in_array($schema->columnType($field), ['binary', 'text']);
    })
    ->take(7);

if (isset($modelObject) && $modelObject->behaviors()->has('Tree')) {
    $fields = $fields->reject(function ($field) {
        return $field === 'lft' || $field === 'rght';
    });
}
%>
<nav class="col-lg-2 col-md-3" id="actions-sidebar">
    <div class="btn-group-vertical text-left">
        <?= $this->Html->link(__('<i class="fa fa-plus"></i> New <%= $singularHumanName %>'), ['action' => 'add'], ['class' => 'btn btn-sm btn-success', 'data-toggle' => 'tooltip', 'title' => 'New <%= $singularHumanName %>', 'escape' => false]) ?>
<%
    $done = [];
    foreach ($associations as $type => $data):
        foreach ($data as $alias => $details):
            if (!empty($details['navLink']) && $details['controller'] !== $this->name && !in_array($details['controller'], $done)):
%>
        <?= $this->Html->link(__('<i class="fa fa-list-alt"></i> List <%= $this->_pluralHumanName($alias) %>'), ['controller' => '<%= $details['controller'] %>', 'action' => 'index'], ['class' => 'btn btn-sm btn-default', 'data-toggle' => 'tooltip', 'title' => 'List <%= $this->_pluralHumanName($alias) %>', 'escape' => false]) ?>
        <?= $this->Html->link(__('<i class="fa fa-plus"></i> New <%= $this->_singularHumanName($alias) %>'), ['controller' => '<%= $details['controller'] %>', 'action' => 'add'], ['class' => 'btn btn-sm btn-default', 'data-toggle' => 'tooltip', 'title' => 'New <%= $this->_singularHumanName($alias) %>', 'escape' => false]) ?>
<%
                $done[] = $details['controller'];
            endif;
        endforeach;
    endforeach;
%>
    </div>
</nav>
<div class="<%= $pluralVar %> index col-lg-10 col-md-9 content">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?= __('<%= $pluralHumanName %>') ?></h3>
        </div>
        <div class="panel-body">
            <table class="table table-hover table-striped" id="<%= $pluralVar %>">
                <thead>
                    <tr>
        <% foreach ($fields as $field): %>
                        <th><?= __('<%= Inflector::humanize($field) %>') ?></th>
        <% endforeach; %>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($<%= $pluralVar %> as $<%= $singularVar %>): ?>
                    <tr>
        <%        foreach ($fields as $field) {
                    $isKey = false;
                    if (!empty($associations['BelongsTo'])) {
                        foreach ($associations['BelongsTo'] as $alias => $details) {
                            if ($field === $details['foreignKey']) {
                                $isKey = true;
        %>
                        <td><?= $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?></td>
        <%
                                break;
                            }
                        }
                    }
                    if ($isKey !== true) {
                        if (!in_array($schema->columnType($field), ['integer', 'biginteger', 'decimal', 'float'])) {
        %>
                        <td><?= h($<%= $singularVar %>-><%= $field %>) ?></td>
        <%
                        } else {
        %>
                        <td><?= $this->Number->format($<%= $singularVar %>-><%= $field %>) ?></td>
        <%
                        }
                    }
                }

                $pk = '$' . $singularVar . '->' . $primaryKey[0];
        %>
                        <td class="actions">
                            <?= $this->Html->link(__('<i class="fa fa-eye"></i>'), ['action' => 'view', <%= $pk %>], ['class' => 'btn btn-sm btn-primary', 'data-toggle' => 'tooltip', 'title' => 'View', 'escape' => false]) ?>
                            <?= $this->Html->link(__('<i class="fa fa-pencil"></i>'), ['action' => 'edit', <%= $pk %>], ['class' => 'btn btn-sm btn-warning', 'data-toggle' => 'tooltip', 'title' => 'Edit',  'escape' => false]) ?>
                            <?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), ['action' => 'delete', <%= $pk %>], ['class' => 'btn btn-sm btn-danger', 'data-toggle' => 'tooltip', 'title' => 'Delete', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', <%= $pk %>)]) ?>
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
    $('#<%= $pluralVar %>').DataTable();
</script>
