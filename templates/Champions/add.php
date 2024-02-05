<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Champion $champion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Champions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="champions form content">
            <?= $this->Form->create($champion) ?>
            <fieldset>
                <legend><?= __('Add Champion') ?></legend>
                <?php
                    echo $this->Form->control('nom');
                    echo $this->Form->input('resume', [
                        'type' => 'textarea',
                        'rows' => '1',
                        'cols' => '10',
                        'escape' => false
                    ]);
                    echo $this->Form->control('lane', [
                        'options' => $championslane,
                        'multiple' => true,
                        'type' => 'select']
                    );
                    // echo $this->Form->control('group_id', ['options' => $laneData]);
                    // echo $this->Form->control('field', ['type' => 'file']);
                    echo $this->Form->control('competences');
                    echo $this->Form->control('pp');
                    echo $this->Form->control('titre');
                    echo $this->Form->control('difficult');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
