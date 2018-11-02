<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MilkCollection[]|\Cake\Collection\CollectionInterface $milkCollections
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Milk Collection'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?></li>
    </ul>
</nav>-->
<div class="milkCollections index large-9 medium-8 columns content">
    <h3><?= __('Milk Collections') ?></h3>
    <table id="milkCollections" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('farm_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('animal_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unit') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($milkCollections as $milkCollection): ?>
            <tr>
                <td><?= $this->Number->format($milkCollection->id) ?></td>
                <td><?= $milkCollection->has('farm') ? $this->Html->link($milkCollection->farm->name, ['controller' => 'Farms', 'action' => 'view', $milkCollection->farm->id]) : '' ?></td>
                <td><?= $milkCollection->has('animal') ? $this->Html->link($milkCollection->animal->id, ['controller' => 'Animals', 'action' => 'view', $milkCollection->animal->id]) : '' ?></td>
                <td><?= $this->Number->format($milkCollection->quantity) ?></td>
                <td><?= $this->Number->format($milkCollection->price) ?></td>
                <td><?= h($milkCollection->date) ?></td>
                <td><?= h($milkCollection->description) ?></td>
                <td><?= $this->Number->format($milkCollection->unit) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $milkCollection->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $milkCollection->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $milkCollection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $milkCollection->id)]) ?>
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

<script>

$(function () {
  
    $('#milkCollections').DataTable({
      "paging": true,
      "responsive":true,
      "dom": 'Bfrtip',
      "lengthMenu": [
                            [ 10, 25, 50, -1 ],
                            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
                        ],
       "buttons": [
            
                'pageLength',
            
            {
                "extend": 'excelHtml5',
                "title": 'Goat Form Manager Report',
                "messageBottom": "Designed & Developed by JagTechno"
            },
            {
                "extend": 'pdfHtml5',
                "title": '',
                "messageBottom": "Designed & Developed by JagTechno"
            }
        ],
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>