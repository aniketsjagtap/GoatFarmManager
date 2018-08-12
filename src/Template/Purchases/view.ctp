<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Purchase $purchase
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Purchase'), ['action' => 'edit', $purchase->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Purchase'), ['action' => 'delete', $purchase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchase->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Purchases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Purchase'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Units'), ['controller' => 'Units', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unit'), ['controller' => 'Units', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="purchases view large-9 medium-8 columns content">
    <h3><?= h($purchase->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('PurchaseNumber') ?></th>
            <td><?= h($purchase->purchaseNumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Supplier Name') ?></th>
            <td><?= h($purchase->supplier_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Item') ?></th>
            <td><?= $purchase->has('item') ? $this->Html->link($purchase->item->name, ['controller' => 'Items', 'action' => 'view', $purchase->item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unit') ?></th>
            <td><?= $purchase->has('unit') ? $this->Html->link($purchase->unit->name, ['controller' => 'Units', 'action' => 'view', $purchase->unit->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($purchase->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Farm') ?></th>
            <td><?= $purchase->has('farm') ? $this->Html->link($purchase->farm->name, ['controller' => 'Farms', 'action' => 'view', $purchase->farm->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($purchase->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($purchase->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($purchase->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($purchase->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($purchase->price) ?></td>
        </tr>
    </table>
</div>
