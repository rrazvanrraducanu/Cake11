<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flower[]|\Cake\Collection\CollectionInterface $flowers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Flower'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="flowers index large-9 medium-8 columns content">
    <h3><?= __('Flowers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nume') ?></th>
                <th scope="col"><?= $this->Paginator->sort('culoare') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marime') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pret') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flowers as $flower): ?>
            <tr>
                <td><?= $this->Number->format($flower->id) ?></td>
                <td><?= h($flower->nume) ?></td>
                <td><?= h($flower->culoare) ?></td>
                <td><?= h($flower->marime) ?></td>
                <td><?= $this->Number->format($flower->pret) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $flower->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flower->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flower->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flower->id)]) ?>
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
