<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MedicalHistory $medicalHistory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Medical History'), ['action' => 'edit', $medicalHistory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Medical History'), ['action' => 'delete', $medicalHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicalHistory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Medical Histories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medical History'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vaccination Types'), ['controller' => 'VaccinationTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vaccination Type'), ['controller' => 'VaccinationTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="medicalHistories view large-9 medium-8 columns content">
    <h3><?= h($medicalHistory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Farm') ?></th>
            <td><?= $medicalHistory->has('farm') ? $this->Html->link($medicalHistory->farm->name, ['controller' => 'Farms', 'action' => 'view', $medicalHistory->farm->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Animal') ?></th>
            <td><?= $medicalHistory->has('animal') ? $this->Html->link($medicalHistory->animal->id, ['controller' => 'Animals', 'action' => 'view', $medicalHistory->animal->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($medicalHistory->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doctor Name') ?></th>
            <td><?= h($medicalHistory->doctor_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($medicalHistory->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vaccination Type') ?></th>
            <td><?= $medicalHistory->has('vaccination_type') ? $this->Html->link($medicalHistory->vaccination_type->name, ['controller' => 'VaccinationTypes', 'action' => 'view', $medicalHistory->vaccination_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Disease Name') ?></th>
            <td><?= h($medicalHistory->disease_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prescription') ?></th>
            <td><?= h($medicalHistory->prescription) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Symptoms') ?></th>
            <td><?= h($medicalHistory->symptoms) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Medication') ?></th>
            <td><?= h($medicalHistory->medication) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Result') ?></th>
            <td><?= h($medicalHistory->result) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duration') ?></th>
            <td><?= h($medicalHistory->duration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($medicalHistory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fees') ?></th>
            <td><?= $this->Number->format($medicalHistory->fees) ?></td>
        </tr>
    </table>
</div>
