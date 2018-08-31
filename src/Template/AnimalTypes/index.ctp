<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AnimalType[]|\Cake\Collection\CollectionInterface $animalTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Animal Type'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="animalTypes index large-9 medium-8 columns content">
    <h3><?= __('Animal Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animalTypes as $animalType): ?>
            <tr>
                <td><?= $this->Number->format($animalType->id) ?></td>
                <td><?= h($animalType->name) ?></td>
                <td><?= h($animalType->description) ?></td>
                <td><?= $this->Number->format($animalType->category_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $animalType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $animalType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $animalType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animalType->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
