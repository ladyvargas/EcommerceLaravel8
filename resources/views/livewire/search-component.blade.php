<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ url('/') }}" class="link">Inicio</a></li>
                <li class="item-link"><span>Buscar</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

{{--                <div class="banner-shop">--}}
{{--                    <a href="#" class="banner-link">--}}
{{--                        <figure><img src="{{ asset('assets/images/shop-banner.jpg') }}" alt=""></figure>--}}
{{--                    </a>--}}
{{--                </div>--}}

                <div class="wrap-shop-control">

                    <h1 class="shop-title">Digital y electrónica</h1>

                    <div class="wrap-right">

                        <div class="sort-item orderby ">
                            <select name="orderby" class="use-chosen" wire:model='sorting'>
                                <option value="menu_order" selected="selected">Clasificación por defecto</option>
                                <option value="date">Ordenar por novedad</option>
                                <option value="price">Ordenar por precio: de menor a mayor</option>
                                <option value="price-desc">Ordenar por precio: de mayor a menor</option>
                            </select>
                        </div>

                        <div class="sort-item product-per-page">
                            <select name="post-per-page" class="use-chosen" wire:model='pagesize'>
                                <option value="12" selected="selected">12 por página</option>
                                <option value="16">16 por página</option>
                                <option value="18">18 por página</option>
                                <option value="21">21 por página</option>
                                <option value="24">24 por página</option>
                                <option value="30">30 por página</option>
                                <option value="32">32 por página</option>
                            </select>
                        </div>

                        <div class="change-display-mode">
                            <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Cuadrículas</a>
                        </div>

                    </div>

                </div>
                <!--end wrap shop control-->
                @if(\App\Models\Product::count() > 0)
                <div class="row">

                    <ul class="product-list grid-products equal-container">
                        @foreach ($products as $product)
                        <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                            <div class="product product-style-3 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="{{ route('product.details', ['slug' => $product->slug]) }}" title="{{ $product->name }}">
                                        <figure><img src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="{{ $product->name }}"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="{{ route('product.details', ['slug' => $product->slug]) }}" class="product-name"><span>{{ $product->name }}</span></a>
                                    <div class="wrap-price"><span class="product-price">{{ $product->regular_price }}</span></div>
                                    <a class="btn add-to-cart" href="#" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})">Agregar</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                </div>
                @else
                    <p style="padding-top: 30px;">No Products</p>
                @endif
                <div class="wrap-pagination-info">
                    {{ $products->links() }}
                    {{-- <ul class="page-numbers">
                        <li><span class="page-number-item current">1</span></li>
                        <li><a class="page-number-item" href="#">2</a></li>
                        <li><a class="page-number-item" href="#">3</a></li>
                        <li><a class="page-number-item next-link" href="#">Next</a></li>
                    </ul>
                    <p class="result-count">Showing 1-8 of 12 result</p> --}}
                </div>
            </div>
            <!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget mercado-widget categories-widget">
                    <h2 class="widget-title">All Categories</h2>
                    <div class="widget-content">
                        <ul class="list-category">
                            @foreach ($categories as $category)
                            <li class="category-item">
                                <a href="{{ route('product.category', ['category_slug' => $category->slug]) }}" class="cate-link">{{ $category->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div><!-- Categories widget-->

                <div class="widget mercado-widget filter-widget brand-widget">
                    <h2 class="widget-title">Marcas</h2>
                    <div class="widget-content">
                        <ul class="list-style vertical-list list-limited" data-show="6">
                            <li class="list-item"><a class="filter-link active" href="#">Fashion Clothings</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Laptop Batteries</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Printer & Ink</a></li>
                            <li class="list-item"><a class="filter-link " href="#">CPUs & Prosecsors</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Sound & Speaker</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Shop Smartphone & Tablets</a></li>
                            <li class="list-item default-hiden"><a class="filter-link " href="#">Printer & Ink</a></li>
                            <li class="list-item default-hiden"><a class="filter-link " href="#">CPUs & Prosecsors</a>
                            </li>
                            <li class="list-item default-hiden"><a class="filter-link " href="#">Sound & Speaker</a>
                            </li>
                            <li class="list-item default-hiden"><a class="filter-link " href="#">Shop Smartphone &
                                    Tablets</a></li>
                            <li class="list-item"><a
                                    data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>'
                                    class="btn-control control-show-more" href="#">Mostrar más<i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div><!-- brand widget-->

                <div class="widget mercado-widget filter-widget price-filter">
                    <h2 class="widget-title">Precio</h2>
                    <div class="widget-content">
                        <div id="slider-range"></div>
                        <p>
                            <label for="amount">Precio:</label>
                            <input type="text" id="amount" readonly>
                            <button class="filter-submit">Filtro</button>
                        </p>
                    </div>
                </div><!-- Price-->

                <div class="widget mercado-widget filter-widget">
                    <h2 class="widget-title">Color</h2>
                    <div class="widget-content">
                        <ul class="list-style vertical-list has-count-index">
                            <li class="list-item"><a class="filter-link " href="#">Rojo <span>(217)</span></a></li>
                            <li class="list-item"><a class="filter-link " href="#">Amarillo <span>(179)</span></a></li>
                            <li class="list-item"><a class="filter-link " href="#">Negro <span>(79)</span></a></li>
                            <li class="list-item"><a class="filter-link " href="#">Azul <span>(283)</span></a></li>
                            <li class="list-item"><a class="filter-link " href="#">Verde <span>(116)</span></a></li>
                            <li class="list-item"><a class="filter-link " href="#">Rosa <span>(29)</span></a></li>
                        </ul>
                    </div>
                </div><!-- Color -->

                <div class="widget mercado-widget filter-widget">
                    <h2 class="widget-title">Tamaño</h2>
                    <div class="widget-content">
                        <ul class="list-style inline-round ">
                            <li class="list-item"><a class="filter-link active" href="#">s</a></li>
                            <li class="list-item"><a class="filter-link " href="#">M</a></li>
                            <li class="list-item"><a class="filter-link " href="#">l</a></li>
                            <li class="list-item"><a class="filter-link " href="#">xl</a></li>
                        </ul>
{{--                        <div class="widget-banner">--}}
{{--                            <figure><img src="{{ asset('assets/images/size-banner-widget.jpg') }}" width="270"--}}
{{--                                    height="331" alt="">--}}
{{--                            </figure>--}}
{{--                        </div>--}}
                    </div>
                </div><!-- Size -->

                <div class="widget mercado-widget widget-product">
                    <h2 class="widget-title">Productos Populares</h2>
                    <div class="widget-content">
                        <ul class="products">
                            @foreach ($popular_products as $p_product)
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="{{ route('product.details', ['slug' => $p_product->slug]) }}"
                                            title="{{ $p_product->name }}">
                                            <figure><img src="{{ asset('assets/images/products') }}/{{ $p_product->image }}" alt="{{ $p_product->name }}"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{ route('product.details', ['slug' => $p_product->slug]) }}" class="product-name"><span>{{ $p_product->name }}</span></a>
                                        <div class="wrap-price"><span class="product-price">{{ $p_product->regular_price }}</span></div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div><!-- brand widget-->

            </div>
            <!--end sitebar-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</main>
