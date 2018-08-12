<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IncomeType $incomeType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Income Type'), ['action' => 'edit', $incomeType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Income Type'), ['action' => 'delete', $incomeType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $incomeType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Income Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Income Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="incomeTypes view large-9 medium-8 columns content">
    <h3><?= h($incomeType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($incomeType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Farm') ?></th>
            <td><?= $incomeType->has('farm') ? $this->Html->link($incomeType->farm->name, ['controller' => 'Farms', 'action' => 'view', $incomeType->farm->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($incomeType->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($incomeType->id) ?></td>
        </tr>
    </table>
</div>
