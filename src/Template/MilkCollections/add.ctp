<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MilkCollection $milkCollection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Milk Collections'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="milkCollections form large-9 medium-8 columns content">
    <?= $this->Form->create($milkCollection) ?>
    <fieldset>
        <legend><?= __('Add Milk Collection') ?></legend>
        <?php
            echo $this->Form->control('farm_id', ['options' => $farms]);
            echo $this->Form->control('animal_id', ['options' => $animals]);
            echo $this->Form->control('quantity');
            echo $this->Form->control('price');
            echo $this->Form->control('date');
            echo $this->Form->control('description');
            echo $this->Form->control('unit');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
