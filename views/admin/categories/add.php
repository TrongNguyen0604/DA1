<?php include_once ROOT_DIR . "views/admin/header.php" ?>

<div class="container">
<form action="<?= ADMIN_URL . '?ctl=storedm' ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">Tên danh mục</label>
            <input type="text" name="cate_name" class="form-control" id="">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </div>
    </form>
</div>

<?php include_once ROOT_DIR . "views/admin/footer.php" ?>