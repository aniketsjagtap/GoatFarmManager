<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AnimalItem $animalItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Animal Item'), ['action' => 'edit', $animalItem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Animal Item'), ['action' => 'delete', $animalItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animalItem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Animal Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animal Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="animalItems view large-9 medium-8 columns content">
    <h3><?= h($animalItem->id) ?></h3>
    <table class="vertical-table">
      <!--  <tr>
            <th scope="row"><?= __('Farm') ?></th>
            <td><?//= $animalItem->has('farm') ? $this->Html->link($animalItem->farm->name, ['controller' => 'Farms', 'action' => 'view', $animalItem->farm->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Animal') ?></th>
            <td><?//= $animalItem->has('animal') ? $this->Html->link($animalItem->animal->id, ['controller' => 'Animals', 'action' => 'view', $animalItem->animal->id]) : '' ?></td>
        </tr>-->
        <tr>
            <th scope="row"><?= __('Item') ?></th>
            <td><?= $animalItem->has('item') ? $this->Html->link($animalItem->item->name, ['controller' => 'Items', 'action' => 'view', $animalItem->item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= h($animalItem->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($animalItem->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($animalItem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Animal Tag') ?></th>
            <td><?= $this->Number->format($animalItem->animal_tag) ?></td>
        </tr>
    </table>
</div>
