<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flower $flower
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Flower'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="flower form large-9 medium-8 columns content">
    <?= $this->Form->create($flower) ?>
    <fieldset>
        <legend><?= __('Add Flower') ?></legend>
        <?php
            echo $this->Form->control('nume');
            echo $this->Form->control('culoare');
            echo $this->Form->control('marime');
            echo $this->Form->control('pret');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
