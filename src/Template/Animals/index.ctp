<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Animal[]|\Cake\Collection\CollectionInterface $animals
 */
?>

<div class="animals index large-9 medium-8 columns content">
    <h3><?= __('Animals') ?></h3>
    <table id = "Animals" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('farm_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dob') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('breedType_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('animalType_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_wean') ?></th>
                <th scope="col"><?= $this->Paginator->sort('animalWeight_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('maleParent_tag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('femaleParent_tag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('maleParent_percentage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('femaleParent_percentage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('maleParentBreedType_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('femaleParentBreedType_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('purchase_location') ?></th>
                <th scope="col"><?= $this->Paginator->sort('colour') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth_location') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth_ease') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sales_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sales_weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sales_price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('death_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('death_reason') ?></th>
                <th scope="col"><?= $this->Paginator->sort('purchase_price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('purchase_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animals as $animal): ?>
            <tr>
                <td><?= $this->Number->format($animal->id) ?></td>
                <td><?= $animal->has('farm') ? $this->Html->link($animal->farm->name, ['controller' => 'Farms', 'action' => 'view', $animal->farm->id]) : '' ?></td>
                <td><?= h($animal->tag) ?></td>
                <td><?= h($animal->dob) ?></td>
                <td><?= h($animal->gender) ?></td>
                <td><?= $animal->has('breed_type') ? $this->Html->link($animal->breed_type->name, ['controller' => 'BreedTypes', 'action' => 'view', $animal->breed_type->id]) : '' ?></td>
                <td><?= $animal->has('animal_type') ? $this->Html->link($animal->animal_type->name, ['controller' => 'AnimalTypes', 'action' => 'view', $animal->animal_type->id]) : '' ?></td>
                <td><?= h($animal->date_wean) ?></td>
                <td><?= $this->Number->format($animal->animalWeight_id) ?></td>
                <td><?= $this->Number->format($animal->maleParent_tag) ?></td>
                <td><?= $this->Number->format($animal->femaleParent_tag) ?></td>
                <td><?= $this->Number->format($animal->maleParent_percentage) ?></td>
                <td><?= $this->Number->format($animal->femaleParent_percentage) ?></td>
                <td><?= $this->Number->format($animal->maleParentBreedType_id) ?></td>
                <td><?= $this->Number->format($animal->femaleParentBreedType_id) ?></td>
                <td><?= h($animal->purchase_location) ?></td>
                <td><?= h($animal->colour) ?></td>
                <td><?= h($animal->birth_location) ?></td>
                <td><?= h($animal->birth_ease) ?></td>
                <td><?= h($animal->sales_date) ?></td>
                <td><?= $this->Number->format($animal->sales_weight) ?></td>
                <td><?= $this->Number->format($animal->sales_price) ?></td>
                <td><?= h($animal->death_date) ?></td>
                <td><?= h($animal->death_reason) ?></td>
                <td><?= $this->Number->format($animal->purchase_price) ?></td>
                <td><?= h($animal->purchase_date) ?></td>
                <td><?= $animal->has('status') ? $this->Html->link($animal->status->name, ['controller' => 'Statuses', 'action' => 'view', $animal->status->id]) : '' ?></td>
                <td><?= h($animal->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $animal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $animal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $animal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animal->id)]) ?>
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
  
    $('#Animals').DataTable({
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