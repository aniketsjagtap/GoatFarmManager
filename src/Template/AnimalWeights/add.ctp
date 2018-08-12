<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AnimalWeight $animalWeight
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Animal Weights'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="animalWeights form large-9 medium-8 columns content">
    <?= $this->Form->create($animalWeight) ?>
    <fieldset>
        <legend><?= __('Add Animal Weight') ?></legend>
        <?php
            echo $this->Form->control('farm_id', ['options' => $farms]);
            echo $this->Form->control('weight');
            echo $this->Form->control('description');
            echo $this->Form->control('date');
            echo $this->Form->control('animal_id', ['options' => $animals]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
