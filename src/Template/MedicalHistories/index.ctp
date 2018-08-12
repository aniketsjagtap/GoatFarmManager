<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MedicalHistory[]|\Cake\Collection\CollectionInterface $medicalHistories
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Medical History'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vaccination Types'), ['controller' => 'VaccinationTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vaccination Type'), ['controller' => 'VaccinationTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="medicalHistories index large-9 medium-8 columns content">
    <h3><?= __('Medical Histories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('farm_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('animal_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('doctor_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vaccinationType_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disease_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prescription') ?></th>
                <th scope="col"><?= $this->Paginator->sort('symptoms') ?></th>
                <th scope="col"><?= $this->Paginator->sort('medication') ?></th>
                <th scope="col"><?= $this->Paginator->sort('result') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fees') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medicalHistories as $medicalHistory): ?>
            <tr>
                <td><?= $this->Number->format($medicalHistory->id) ?></td>
                <td><?= $medicalHistory->has('farm') ? $this->Html->link($medicalHistory->farm->name, ['controller' => 'Farms', 'action' => 'view', $medicalHistory->farm->id]) : '' ?></td>
                <td><?= $medicalHistory->has('animal') ? $this->Html->link($medicalHistory->animal->id, ['controller' => 'Animals', 'action' => 'view', $medicalHistory->animal->id]) : '' ?></td>
                <td><?= h($medicalHistory->date) ?></td>
                <td><?= h($medicalHistory->doctor_name) ?></td>
                <td><?= h($medicalHistory->description) ?></td>
                <td><?= $medicalHistory->has('vaccination_type') ? $this->Html->link($medicalHistory->vaccination_type->name, ['controller' => 'VaccinationTypes', 'action' => 'view', $medicalHistory->vaccination_type->id]) : '' ?></td>
                <td><?= h($medicalHistory->disease_name) ?></td>
                <td><?= h($medicalHistory->prescription) ?></td>
                <td><?= h($medicalHistory->symptoms) ?></td>
                <td><?= h($medicalHistory->medication) ?></td>
                <td><?= h($medicalHistory->result) ?></td>
                <td><?= h($medicalHistory->duration) ?></td>
                <td><?= $this->Number->format($medicalHistory->fees) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $medicalHistory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medicalHistory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medicalHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicalHistory->id)]) ?>
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
