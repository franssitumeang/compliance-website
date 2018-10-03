
<div class="userRequestHeaders form large-9 medium-8 columns content">
    <?= $this->Form->create($userRequestHeader) ?>
    <fieldset>
        <legend><?= __('Add User Request Header') ?></legend>
        <?php
            echo $this->Form->control('user_id');
            echo $this->Form->control('status');
            echo $this->Form->control('request_dates');
            echo $this->Form->control('reasonsName', ['options' => $reasons]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
