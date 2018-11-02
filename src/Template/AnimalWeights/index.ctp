<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AnimalWeight[]|\Cake\Collection\CollectionInterface $animalWeights
 */
?>

<div class="animalWeights index large-9 medium-8 columns content">
    <h3><?= __('Animal Weights') ?></h3>
    <table id="animalWeights" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('farm_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('animal_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animalWeights as $animalWeight): ?>
            <tr>
                <td><?= $this->Number->format($animalWeight->id) ?></td>
                <td><?= $animalWeight->has('farm') ? $this->Html->link($animalWeight->farm->name, ['controller' => 'Farms', 'action' => 'view', $animalWeight->farm->id]) : '' ?></td>
                <td><?= $this->Number->format($animalWeight->weight) ?></td>
                <td><?= h($animalWeight->description) ?></td>
                <td><?= h($animalWeight->date) ?></td>
                <td><?= $animalWeight->has('animal') ? $this->Html->link($animalWeight->animal->id, ['controller' => 'Animals', 'action' => 'view', $animalWeight->animal->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $animalWeight->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $animalWeight->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $animalWeight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animalWeight->id)]) ?>
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
  
    $('#animalWeights').DataTable({
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