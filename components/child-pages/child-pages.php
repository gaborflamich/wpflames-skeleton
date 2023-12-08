<?php 
    global $id;
    $args = array('child_of' => $id);
    $child_pages = get_pages($args); 
?>

<div class="grid-3">
    <?php if (!empty($child_pages)): ?>
        <?php foreach ($child_pages as $key => $page_item): ?>
        <div class="card">
            <a class="card-link" href="<?php echo esc_url(get_permalink($page_item->ID)); ?>">
                <figure class="card-figure">
                    <span class="card-figure-overlay"></span>
                    <?php echo get_the_post_thumbnail($page_item->ID,'gallery'); ?>
                </figure>
                <div class="card-title"><?php echo $page_item->post_title ; ?></div>
            </a>
        </div>
        <?php endforeach ?>
    <?php endif ?>
</div>