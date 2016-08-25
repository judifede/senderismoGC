<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('bits.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <header>
        
    </header>
    <section id="cat_display">
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <ul class="collapsible" data-collapsible="expandable">
                        <li>
                          <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                          <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                        </li>
                        <li>
                          <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                          <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                        </li>
                        <li>
                          <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                          <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.foro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>