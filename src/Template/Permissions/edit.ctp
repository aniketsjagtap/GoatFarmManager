<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permission $permission
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $permission->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $permission->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Permissions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Person Permissions'), ['controller' => 'PersonPermissions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person Permission'), ['controller' => 'PersonPermissions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Role Permissions'), ['controller' => 'RolePermissions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role Permission'), ['controller' => 'RolePermissions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="permissions form large-9 medium-8 columns content">
    <?= $this->Form->create($permission) ?>
    <fieldset>
        <legend><?= __('Edit Permission') ?></legend>
        <?php
            echo $this->Form->control('permission_description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
