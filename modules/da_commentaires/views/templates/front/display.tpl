{extends file='page.tpl'}

{block name="page_content"}
    <h1>{l s='Statistiques !' mod='da_commentaires'}</h1>
    {if $opt1 == true}
        <h2>{l s='Display statistics of products' mod='da_commentaires'  } </h2>
        <p>{l s='There is %d prodcuts on the website' sprintf=$nbProducts mod='da_commentaires'  } </p>
        <canvas id="myChart" width="400" height="400"></canvas>
    {else}
        L'option 1 est inactive
    {/if}

    {if $opt2 == true}
        <h2>{l s='Display statistics of customers' mod='da_commentaires'  } </h2>
        L'option 2 est activée
    {else}
        L'option 2 est inactive
    {/if}

    {if $opt3 == true}
        <h2>{l s='Display statistics of manufacturers' mod='da_commentaires'  } </h2>
        L'option 3 est activée
    {else}
        L'option 3 est inactive
    {/if}
{/block}