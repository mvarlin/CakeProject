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
            <?= $this->Html->link(__('Edit Champion'), ['action' => 'edit', $champion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Champion'), ['action' => 'delete', $champion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $champion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Champions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Champion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="champions view content">
            <h3><?= h($champion->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($champion->nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Resume') ?></th>
                    <td><?= h($champion->resume) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lane') ?></th>
                    <td><?= h($champion->lane) ?></td>
                </tr>
                <tr>
                    <th><?= __('Competences') ?></th>
                    <td><?= h($champion->competences) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pp') ?></th>
                    <td><?= h($champion->pp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Titre') ?></th>
                    <td><?= h($champion->titre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Difficult') ?></th>
                    <td><?= h($champion->difficult) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($champion->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
