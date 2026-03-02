<article id="post-<?php the_ID(); ?>" <?php post_class('proyecto-card'); ?>>
    <div class="proyecto-thumbnail">
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium_large'); ?>
            </a>
        <?php else : ?>
            <div class="no-image">Sin imagen</div>
        <?php endif; ?>
    </div>

    <div class="proyecto-info">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        
        <?php 
        $tecnologias = get_field('tecnologias');
        if($tecnologias): ?>
            <span class="tech-tag"><?php echo esc_html($tecnologias); ?></span>
        <?php endif; ?>

        <div class="proyecto-excerpt">
            <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
        </div>

        <a href="<?php the_permalink(); ?>" class="leer-mas">Ver Proyecto &rarr;</a>
    </div>
</article>