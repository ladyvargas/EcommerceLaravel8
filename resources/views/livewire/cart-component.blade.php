<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ url('/') }}" class="link">Inicio</a></li>
                <li class="item-link"><span>Carrito</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <div class="wrap-iten-in-cart">
                @if(Session::has('success_message'))
                    <div class="alert alert-success">
                        <strong>Éxito</strong> {{Session::get('success_message')}}
                    </div>
                @endif
                @if(Cart::count() > 0)
                <h3 class="box-title">Nombre del producto</h3>
                <ul class="products-cart">
                    @foreach (Cart::content() as $item)
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="{{ asset('assets/images/products') }}/{{ $item->model->image }}" alt="{{ $item->model->name }}"></figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product" href="{{ route('product.details', ['slug' => $item->model->slug]) }}">{{ $item->model->name }}</a>
                        </div>
                        <div class="price-field produtc-price">
                            <p class="price">{{ $item->model->regular_price }}</p>
                        </div>
                        <div class="quantity">
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="{{ $item->qty }}" data-max="120" pattern="[0-9]*">
                                <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity({{ $item->rowId }})"></a>
                                <a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity({{ $item->rowId }})"></a>
                            </div>
                        </div>
                        <div class="price-field sub-total">
                            <p class="price">{{ $item->subtotal }}</p>
                        </div>
                        <div class="delete">
                            <a href="#" class="btn btn-delete" title="Remove selected item" wire:click.prevent="destroy({{ $item->rowId }})">
                                <span>Eliminar de su carrito</span>
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @else
                    <p>No tiene articulos en su carrito</p>
                @endif
            </div>

            <div class="summary">
                <div class="order-summary">
                    <h4 class="title-box">Resumen del pedido</h4>
                    <p class="summary-info"><span class="title">Subtotal</span><b class="index">$ {{ Cart::subtotal() }}</b></p>
                    <p class="summary-info"><span class="title">Impuesto</span><b class="index">$ {{ Cart::tax() }}</b></p>
                    <p class="summary-info"><span class="title">Envío</span><b class="index">gratuito</b></p>
                    <p class="summary-info total-info "><span class="title">Total</span><b class="index">{{ Cart::total() }}</b></p>
                </div>
                <div class="checkout-info">
                    <label class="checkbox-field">
                        <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>Tengo un código de promoción</span>
                    </label>
                    <a class="btn btn-checkout" href="/checkout">Comprueba</a>
                    <a class="link-to-shop" href="{{ url('/shop') }}">Seguir comprando<i class="fa fa-arrow-circle-right"
                            aria-hidden="true"></i></a>
                </div>
                <div class="update-clear">
                    <a class="btn btn-clear" href="#" wire:click.prevent="destroyAll()">Borrar</a>
                    <a class="btn btn-update" href="#">Actualizar</a>
                </div>
            </div>
                <!--End wrap-products-->
            </div>

        </div>
        <!--end main content area-->
    </div>
    <!--end container-->

</main>
