<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaccination[]|\Cake\Collection\CollectionInterface $vaccinations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Vaccination'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vaccination Types'), ['controller' => 'VaccinationTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vaccination Type'), ['controller' => 'VaccinationTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vaccinations index large-9 medium-8 columns content">
    <h3><?= __('Vaccinations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('farm_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vaccinationType_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('next_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vaccinations as $vaccination): ?>
            <tr>
                <td><?= $this->Number->format($vaccination->id) ?></td>
                <td><?= $vaccination->has('farm') ? $this->Html->link($vaccination->farm->name, ['controller' => 'Farms', 'action' => 'view', $vaccination->farm->id]) : '' ?></td>
                <td><?= $vaccination->has('vaccination_type') ? $this->Html->link($vaccination->vaccination_type->name, ['controller' => 'VaccinationTypes', 'action' => 'view', $vaccination->vaccination_type->id]) : '' ?></td>
                <td><?= h($vaccination->next_date) ?></td>
                <td><?= h($vaccination->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vaccination->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vaccination->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vaccination->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vaccination->id)]) ?>
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
