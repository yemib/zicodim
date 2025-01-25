

<?php $__env->startSection('title'); ?>
    Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div style="margin-top: 150px ;">

        <div class="navbar-header  navbar-left" title="Admin menu">


            <button style="background: rgba(139,110,110,1.00); float: left" type="button" class="navbar-toggle collapsed"
                data-toggle="collapse" data-target="#tutorNavbar1">
                <span style="color: white"> Admin Menu</span>
                <span class="sr-only">Toggle navigation</span>
                <span style="color: black" class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>


        </div>

        <div style="margin-bottom: 30px; max-width: 100%; padding: 0px;margin-left: 0px ; margin-right: 0px ; "
           >

            <div class="row" style="width: 100%;">



                <div class="col-sm-2  collapse navbar-collapse" id="tutorNavbar1"
                    style="background: <?php echo e(config('app.color')); ?>  ; color: rgba(255,255,255,1.00)">

                    <?php    function groupbutton($name , $drop1 , $drop2 , $addr1  , $addr2){    ?>

                    <div class="btn-group" role="group">
                        <button id="btnDropOne1" type="button" class="btn btn-default dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo e($name); ?> <span
                                class="caret"></span></button>
                        <ul class="dropdown-menu" aria-labelledby="btnDropOne1">

                            <li><a href="<?php echo e($addr1); ?>"><?php echo e($drop1); ?></a></li>

                            <li><a href="<?php echo e($addr2); ?>"><?php echo e($drop2); ?></a></li>

                        </ul>
                    </div>

                    <?php   } ?>


                    <div class="btn-group-vertical" style="width: 100%" role="group" aria-label="Vertical button group">

                        <!---  admin menu--->

                        <?php if(session('admin')): ?>
                            <?php echo $__env->make('admin_folder.admin_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>

                        <?php if(session('vendor')): ?>
                            <?php echo $__env->make('vendor.vendor_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>


                    </div>




                </div>






                <div class="col-sm-10" style=" overflow: auto; ">



                    <?php echo $__env->yieldContent('contenth'); ?>


                </div>



            </div>

        </div>

    </div>


    <?php echo $__env->make('admin_folder.script_function', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('article-ckeditor');
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\websites\Zicodim\resources\views/admin_dashboar.blade.php ENDPATH**/ ?>