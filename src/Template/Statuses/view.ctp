<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Status $status
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Status'), ['action' => 'edit', $status->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Status'), ['action' => 'delete', $status->id], ['confirm' => __('Are you sure you want to delete # {0}?', $status->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Statuses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Persons'), ['controller' => 'Persons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'Persons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="statuses view large-9 medium-8 columns content">
    <h3><?= h($status->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($status->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($status->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($status->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= $this->Number->format($status->value) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Animals') ?></h4>
        <?php if (!empty($status->animals)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('Tag') ?></th>
                <th scope="col"><?= __('Dob') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('BreedType Id') ?></th>
                <th scope="col"><?= __('AnimalType Id') ?></th>
                <th scope="col"><?= __('Date Wean') ?></th>
                <th scope="col"><?= __('AnimalWeight Id') ?></th>
                <th scope="col"><?= __('MaleParent Tag') ?></th>
                <th scope="col"><?= __('FemaleParent Tag') ?></th>
                <th scope="col"><?= __('MaleParent Percentage') ?></th>
                <th scope="col"><?= __('FemaleParent Percentage') ?></th>
                <th scope="col"><?= __('MaleParentBreedType Id') ?></th>
                <th scope="col"><?= __('FemaleParentBreedType Id') ?></th>
                <th scope="col"><?= __('Purchase Location') ?></th>
                <th scope="col"><?= __('Colour') ?></th>
                <th scope="col"><?= __('Birth Location') ?></th>
                <th scope="col"><?= __('Birth Ease') ?></th>
                <th scope="col"><?= __('Sales Date') ?></th>
                <th scope="col"><?= __('Sales Weight') ?></th>
                <th scope="col"><?= __('Sales Price') ?></th>
                <th scope="col"><?= __('Death Date') ?></th>
                <th scope="col"><?= __('Death Reason') ?></th>
                <th scope="col"><?= __('Purchase Price') ?></th>
                <th scope="col"><?= __('Purchase Date') ?></th>
                <th scope="col"><?= __('Status Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($status->animals as $animals): ?>
            <tr>
                <td><?= h($animals->id) ?></td>
                <td><?= h($animals->farm_id) ?></td>
                <td><?= h($animals->tag) ?></td>
                <td><?= h($animals->dob) ?></td>
                <td><?= h($animals->gender) ?></td>
                <td><?= h($animals->breedType_id) ?></td>
                <td><?= h($animals->animalType_id) ?></td>
                <td><?= h($animals->date_wean) ?></td>
                <td><?= h($animals->animalWeight_id) ?></td>
                <td><?= h($animals->maleParent_tag) ?></td>
                <td><?= h($animals->femaleParent_tag) ?></td>
                <td><?= h($animals->maleParent_percentage) ?></td>
                <td><?= h($animals->femaleParent_percentage) ?></td>
                <td><?= h($animals->maleParentBreedType_id) ?></td>
                <td><?= h($animals->femaleParentBreedType_id) ?></td>
                <td><?= h($animals->purchase_location) ?></td>
                <td><?= h($animals->colour) ?></td>
                <td><?= h($animals->birth_location) ?></td>
                <td><?= h($animals->birth_ease) ?></td>
                <td><?= h($animals->sales_date) ?></td>
                <td><?= h($animals->sales_weight) ?></td>
                <td><?= h($animals->sales_price) ?></td>
                <td><?= h($animals->death_date) ?></td>
                <td><?= h($animals->death_reason) ?></td>
                <td><?= h($animals->purchase_price) ?></td>
                <td><?= h($animals->purchase_date) ?></td>
                <td><?= h($animals->status_id) ?></td>
                <td><?= h($animals->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Animals', 'action' => 'view', $animals->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Animals', 'action' => 'edit', $animals->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Animals', 'action' => 'delete', $animals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animals->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Farms') ?></h4>
        <?php if (!empty($status->farms)): ?>
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
            <?php foreach ($status->farms as $farms): ?>
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
        <?php if (!empty($status->persons)): ?>
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
            <?php foreach ($status->persons as $persons): ?>
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
</div>
