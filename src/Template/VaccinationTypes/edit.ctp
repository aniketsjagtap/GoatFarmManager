<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VaccinationType $vaccinationType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vaccinationType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vaccinationType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vaccination Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="vaccinationTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($vaccinationType) ?>
    <fieldset>
        <legend><?= __('Edit Vaccination Type') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('period');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
