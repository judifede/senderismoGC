<?php $__env->startSection('content'); ?>
<section>
    <div class="login-container">
        <div id="output"></div>
        <h2>Registrarse</h2>
        <div><img class="avatar" src="img/login/avatar.ico"></img></div>
        <div class="form-box">
            <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                <?php echo csrf_field(); ?>

                    <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                        <input type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>" placeholder="Nombre usuario">

                        <?php if($errors->has('username')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('username')); ?></strong>
                            </span>
                        <?php endif; ?>
                        </div>

                    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Dirección e-mail">

                        <?php if($errors->has('email')): ?>
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        <?php endif; ?>
                    </div>


                    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña">

                        <?php if($errors->has('password')): ?>
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        <?php endif; ?>
                    </div> 
                        
                    <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña">

                        <?php if($errors->has('password_confirmation')): ?>
                            <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                        <?php endif; ?>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-info btn-block login">Registrar</button>
                    </div>
            </form>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.senderism', ['loginStyle' => true], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>