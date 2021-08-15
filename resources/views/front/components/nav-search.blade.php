<div class="categories-search-wrapper categories-search-wrapper2">
    {{-- <div class="all-categories">
        <div class="select-wrapper">
            <select class="select">
                <option value="">All Categories</option>
                <option value="">Smartphones </option>
                <option value="">Computers</option>
                <option value="">Laptops </option>
                <option value="">Camerea </option>
                <option value="">Watches</option>
                <option value="">Lights </option>
                <option value="">Air conditioner</option>
            </select>
        </div>
    </div> --}}
    <div class="categories-wrapper">
        <form action="{{ route('search.products') }}" method="GET">
            <input name="q" placeholder="Search Products..." type="text">
            <button type="submit"> Search </button>
        </form>
    </div>
</div>
