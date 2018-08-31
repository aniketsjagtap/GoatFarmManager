<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VaccinationType $vaccinationType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vaccination Type'), ['action' => 'edit', $vaccinationType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vaccination Type'), ['action' => 'delete', $vaccinationType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vaccinationType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vaccination Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vaccination Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vaccinationTypes view large-9 medium-8 columns content">
    <h3><?= h($vaccinationType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($vaccinationType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($vaccinationType->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vaccinationType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Period') ?></th>
            <td><?= $this->Number->format($vaccinationType->period) ?></td>
        </tr>
    </table>
</div>
