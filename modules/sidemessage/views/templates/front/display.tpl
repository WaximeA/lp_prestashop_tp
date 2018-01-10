{extends file='page.tpl'}
{block name="page_content"}

    Welcome  {$user}!
    l'ID du dernier produit : {$lastproductid}

    <canvas id="myChart" width="400" height="400" style="border: 1px solid black"></canvas>
{/block}

