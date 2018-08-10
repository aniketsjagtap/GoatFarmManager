<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Farm[]|\Cake\Collection\CollectionInterface $farms
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Licenses'), ['controller' => 'Licenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New License'), ['controller' => 'Licenses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animal Items'), ['controller' => 'AnimalItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal Item'), ['controller' => 'AnimalItems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animal Weights'), ['controller' => 'AnimalWeights', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal Weight'), ['controller' => 'AnimalWeights', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Breedings'), ['controller' => 'Breedings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Breeding'), ['controller' => 'Breedings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Expense Types'), ['controller' => 'ExpenseTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Expense Type'), ['controller' => 'ExpenseTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Expenses'), ['controller' => 'Expenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Expense'), ['controller' => 'Expenses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Income Types'), ['controller' => 'IncomeTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Income Type'), ['controller' => 'IncomeTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Incomes'), ['controller' => 'Incomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Income'), ['controller' => 'Incomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medical Histories'), ['controller' => 'MedicalHistories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medical History'), ['controller' => 'MedicalHistories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Milk Collections'), ['controller' => 'MilkCollections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Milk Collection'), ['controller' => 'MilkCollections', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Purchases'), ['controller' => 'Purchases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Purchase'), ['controller' => 'Purchases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vaccinations'), ['controller' => 'Vaccinations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vaccination'), ['controller' => 'Vaccinations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="farms index large-9 medium-8 columns content">
    <h3><?= __('Farms') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('live_stock') ?></th>
                <th scope="col"><?= $this->Paginator->sort('animal_limit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gstin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('license_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($farms as $farm): ?>
            <tr>
                <td><?= $this->Number->format($farm->id) ?></td>
                <td><?= h($farm->name) ?></td>
                <td><?= $this->Number->format($farm->live_stock) ?></td>
                <td><?= $this->Number->format($farm->animal_limit) ?></td>
                <td><?= h($farm->address) ?></td>
                <td><?= h($farm->gstin) ?></td>
                <td><?= $farm->has('status') ? $this->Html->link($farm->status->name, ['controller' => 'Statuses', 'action' => 'view', $farm->status->id]) : '' ?></td>
                <td><?= $farm->has('license') ? $this->Html->link($farm->license->name, ['controller' => 'Licenses', 'action' => 'view', $farm->license->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $farm->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $farm->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $farm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $farm->id)]) ?>
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
