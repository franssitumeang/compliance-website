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
        <li><?= $this->Html->link(__('List User Request Details'), ['controller' => 'UserRequestDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Request Detail'), ['controller' => 'UserRequestDetails', 'action' => 'add']) ?> </li>
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
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userRequestHeader->has('user') ? $this->Html->link($userRequestHeader->user->id, ['controller' => 'Users', 'action' => 'view', $userRequestHeader->user->id]) : '' ?></td>
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
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userRequestHeader->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userRequestHeader->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $userRequestHeader->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related User Request Details') ?></h4>
        <?php if (!empty($userRequestHeader->user_request_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Request Header Id') ?></th>
                <th scope="col"><?= __('User Document Id') ?></th>
                <th scope="col"><?= __('Approve M') ?></th>
                <th scope="col"><?= __('Approve C') ?></th>
                <th scope="col"><?= __('Request Types') ?></th>
                <th scope="col"><?= __('Descriptions') ?></th>
                <th scope="col"><?= __('Attachment') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($userRequestHeader->user_request_details as $userRequestDetails): ?>
            <tr>
                <td><?= h($userRequestDetails->id) ?></td>
                <td><?= h($userRequestDetails->user_request_header_id) ?></td>
                <td><?= h($userRequestDetails->user_document_id) ?></td>
                <td><?= h($userRequestDetails->approve_m) ?></td>
                <td><?= h($userRequestDetails->approve_c) ?></td>
                <td><?= h($userRequestDetails->request_types) ?></td>
                <td><?= h($userRequestDetails->descriptions) ?></td>
                <td><?= h($userRequestDetails->attachment) ?></td>
                <td><?= h($userRequestDetails->created) ?></td>
                <td><?= h($userRequestDetails->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserRequestDetails', 'action' => 'view', $userRequestDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserRequestDetails', 'action' => 'edit', $userRequestDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserRequestDetails', 'action' => 'delete', $userRequestDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRequestDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
