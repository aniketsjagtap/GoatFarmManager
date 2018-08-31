<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Breeding $breeding
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $breeding->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $breeding->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Breedings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="breedings form large-9 medium-8 columns content">
    <?= $this->Form->create($breeding) ?>
    <fieldset>
        <legend><?= __('Edit Breeding') ?></legend>
        <?php
            echo $this->Form->control('farm_id', ['options' => $farms]);
            echo $this->Form->control('femaleAnimal_id');
            echo $this->Form->control('maleAnimal_id');
            echo $this->Form->control('semenBreedType_id');
            echo $this->Form->control('date');
            echo $this->Form->control('location');
            echo $this->Form->control('gestation_days');
            echo $this->Form->control('delivery_date');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
