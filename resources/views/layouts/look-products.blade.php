<div class="content-bottom">
    <div class="line"></div>
    <div class="content-head__container">
        <div class="content-head__title-wrap">
            <div class="content-head__title-wrap__title bcg-title">Посмотрите наши товары</div>
        </div>
    </div>
    <div class="content-main__container">
        <div class="products-columns">
            @foreach($otherProducts as $product)
                <div class="products-columns__item">
                    <div class="products-columns__item__title-product">
                        <a href="{{$product->url}}" class="products-columns__item__title-product__link">{{$product->name}}</a></div>
                    <div class="products-columns__item__thumbnail"><a href="{{$product->url}}"
                                                                      class="products-columns__item__thumbnail__link"><img
                                src="{{$product->photo}}" alt="{{$product->name}}"
                                class="products-columns__item__thumbnail__img"></a></div>
                    <div class="products-columns__item__description"><span class="products-price">{{number_format($product->price,0)}} руб</span><a
                            href="#" class="__btn btn-blue addToCartBtn" data-product-id="{{$product->id}}">Купить</a></div>
                </div>
            @endforeach
        </div>
    </div>
</div>
