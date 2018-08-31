<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autologin[]|\Cake\Collection\CollectionInterface $autologin
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Autologin'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="autologin index large-9 medium-8 columns content">
    <h3><?= __('Autologin') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user') ?></th>
                <th scope="col"><?= $this->Paginator->sort('series') ?></th>
                <th scope="col"><?= $this->Paginator->sort('key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($autologin as $autologin): ?>
            <tr>
                <td><?= $this->Number->format($autologin->user) ?></td>
                <td><?= h($autologin->series) ?></td>
                <td><?= h($autologin->key) ?></td>
                <td><?= $this->Number->format($autologin->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $autologin->user]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $autologin->user]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $autologin->user], ['confirm' => __('Are you sure you want to delete # {0}?', $autologin->user)]) ?>
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
