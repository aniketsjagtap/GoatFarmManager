<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permission $permission
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Permission'), ['action' => 'edit', $permission->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Permission'), ['action' => 'delete', $permission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permission->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Person Permissions'), ['controller' => 'PersonPermissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person Permission'), ['controller' => 'PersonPermissions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Role Permissions'), ['controller' => 'RolePermissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role Permission'), ['controller' => 'RolePermissions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="permissions view large-9 medium-8 columns content">
    <h3><?= h($permission->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Permission Description') ?></th>
            <td><?= h($permission->permission_description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($permission->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Person Permissions') ?></h4>
        <?php if (!empty($permission->person_permissions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Person Id') ?></th>
                <th scope="col"><?= __('Permission Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($permission->person_permissions as $personPermissions): ?>
            <tr>
                <td><?= h($personPermissions->person_id) ?></td>
                <td><?= h($personPermissions->permission_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PersonPermissions', 'action' => 'view', $personPermissions->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PersonPermissions', 'action' => 'edit', $personPermissions->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PersonPermissions', 'action' => 'delete', $personPermissions->], ['confirm' => __('Are you sure you want to delete # {0}?', $personPermissions->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Role Permissions') ?></h4>
        <?php if (!empty($permission->role_permissions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col"><?= __('Permission Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($permission->role_permissions as $rolePermissions): ?>
            <tr>
                <td><?= h($rolePermissions->id) ?></td>
                <td><?= h($rolePermissions->role_id) ?></td>
                <td><?= h($rolePermissions->permission_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'RolePermissions', 'action' => 'view', $rolePermissions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'RolePermissions', 'action' => 'edit', $rolePermissions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'RolePermissions', 'action' => 'delete', $rolePermissions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolePermissions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
