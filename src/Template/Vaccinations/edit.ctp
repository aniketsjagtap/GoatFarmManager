<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaccination $vaccination
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vaccination->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vaccination->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vaccinations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vaccination Types'), ['controller' => 'VaccinationTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vaccination Type'), ['controller' => 'VaccinationTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vaccinations form large-9 medium-8 columns content">
    <?= $this->Form->create($vaccination) ?>
    <fieldset>
        <legend><?= __('Edit Vaccination') ?></legend>
        <?php
            echo $this->Form->control('farm_id', ['options' => $farms]);
            echo $this->Form->control('vaccinationType_id', ['options' => $vaccinationTypes]);
            echo $this->Form->control('next_date');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
