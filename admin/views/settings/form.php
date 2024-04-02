<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Save
            </h6>
        </div>
        <div class="card-body">
            <form action="<?= BASE_URL_ADMIN . '?act=setting-save' ?>" method="POST">
                <table class="table" class="form-control">
                    <tr>
                        <th>Trường dữ liệu</th>
                        <th>Dữ liệu</th>
                    </tr>

                    <tr>
                        <td>Logo</td>
                        <td>
                            <input type="text" class="form-control" name="logo" value="<?= $settings['logo'] ?? null ?>">
                        </td>
                        <td>Overview</td>
                        <td>
                            <input type="text" class="form-control" name="over" value="<?= $settings['over'] ?? null ?>">
                        </td>
                        <td>Tiwter</td>
                        <td>
                            <input type="text" class="form-control" name="titer" value="<?= $settings['titer'] ?? null ?>">
                        </td>

                        <td>facebook</td>
                        <td>
                            <input type="text" class="form-control" name="fb" value="<?= $settings['fb'] ?? null ?>">
                        </td>

                        <td>Instafram</td>
                        <td>
                            <input type="text" class="form-control" name="inta" value="<?= $settings['inta'] ?? null ?>">
                        </td>
                    </tr>

                </table>

                <button type="submit" class="btn btn-success">Save</button>

                <a href="<?= BASE_URL_ADMIN ?>?act=posts" class="btn btn-danger">Back to list</a>

            </form>
        </div>
    </div>
</div>