<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IncomeType $incomeType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $incomeType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $incomeType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Income Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="incomeTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($incomeType) ?>
    <fieldset>
        <legend><?= __('Edit Income Type') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('farm_id', ['options' => $farms]);
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
