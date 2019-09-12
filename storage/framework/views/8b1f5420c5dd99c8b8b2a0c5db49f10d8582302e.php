<!DOCTYPE html>
<html lang="en">
<head>

    <?php echo $__env->make('layout.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>
<body>

    <?php echo $__env->make('layout.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main role="main" class="container">

      <div class="starter-template">
        <div class="row">
           <div class="col-sm-8">
       			<?php echo $__env->yieldContent('content'); ?>
       		</div>
       	</div>
      </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<?php echo $__env->make('layout.partials.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

</body>
</html>
<?php /**PATH /opt/lampp/htdocs/crudLaravel/resources/views/layout/layout.blade.php ENDPATH**/ ?>