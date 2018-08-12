<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Animal $animal
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Breed Types'), ['controller' => 'BreedTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Breed Type'), ['controller' => 'BreedTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animal Types'), ['controller' => 'AnimalTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal Type'), ['controller' => 'AnimalTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animal Weights'), ['controller' => 'AnimalWeights', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal Weight'), ['controller' => 'AnimalWeights', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animal Items'), ['controller' => 'AnimalItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal Item'), ['controller' => 'AnimalItems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medical Histories'), ['controller' => 'MedicalHistories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medical History'), ['controller' => 'MedicalHistories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Milk Collections'), ['controller' => 'MilkCollections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Milk Collection'), ['controller' => 'MilkCollections', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="animals form large-9 medium-8 columns content">
    <?= $this->Form->create($animal) ?>
    <fieldset>
        <legend><?= __('Add Animal') ?></legend>
        <?php
            echo $this->Form->control('farm_id', ['options' => $farms]);
            echo $this->Form->control('tag');
            echo $this->Form->control('dob');
            echo $this->Form->control('gender');
            echo $this->Form->control('breedType_id', ['options' => $breedTypes]);
            echo $this->Form->control('animalType_id', ['options' => $animalTypes]);
            echo $this->Form->control('date_wean');
            echo $this->Form->control('animalWeight_id');
            echo $this->Form->control('maleParent_tag');
            echo $this->Form->control('femaleParent_tag');
            echo $this->Form->control('maleParent_percentage');
            echo $this->Form->control('femaleParent_percentage');
            echo $this->Form->control('maleParentBreedType_id');
            echo $this->Form->control('femaleParentBreedType_id');
            echo $this->Form->control('purchase_location');
            echo $this->Form->control('colour');
            echo $this->Form->control('birth_location');
            echo $this->Form->control('birth_ease');
            echo $this->Form->control('sales_date');
            echo $this->Form->control('sales_weight');
            echo $this->Form->control('sales_price');
            echo $this->Form->control('death_date');
            echo $this->Form->control('death_reason');
            echo $this->Form->control('purchase_price');
            echo $this->Form->control('purchase_date');
            echo $this->Form->control('status_id', ['options' => $statuses]);
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
