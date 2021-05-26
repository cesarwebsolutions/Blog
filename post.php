<?php 
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit dolor vero perferendis rerum id earum, fuga harum aperiam voluptate, quod aspernatur eos aliquam temporibus recusandae laudantium veniam accusantium amet commodi.
            Ea unde dolore praesentium. Quos officia doloribus sapiente maiores fugiat ipsa ea asperiores nostrum voluptatibus, accusamus ipsam esse assumenda quisquam aliquid ad dolores reprehenderit! Optio sequi vitae iste dicta facere.
            Placeat doloremque modi assumenda tempore tempora dolorum, ipsum, non eveniet sapiente atque perspiciatis! Expedita iure nemo debitis ratione repudiandae magnam voluptatibus, nam ut harum voluptas quam? Sint omnis repellat inventore?
            Aperiam adipisci necessitatibus ex minus incidunt laborum, dolorum totam officia omnis, qui est. Labore, veritatis quaerat error nemo debitis eligendi voluptatum iusto quidem nostrum dicta harum rem natus quisquam amet.
            Amet, enim ducimus laborum similique error quisquam aspernatur, hic porro debitis qui itaque vel, quos voluptatem ipsa nesciunt magnam praesentium perferendis dolores beatae? Dicta sunt incidunt obcaecati illum deserunt placeat?</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit dolor vero perferendis rerum id earum, fuga harum aperiam voluptate, quod aspernatur eos aliquam temporibus recusandae laudantium veniam accusantium amet commodi.
            Ea unde dolore praesentium. Quos officia doloribus sapiente maiores fugiat ipsa ea asperiores nostrum voluptatibus, accusamus ipsam esse assumenda quisquam aliquid ad dolores reprehenderit! Optio sequi vitae iste dicta facere.
            Placeat doloremque modi assumenda tempore tempora dolorum, ipsum, non eveniet sapiente atque perspiciatis! Expedita iure nemo debitis ratione repudiandae magnam voluptatibus, nam ut harum voluptas quam? Sint omnis repellat inventore?
            Aperiam adipisci necessitatibus ex minus incidunt laborum, dolorum totam officia omnis, qui est. Labore, veritatis quaerat error nemo debitis eligendi voluptatum iusto quidem nostrum dicta harum rem natus quisquam amet.
            Amet, enim ducimus laborum similique error quisquam aspernatur, hic porro debitis qui itaque vel, quos voluptatem ipsa nesciunt magnam praesentium perferendis dolores beatae? Dicta sunt incidunt obcaecati illum deserunt placeat?</p>
        </div>
    <aside id="nav-container">
            <h3 id="tag-title">Tags</h3>
                <ul id="tag-list">
                    <?php foreach($currentPost['tags'] as $tag): ?>
                        <li><a href="#"><?= $tag ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <h3 id="categories-title">Categorias</h3>
                <ul id="categories-list">
                    <?php foreach($categories as $category): ?>
                        <li><a href="#"><?= $category ?></a></li>
                    <?php endforeach; ?>
                </ul>
        </aside>
    </main>
<?php 
include_once("templates/footer.php")
?>