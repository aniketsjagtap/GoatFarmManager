<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MedicalHistory $medicalHistory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Medical Histories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vaccination Types'), ['controller' => 'VaccinationTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vaccination Type'), ['controller' => 'VaccinationTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="medicalHistories form large-9 medium-8 columns content">
    <?= $this->Form->create($medicalHistory) ?>
    <fieldset>
        <legend><?= __('Add Medical History') ?></legend>
        <?php
            echo $this->Form->control('farm_id', ['options' => $farms]);
            echo $this->Form->control('animal_id', ['options' => $animals]);
            echo $this->Form->control('date');
            echo $this->Form->control('doctor_name');
            echo $this->Form->control('description');
            echo $this->Form->control('vaccinationType_id', ['options' => $vaccinationTypes]);
            echo $this->Form->control('disease_name');
            echo $this->Form->control('prescription');
            echo $this->Form->control('symptoms');
            echo $this->Form->control('medication');
            echo $this->Form->control('result');
            echo $this->Form->control('duration');
            echo $this->Form->control('fees');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
