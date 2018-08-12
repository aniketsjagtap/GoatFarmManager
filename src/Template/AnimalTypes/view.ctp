<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AnimalType $animalType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Animal Type'), ['action' => 'edit', $animalType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Animal Type'), ['action' => 'delete', $animalType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animalType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Animal Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animal Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="animalTypes view large-9 medium-8 columns content">
    <h3><?= h($animalType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($animalType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($animalType->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($animalType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category Id') ?></th>
            <td><?= $this->Number->format($animalType->category_id) ?></td>
        </tr>
    </table>
</div>
