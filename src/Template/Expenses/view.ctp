<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expense $expense
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Expense'), ['action' => 'edit', $expense->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Expense'), ['action' => 'delete', $expense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expense->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Expenses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Expense'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Expense Types'), ['controller' => 'ExpenseTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Expense Type'), ['controller' => 'ExpenseTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="expenses view large-9 medium-8 columns content">
    <h3><?= h($expense->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Expense Type') ?></th>
            <td><?= $expense->has('expense_type') ? $this->Html->link($expense->expense_type->name, ['controller' => 'ExpenseTypes', 'action' => 'view', $expense->expense_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Farm') ?></th>
            <td><?= $expense->has('farm') ? $this->Html->link($expense->farm->name, ['controller' => 'Farms', 'action' => 'view', $expense->farm->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($expense->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($expense->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($expense->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($expense->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($expense->price) ?></td>
        </tr>
    </table>
</div>
