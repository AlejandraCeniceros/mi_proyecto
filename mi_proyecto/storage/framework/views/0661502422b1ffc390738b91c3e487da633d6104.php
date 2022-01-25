<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
</head>
<body>
    <h1>Lista de noticias</h1>
    <?php if(Session::has('exito')): ?>
        <p><?php echo e(Session::get('exito')); ?></p>
    <?php endif; ?>
    <?php if(Session::has('error')): ?>
        <p><?php echo e(Session::get('error')); ?></p>
    <?php endif; ?>
    
    <a href="<?php echo e(route('noticias.create')); ?>"> Nueva noticia</a>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $noticias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>                    
                    <td><?php echo e($noticia->titulo); ?></td>
                    <td><?php echo e($noticia->autor); ?></td>
                    <td><?php echo e($noticia->fecha); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH /Users/ulsa/Desktop/mi_proyecto/mi_proyecto/resources/views/noticias/index.blade.php ENDPATH**/ ?>