<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MilkCollection $milkCollection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Milk Collection'), ['action' => 'edit', $milkCollection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Milk Collection'), ['action' => 'delete', $milkCollection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $milkCollection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Milk Collections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Milk Collection'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="milkCollections view large-9 medium-8 columns content">
    <h3><?= h($milkCollection->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Farm') ?></th>
            <td><?= $milkCollection->has('farm') ? $this->Html->link($milkCollection->farm->name, ['controller' => 'Farms', 'action' => 'view', $milkCollection->farm->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Animal') ?></th>
            <td><?= $milkCollection->has('animal') ? $this->Html->link($milkCollection->animal->id, ['controller' => 'Animals', 'action' => 'view', $milkCollection->animal->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($milkCollection->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($milkCollection->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($milkCollection->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($milkCollection->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($milkCollection->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unit') ?></th>
            <td><?= $this->Number->format($milkCollection->unit) ?></td>
        </tr>
    </table>
</div>
