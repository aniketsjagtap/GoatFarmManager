<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BreedType $breedType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Breed Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="breedTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($breedType) ?>
    <fieldset>
        <legend><?= __('Add Breed Type') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
