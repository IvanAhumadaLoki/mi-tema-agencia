<article id="post-<?php the_ID(); ?>" <?php post_class('proyecto-card'); ?>>
    <div class="proyecto-thumbnail">
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('proyecto-thumb'); ?>
            </a>
        <?php else : ?>
            <div style="height:200px; background:#eee; display:flex; align-items:center; justify-content:center;">Sin Imagen</div>
        <?php endif; ?>
    </div>

    <div class="proyecto-info">
        <span class="tech-tag"><?php echo esc_html(get_field('tecnologias')); ?></span>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="proyecto-excerpt">
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="leer-mas">Ver detalles &rarr;</a>
    </div>
</article>