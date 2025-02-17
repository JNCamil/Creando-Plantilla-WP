<div class="comments">
    <h2>Comentarios</h2>

    <?php
    $args = array(
        'walker'            => null,
        'max_depth'         => '',
        'style'             => 'ul',
        'callback'          => null,
        'end-callback'      => null,
        'type'              => 'all',
        'page'              => '',
        'per_page'          => '',
        'avatar_size'       => 32,
        'reverse_top_level' => null,
        'reverse_children'  => '',
        'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
        'short_ping'        => false,   // @since 3.6
        'echo'              => true     // boolean, default is true
    );
    ?>

</div>


<?php 

  wp_list_comments($args, $comments);

  $comments_args = array(
    'label_submit' => 'Comentar',
    'title_reply' => 'Escriba una respuesta al comentario',
    'comment_notes_after' => '',
    'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun') . '</label><br/>
    <textarea id="comment" name="comment" aria-required="true"></textarea></p>',
  );
  
  comment_form($comments_args);




?>