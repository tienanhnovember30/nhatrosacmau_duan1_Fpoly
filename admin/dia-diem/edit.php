<div class="col-md-12 pt-5">

    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Chỉnh sửa loại hàng</h3>
        </div>
        <div class="card-body">
            <form role="form" method="POST" action="../dia-diem/index.php?btn_edit">
                <div class="row">
                    <div class="col-sm-6">
                        <label>#Id</label>
                        <input type="text" class="form-control" name="id" readonly value="<?php echo $info['id_diadiem'] ?>">

                        <div class="form-group">
                            <label>Loại hàng</label>
                            <input type="text" class="form-control" name="ten_dd" value="<?php echo $info['ten_diadiem'] ?>">

                        </div>
                    </div>

                </div>
                <input class="btn btn-primary" onclick="return confirm('Bạn có chắc chắn muốn sửa?')" name="btn_edit" type="submit" value="Sửa">
            </form>
        </div>
    </div>

</div>