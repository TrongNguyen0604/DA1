<?php include_once ROOT_DIR . "views/admin/header.php" ?>

<div class="container">
<?php if ($message != '') : ?>
        <div class="mt-3 mb-3 alert alert-success">
            <?= $message ?>
        </div>
<?php endif ?>
<form action="<?= ADMIN_URL . '?ctl=updatedm' ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">Tên danh mục</label>
            <input type="text" name="cate_name" class="form-control" value="<?= $category['cate_name'] ?>">
        </div>

        <!-- id danh mục  -->
        <input type="hidden" name="id" value=" <?= $category['id'] ?>">
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>

<?php include_once ROOT_DIR . "views/admin/footer.php" ?>