<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Farm $farm
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['action' => 'index']) ?></li>
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
<div class="farms form large-9 medium-8 columns content">
    <?= $this->Form->create($farm) ?>
    <fieldset>
        <legend><?= __('Add Farm') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('live_stock');
            echo $this->Form->control('animal_limit');
            echo $this->Form->control('address');
            echo $this->Form->control('gstin');
            echo $this->Form->control('status_id', ['options' => $statuses]);
            echo $this->Form->control('license_id', ['options' => $licenses]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
