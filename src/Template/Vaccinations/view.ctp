<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaccination $vaccination
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vaccination'), ['action' => 'edit', $vaccination->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vaccination'), ['action' => 'delete', $vaccination->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vaccination->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vaccinations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vaccination'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vaccination Types'), ['controller' => 'VaccinationTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vaccination Type'), ['controller' => 'VaccinationTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vaccinations view large-9 medium-8 columns content">
    <h3><?= h($vaccination->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Farm') ?></th>
            <td><?= $vaccination->has('farm') ? $this->Html->link($vaccination->farm->name, ['controller' => 'Farms', 'action' => 'view', $vaccination->farm->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vaccination Type') ?></th>
            <td><?= $vaccination->has('vaccination_type') ? $this->Html->link($vaccination->vaccination_type->name, ['controller' => 'VaccinationTypes', 'action' => 'view', $vaccination->vaccination_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Next Date') ?></th>
            <td><?= h($vaccination->next_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($vaccination->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vaccination->id) ?></td>
        </tr>
    </table>
</div>
