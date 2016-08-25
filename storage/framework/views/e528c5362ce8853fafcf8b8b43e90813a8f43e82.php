<?php $__env->startSection('content'); ?>
<section>
    <div class="login-container">
        <div id="output"></div>
        <h2>Acceder</h2>
        <div><img class="avatar" src="img/login/avatar.ico"></img></div>
        <div class="form-box">
            <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                        <input type="text"name="username" value="<?php echo e(old('username')); ?>" placeholder="Nombre de usuario">

                        <?php if($errors->has('username')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('username')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <input type="password" name="password" placeholder="Contraseña">

                        <?php if($errors->has('password')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>


                    <div>
                        <label>Remember me</label><input type="checkbox" name="remember" id="remember">
                    </div>
                        
                    <button type="submit" class="btn btn-info btn-block login">Acceder</button>
                    <a class="btn btn-link" href="<?php echo e(url('/register')); ?>">¿Eres nuevo?¿Quieres registrarte?</a>
                    <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">¿Has olvidado tu contraseña?</a>
            </form>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.senderism', ['loginStyle' => true], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>