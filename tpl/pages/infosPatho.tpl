<div class="content">
    {if isset($infosPatho)}
        <h1>{$infosPatho['patho']}</h1>
        <h2>Méridien</h2>
        {$infosPatho['meridien']}
        {if isset($symptomes)}
            <h2>Symptômes</h2>
            {foreach from=$symptomes item=symptome}
                {$symptome['desc']}<br>
            {/foreach}
        {/if}
    {/if}
</div>