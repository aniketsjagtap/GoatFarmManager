<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AnimalType $animalType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $animalType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $animalType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Animal Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="animalTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($animalType) ?>
    <fieldset>
        <legend><?= __('Edit Animal Type') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('category_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
