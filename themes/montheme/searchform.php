<form class="search-bar" action="<?= esc_url(home_url('/'))?>">
    <input type="text" name="s" placeholder="Recherche" value="<?= get_search_query() ?>">
    <button type="submit">Envoyer</button>
</form>