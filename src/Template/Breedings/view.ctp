<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Breeding $breeding
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Breeding'), ['action' => 'edit', $breeding->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Breeding'), ['action' => 'delete', $breeding->id], ['confirm' => __('Are you sure you want to delete # {0}?', $breeding->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Breedings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Breeding'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="breedings view large-9 medium-8 columns content">
    <h3><?= h($breeding->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Farm') ?></th>
            <td><?= $breeding->has('farm') ? $this->Html->link($breeding->farm->name, ['controller' => 'Farms', 'action' => 'view', $breeding->farm->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($breeding->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($breeding->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Date') ?></th>
            <td><?= h($breeding->delivery_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($breeding->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($breeding->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FemaleAnimal Id') ?></th>
            <td><?= $this->Number->format($breeding->femaleAnimal_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MaleAnimal Id') ?></th>
            <td><?= $this->Number->format($breeding->maleAnimal_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SemenBreedType Id') ?></th>
            <td><?= $this->Number->format($breeding->semenBreedType_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gestation Days') ?></th>
            <td><?= $this->Number->format($breeding->gestation_days) ?></td>
        </tr>
    </table>
</div>
