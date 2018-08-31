<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RolePermission[]|\Cake\Collection\CollectionInterface $rolePermissions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Role Permission'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rolePermissions index large-9 medium-8 columns content">
    <h3><?= __('Role Permissions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('permission_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rolePermissions as $rolePermission): ?>
            <tr>
                <td><?= $this->Number->format($rolePermission->id) ?></td>
                <td><?= $rolePermission->has('role') ? $this->Html->link($rolePermission->role->id, ['controller' => 'Roles', 'action' => 'view', $rolePermission->role->id]) : '' ?></td>
                <td><?= $rolePermission->has('permission') ? $this->Html->link($rolePermission->permission->id, ['controller' => 'Permissions', 'action' => 'view', $rolePermission->permission->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rolePermission->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rolePermission->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rolePermission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolePermission->id)]) ?>
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
