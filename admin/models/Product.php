<?php 

if (!function_exists('listAllForProduct')) {
    function listAllForProduct() {
        try {
            $sql = "
                SELECT 
                    p.id            as p_id,
                    p.category_id   as p_category_id,
                    p.name          as p_name,
                    p.img_thumbnail as p_img_thumbnail,
                    p.overview      as p_overview,
                    p.price_regular as p_price_regular,
                    p.price_sale    as p_price_sale,
                    p.content       as p_content,
                    p.rate          as p_rate,
                    p.created_at    as p_created_at,
                    p.updated_at    as p_updated_at,
                    c.name          as c_name
                FROM products as p
                INNER JOIN categories as c ON c.id = p.category_id
                ORDER BY p_id DESC;
            ";
    
            $stmt = $GLOBALS['conn']->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            //debug($e);
        }
    }
}

if (!function_exists('showOneForProduct')) {
    function showOneForProduct($id) {
        try {
            $sql = "
                SELECT 
                    p.id            as p_id,
                    p.category_id   as p_category_id,
                    p.name     as p_name,
                    p.img_thumbnail         as p_img_thumbnail,
                    p.overview       as p_overview,
                    p.price_regular       as p_price_regular,
                    p.price_sale   as p_price_sale,
                    p.content        as p_content,
                    p.rate  as p_rate,
                    p.created_at    as p_created_at,
                    p.updated_at    as p_updated_at,
                    c.name          as c_name
                FROM products as p
                INNER JOIN categories   as c    ON c.id    = p.category_id
                WHERE 
                    p.id = :id 
                LIMIT 1
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            //debug($e);
        }
    }
}

