<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Farm $farm
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
      <!--  <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Farm'), ['action' => 'edit', $farm->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Farm'), ['action' => 'delete', $farm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $farm->id)]) ?> </li>
		-->
	   <li><?= $this->Html->link(__('List Farms'), ['action' => 'index']) ?> </li>
<!--       
	   <li><?= $this->Html->link(__('New Farm'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Licenses'), ['controller' => 'Licenses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New License'), ['controller' => 'Licenses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Animal Items'), ['controller' => 'AnimalItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animal Item'), ['controller' => 'AnimalItems', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Animal Weights'), ['controller' => 'AnimalWeights', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animal Weight'), ['controller' => 'AnimalWeights', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Breedings'), ['controller' => 'Breedings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Breeding'), ['controller' => 'Breedings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Expense Types'), ['controller' => 'ExpenseTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Expense Type'), ['controller' => 'ExpenseTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Expenses'), ['controller' => 'Expenses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Expense'), ['controller' => 'Expenses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Income Types'), ['controller' => 'IncomeTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Income Type'), ['controller' => 'IncomeTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Incomes'), ['controller' => 'Incomes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Income'), ['controller' => 'Incomes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Medical Histories'), ['controller' => 'MedicalHistories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medical History'), ['controller' => 'MedicalHistories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Milk Collections'), ['controller' => 'MilkCollections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Milk Collection'), ['controller' => 'MilkCollections', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Purchases'), ['controller' => 'Purchases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Purchase'), ['controller' => 'Purchases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?> </li>
	-->	
	   <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
	<!--
	   <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vaccinations'), ['controller' => 'Vaccinations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vaccination'), ['controller' => 'Vaccinations', 'action' => 'add']) ?> </li>-->
    </ul>
</nav>
<div class="farms view large-9 medium-8 columns content">
    <h3><?= h($farm->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($farm->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($farm->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gstin') ?></th>
            <td><?= h($farm->gstin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $farm->has('status') ? $this->Html->link($farm->status->name, ['controller' => 'Statuses', 'action' => 'view', $farm->status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('License') ?></th>
            <td><?= $farm->has('license') ? $this->Html->link($farm->license->name, ['controller' => 'Licenses', 'action' => 'view', $farm->license->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($farm->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Live Stock') ?></th>
            <td><?= $this->Number->format($farm->live_stock) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Animal Limit') ?></th>
            <td><?= $this->Number->format($farm->animal_limit) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Animal Items') ?></h4>
        <?php if (!empty($farm->animal_items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('Animal Id') ?></th>
                <th scope="col"><?= __('Animal Tag') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($farm->animal_items as $animalItems): ?>
            <tr>
                <td><?= h($animalItems->id) ?></td>
                <td><?= h($animalItems->farm_id) ?></td>
                <td><?= h($animalItems->animal_id) ?></td>
                <td><?= h($animalItems->animal_tag) ?></td>
                <td><?= h($animalItems->item_id) ?></td>
                <td><?= h($animalItems->quantity) ?></td>
                <td><?= h($animalItems->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AnimalItems', 'action' => 'view', $animalItems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AnimalItems', 'action' => 'edit', $animalItems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AnimalItems', 'action' => 'delete', $animalItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animalItems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Animal Weights') ?></h4>
        <?php if (!empty($farm->animal_weights)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('Animal Id') ?></th>
                <th scope="col"><?= __('Animal Tag') ?></th>
                <th scope="col"><?= __('Weight') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($farm->animal_weights as $animalWeights): ?>
            <tr>
                <td><?= h($animalWeights->id) ?></td>
                <td><?= h($animalWeights->farm_id) ?></td>
                <td><?= h($animalWeights->animal_id) ?></td>
                <td><?= h($animalWeights->animal_tag) ?></td>
                <td><?= h($animalWeights->weight) ?></td>
                <td><?= h($animalWeights->description) ?></td>
                <td><?= h($animalWeights->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AnimalWeights', 'action' => 'view', $animalWeights->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AnimalWeights', 'action' => 'edit', $animalWeights->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AnimalWeights', 'action' => 'delete', $animalWeights->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animalWeights->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Animals') ?></h4>
        <?php if (!empty($farm->animals)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('Tag') ?></th>
                <th scope="col"><?= __('Dob') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('BreedType Id') ?></th>
                <th scope="col"><?= __('AnimalType Id') ?></th>
                <th scope="col"><?= __('Date Wean') ?></th>
                <th scope="col"><?= __('AnimalWeight Id') ?></th>
                <th scope="col"><?= __('MaleParent Id') ?></th>
                <th scope="col"><?= __('FemaleParent Id') ?></th>
                <th scope="col"><?= __('MaleParent Percentage') ?></th>
                <th scope="col"><?= __('FemaleParent Percentage') ?></th>
                <th scope="col"><?= __('MaleParentBreedType Id') ?></th>
                <th scope="col"><?= __('FemaleParentBreedType Id') ?></th>
                <th scope="col"><?= __('Purchase Location') ?></th>
                <th scope="col"><?= __('Colour') ?></th>
                <th scope="col"><?= __('Birth Location') ?></th>
                <th scope="col"><?= __('Birth Ease') ?></th>
                <th scope="col"><?= __('Sales Date') ?></th>
                <th scope="col"><?= __('Sales Weight') ?></th>
                <th scope="col"><?= __('Sales Price') ?></th>
                <th scope="col"><?= __('Death Date') ?></th>
                <th scope="col"><?= __('Death Reason') ?></th>
                <th scope="col"><?= __('Purchase Price') ?></th>
                <th scope="col"><?= __('Purchase Date') ?></th>
                <th scope="col"><?= __('Status Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($farm->animals as $animals): ?>
            <tr>
                <td><?= h($animals->id) ?></td>
                <td><?= h($animals->farm_id) ?></td>
                <td><?= h($animals->tag) ?></td>
                <td><?= h($animals->dob) ?></td>
                <td><?= h($animals->gender) ?></td>
                <td><?= h($animals->breedType_id) ?></td>
                <td><?= h($animals->animalType_id) ?></td>
                <td><?= h($animals->date_wean) ?></td>
                <td><?= h($animals->animalWeight_id) ?></td>
                <td><?= h($animals->maleParent_id) ?></td>
                <td><?= h($animals->femaleParent_id) ?></td>
                <td><?= h($animals->maleParent_percentage) ?></td>
                <td><?= h($animals->femaleParent_percentage) ?></td>
                <td><?= h($animals->maleParentBreedType_id) ?></td>
                <td><?= h($animals->femaleParentBreedType_id) ?></td>
                <td><?= h($animals->purchase_location) ?></td>
                <td><?= h($animals->colour) ?></td>
                <td><?= h($animals->birth_location) ?></td>
                <td><?= h($animals->birth_ease) ?></td>
                <td><?= h($animals->sales_date) ?></td>
                <td><?= h($animals->sales_weight) ?></td>
                <td><?= h($animals->sales_price) ?></td>
                <td><?= h($animals->death_date) ?></td>
                <td><?= h($animals->death_reason) ?></td>
                <td><?= h($animals->purchase_price) ?></td>
                <td><?= h($animals->purchase_date) ?></td>
                <td><?= h($animals->status_id) ?></td>
                <td><?= h($animals->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Animals', 'action' => 'view', $animals->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Animals', 'action' => 'edit', $animals->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Animals', 'action' => 'delete', $animals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animals->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Breedings') ?></h4>
        <?php if (!empty($farm->breedings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('FemaleAnimal Id') ?></th>
                <th scope="col"><?= __('MaleAnimal Id') ?></th>
                <th scope="col"><?= __('SemenBreedType Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Location') ?></th>
                <th scope="col"><?= __('Gestation Days') ?></th>
                <th scope="col"><?= __('Delivery Date') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($farm->breedings as $breedings): ?>
            <tr>
                <td><?= h($breedings->id) ?></td>
                <td><?= h($breedings->farm_id) ?></td>
                <td><?= h($breedings->femaleAnimal_id) ?></td>
                <td><?= h($breedings->maleAnimal_id) ?></td>
                <td><?= h($breedings->semenBreedType_id) ?></td>
                <td><?= h($breedings->date) ?></td>
                <td><?= h($breedings->location) ?></td>
                <td><?= h($breedings->gestation_days) ?></td>
                <td><?= h($breedings->delivery_date) ?></td>
                <td><?= h($breedings->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Breedings', 'action' => 'view', $breedings->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Breedings', 'action' => 'edit', $breedings->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Breedings', 'action' => 'delete', $breedings->], ['confirm' => __('Are you sure you want to delete # {0}?', $breedings->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Expense Types') ?></h4>
        <?php if (!empty($farm->expense_types)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($farm->expense_types as $expenseTypes): ?>
            <tr>
                <td><?= h($expenseTypes->id) ?></td>
                <td><?= h($expenseTypes->farm_id) ?></td>
                <td><?= h($expenseTypes->name) ?></td>
                <td><?= h($expenseTypes->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ExpenseTypes', 'action' => 'view', $expenseTypes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ExpenseTypes', 'action' => 'edit', $expenseTypes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ExpenseTypes', 'action' => 'delete', $expenseTypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expenseTypes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Expenses') ?></h4>
        <?php if (!empty($farm->expenses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('ExpenseType Id') ?></th>
                <th scope="col"><?= __('Location') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($farm->expenses as $expenses): ?>
            <tr>
                <td><?= h($expenses->id) ?></td>
                <td><?= h($expenses->farm_id) ?></td>
                <td><?= h($expenses->expenseType_id) ?></td>
                <td><?= h($expenses->location) ?></td>
                <td><?= h($expenses->price) ?></td>
                <td><?= h($expenses->date) ?></td>
                <td><?= h($expenses->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Expenses', 'action' => 'view', $expenses->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Expenses', 'action' => 'edit', $expenses->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Expenses', 'action' => 'delete', $expenses->], ['confirm' => __('Are you sure you want to delete # {0}?', $expenses->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Income Types') ?></h4>
        <?php if (!empty($farm->income_types)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($farm->income_types as $incomeTypes): ?>
            <tr>
                <td><?= h($incomeTypes->id) ?></td>
                <td><?= h($incomeTypes->farm_id) ?></td>
                <td><?= h($incomeTypes->name) ?></td>
                <td><?= h($incomeTypes->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'IncomeTypes', 'action' => 'view', $incomeTypes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'IncomeTypes', 'action' => 'edit', $incomeTypes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'IncomeTypes', 'action' => 'delete', $incomeTypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $incomeTypes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Incomes') ?></h4>
        <?php if (!empty($farm->incomes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('IncomeType Id') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Location') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($farm->incomes as $incomes): ?>
            <tr>
                <td><?= h($incomes->id) ?></td>
                <td><?= h($incomes->farm_id) ?></td>
                <td><?= h($incomes->incomeType_id) ?></td>
                <td><?= h($incomes->price) ?></td>
                <td><?= h($incomes->location) ?></td>
                <td><?= h($incomes->description) ?></td>
                <td><?= h($incomes->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Incomes', 'action' => 'view', $incomes->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Incomes', 'action' => 'edit', $incomes->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Incomes', 'action' => 'delete', $incomes->], ['confirm' => __('Are you sure you want to delete # {0}?', $incomes->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Items') ?></h4>
        <?php if (!empty($farm->items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($farm->items as $items): ?>
            <tr>
                <td><?= h($items->id) ?></td>
                <td><?= h($items->name) ?></td>
                <td><?= h($items->farm_id) ?></td>
                <td><?= h($items->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $items->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $items->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $items->id], ['confirm' => __('Are you sure you want to delete # {0}?', $items->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Medical Histories') ?></h4>
        <?php if (!empty($farm->medical_histories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('Animal Id') ?></th>
                <th scope="col"><?= __('Doctor Name') ?></th>
                <th scope="col"><?= __('Symptoms') ?></th>
                <th scope="col"><?= __('Disease Name') ?></th>
                <th scope="col"><?= __('VaccinationType Id') ?></th>
                <th scope="col"><?= __('Prescription') ?></th>
                <th scope="col"><?= __('Medication') ?></th>
                <th scope="col"><?= __('Result') ?></th>
                <th scope="col"><?= __('Duration') ?></th>
                <th scope="col"><?= __('Fees') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($farm->medical_histories as $medicalHistories): ?>
            <tr>
                <td><?= h($medicalHistories->id) ?></td>
                <td><?= h($medicalHistories->farm_id) ?></td>
                <td><?= h($medicalHistories->animal_id) ?></td>
                <td><?= h($medicalHistories->doctor_name) ?></td>
                <td><?= h($medicalHistories->symptoms) ?></td>
                <td><?= h($medicalHistories->disease_name) ?></td>
                <td><?= h($medicalHistories->vaccinationType_id) ?></td>
                <td><?= h($medicalHistories->prescription) ?></td>
                <td><?= h($medicalHistories->medication) ?></td>
                <td><?= h($medicalHistories->result) ?></td>
                <td><?= h($medicalHistories->duration) ?></td>
                <td><?= h($medicalHistories->fees) ?></td>
                <td><?= h($medicalHistories->description) ?></td>
                <td><?= h($medicalHistories->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MedicalHistories', 'action' => 'view', $medicalHistories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MedicalHistories', 'action' => 'edit', $medicalHistories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MedicalHistories', 'action' => 'delete', $medicalHistories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicalHistories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Milk Collections') ?></h4>
        <?php if (!empty($farm->milk_collections)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('Animal Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Unit') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($farm->milk_collections as $milkCollections): ?>
            <tr>
                <td><?= h($milkCollections->id) ?></td>
                <td><?= h($milkCollections->farm_id) ?></td>
                <td><?= h($milkCollections->animal_id) ?></td>
                <td><?= h($milkCollections->quantity) ?></td>
                <td><?= h($milkCollections->unit) ?></td>
                <td><?= h($milkCollections->price) ?></td>
                <td><?= h($milkCollections->date) ?></td>
                <td><?= h($milkCollections->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MilkCollections', 'action' => 'view', $milkCollections->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MilkCollections', 'action' => 'edit', $milkCollections->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MilkCollections', 'action' => 'delete', $milkCollections->id], ['confirm' => __('Are you sure you want to delete # {0}?', $milkCollections->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Purchases') ?></h4>
        <?php if (!empty($farm->purchases)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('PurchaseNumber') ?></th>
                <th scope="col"><?= __('Supplier Name') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Unit Id') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Location') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($farm->purchases as $purchases): ?>
            <tr>
                <td><?= h($purchases->id) ?></td>
                <td><?= h($purchases->farm_id) ?></td>
                <td><?= h($purchases->purchaseNumber) ?></td>
                <td><?= h($purchases->supplier_name) ?></td>
                <td><?= h($purchases->item_id) ?></td>
                <td><?= h($purchases->quantity) ?></td>
                <td><?= h($purchases->unit_id) ?></td>
                <td><?= h($purchases->price) ?></td>
                <td><?= h($purchases->location) ?></td>
                <td><?= h($purchases->description) ?></td>
                <td><?= h($purchases->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Purchases', 'action' => 'view', $purchases->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Purchases', 'action' => 'edit', $purchases->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Purchases', 'action' => 'delete', $purchases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchases->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Transactions') ?></h4>
        <?php if (!empty($farm->transactions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('License Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($farm->transactions as $transactions): ?>
            <tr>
                <td><?= h($transactions->id) ?></td>
                <td><?= h($transactions->farm_id) ?></td>
                <td><?= h($transactions->license_id) ?></td>
                <td><?= h($transactions->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Transactions', 'action' => 'view', $transactions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Transactions', 'action' => 'edit', $transactions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transactions', 'action' => 'delete', $transactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($farm->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Middle Name') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Mobile') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Status Id') ?></th>
                <th scope="col"><?= __('Registered') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($farm->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->farm_id) ?></td>
                <td><?= h($users->role_id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->first_name) ?></td>
                <td><?= h($users->Last_name) ?></td>
                <td><?= h($users->middle_name) ?></td>
                <td><?= h($users->gender) ?></td>
                <td><?= h($users->mobile) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->status_id) ?></td>
                <td><?= h($users->registered) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Vaccinations') ?></h4>
        <?php if (!empty($farm->vaccinations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Farm Id') ?></th>
                <th scope="col"><?= __('VaccinationType Id') ?></th>
                <th scope="col"><?= __('Next Date') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($farm->vaccinations as $vaccinations): ?>
            <tr>
                <td><?= h($vaccinations->id) ?></td>
                <td><?= h($vaccinations->farm_id) ?></td>
                <td><?= h($vaccinations->vaccinationType_id) ?></td>
                <td><?= h($vaccinations->next_date) ?></td>
                <td><?= h($vaccinations->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Vaccinations', 'action' => 'view', $vaccinations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vaccinations', 'action' => 'edit', $vaccinations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vaccinations', 'action' => 'delete', $vaccinations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vaccinations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
