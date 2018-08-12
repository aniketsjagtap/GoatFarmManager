<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Session $session
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Session'), ['action' => 'edit', $session->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Session'), ['action' => 'delete', $session->id], ['confirm' => __('Are you sure you want to delete # {0}?', $session->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sessions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Session'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sessions view large-9 medium-8 columns content">
    <h3><?= h($session->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($session->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip Address') ?></th>
            <td><?= h($session->ip_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timestamp') ?></th>
            <td><?= h($session->timestamp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Agent') ?></th>
            <td><?= h($session->user_agent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Activity') ?></th>
            <td><?= $this->Number->format($session->last_activity) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Data') ?></h4>
        <?= $this->Text->autoParagraph(h($session->data)); ?>
    </div>
</div>
