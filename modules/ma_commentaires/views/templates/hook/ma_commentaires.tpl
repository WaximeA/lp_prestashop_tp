<!-- MA-COMMENTAIRES -->
    <div class="tabs block-ma-commentaires">
        <h2>Ajoutez un commentaire</h2>
        <form action="{$url}" method="post">
            <div class="form-group">
                <input type="text" name="username" value="" required="required">
                <label class="control-label" for="input">Username</label><i class="bar"></i>
            </div>
            <div class="form-group">
                <textarea  name="comment_message" value="" required="required"></textarea>
                <label class="control-label" for="textarea">Your comment</label><i class="bar"></i>
            </div>
            <div class="button-container">
                <button type="submit" name="comment_submit_form" class="comment-button"><span>Comment</span></button>
            </div>
        </form>
        <div id="display_commentaires">
            {foreach from=$all_comments key=key item=comment}
                <ul>
                    <li>{$comment.username}</li>
                    <li>{$comment.comment_message}</li>
                    <li>{$comment.date_add|date_format:"%d %B %T"}</li>
                </ul>
            {/foreach}
        </div>
    </div>
<!-- / MA-COMMENTAIRES -->

