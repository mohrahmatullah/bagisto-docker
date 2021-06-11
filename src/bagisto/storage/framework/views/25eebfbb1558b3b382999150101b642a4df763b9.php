<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('admin::app.promotions.cart-rules.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <?php $customer_group = request()->get('customer_group') ?: null; ?>
        <?php $channel = request()->get('channel') ?: null; ?>
        <div class="page-header">
            <div class="page-title">
                <h1><?php echo e(__('admin::app.promotions.cart-rules.title')); ?></h1>
            </div>

            <div class="page-action">
                <a href="<?php echo e(route('admin.cart-rules.create')); ?>" class="btn btn-lg btn-primary">
                    <?php echo e(__('admin::app.promotions.cart-rules.add-title')); ?>

                </a>
            </div>
        </div>

        <div class="page-content">
            <?php $cartRuleGrid = app('Webkul\Admin\DataGrids\CartRuleDataGrid'); ?>
            <?php echo $cartRuleGrid->render(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        function reloadPage(getVar, getVal) {
            let url = new URL(window.location.href);
            url.searchParams.set(getVar, getVal);

            window.location.href = url.href;
        }

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin::layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/bagisto/packages/Webkul/Admin/src/Providers/../Resources/views/marketing/promotions/cart-rules/index.blade.php ENDPATH**/ ?>