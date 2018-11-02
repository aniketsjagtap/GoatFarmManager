<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AnimalType[]|\Cake\Collection\CollectionInterface $animalTypes
 */
?>

<div class="animalTypes index large-9 medium-8 columns content">
    <h3><?= __('Animal Types') ?></h3>
    <table id="animalTypes" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animalTypes as $animalType): ?>
            <tr>
                <td><?= $this->Number->format($animalType->id) ?></td>
                <td><?= h($animalType->name) ?></td>
                <td><?= h($animalType->description) ?></td>
                <td><?= $this->Number->format($animalType->category_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $animalType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $animalType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $animalType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animalType->id)]) ?>
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
  
    $('#animalTypes').DataTable({
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