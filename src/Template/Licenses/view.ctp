<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\License $license
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit License'), ['action' => 'edit', $license->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete License'), ['action' => 'delete', $license->id], ['confirm' => __('Are you sure you want to delete # {0}?', $license->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Licenses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New License'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Persons'), ['controller' => 'Persons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'Persons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="licenses view large-9 medium-8 columns content">
    <h3><?= h($license->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($license->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($license->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Days') ?></th>
            <td><?= $this->Number->format($license->days) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($license->price) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Farms') ?></h4>
        <?php if (!empty($license->farms)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Gstin') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('License Id') ?></th>
                <th scope="col"><?= __('Animal Limit') ?></th>
                <th scope="col"><?= __('Live Stock') ?></th>
                <th scope="col"><?= __('Status Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($license->farms as $farms): ?>
            <tr>
                <td><?= h($farms->id) ?></td>
                <td><?= h($farms->name) ?></td>
                <td><?= h($farms->gstin) ?></td>
                <td><?= h($farms->address) ?></td>
                <td><?= h($farms->license_id) ?></td>
                <td><?= h($farms->animal_limit) ?></td>
                <td><?= h($farms->live_stock) ?></td>
                <td><?= h($farms->status_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Farms', 'action' => 'view', $farms->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Farms', 'action' => 'edit', $farms->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Farms', 'action' => 'delete', $farms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $farms->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Persons') ?></h4>
        <?php if (!empty($license->persons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Middle Name') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Mobile') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Registered') ?></th>
                <th scope="col"><?= __('Status Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('License Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($license->persons as $persons): ?>
            <tr>
                <td><?= h($persons->id) ?></td>
                <td><?= h($persons->role_id) ?></td>
                <td><?= h($persons->username) ?></td>
                <td><?= h($persons->password) ?></td>
                <td><?= h($persons->first_name) ?></td>
                <td><?= h($persons->Last_name) ?></td>
                <td><?= h($persons->middle_name) ?></td>
                <td><?= h($persons->gender) ?></td>
                <td><?= h($persons->mobile) ?></td>
                <td><?= h($persons->email) ?></td>
                <td><?= h($persons->registered) ?></td>
                <td><?= h($persons->status_id) ?></td>
                <td><?= h($persons->farm_id) ?></td>
                <td><?= h($persons->license_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Persons', 'action' => 'view', $persons->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Persons', 'action' => 'edit', $persons->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Persons', 'action' => 'delete', $persons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $persons->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Transactions') ?></h4>
        <?php if (!empty($license->transactions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('License Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($license->transactions as $transactions): ?>
            <tr>
                <td><?= h($transactions->id) ?></td>
                <td><?= h($transactions->farm_id) ?></td>
                <td><?= h($transactions->license_id) ?></td>
                <td><?= h($transactions->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Transactions', 'action' => 'view', $transactions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Transactions', 'action' => 'edit', $transactions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transactions', 'action' => 'delete', $transactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
