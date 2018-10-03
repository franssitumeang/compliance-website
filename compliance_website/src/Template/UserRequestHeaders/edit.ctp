<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserRequestHeader $userRequestHeader
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userRequestHeader->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userRequestHeader->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Request Headers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reasons'), ['controller' => 'Reasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reason'), ['controller' => 'Reasons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userRequestHeaders form large-9 medium-8 columns content">
    <?= $this->Form->create($userRequestHeader) ?>
    <fieldset>
        <legend><?= __('Edit User Request Header') ?></legend>
        <?php
            echo $this->Form->control('user_id');
            echo $this->Form->control('status');
            echo $this->Form->control('request_dates');
            echo $this->Form->control('reasons_id', ['options' => $reasons]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
