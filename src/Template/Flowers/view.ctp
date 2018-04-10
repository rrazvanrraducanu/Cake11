<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flower $flower
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Flower'), ['action' => 'edit', $flower->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Flower'), ['action' => 'delete', $flower->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flower->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Flowers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flower'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="flowers view large-9 medium-8 columns content">
    <h3><?= h($flower->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nume') ?></th>
            <td><?= h($flower->nume) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Culoare') ?></th>
            <td><?= h($flower->culoare) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marime') ?></th>
            <td><?= h($flower->marime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($flower->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pret') ?></th>
            <td><?= $this->Number->format($flower->pret) ?></td>
        </tr>
    </table>
</div>
