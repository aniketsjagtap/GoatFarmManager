<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BreedType $breedType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Breed Type'), ['action' => 'edit', $breedType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Breed Type'), ['action' => 'delete', $breedType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $breedType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Breed Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Breed Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="breedTypes view large-9 medium-8 columns content">
    <h3><?= h($breedType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($breedType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($breedType->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($breedType->id) ?></td>
        </tr>
    </table>
</div>
