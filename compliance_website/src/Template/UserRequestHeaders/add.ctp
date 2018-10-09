<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserRequestHeader $userRequestHeader
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User Request Headers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User Doc Categories'), ['controller' => 'UserDocCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Doc Category'), ['controller' => 'UserDocCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Doc Types'), ['controller' => 'UserDocTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Doc Type'), ['controller' => 'UserDocTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Request Reasons'), ['controller' => 'UserRequestReasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Request Reason'), ['controller' => 'UserRequestReasons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Doc Approvals'), ['controller' => 'UserDocApprovals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Doc Approval'), ['controller' => 'UserDocApprovals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Request Details'), ['controller' => 'UserRequestDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Request Detail'), ['controller' => 'UserRequestDetails', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userRequestHeaders form large-9 medium-8 columns content">
    <?= $this->Form->create($userRequestHeader) ?>
    <fieldset>
        <legend><?= __('Add User Request Header') ?></legend>
        <?php
            echo $this->Form->control('user_doc_category_id', ['options' => $userDocCategories]);
            echo $this->Form->control('user_doc_type_id', ['options' => $userDocTypes, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('doc_title');
            echo $this->Form->control('doc_no');
            echo $this->Form->control('reasons_id', ['options' => $userRequestReasons]);
            echo $this->Form->control('status');
            echo $this->Form->control('request_dates');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
