<div class="idols view">
    <h2><?php echo __('Idol'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($idol['Idol']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('EName'); ?></dt>
        <dd>
            <?php echo h($idol['Idol']['eName']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('JName'); ?></dt>
        <dd>
            <?php echo h($idol['Idol']['jName']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Age'); ?></dt>
        <dd>
            <?php echo h($idol['Idol']['age']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Height'); ?></dt>
        <dd>
            <?php echo h($idol['Idol']['height']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Weight'); ?></dt>
        <dd>
            <?php echo h($idol['Idol']['weight']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Birthday'); ?></dt>
        <dd>
            <?php echo h($idol['Idol']['birthday']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('BloodType'); ?></dt>
        <dd>
            <?php echo h($idol['Idol']['bloodType']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Bwh'); ?></dt>
        <dd>
            <?php echo h($idol['Idol']['bwh']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Hobbies'); ?></dt>
        <dd>
            <?php echo h($idol['Idol']['hobbies']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('WritingHand'); ?></dt>
        <dd>
            <?php echo h($idol['Idol']['writingHand']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Horoscope'); ?></dt>
        <dd>
            <?php echo h($idol['Idol']['horoscope']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Hometown'); ?></dt>
        <dd>
            <?php echo h($idol['Idol']['hometown']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Type'); ?></dt>
        <dd>
            <?php echo h($idol['Idol']['type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cv'); ?></dt>
        <dd>
            <?php echo h($idol['Idol']['cv']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Pic1'); ?></dt>
        <dd>
            <?php echo h($idol['Idol']['pic1']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Pic2'); ?></dt>
        <dd>
            <?php echo h($idol['Idol']['pic2']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Idol'), array('action' => 'edit', $idol['Idol']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Idol'), array('action' => 'delete', $idol['Idol']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $idol['Idol']['id']))); ?> </li>
        <li><?php echo $this->Html->link(__('List Idols'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Idol'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Cards'); ?></h3>
    <?php if (!empty($idol['Card'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Idol Id'); ?></th>
                <th><?php echo __('Event Id'); ?></th>
                <th><?php echo __('CardNumber'); ?></th>
                <th><?php echo __('EName'); ?></th>
                <th><?php echo __('JName'); ?></th>
                <th><?php echo __('Rarity'); ?></th>
                <th><?php echo __('Type'); ?></th>
                <th><?php echo __('MaxLvl'); ?></th>
                <th><?php echo __('AwkMaxLvl'); ?></th>
                <th><?php echo __('BaseLife'); ?></th>
                <th><?php echo __('BaseVocal'); ?></th>
                <th><?php echo __('BaseDance'); ?></th>
                <th><?php echo __('BaseVisual'); ?></th>
                <th><?php echo __('BaseMaxLife'); ?></th>
                <th><?php echo __('BaseMaxVocal'); ?></th>
                <th><?php echo __('BaseMaxDance'); ?></th>
                <th><?php echo __('BaseMaxVisual'); ?></th>
                <th><?php echo __('AwkBaseLife'); ?></th>
                <th><?php echo __('AwkBaseVocal'); ?></th>
                <th><?php echo __('AwkBaseDance'); ?></th>
                <th><?php echo __('AwkBaseVisual'); ?></th>
                <th><?php echo __('AwkMaxLife'); ?></th>
                <th><?php echo __('AwkMaxVocal'); ?></th>
                <th><?php echo __('AwkMaxDance'); ?></th>
                <th><?php echo __('AwkMaxVisual'); ?></th>
                <th><?php echo __('CenterSkillName'); ?></th>
                <th><?php echo __('CenterSkillText'); ?></th>
                <th><?php echo __('SpecialSkillType'); ?></th>
                <th><?php echo __('SpecialSkillText'); ?></th>
                <th><?php echo __('BaseArt'); ?></th>
                <th><?php echo __('AwkArt'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($idol['Card'] as $card): ?>
                <tr>
                    <td><?php echo $card['id']; ?></td>
                    <td><?php echo $card['idol_id']; ?></td>
                    <td><?php echo $card['event_id']; ?></td>
                    <td><?php echo $card['cardNumber']; ?></td>
                    <td><?php echo $card['eName']; ?></td>
                    <td><?php echo $card['jName']; ?></td>
                    <td><?php echo $card['rarity']; ?></td>
                    <td><?php echo $card['type']; ?></td>
                    <td><?php echo $card['maxLvl']; ?></td>
                    <td><?php echo $card['awkMaxLvl']; ?></td>
                    <td><?php echo $card['baseLife']; ?></td>
                    <td><?php echo $card['baseVocal']; ?></td>
                    <td><?php echo $card['baseDance']; ?></td>
                    <td><?php echo $card['baseVisual']; ?></td>
                    <td><?php echo $card['baseMaxLife']; ?></td>
                    <td><?php echo $card['baseMaxVocal']; ?></td>
                    <td><?php echo $card['baseMaxDance']; ?></td>
                    <td><?php echo $card['baseMaxVisual']; ?></td>
                    <td><?php echo $card['awkBaseLife']; ?></td>
                    <td><?php echo $card['awkBaseVocal']; ?></td>
                    <td><?php echo $card['awkBaseDance']; ?></td>
                    <td><?php echo $card['awkBaseVisual']; ?></td>
                    <td><?php echo $card['awkMaxLife']; ?></td>
                    <td><?php echo $card['awkMaxVocal']; ?></td>
                    <td><?php echo $card['awkMaxDance']; ?></td>
                    <td><?php echo $card['awkMaxVisual']; ?></td>
                    <td><?php echo $card['centerSkillName']; ?></td>
                    <td><?php echo $card['centerSkillText']; ?></td>
                    <td><?php echo $card['specialSkillType']; ?></td>
                    <td><?php echo $card['specialSkillText']; ?></td>
                    <td><?php echo $card['baseArt']; ?></td>
                    <td><?php echo $card['awkArt']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'cards', 'action' => 'view', $card['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'cards', 'action' => 'edit', $card['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cards', 'action' => 'delete', $card['id']), array('confirm' => __('Are you sure you want to delete # %s?', $card['id']))); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
