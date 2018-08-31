<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Animal $animal
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Animal'), ['action' => 'edit', $animal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Animal'), ['action' => 'delete', $animal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Animals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animal'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Breed Types'), ['controller' => 'BreedTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Breed Type'), ['controller' => 'BreedTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Animal Types'), ['controller' => 'AnimalTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animal Type'), ['controller' => 'AnimalTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Animal Weights'), ['controller' => 'AnimalWeights', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animal Weight'), ['controller' => 'AnimalWeights', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Animal Items'), ['controller' => 'AnimalItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animal Item'), ['controller' => 'AnimalItems', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Medical Histories'), ['controller' => 'MedicalHistories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medical History'), ['controller' => 'MedicalHistories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Milk Collections'), ['controller' => 'MilkCollections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Milk Collection'), ['controller' => 'MilkCollections', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="animals view large-9 medium-8 columns content">
    <h3><?= h($animal->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Farm') ?></th>
            <td><?= $animal->has('farm') ? $this->Html->link($animal->farm->name, ['controller' => 'Farms', 'action' => 'view', $animal->farm->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= h($animal->tag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dob') ?></th>
            <td><?= h($animal->dob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($animal->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Breed Type') ?></th>
            <td><?= $animal->has('breed_type') ? $this->Html->link($animal->breed_type->name, ['controller' => 'BreedTypes', 'action' => 'view', $animal->breed_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Animal Type') ?></th>
            <td><?= $animal->has('animal_type') ? $this->Html->link($animal->animal_type->name, ['controller' => 'AnimalTypes', 'action' => 'view', $animal->animal_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Wean') ?></th>
            <td><?= h($animal->date_wean) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Purchase Location') ?></th>
            <td><?= h($animal->purchase_location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Colour') ?></th>
            <td><?= h($animal->colour) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Location') ?></th>
            <td><?= h($animal->birth_location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Ease') ?></th>
            <td><?= h($animal->birth_ease) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sales Date') ?></th>
            <td><?= h($animal->sales_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Death Date') ?></th>
            <td><?= h($animal->death_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Death Reason') ?></th>
            <td><?= h($animal->death_reason) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Purchase Date') ?></th>
            <td><?= h($animal->purchase_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $animal->has('status') ? $this->Html->link($animal->status->name, ['controller' => 'Statuses', 'action' => 'view', $animal->status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($animal->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($animal->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AnimalWeight Id') ?></th>
            <td><?= $this->Number->format($animal->animalWeight_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MaleParent Tag') ?></th>
            <td><?= $this->Number->format($animal->maleParent_tag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FemaleParent Tag') ?></th>
            <td><?= $this->Number->format($animal->femaleParent_tag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MaleParent Percentage') ?></th>
            <td><?= $this->Number->format($animal->maleParent_percentage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FemaleParent Percentage') ?></th>
            <td><?= $this->Number->format($animal->femaleParent_percentage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MaleParentBreedType Id') ?></th>
            <td><?= $this->Number->format($animal->maleParentBreedType_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FemaleParentBreedType Id') ?></th>
            <td><?= $this->Number->format($animal->femaleParentBreedType_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sales Weight') ?></th>
            <td><?= $this->Number->format($animal->sales_weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sales Price') ?></th>
            <td><?= $this->Number->format($animal->sales_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Purchase Price') ?></th>
            <td><?= $this->Number->format($animal->purchase_price) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Animal Weights') ?></h4>
        <?php if (!empty($animal->animal_weights)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('Weight') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Animal Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($animal->animal_weights as $animalWeights): ?>
            <tr>
                <td><?= h($animalWeights->id) ?></td>
                <td><?= h($animalWeights->farm_id) ?></td>
                <td><?= h($animalWeights->weight) ?></td>
                <td><?= h($animalWeights->description) ?></td>
                <td><?= h($animalWeights->date) ?></td>
                <td><?= h($animalWeights->animal_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AnimalWeights', 'action' => 'view', $animalWeights->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AnimalWeights', 'action' => 'edit', $animalWeights->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AnimalWeights', 'action' => 'delete', $animalWeights->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animalWeights->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Animal Items') ?></h4>
        <?php if (!empty($animal->animal_items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('Animal Id') ?></th>
                <th scope="col"><?= __('Animal Tag') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($animal->animal_items as $animalItems): ?>
            <tr>
                <td><?= h($animalItems->id) ?></td>
                <td><?= h($animalItems->farm_id) ?></td>
                <td><?= h($animalItems->animal_id) ?></td>
                <td><?= h($animalItems->animal_tag) ?></td>
                <td><?= h($animalItems->item_id) ?></td>
                <td><?= h($animalItems->quantity) ?></td>
                <td><?= h($animalItems->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AnimalItems', 'action' => 'view', $animalItems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AnimalItems', 'action' => 'edit', $animalItems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AnimalItems', 'action' => 'delete', $animalItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animalItems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Medical Histories') ?></h4>
        <?php if (!empty($animal->medical_histories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('Animal Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Doctor Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('VaccinationType Id') ?></th>
                <th scope="col"><?= __('Disease Name') ?></th>
                <th scope="col"><?= __('Prescription') ?></th>
                <th scope="col"><?= __('Symptoms') ?></th>
                <th scope="col"><?= __('Medication') ?></th>
                <th scope="col"><?= __('Result') ?></th>
                <th scope="col"><?= __('Duration') ?></th>
                <th scope="col"><?= __('Fees') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($animal->medical_histories as $medicalHistories): ?>
            <tr>
                <td><?= h($medicalHistories->id) ?></td>
                <td><?= h($medicalHistories->farm_id) ?></td>
                <td><?= h($medicalHistories->animal_id) ?></td>
                <td><?= h($medicalHistories->date) ?></td>
                <td><?= h($medicalHistories->doctor_name) ?></td>
                <td><?= h($medicalHistories->description) ?></td>
                <td><?= h($medicalHistories->vaccinationType_id) ?></td>
                <td><?= h($medicalHistories->disease_name) ?></td>
                <td><?= h($medicalHistories->prescription) ?></td>
                <td><?= h($medicalHistories->symptoms) ?></td>
                <td><?= h($medicalHistories->medication) ?></td>
                <td><?= h($medicalHistories->result) ?></td>
                <td><?= h($medicalHistories->duration) ?></td>
                <td><?= h($medicalHistories->fees) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MedicalHistories', 'action' => 'view', $medicalHistories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MedicalHistories', 'action' => 'edit', $medicalHistories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MedicalHistories', 'action' => 'delete', $medicalHistories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicalHistories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Milk Collections') ?></h4>
        <?php if (!empty($animal->milk_collections)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('Animal Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Unit') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($animal->milk_collections as $milkCollections): ?>
            <tr>
                <td><?= h($milkCollections->id) ?></td>
                <td><?= h($milkCollections->farm_id) ?></td>
                <td><?= h($milkCollections->animal_id) ?></td>
                <td><?= h($milkCollections->quantity) ?></td>
                <td><?= h($milkCollections->price) ?></td>
                <td><?= h($milkCollections->date) ?></td>
                <td><?= h($milkCollections->description) ?></td>
                <td><?= h($milkCollections->unit) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MilkCollections', 'action' => 'view', $milkCollections->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MilkCollections', 'action' => 'edit', $milkCollections->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MilkCollections', 'action' => 'delete', $milkCollections->id], ['confirm' => __('Are you sure you want to delete # {0}?', $milkCollections->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
