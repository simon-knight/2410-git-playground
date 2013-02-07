<?php



function abyline_posted_on() {
        $link= esc_url( get_permalink() );
        $title= esc_attr( get_the_title() );
        $time= esc_attr( get_the_time() );
        $dateGMT= esc_attr( get_the_date( 'c' ) );
        $date= esc_html( get_the_date() );
        $authorURL= esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );
        $author= esc_html( get_the_author() );
        echo ('<span class="date"><time class="entry-date" datetime="%3$s" pubdate>'.$date.'</time></a></span>');
    }




function replace_excerpt($content) {
return str_replace('[...]',
'…',
$content
);
}
add_filter('the_excerpt', 'replace_excerpt');