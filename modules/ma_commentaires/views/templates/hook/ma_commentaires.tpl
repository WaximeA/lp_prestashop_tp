<div class="block-ma-commentaires">
    <h4>Commentaires : </h4>
    <div id="display_commentaires"></div>
    <h4>Publier un commentaire : </h4>
    <form action="{$url}" method="post">
        <label for="">Nom d'utilisateur :</label>
        <input type="text" name="username" value="" placeholder="Entrez votre nom d'utilisateur ici"><br>
        <label for="">Commentaire :</label>
        <input type="text" name="comment_message" value="" placeholder="Votre commentaire"><br><br>
        <input type="submit" value="Envoyer" name="comment_submit_form">
    </form>
</div>
