<div class="panel-table card-body pt-0 pl-0 pr-0">

    <table <?php echo $attributes; ?>>
        <colgroup>
            <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <col width="<?php echo $column->getWidth(); ?>"/>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </colgroup>

        <thead>
        <tr>
            <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <th <?php echo $column->getHeader()->htmlAttributesToString(); ?>>
                    <?php echo $column->getHeader()->render(); ?>

                </th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tr>
        </thead>

        <?php echo $__env->yieldContent('table.header'); ?>
        <tbody>
        <?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $column->setModel($model);

                        if ($column instanceof \SleepingOwl\Admin\Display\Column\Control) {
                            $column->initialize();
                        }
                    ?>

                    <td v-pre>
                        <?php echo $column->render(); ?>

                    </td>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

        <?php echo $__env->yieldContent('table.footer'); ?>
    </table>

</div>
<?php if(!is_null($pagination)): ?>
    <div class="panel-footer">
        <?php echo $pagination; ?>

    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/display/extensions/columns.blade.php ENDPATH**/ ?>