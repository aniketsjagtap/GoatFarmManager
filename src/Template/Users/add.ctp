<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?//= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?//= $this->Html->link(__('List Farms'), ['controller' => 'Farms', 'action' => 'index']) ?></li>
        <li><?//= $this->Html->link(__('New Farm'), ['controller' => 'Farms', 'action' => 'add']) ?></li>
        <li><?//= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?//= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?//= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?></li>
        <li><?//= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?></li>
    </ul>
</nav>-->
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Register User') ?></legend>
        <?php
            echo $this->Form->control('Farm_name',['required'=>'required']);
           // echo $this->Form->control('role_id', ['options' => $roles, 'empty' => true]);
           // echo $this->Form->control('username');
		    echo $this->Form->control('email',['required'=>'required']);
            echo $this->Form->control('password');
            echo $this->Form->control('first_name',['required'=>'required']);
            echo $this->Form->control('Last_name');
            echo $this->Form->control('middle_name');
            echo $this->Form->radio('gender',['male','female'],['lable'=>true],['required'=>'required']);
            echo $this->Form->control('mobile',['required'=>'required']);
           
          //  echo $this->Form->control('status_id', ['options' => $statuses]);
         //   echo $this->Form->control('registered');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
