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
                        <h3>Update Student with Image <a href="<?php echo e(route('student.all')); ?>"
                                class="btn btn-danger float-end">BACK</a></h3>

                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('student.update', ['id'=>$student->id])); ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <label for="">Họ tên:</label>
                                <input type="text" name="ten" id="" value="<?php echo e($student->ten); ?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email:</label>
                                <input type="text" name="email" id="" class="form-control" value="<?php echo e($student->email); ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Lớp:</label>
                                <input type="text" name="lop" id="" class="form-control" value="<?php echo e($student->lop); ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Ảnh đại diện:</label>
                                <input type="file" name="anhdaidien" id="" class="form-control">
                                <img src="<?php echo e(asset('uploads/students/'.$student->anhdaidien)); ?>" width="70px"
                                    height="70px" alt="Anh dai dien" />
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH D:\@manguonPHP\Laravel_DEMO\laravelcrud\resources\views/student/edit.blade.php ENDPATH**/ ?>