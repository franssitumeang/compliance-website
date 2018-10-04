<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserRequestHeader $userRequestHeader
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Request Header'), ['action' => 'edit', $userRequestHeader->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Request Header'), ['action' => 'delete', $userRequestHeader->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRequestHeader->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Request Headers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Request Header'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reasons'), ['controller' => 'Reasons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reason'), ['controller' => 'Reasons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userRequestHeaders view large-9 medium-8 columns content">
    <h3><?= h($userRequestHeader->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($userRequestHeader->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= h($userRequestHeader->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reason') ?></th>
            <td><?= $userRequestHeader->has('reason') ? $this->Html->link($userRequestHeader->reason->id, ['controller' => 'Reasons', 'action' => 'view', $userRequestHeader->reason->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Request Dates') ?></th>
            <td><?= h($userRequestHeader->request_dates) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $userRequestHeader->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
