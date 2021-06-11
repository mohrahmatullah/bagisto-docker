<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('admin::app.promotions.catalog-rules.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1><?php echo e(__('admin::app.promotions.catalog-rules.title')); ?></h1>
            </div>

            <div class="page-action">
                <a href="<?php echo e(route('admin.catalog-rules.create')); ?>" class="btn btn-lg btn-primary">
                    <?php echo e(__('admin::app.promotions.catalog-rules.add-title')); ?>

                </a>
            </div>
        </div>

        <div class="page-content">
            <?php $catalogRuleGrid = app('Webkul\Admin\DataGrids\CatalogRuleDataGrid'); ?>
            <?php echo $catalogRuleGrid->render(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin::layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/bagisto/packages/Webkul/Admin/src/Providers/../Resources/views/marketing/promotions/catalog-rules/index.blade.php ENDPATH**/ ?>