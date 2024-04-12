<h1>Danh Sách Bài Viết</h1>

<div style="display: flex; justify-content: center; align-items: center;">
    <div>
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
            <?php foreach ($posts as $post) : ?>
                <div class="post-entry-1">
                    <a href="<?= BASE_URL ?>?act=post-ct&id=<?= $post['id'] ?>"><img src="<?= BASE_URL . $post['img_thumnail'] ?>" alt="" style="width: 500px;"></a>
                    <div class="post-meta"><span class="date">
                            <?= $post['title'] ?>
                        </span> <span class="mx-1">&bullet;</span>
                        <span>
                            <?= $post['updated_at'] ?>
                        </span>
                    </div>
                    <h2><a href="<?= BASE_URL ?>?act=post-ct&id=<?= $post['id'] ?>">
                            <?= $post['title'] ?>
                        </a></h2>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<a href="http://localhost/Du_ANONE/#"><button style="background-color: black; color: white; height: 30px;">Quay Lại trang chủ</button></a>