<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autologin $autologin
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Autologin'), ['action' => 'edit', $autologin->user]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Autologin'), ['action' => 'delete', $autologin->user], ['confirm' => __('Are you sure you want to delete # {0}?', $autologin->user)]) ?> </li>
        <li><?= $this->Html->link(__('List Autologin'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Autologin'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="autologin view large-9 medium-8 columns content">
    <h3><?= h($autologin->user) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Series') ?></th>
            <td><?= h($autologin->series) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Key') ?></th>
            <td><?= h($autologin->key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $this->Number->format($autologin->user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= $this->Number->format($autologin->created) ?></td>
        </tr>
    </table>
</div>
