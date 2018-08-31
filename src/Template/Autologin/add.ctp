<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autologin $autologin
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Autologin'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="autologin form large-9 medium-8 columns content">
    <?= $this->Form->create($autologin) ?>
    <fieldset>
        <legend><?= __('Add Autologin') ?></legend>
        <?php
            echo $this->Form->control('key');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
