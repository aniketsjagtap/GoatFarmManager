<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Farm[]|\Cake\Collection\CollectionInterface $farms
 */
?>

<div class="farms index large-9 medium-8 columns content">
    <h3><?= __('Farms') ?></h3>
    <table id="farms" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('live_stock') ?></th>
                <th scope="col"><?= $this->Paginator->sort('animal_limit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gstin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('license_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($farms as $farm): ?>
            <tr>
                <td><?= $this->Number->format($farm->id) ?></td>
                <td><?= h($farm->name) ?></td>
                <td><?= $this->Number->format($farm->live_stock) ?></td>
                <td><?= $this->Number->format($farm->animal_limit) ?></td>
                <td><?= h($farm->address) ?></td>
                <td><?= h($farm->gstin) ?></td>
                <td><?= $farm->has('status') ? $this->Html->link($farm->status->name, ['controller' => 'Statuses', 'action' => 'view', $farm->status->id]) : '' ?></td>
                <td><?= $farm->has('license') ? $this->Html->link($farm->license->name, ['controller' => 'Licenses', 'action' => 'view', $farm->license->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $farm->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $farm->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $farm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $farm->id)]) ?>
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
  
    $('#farms').DataTable({
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