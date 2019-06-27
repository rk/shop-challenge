<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>

<main class="container">
    <h1 class="display-4">Products</h1>

    <nav class="navbar navbar-light bg-light mb-4">
        <form class="form-inline">
            <input class="form-control mr-2" name="search" type="search"
                   placeholder="Search" aria-label="Search"
                   value="{{ request('search') }}" />

            <select class="form-control" name="sort">
                <option value="">Sort By</option>
                <option>Title (A-Z)</option>
                <option>Title (Z-A)</option>
                <option>Price ($-$$$)</option>
                <option>Price ($$$-$)</option>
            </select>
        </form>
    </nav>

    <div class="card-deck flex-wrap">
        @foreach ($products as $product)
            <div class="card mb-3" style="flex-basis: 30%; flex-grow: 0;">
                <img class="card-img-top" src="https://via.placeholder.com/350x200" alt="placeholder image">
                <div class="card-body">
                    <h2 class="h5 card-title">{{ $product->title }}</h2>
                    <p class="card-text">
                        SKU: {{ $product->sku }}<br>
                        Price: ${{ number_format($product->price, 2) }}
                    </p>
                </div>
                <div class="card-footer">
                    @if ($product->stock > 0)
                        <small class="text-muted">In-Stock</small>
                    @else
                        <small class="text-danger">Out-of-Stock</small>
                    @endif
                </div>
            </div>
        @endforeach
    </div>

    {{ $products->links() }}
</main>

<script type="text/javascript">
    /**
     * Could be replaced by array.findIndex(fn), except for our policy of
     * supporting back to IE 9-10.
     *
     * @param {string[]} array
     * @param {RegExp} regex
     * @returns {number}
     */
    function matchingParamIndex(array, regex) {
        for (var i = 0, l = array.length; i < l; i++) {
            if (typeof array[i] === 'string' && array[i].match(regex)) {
                return i;
            }
        }

        return -1;
    }

    $('form').on('change', 'input[name="search"]', function () {
        // The query string split into an array of key=value
        var query = location.search.replace(/^\?/, '').split('&');
        // The new search parameter value
        var newParam = 'search=' + encodeURIComponent(this.value);
        // The previous index, if it exists.
        var oldIndex = matchingParamIndex(query, /^search=/);

        // Add the new search parameter or replace the former value
        if (oldIndex > -1) {
            query[oldIndex] = newParam;
        } else {
            query.push(newParam);
        }

        // Don't keep the current page, as results will differ
        location.search = '?' + query.filter(function (value) {
            return !value.match(/^page=/);
        }).join('&');
    });
</script>
</body>
</html>
