

<?php $__env->startSection('contenth'); ?>


<?php echo $__env->make('admin_folder.upload_style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h2>Add Product </h2>

<?php
    use App\add_category;
    $parent = add_category::all();
    
    ?>

<div align="center">
    <div align="left" style="padding: 20px  ; width: 80% ">

        <?php echo $__env->make('layouts.error_code', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


   <!--   id="Form1" --->
        <form  method="post" action="/add_product" enctype="multipart/form-data">

            <?php echo e(csrf_field()); ?>

            <label>Name</label>
            <input required value="<?php if(isset($edit_list)): ?> <?php echo e($edit_list->name); ?> <?php endif; ?>" name="name"
                class="form-control" />


            <label>Description</label>

            <textarea <?php if(session('admin')): ?> id="article-ckeditor" <?php endif; ?> required name="description"
                class="form-control">
                    <?php if(isset($edit_list)): ?>
<?php echo e($edit_list->description); ?>

<?php endif; ?>
                </textarea>





            


            


            <?php
                
                $label = 'Upload  Image';
                $name = 'pictures';
                
                imagecontainer($label, $name, $multiple = true, 1);
                ?>







            <div class="col-sm-12">


                <label> <strong>Category</strong> </label>

                <select name="category" class="form-control">


                    <?php if(isset($edit_list)): ?>
                    <?php // check for the id period
                            
                            $categ = App\add_category::find($edit_list->category);
                            ?>
                    <option value="<?php echo e($categ->id); ?>"> <?php echo e($categ->name); ?> </option>
                    <?php endif; ?>

                    <?php $__currentLoopData = $parent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($parent->id); ?>"> <?php echo e($parent->name); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </select>






                <br />


                <input type="hidden" name="pickup" value="yes" />
                <!--Pick Up Available -->

                <br />


                <?php if(session('admin')): ?>
                <input id="public_status" type="checkbox" name="status" value="public" /> <label for="public_status">
                    &nbsp; Make Public </label>
                <?php endif; ?>
                <br />


                <h3 class="text-danger">
                    <?php if(isset($errors)): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($error); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>


                    <?php if(session('error_upload')): ?>
                    <?php echo e(session('error_upload')); ?>

                    <?php endif; ?>
                </h3>



                <div id="uploadingform1">
                    <input id="" class="btn btn-primary" type="Submit" value="Save" />

                </div>

            </div>


        </form>
    </div>

</div>

<?php echo $__env->make('admin_folder.upload_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_dashboar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/zicodim/resources/views/admin_folder/add_product.blade.php ENDPATH**/ ?>