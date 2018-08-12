<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AnimalItem[]|\Cake\Collection\CollectionInterface $animalItems
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Animal Item'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="animalItems index large-9 medium-8 columns content">
    <h3><?= __('Animal Items') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('farm_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('animal_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('animal_tag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animalItems as $animalItem): ?>
            <tr>
                <td><?= $this->Number->format($animalItem->id) ?></td>
                <td><?= $animalItem->has('farm') ? $this->Html->link($animalItem->farm->name, ['controller' => 'Farms', 'action' => 'view', $animalItem->farm->id]) : '' ?></td>
                <td><?= $animalItem->has('animal') ? $this->Html->link($animalItem->animal->id, ['controller' => 'Animals', 'action' => 'view', $animalItem->animal->id]) : '' ?></td>
                <td><?= $this->Number->format($animalItem->animal_tag) ?></td>
                <td><?= $animalItem->has('item') ? $this->Html->link($animalItem->item->name, ['controller' => 'Items', 'action' => 'view', $animalItem->item->id]) : '' ?></td>
                <td><?= h($animalItem->quantity) ?></td>
                <td><?= h($animalItem->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $animalItem->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $animalItem->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $animalItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animalItem->id)]) ?>
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
