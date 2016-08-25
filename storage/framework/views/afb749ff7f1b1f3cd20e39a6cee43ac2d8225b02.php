<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <table class="table">
            <tr>
                <th>Post</th>
            </tr>
            <tbbody>
                <?php foreach($posts as $post): ?>
                <tr>
                    <td><?php echo e($post->post); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbbody>
        </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.senderism', ['comunidadStyle' => true], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>