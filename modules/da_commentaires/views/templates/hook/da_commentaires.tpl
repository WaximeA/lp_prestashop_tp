<div id="dacommentaires_block_home" class="block-da-commentaires">
    <h4>Welcome!</h4>
    <div class="block_content">
        <p>{l s='Hello !' mod='da_commentaires'},
            {if isset($da_commentaires_name) && $da_commentaires_name}
                {$da_commentaires_name}
            {else}
                World
            {/if}
            !
        </p>
        <ul>
            <li><a href="{$da_commentaires_link}" title="Click this link">{l s='Click Me !' mod='da_commentaires'}</a></li>
        </ul>
    </div>
</div>