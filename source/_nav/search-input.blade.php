<button
    type="button"
    class="search-toggle"
    title="Start searching"
    onclick="searchInput.toggle()"
>
    <img src="/assets/img/magnifying-glass.svg" alt="search icon">
</button>

<div id="js-search-input" class="docsearch-input__wrapper">
    <label for="search" class="screen-reader-text">Search</label>

    <input
        id="docsearch-input"
        class="docsearch-input"
        name="docsearch"
        type="text"
        placeholder="Search (press / to focus)"
    >

    <button onclick="searchInput.toggle()">&times;</button>
</div>

@push('scripts')
    @if ($page->docsearchApiKey && $page->docsearchIndexName)
        <script type="text/javascript">
            docsearch({
                apiKey: '{{ $page->docsearchApiKey }}',
                indexName: '{{ $page->docsearchIndexName }}',
                inputSelector: '#docsearch-input',
                debug: false
            })

            const searchInput = {
                toggle() {
                    const menu = document.getElementById('js-search-input')
                    menu.style.display = menu.style.display !== 'block' ? 'block' : 'none'
                    document.getElementById('docsearch-input').focus()
                }
            }
        </script>
    @endif
@endpush
