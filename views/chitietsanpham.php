<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="display: flex; gap: 30px;">
        <div style="width: 50%; height: 300px;">
            <div>
                <img style="width: 100%; height: 700px;" src="<?= BASE_URL . $productq['img_thumbnail'] ?>">
            </div>
        </div>
        <div style="width: 50%; height: 300px;">
            <div>
                <h1 style="text-align: center;"><?= $productq['name'] ?></h1>
                <div>
                    <h3><?= $productq['overview'] ?></h3>
                    <h3><?= $productq['price_regular']?></h3>
                    <h3><?= $productq['price_sale'] ?></h3>  
                    <h3><?= $productq['content'] ?></h3>
                    <!-- <h3><?= $productq['rate'] ?></h3> -->
                </div>
                <div style="border: 1px solid; width: 100%; text-align: center;">
                <a style="text-decoration: none; font-size: 30px;" href="<?= BASE_URL . '?act=cart-add&productID=' . $productq['id'] . '&quantity=1' ?>" class="btn btn-primary">Add to cart</a>
                </div>
            </div>
        </div>
    </div>
    <!--bình luận và đánh giá sản phẩm-->
    <div style="margin-top: 500px; border: 1px solid; text-align: center;"> 
        <div>
            <h1>bình luận</h1>
        </div>
        <div style="border: 1px solid; width: 100%;">
            <form action="">
                <input style="width: 100%; height: 50px;"  type="text" placeholder="viết bình luận cảu bạn">
            </form>
        </div>
    </div>


    <!--sản phẩm thêm-->
    <div style="margin-top: 100px;">
        <div>
            <h1>Sản phẩm bạn có thể xem thêm</h1>
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
            <?php foreach ($products as $product) : ?>
                <?php if($product['id'] != $productq['id']){ ?>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <a href="<?= BASE_URL ?>?act=product-ct&id=<?= $product['id'] ?>">
                            <img class="card-img-top img-responsive" height="300px" src="<?= BASE_URL . $product['img_thumbnail'] ?>">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title"><?= $product['name'] ?></h4>
                            <p class="card-text"><?= $product['price_sale'] ?></p>
                            <p class="card-text"><?= $product['price_regular'] ?></p>
                            <a href="<?= BASE_URL . '?act=cart-add&productID=' . $product['id'] . '&quantity=1' ?>" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div style="background-color: blue; color: while; text-align: center;">
        <h1 style="color: while;">TG:  <a href="http://v.kuaishou.com//vKdQPt">Click vào đây</a></h1>
           
    </div>
</body>

</html>