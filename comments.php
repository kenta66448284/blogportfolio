<div class="comment">
    <?php if( have_comments() ): //コメントがあったらコメントリストを表示する ?>
    <h3 class="widget_title">comment</h3>
    <ol class="commets-list">
        <?php wp_list_comments( 'avatar_size=80' ); ?>
    </ol>
    <?php endif; ?>
        <?php $args = array(
        'title_reply' => 'コメントをするぅ',
        'label_submit' => 'GO!!!'
        );
        comment_form( $args ); ?>
</div>