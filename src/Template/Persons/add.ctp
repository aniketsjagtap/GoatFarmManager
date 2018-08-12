<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person $person
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Persons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Licenses'), ['controller' => 'Licenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New License'), ['controller' => 'Licenses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Person Permissions'), ['controller' => 'PersonPermissions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person Permission'), ['controller' => 'PersonPermissions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="persons form large-9 medium-8 columns content">
    <?= $this->Form->create($person) ?>
    <fieldset>
        <legend><?= __('Add Person') ?></legend>
        <?php
            echo $this->Form->control('role_id', ['options' => $roles, 'empty' => true]);
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('first_name');
            echo $this->Form->control('Last_name');
            echo $this->Form->control('middle_name');
            echo $this->Form->control('gender');
            echo $this->Form->control('mobile');
            echo $this->Form->control('email');
            echo $this->Form->control('registered');
            echo $this->Form->control('status_id', ['options' => $statuses]);
            echo $this->Form->control('farm_id', ['options' => $farms]);
            echo $this->Form->control('license_id', ['options' => $licenses]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
