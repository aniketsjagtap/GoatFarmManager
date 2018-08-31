<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExpenseType $expenseType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Expense Type'), ['action' => 'edit', $expenseType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Expense Type'), ['action' => 'delete', $expenseType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expenseType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Expense Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Expense Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="expenseTypes view large-9 medium-8 columns content">
    <h3><?= h($expenseType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Farm') ?></th>
            <td><?= $expenseType->has('farm') ? $this->Html->link($expenseType->farm->name, ['controller' => 'Farms', 'action' => 'view', $expenseType->farm->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($expenseType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($expenseType->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($expenseType->id) ?></td>
        </tr>
    </table>
</div>
