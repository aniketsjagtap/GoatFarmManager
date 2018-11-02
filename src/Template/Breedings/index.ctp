<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Breeding[]|\Cake\Collection\CollectionInterface $breedings
 */
?>

<div class="breedings index large-9 medium-8 columns content">
    <h3><?= __('Breedings') ?></h3>
    <table id="breedings" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('farm_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('femaleAnimal_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('maleAnimal_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('semenBreedType_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gestation_days') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delivery_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($breedings as $breeding): ?>
            <tr>
                <td><?= $this->Number->format($breeding->id) ?></td>
                <td><?= $breeding->has('farm') ? $this->Html->link($breeding->farm->name, ['controller' => 'Farms', 'action' => 'view', $breeding->farm->id]) : '' ?></td>
                <td><?= $this->Number->format($breeding->femaleAnimal_id) ?></td>
                <td><?= $this->Number->format($breeding->maleAnimal_id) ?></td>
                <td><?= $this->Number->format($breeding->semenBreedType_id) ?></td>
                <td><?= h($breeding->date) ?></td>
                <td><?= h($breeding->location) ?></td>
                <td><?= $this->Number->format($breeding->gestation_days) ?></td>
                <td><?= h($breeding->delivery_date) ?></td>
                <td><?= h($breeding->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $breeding->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $breeding->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $breeding->id], ['confirm' => __('Are you sure you want to delete # {0}?', $breeding->id)]) ?>
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
  
    $('#breedings').DataTable({
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