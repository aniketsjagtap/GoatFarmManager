<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AnimalWeight[]|\Cake\Collection\CollectionInterface $animalWeights
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Animal Weight'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="animalWeights index large-9 medium-8 columns content">
    <h3><?= __('Animal Weights') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('farm_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('animal_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animalWeights as $animalWeight): ?>
            <tr>
                <td><?= $this->Number->format($animalWeight->id) ?></td>
                <td><?= $animalWeight->has('farm') ? $this->Html->link($animalWeight->farm->name, ['controller' => 'Farms', 'action' => 'view', $animalWeight->farm->id]) : '' ?></td>
                <td><?= $this->Number->format($animalWeight->weight) ?></td>
                <td><?= h($animalWeight->description) ?></td>
                <td><?= h($animalWeight->date) ?></td>
                <td><?= $animalWeight->has('animal') ? $this->Html->link($animalWeight->animal->id, ['controller' => 'Animals', 'action' => 'view', $animalWeight->animal->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $animalWeight->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $animalWeight->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $animalWeight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animalWeight->id)]) ?>
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
