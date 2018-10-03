<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserRequestHeader[]|\Cake\Collection\CollectionInterface $userRequestHeaders
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Request Header'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reasons'), ['controller' => 'Reasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reason'), ['controller' => 'Reasons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userRequestHeaders index large-9 medium-8 columns content">
    <h3><?= __('User Request Headers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('request_dates') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reasons_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userRequestHeaders as $userRequestHeader): ?>
            <tr>
                <td><?= h($userRequestHeader->id) ?></td>
                <td><?= h($userRequestHeader->user_id) ?></td>
                <td><?= h($userRequestHeader->status) ?></td>
                <td><?= h($userRequestHeader->request_dates) ?></td>
                <td><?= $userRequestHeader->has('reason') ? $this->Html->link($userRequestHeader->reason->id, ['controller' => 'Reasons', 'action' => 'view', $userRequestHeader->reason->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userRequestHeader->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userRequestHeader->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userRequestHeader->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRequestHeader->id)]) ?>
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
