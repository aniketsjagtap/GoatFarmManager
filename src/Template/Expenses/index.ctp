<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expense[]|\Cake\Collection\CollectionInterface $expenses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Expense'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Expense Types'), ['controller' => 'ExpenseTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Expense Type'), ['controller' => 'ExpenseTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="expenses index large-9 medium-8 columns content">
    <h3><?= __('Expenses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('expenseType_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('farm_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($expenses as $expense): ?>
            <tr>
                <td><?= $this->Number->format($expense->id) ?></td>
                <td><?= $expense->has('expense_type') ? $this->Html->link($expense->expense_type->name, ['controller' => 'ExpenseTypes', 'action' => 'view', $expense->expense_type->id]) : '' ?></td>
                <td><?= $expense->has('farm') ? $this->Html->link($expense->farm->name, ['controller' => 'Farms', 'action' => 'view', $expense->farm->id]) : '' ?></td>
                <td><?= h($expense->location) ?></td>
                <td><?= $this->Number->format($expense->price) ?></td>
                <td><?= h($expense->description) ?></td>
                <td><?= h($expense->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $expense->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $expense->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $expense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expense->id)]) ?>
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
