<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExpenseType[]|\Cake\Collection\CollectionInterface $expenseTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Expense Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="expenseTypes index large-9 medium-8 columns content">
    <h3><?= __('Expense Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('farm_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($expenseTypes as $expenseType): ?>
            <tr>
                <td><?= $this->Number->format($expenseType->id) ?></td>
                <td><?= $expenseType->has('farm') ? $this->Html->link($expenseType->farm->name, ['controller' => 'Farms', 'action' => 'view', $expenseType->farm->id]) : '' ?></td>
                <td><?= h($expenseType->name) ?></td>
                <td><?= h($expenseType->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $expenseType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $expenseType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $expenseType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expenseType->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
