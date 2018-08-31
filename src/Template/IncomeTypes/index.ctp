<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IncomeType[]|\Cake\Collection\CollectionInterface $incomeTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Income Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="incomeTypes index large-9 medium-8 columns content">
    <h3><?= __('Income Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('farm_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($incomeTypes as $incomeType): ?>
            <tr>
                <td><?= $this->Number->format($incomeType->id) ?></td>
                <td><?= h($incomeType->name) ?></td>
                <td><?= $incomeType->has('farm') ? $this->Html->link($incomeType->farm->name, ['controller' => 'Farms', 'action' => 'view', $incomeType->farm->id]) : '' ?></td>
                <td><?= h($incomeType->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $incomeType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $incomeType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $incomeType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $incomeType->id)]) ?>
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
