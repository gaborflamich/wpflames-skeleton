<div class="faq-wrapper">

    <?php if( have_rows('repeater_faq', 'option') ): ?>
        <?php while( have_rows('repeater_faq', 'option') ): the_row(); ?>

        <?php if( have_rows('group_faq', 'option') ): ?>
            <?php while( have_rows('group_faq', 'option') ): the_row(); ?>

            <?  $title = get_sub_field('title', 'option'); 
                $text = get_sub_field('text', 'option'); 
            ?>
            <div class="faq-item">
                <button class="accordion"><?= $title; ?></button>
                <div class="panel"><p><?= $text; ?></p></div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>
		
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>