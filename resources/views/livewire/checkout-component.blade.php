<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">Inicio</a></li>
                <li class="item-link"><span>Comprobación</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <div class="wrap-address-billing">
                <h3 class="box-title">Dirección de Envio</h3>
                <form action='/contact' method="POST" name="frm-billing">
                    <p class="row-in-form">
                        <label for="fname">Nombre<span>*</span></label>
                        <input id="fname" type="text" name="fname" value="" placeholder="Nombre">
                    </p>
                    <p class="row-in-form">
                        <label for="lname">Apellido<span>*</span></label>
                        <input id="lname" type="text" name="lname" value="" placeholder="Apellido">
                    </p>
                    <p class="row-in-form">
                        <label for="email">Correo:</label>
                        <input id="email" type="email" name="email" value="" placeholder="Correo">
                    </p>
                    <p class="row-in-form">
                        <label for="phone">Número<span>*</span></label>
                        <input id="phone" type="number" name="phone" value="" placeholder="formato de 10 dígitos">
                    </p>
                    <p class="row-in-form">
                        <label for="add">Direccion:</label>
                        <input id="add" type="text" name="add" value="" placeholder="Calle en número de apartamento">
                    </p>
                    <p class="row-in-form">
                        <label for="country">País<span>*</span></label>
                        <input id="country" type="text" name="country" value="" placeholder="Ecuador">
                    </p>
                    <p class="row-in-form">
                        <label for="zip-code">Codigo Postal / ZIP:</label>
                        <input id="zip-code" type="number" name="zip-code" value="" placeholder="Codigo Posta">
                    </p>
                    <p class="row-in-form">
                        <label for="city">Ciudad<span>*</span></label>
                        <input id="city" type="text" name="city" value="" placeholder="Ciudad">
                    </p>
                    {{--                    <p class="row-in-form fill-wife">--}}
                    {{--                        <label class="checkbox-field">--}}
                    {{--                            <input name="create-account" id="create-account" value="forever" type="checkbox">--}}
                    {{--                            <span>Create an account?</span>--}}
                    {{--                        </label>--}}
                    {{--                        <label class="checkbox-field">--}}
                    {{--                            <input name="different-add" id="different-add" value="forever" type="checkbox">--}}
                    {{--                            <span>Ship to a different address?</span>--}}
                    {{--                        </label>--}}
                    {{--                    </p>--}}
                </form>
            </div>
            <div class="summary summary-checkout">
                <div class="summary-item payment-method">
                    <h4 class="title-box">Método de PAgo</h4>
                    <p class="summary-info"><span class="title">Cheque</span></p>
                    <p class="summary-info"><span class="title">Tarjeta de crédito</span></p>
                    <div class="choose-payment-methods">
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-bank" value="bank" type="radio">
                            <span>Transferencia bancaria directa</span>
                            <span class="payment-desc">Pero la mayoría ha sufrido alteración de alguna forma, por
                                 humor inyectado o palabras aleatorias que no parecen ni un poco creíbles</span>
                        </label>
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-visa" value="visa" type="radio">
                            <span>visa</span>
                            <span class="payment-desc">Hay muchas variaciones de pasajes de Lorem Ipsum
                                 disponible</span>
                        </label>
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
                            <span>Paypal</span>
                            <span class="payment-desc">Puedes pagar con tu crédito</span>
                            <span class="payment-desc">tarjeta si no tienes cuenta paypal</span>
                        </label>
                    </div>
                    <p class="summary-info grand-total"><span>Total</span> <span
                            class="grand-total-price">{{ Cart::total() }}</span></p>
                    <a href="#" wire:click.prevent="shoppingCart()" class="btn btn-medium" >Realice su orden ahora</a>
                </div>
                <div class="summary-item shipping-method">
                    <h4 class="title-box f-title">Método de envío</h4>
                    <p class="summary-info"><span class="title">Tarifa plana</span></p>
                    <p class="summary-info"><span class="title">Fijo $50.00</span></p>
                    {{--                    <h4 class="title-box">Códigos de descuento</h4>--}}
                    {{--                    <p class="row-in-form">--}}
                    {{--                        <label for="coupon-code">Enter Your Coupon code:</label>--}}
                    {{--                        <input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">--}}
                    {{--                    </p>--}}
                    {{--                    <a href="#" class="btn btn-small">Apply</a>--}}
                </div>
            </div>
            <!--End wrap-products-->
        </div>

    </div>
    <!--end main content area-->
    </div>
    <!--end container-->

</main>
