<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(session('status')): ?>
                <h5 class="alert alert-success"><?php echo e(session('status')); ?></h5>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header">
                        <h3>Laravel CRUD with Image <a href="<?php echo e(route('student.add')); ?>"
                                class="btn btn-primary float-end">Thêm sinh viên</a></h3>

                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Lớp</th>
                                <th>Ảnh</th>
                                <th>Thao tác</th>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($student->id); ?></td>
                                    <td><?php echo e($student->ten); ?></td>
                                    <td><?php echo e($student->email); ?></td>
                                    <td><?php echo e($student->lop); ?></td>
                                    <td><?php echo e($student->lop); ?></td>
                                    <td><img src="<?php echo e(asset('uploads/students/'.$student->anhdaidien)); ?>" width="70px"
                                            height="70px" alt="Anh dai dien" /></td>
                                    <td>
                                        <a href="<?php echo e(route('student.edit', ['id' => $student->id])); ?>"
                                            class="btn btn-primary">Edit</a>
                                        <!-- <a href="<?php echo e(route('student.delete', ['id' => $student->id])); ?>"
                                            class="btn btn-danger">Delete</a> -->
                                    </td>
                                    <td>
                                        <form action="<?php echo e(route('student.delete', ['id'=>$student->id])); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH D:\@manguonPHP\Laravel_DEMO\laravelcrud\resources\views/student/index.blade.php ENDPATH**/ ?>