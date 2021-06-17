$(function () {
    var pag = 9;
    var sort = 'D';
    $('div.products-count a').click(function(event){
        event.preventDefault();
        $('a.products-actual-count').text($(this).text());
        pag = $(this).text();
        getProducts(pag, sort);
    });
    $('div#products-sort a').click(function(event){
        event.preventDefault();
        $('a.products-actual-sort').text($(this).text());
        sort = $(this).attr('id');
        getProducts(pag, sort);
    });
    $('a#filter-button').click(function(event)
    {
        event.preventDefault();
        pag=$('a#products-actual-count').text();
        getProducts(pag, sort);
    });

    function getProducts(paginate, sort)
    {
        const form = $('form.sidebar-filter').serialize();
        $.ajax
        ({
            method: "GET",
            url: '/',
            data: form + "&" + $.param({paginate: paginate, sort: sort})
        })
            .done(function(response)
            {
            $('div#products-wrapper').empty();
            $.each(response.data, function(index, product){
                const html = '<div class="col-6 col-md-6 col-lg-4 mb-3">' +
                '<div class="card h-100 border-0">' +
                    '    <div class="card-img-top">' +
                    '        <img src="' + getImage(product) + '" class="img-fluid mx-auto d-block" alt="Card image cap">' +
                    '    </div>' +
                    '    <div class="card-body text-center">' +                        
                    '        <h4 class="card-title">' +
                    '            <a href="/item/' + product.id + '" class=" font-weight-bold text-dark text-uppercase small">' + product.name+'</a>' +
                    '        </h4>' +
                    '        <h5 class="card-price small">' +
                    '            <i>' + product.price + 'PLN</i>' +
                    '        </h5>' +
                    '    </div>' +
                    '</div>' +
                    '</div>';
                $('div#products-wrapper').append(html);
                });

                $('span#results-count').text(response.resultsCount);
            });
    }

    function getImage(product)
    {
        if(!!product.image_path)
        {
            return storagePath + product.image_path;
        }
        else
        {
            return defaultImage;
        }
    }
});
