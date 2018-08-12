<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person $person
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Person'), ['action' => 'edit', $person->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Person'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Persons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Licenses'), ['controller' => 'Licenses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New License'), ['controller' => 'Licenses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Person Permissions'), ['controller' => 'PersonPermissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person Permission'), ['controller' => 'PersonPermissions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="persons view large-9 medium-8 columns content">
    <h3><?= h($person->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $person->has('role') ? $this->Html->link($person->role->id, ['controller' => 'Roles', 'action' => 'view', $person->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($person->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($person->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($person->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($person->Last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Middle Name') ?></th>
            <td><?= h($person->middle_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($person->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= h($person->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($person->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Registered') ?></th>
            <td><?= h($person->registered) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $person->has('status') ? $this->Html->link($person->status->name, ['controller' => 'Statuses', 'action' => 'view', $person->status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Farm') ?></th>
            <td><?= $person->has('farm') ? $this->Html->link($person->farm->name, ['controller' => 'Farms', 'action' => 'view', $person->farm->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('License') ?></th>
            <td><?= $person->has('license') ? $this->Html->link($person->license->name, ['controller' => 'Licenses', 'action' => 'view', $person->license->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($person->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Person Permissions') ?></h4>
        <?php if (!empty($person->person_permissions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Person Id') ?></th>
                <th scope="col"><?= __('Permission Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($person->person_permissions as $personPermissions): ?>
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
</div>
