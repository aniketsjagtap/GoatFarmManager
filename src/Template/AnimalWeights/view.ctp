<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AnimalWeight $animalWeight
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Animal Weight'), ['action' => 'edit', $animalWeight->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Animal Weight'), ['action' => 'delete', $animalWeight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animalWeight->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Animal Weights'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animal Weight'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="animalWeights view large-9 medium-8 columns content">
    <h3><?= h($animalWeight->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Farm') ?></th>
            <td><?= $animalWeight->has('farm') ? $this->Html->link($animalWeight->farm->name, ['controller' => 'Farms', 'action' => 'view', $animalWeight->farm->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($animalWeight->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($animalWeight->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Animal') ?></th>
            <td><?= $animalWeight->has('animal') ? $this->Html->link($animalWeight->animal->id, ['controller' => 'Animals', 'action' => 'view', $animalWeight->animal->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($animalWeight->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weight') ?></th>
            <td><?= $this->Number->format($animalWeight->weight) ?></td>
        </tr>
    </table>
</div>
