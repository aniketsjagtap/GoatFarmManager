<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RolePermission $rolePermission
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Role Permission'), ['action' => 'edit', $rolePermission->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Role Permission'), ['action' => 'delete', $rolePermission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolePermission->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Role Permissions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role Permission'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rolePermissions view large-9 medium-8 columns content">
    <h3><?= h($rolePermission->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $rolePermission->has('role') ? $this->Html->link($rolePermission->role->id, ['controller' => 'Roles', 'action' => 'view', $rolePermission->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Permission') ?></th>
            <td><?= $rolePermission->has('permission') ? $this->Html->link($rolePermission->permission->id, ['controller' => 'Permissions', 'action' => 'view', $rolePermission->permission->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($rolePermission->id) ?></td>
        </tr>
    </table>
</div>
