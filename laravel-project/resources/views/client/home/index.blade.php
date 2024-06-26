@extends('client.layouts.app')
@section('title', 'Home')
@section('style')
    <link rel="stylesheet" href="{{ asset('client/asset/css/HomePage.css') }}">
    <link rel="stylesheet" href="{{ asset('client/asset/css/Product-style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/asset/css/ProductInfo-style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/asset/css/quickview.css') }}">
    <link rel="stylesheet" href="{{ asset('client/asset/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('client/asset/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('client/asset/css/slider.css') }}">
@endsection
@section('content')
    <!-- Khung ảnh -->
    <section class="section awe-section-1">
        <div class="section_slider clearfix">
            <div class=" container py-2 ">

                <div class="home-slider slick-initialized slick-slider slick-dotted" role="toolbar"><button
                        type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous"
                        role="button" style="display: block;">Previous</button>

                    <div aria-live="polite" class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 2400px;" role="listbox">
                            <div class="items text-center slick-slide" data-color="#ffffff" data-slick-index="0"
                                aria-hidden="true"
                                style="width: 1200px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;"
                                tabindex="-1" role="option" aria-describedby="slick-slide00">
                                <a href="/krush65" title="Krush65" tabindex="-1">
                                    <picture>
                                        <source media="(max-width: 480px)"
                                            srcset="//bizweb.dktcdn.net/thumb/large/100/484/752/themes/920128/assets/slider_1.jpg?1714359361508">
                                        <img class=" img-fluid mx-auto" decoding="async"
                                            src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/slider_1.jpg?1714359361508"
                                            width="1920" height="775" alt="Krush65">
                                    </picture>
                                </a>
                            </div>
                            <div class="items text-center slick-slide slick-current slick-active" data-color=""
                                data-slick-index="1" aria-hidden="false"
                                style="width: 1200px; position: relative; left: -1200px; top: 0px; z-index: 999; opacity: 1;"
                                tabindex="-1" role="option" aria-describedby="slick-slide01">
                                <a href="/protagonist" title="Protagonist keyboard kit" tabindex="0">
                                    <picture>
                                        <source media="(max-width: 480px)"
                                            srcset="//bizweb.dktcdn.net/thumb/large/100/484/752/themes/920128/assets/slider_2.jpg?1714359361508">
                                        <img class=" img-fluid mx-auto" decoding="async"
                                            src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/slider_2.jpg?1714359361508"
                                            width="1920" height="775" alt="Protagonist keyboard kit">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>

                    <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next"
                        role="button" style="display: block;">Next</button>
                    <ul class="slick-dots" style="display: flex;" role="tablist">
                        <li class="" aria-hidden="true" role="presentation" aria-selected="true"
                            aria-controls="navigation00" id="slick-slide00"><button type="button" data-role="none"
                                role="button" tabindex="0">1</button></li>
                        <li aria-hidden="false" role="presentation" aria-selected="false"
                            aria-controls="navigation01" id="slick-slide01" class="slick-active"><button
                                type="button" data-role="none" role="button" tabindex="0">2</button></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- KHUNG SP INSTOCK-->
    <section class="section awe-section-4">
        <section class="section_product_top section">
            <div class="container border-0">

                <div
                    class="title_module_main heading-bar e-tabs  d-flex align-items-center flex-wrap heading-style1 justify-content-around">
                    <h2 class="heading-bar__title">Instock - Hàng có sẵn</h2>

                    <ul class="tabs tabs-title list-unstyled  m-0 mt-2 tabs-group d-flex align-items-center">

                        <li class="ega-small tab-link link current" data-tab="product_top_1-tab-1">
                            Bàn phím cơ
                        </li>

                        <li class="ega-small tab-link link ml-4  " data-tab="product_top_1-tab-2">
                            Sản phẩm hot
                        </li>

                        <li class="ega-small tab-link link ml-4  " data-tab="product_top_1-tab-3">
                            Sản phẩm mới
                        </li>
                    </ul>
                </div>
                <div class="e-tabs">
                    <div id="product_top_1-tab-1" class="tab-content content_extabcurrent current">
                        <div class="row mt-3" data-section="tab-section">
                            @foreach($products as $item) 
                                <div class="col-12 col-xl-15 product-col">
                                    <div class="item_product_main">
                                        <form action="" method="post" class="variants product-action"
                                            data-id='{{$item->id}}' enctype="multipart/form-data">
                                            <div class="product-thumbnail pos-relative">
                                                <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                    href="#" title="[In stock] {{$item->name}}">

                                                    <img loading="lazy" class="img-fetured" width="480" height="480"
                                                        style="--image-scale: 1;"
                                                        src="{{$item->images->count()>0 ? asset('upload/' . $item->images->first()->url) : 'upload/default.png'}}"
                                                        alt="[In stock] {{$item->name}}">

                                                </a>
                                                <input type="hidden" name="variantId" value="$item-id">
                                                <div class="action-bar">
                                                    <a href="#"
                                                        class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                        <img width="20" height="20" class="icon-option"
                                                            src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                            alt="icon-option">
                                                        <span class="action-name">Tùy chọn</span>
                                                    </a>

                                                    <a href="#" data-handle="in-stock-neo80-case"
                                                        class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                        <i class="fas fa-eye"></i>
                                                        <span class="action-name">Xem nhanh</span>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="product-info">

                                                <span class="product-vendor">{{ $item->manufacturer }}</span>
                                                <span class="product-name "><a class="link" href="#"
                                                        title="[In stock] {{$item->name}}">[In stock] {{$item->name}}</a></span>
                                                <div class="product-item-cta position-relative">
                                                    <div class="price-box">                                                     
                                                        <span class="price">{{number_format($item->price,0,',','.')}}₫</span>
                                                    </div>
                                                </div>

                                                <div class="item-color-chosen">
                                                </div>

                                                <div class="product-promotion hidden">
                                                    <span
                                                        class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                        <img alt="Lưu ý"
                                                            src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                            width="16" height="16" class="mr-2">
                                                        Lưu ý
                                                    </span>

                                                    <ul>
                                                        <li><span style="color:#c0392b;"><strong>Để có kit hoàn chỉnh
                                                                    bạn vui lòng chọn toàn bộ tuỳ chọn ở trong phần
                                                                    "Neo80 full kit (in stock)", các đơn hàng không mua
                                                                    đầy đủ kit sẽ bị huỷ.</strong></span></li>
                                                        <li><span style="color:#c0392b;"><strong>Do sản phẩm có nhiều
                                                                    màu sắc tuỳ chọn bạn vui lòng tham khảo phối màu <a
                                                                        href="https://www.qwertykeys.com/collections/live-sales/products/neo80"
                                                                        target="_blank">tại đây</a></strong></span></li>
                                                        <li><strong><span style="color:#c0392b;">Tiêu chuẩn QC Neo80 vui
                                                                    lòng tham khảo</span> <a
                                                                    href="https://qwertykeys.notion.site/Acceptable-Quality-Standard-90e3f81eea8140b3bb8f1f32114007be"
                                                                    target="_blank">tại đây</a></strong></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div>
                            {{ $products->links() }}
                        </div>
                        
                        <div class="text-center mt-3 col-12">
                            <a href="/mechanical-keyboard" title="Xem tất cả"
                                class="btn btn-main btn-icon btn-pill">
                                Xem tất cả

                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                        </div>

                    </div>

                    <div id="product_top_1-tab-2" class="tab-content content_extab">
                        <div class="row mt-3" data-section="tab-section">
                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-31151569" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/cream-soda" title="Cream Soda Switch">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/cream-soda-switch-1686495791793.jpg?v=1686495798170"
                                                    alt="Cream Soda Switch">
                                            </a>

                                            <input type="hidden" name="variantId" value="89483876">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/cream-soda" data-handle="cream-soda"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">PuNkShoO</span>
                                            <span class="product-name "><a class="link" href="/cream-soda"
                                                    title="Cream Soda Switch">Cream Soda Switch</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">17.500₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>
                                                <p>Việc Switch bị cong chân trong quá trình vận chuyển là việc rất
                                                    bình thường không thể tránh khỏi, có thể nắn thẳng lại bằng nhíp
                                                    và không làm ảnh hưởng đến hiệu năng của switch.</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-30817432" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/owlab-neon-switch" title="Owlab Neon Switch">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/vn-11134201-23030-tl3438riirove1-1683453524483.jpg?v=1704537493917"
                                                    alt="Owlab Neon Switch">
                                            </a>
                                            <input type="hidden" name="variantId" value="87523154">
                                            <div class="action-bar">
                                                <a href="/owlab-neon-switch"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/owlab-neon-switch" data-handle="owlab-neon-switch"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">Owlab</span>
                                            <span class="product-name "><a class="link" href="/owlab-neon-switch"
                                                    title="Owlab Neon Switch">Owlab Neon Switch</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">10.500₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p>Việc Switch bị cong chân trong quá trình vận chuyển là việc rất
                                                    bình thường không thể tránh khỏi, có thể nắn thẳng lại bằng nhíp
                                                    và không làm ảnh hưởng đến hiệu năng của switch.</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-30868726" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/voice-mini" title="[In-stock] Voice Mini">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/voice-mini-1686540809713.jpg?v=1686540989567"
                                                    alt="[In-stock] Voice Mini">
                                            </a>
                                            <input type="hidden" name="variantId" value="90105370">
                                            <div class="action-bar">
                                                <a href="/voice-mini"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/voice-mini" data-handle="voice-mini"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">OWLAB</span>
                                            <span class="product-name "><a class="link" href="/voice-mini"
                                                    title="[In-stock] Voice Mini">[In-stock] Voice Mini</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">1.700.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">
                                                <div data-variant-id="90105370" class="color-dot selected"
                                                    style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/voiceminiblush1685934569913.jpg?v=1686540989567) no-repeat center center; background-size: cover">
                                                    <span class="color-name">Blush (E-Salmon Pink + Silver)</span>
                                                </div>

                                                <div data-variant-id="90105371" class="color-dot "
                                                    style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/voiceminisalmon1685934569176.jpg?v=1686540989567) no-repeat center center; background-size: cover">
                                                    <span class="color-name">Salmon (E-White + Salmon Pink)</span>
                                                </div>

                                                <a href="/voice-mini" data-handle="voice-mini"
                                                    class="color-more quick-view">
                                                    +11 <span class="action-name">Xem thêm 11 màu khác</span>
                                                </a>
                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>
                                                <p><strong>Hướng dẫn sử dụng <a
                                                            href="https://owlab.notion.site/Voice-Mini-Bluetooth-Instruction-f30e21b9970649308d810f7f288fd0ae"
                                                            target="_blank">Bluetooth</a><br>
                                                        Hướng dẫn&nbsp;<a
                                                            href="https://owlab.notion.site/Voice-Mini-Build-Guide-27152ddf5f804e37882c3cd51c0247ff"
                                                            target="_blank">build</a></strong></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-30817769" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/tx-ap-stabilizer" title="TX AP Stabilizers (Clip-In)">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/vn-11134207-7qukw-lf2sa7eujzo744-1683455705631.jpg?v=1683455710797"
                                                    alt="TX AP Stabilizers (Clip-In)">
                                            </a>
                                            <input type="hidden" name="variantId" value="87524167">
                                            <div class="action-bar">
                                                <a href="/tx-ap-stabilizer"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/tx-ap-stabilizer" data-handle="tx-ap-stabilizer"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">TX</span>
                                            <span class="product-name "><a class="link" href="/tx-ap-stabilizer"
                                                    title="TX AP Stabilizers (Clip-In)">TX AP Stabilizers
                                                    (Clip-In)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">380.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">
                                                <div data-variant-id="87524167" class="color-dot selected"
                                                    style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/vn-11134207-7qukw-lf2sa7euy1cn6e-1683455707339.jpg?v=1683455721997) no-repeat center center; background-size: cover">
                                                    <span class="color-name">Trắng - 1.6 mm</span>
                                                </div>

                                                <div data-variant-id="87524170" class="color-dot "
                                                    style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/vn-11134207-7qukw-lf2sa7euo7dj97-1683455705631.jpg?v=1683455717223) no-repeat center center; background-size: cover">
                                                    <span class="color-name">Trắng - 1.2 mm</span>
                                                </div>

                                                <a href="/tx-ap-stabilizer" data-handle="tx-ap-stabilizer"
                                                    class="color-more quick-view">
                                                    +8 <span class="action-name">Xem thêm 8 màu khác</span>
                                                </a>
                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-31152318" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/tropical-waters-v2-switch" title="Tropical Waters V2 Switch">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/tropical-waters-v2-6-1685606718704-1686495020664.jpg?v=1686495027290"
                                                    alt="Tropical Waters V2 Switch">
                                            </a>
                                            <input type="hidden" name="variantId" value="89488694">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/tropical-waters-v2-switch"
                                                    data-handle="tropical-waters-v2-switch"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-info">
                                            <span class="product-vendor">Keebhut</span>
                                            <span class="product-name "><a class="link"
                                                    href="/tropical-waters-v2-switch"
                                                    title="Tropical Waters V2 Switch">Tropical Waters V2
                                                    Switch</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">13.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là
                                                        việc rất bình thường không thể tránh khỏi, có thể nắn thẳng
                                                        lại bằng nhíp và không làm ảnh hưởng đến hiệu năng của
                                                        switch.</strong></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-31265723" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/strawberry-wine-switch"
                                                title="Sarokeys Strawberry Wine Switch">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/sarokeys-strawberry-wine-switch-1-1686493744030.jpg?v=1704538069797"
                                                    alt="Sarokeys Strawberry Wine Switch">
                                            </a>
                                            <input type="hidden" name="variantId" value="90216154">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/strawberry-wine-switch"
                                                    data-handle="strawberry-wine-switch"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">Keebhut</span>
                                            <span class="product-name "><a class="link"
                                                    href="/strawberry-wine-switch"
                                                    title="Sarokeys Strawberry Wine Switch">Sarokeys Strawberry Wine
                                                    Switch</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">9.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là
                                                        việc rất bình thường không thể tránh khỏi, có thể nắn thẳng
                                                        lại bằng nhíp và không làm ảnh hưởng đến hiệu năng của
                                                        switch.</strong></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-30817826" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/geon-switches" title="Geon Switches">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/vn-11134201-23030-dkqi7qodcdov65-1683456219912.jpg?v=1683456223640"
                                                    alt="Geon Switches">

                                            </a>
                                            <input type="hidden" name="variantId" value="87524376">
                                            <div class="action-bar">
                                                <a href="/geon-switches"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/geon-switches" data-handle="geon-switches"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">Geon</span>
                                            <span class="product-name "><a class="link" href="/geon-switches"
                                                    title="Geon Switches">Geon Switches</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">12.500₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p>Việc Switch bị cong chân trong quá trình vận chuyển là việc rất
                                                    bình thường không thể tránh khỏi, có thể nắn thẳng lại bằng nhíp
                                                    và không làm ảnh hưởng đến hiệu năng của switch.</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-31265724" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/strawberry-milkshake-s-switch"
                                                title="Strawberry Milkshake S Switch">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/sarokeys-strawberry-milkshake-s-switch-2-1686493432695.jpg?v=1686493436970"
                                                    alt="Strawberry Milkshake S Switch">

                                            </a>
                                            <input type="hidden" name="variantId" value="90216155">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/strawberry-milkshake-s-switch"
                                                    data-handle="strawberry-milkshake-s-switch"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">Keebhut</span>
                                            <span class="product-name "><a class="link"
                                                    href="/strawberry-milkshake-s-switch"
                                                    title="Strawberry Milkshake S Switch">Strawberry Milkshake S
                                                    Switch</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">6.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">

                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là
                                                        việc rất bình thường không thể tránh khỏi, có thể nắn thẳng
                                                        lại bằng nhíp và không làm ảnh hưởng đến hiệu năng của
                                                        switch.</strong></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-30817822" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/hg-switch-haimu-x-geon" title="HG [Haimu x Geon] Switches">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/vn-11134201-23030-n5ped5qtnfov82-1683456189006.jpg?v=1683456195193"
                                                    alt="HG [Haimu x Geon] Switches">
                                            </a>
                                            <input type="hidden" name="variantId" value="87524368">
                                            <div class="action-bar">
                                                <a href="/hg-switch-haimu-x-geon"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/hg-switch-haimu-x-geon"
                                                    data-handle="hg-switch-haimu-x-geon"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">Geon</span>
                                            <span class="product-name "><a class="link"
                                                    href="/hg-switch-haimu-x-geon"
                                                    title="HG [Haimu x Geon] Switches">HG [Haimu x Geon]
                                                    Switches</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">7.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p>Việc Switch bị cong chân trong quá trình vận chuyển là việc rất
                                                    bình thường không thể tránh khỏi, có thể nắn thẳng lại bằng nhíp
                                                    và không làm ảnh hưởng đến hiệu năng của switch.</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-31198472" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/gateron-raw-switch" title="Gateron Raw Switch">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/gateron-raw-switch-1685868254721.jpg?v=1685870579387"
                                                    alt="Gateron Raw Switch">
                                            </a>
                                            <input type="hidden" name="variantId" value="89838207">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/gateron-raw-switch" data-handle="gateron-raw-switch"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">Geon</span>
                                            <span class="product-name "><a class="link" href="/gateron-raw-switch"
                                                    title="Gateron Raw Switch">Gateron Raw Switch</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">11.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là
                                                        việc rất bình thường không thể tránh khỏi, có thể nắn thẳng
                                                        lại bằng nhíp và không làm ảnh hưởng đến hiệu năng của
                                                        switch.</strong></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="text-center mt-3 col-12">
                            <a href="/san-pham-noi-bat" title="Xem tất cả" class="btn btn-main btn-icon btn-pill">
                                Xem tất cả

                                <svg class="icon">
                                    <use xlink:href="#icon-arrow"></use>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <div id="product_top_1-tab-3" class="tab-content content_extab">
                        <div class="row mt-3" data-section="tab-section">
                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35460966" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/80retros-game-1989-keyboard-kit"
                                                title="80Retros Game 1989 keyboard kit">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/kit-80retros-game-1989-6-1713605605313.jpg?v=1713605616573"
                                                    alt="80Retros Game 1989 keyboard kit">
                                            </a>
                                            <input type="hidden" name="variantId" value="114804427">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/80retros-game-1989-keyboard-kit"
                                                    data-handle="80retros-game-1989-keyboard-kit"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">80Retros</span>
                                            <span class="product-name "><a class="link"
                                                    href="/80retros-game-1989-keyboard-kit"
                                                    title="80Retros Game 1989 keyboard kit">80Retros Game 1989
                                                    keyboard kit</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">5.399.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35460930" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/tutkeys-game-1989-keycap-set"
                                                title="TUTKEYS Game 1989 Keycap set">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/tutkeys-game-1989-keycap-set.jpg?v=1713608819107"
                                                    alt="TUTKEYS Game 1989 Keycap set">
                                            </a>
                                            <input type="hidden" name="variantId" value="114804361">
                                            <div class="action-bar">
                                                <a href="/tutkeys-game-1989-keycap-set"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/tutkeys-game-1989-keycap-set"
                                                    data-handle="tutkeys-game-1989-keycap-set"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">TUTKEYS</span>
                                            <span class="product-name "><a class="link"
                                                    href="/tutkeys-game-1989-keycap-set"
                                                    title="TUTKEYS Game 1989 Keycap set">TUTKEYS Game 1989 Keycap
                                                    set</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">2.199.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35460890" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/ktt-80retros-game-1989-switch"
                                                title="KTT 80Retros - Game 1989 Switch (Pack 45 switch)">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/game-1989-switch-8-1713606966978.jpg?v=1714233034310"
                                                    alt="KTT 80Retros - Game 1989 Switch (Pack 45 switch)">
                                            </a>
                                            <input type="hidden" name="variantId" value="114804299">
                                            <div class="action-bar">
                                                <a href="/ktt-80retros-game-1989-switch"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/ktt-80retros-game-1989-switch"
                                                    data-handle="ktt-80retros-game-1989-switch"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">KTT</span>
                                            <span class="product-name "><a class="link"
                                                    href="/ktt-80retros-game-1989-switch"
                                                    title="KTT 80Retros - Game 1989 Switch (Pack 45 switch)">KTT
                                                    80Retros - Game 1989 Switch (Pack 45 switch)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">315.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là
                                                        việc rất bình thường không thể tránh khỏi, có thể nắn thẳng
                                                        lại bằng nhíp và không làm ảnh hưởng đến hiệu năng của
                                                        switch.</strong></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35220834" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/swk-catmint-switch" title="SWK Catmint Switch">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/swk-catmint-switch-1712716564156.jpg?v=1712716570937"
                                                    alt="SWK Catmint Switch">
                                            </a>
                                            <input type="hidden" name="variantId" value="113485931">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">Thêm vào giỏ </span>
                                                </button>

                                                <a href="/swk-catmint-switch" data-handle="swk-catmint-switch"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">SWK</span>
                                            <span class="product-name "><a class="link" href="/swk-catmint-switch"
                                                    title="SWK Catmint Switch">SWK Catmint Switch</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">11.500₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là
                                                        việc rất bình thường không thể tránh khỏi, có thể nắn thẳng
                                                        lại bằng nhíp và không làm ảnh hưởng đến hiệu năng của
                                                        switch.</strong></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35113532" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/bo-keycap-dessert-shop"
                                                title="Bộ keycap Dessert Shop (MOA / PBT Dyesub)">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/keycap-dessert-shop-8-1711782423472.jpg?v=1711782440750"
                                                    alt="Bộ keycap Dessert Shop (MOA / PBT Dyesub)">
                                            </a>
                                            <input type="hidden" name="variantId" value="112834603">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/bo-keycap-dessert-shop"
                                                    data-handle="bo-keycap-dessert-shop"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor"></span>
                                            <span class="product-name "><a class="link"
                                                    href="/bo-keycap-dessert-shop"
                                                    title="Bộ keycap Dessert Shop (MOA / PBT Dyesub)">Bộ keycap
                                                    Dessert Shop (MOA / PBT Dyesub)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">780.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35113530" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/bo-keycap-cat-coffe"
                                                title="Bộ keycap Cat Coffe (MOA / PBT Dyesub)">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/cat-coffe-3-1711781525905.jpg?v=1711781542740"
                                                    alt="Bộ keycap Cat Coffe (MOA / PBT Dyesub)">
                                            </a>
                                            <input type="hidden" name="variantId" value="112834601">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/bo-keycap-cat-coffe" data-handle="bo-keycap-cat-coffe"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor"></span>
                                            <span class="product-name "><a class="link" href="/bo-keycap-cat-coffe"
                                                    title="Bộ keycap Cat Coffe (MOA / PBT Dyesub)">Bộ keycap Cat
                                                    Coffe (MOA / PBT Dyesub)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">780.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35113529" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/bo-keycap-samurai"
                                                title="Bộ keycap Samurai (Cherry / PBT Dyesub)">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/keycap-samurai-1-1711781409725.jpg?v=1711781414507"
                                                    alt="Bộ keycap Samurai (Cherry / PBT Dyesub)">
                                            </a>
                                            <input type="hidden" name="variantId" value="112834600">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active " disabled="">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Hết hàng
                                                    </span>
                                                </button>

                                                <a href="/bo-keycap-samurai" data-handle="bo-keycap-samurai"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                            <div class="available-cr">
                                                Hết hàng
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor"></span>
                                            <span class="product-name "><a class="link" href="/bo-keycap-samurai"
                                                    title="Bộ keycap Samurai (Cherry / PBT Dyesub)">Bộ keycap
                                                    Samurai (Cherry / PBT Dyesub)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">950.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35113528" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/bo-keycap-heavy-industry"
                                                title="Bộ keycap Heavy Industry (Cherry / PBT Dyesub)">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/keycap-heavy-industry-1-1711774676517.jpg?v=1711780511797"
                                                    alt="Bộ keycap Heavy Industry (Cherry / PBT Dyesub)">
                                            </a>
                                            <input type="hidden" name="variantId" value="112834599">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/bo-keycap-heavy-industry"
                                                    data-handle="bo-keycap-heavy-industry"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-info">
                                            <span class="product-vendor"></span>
                                            <span class="product-name "><a class="link"
                                                    href="/bo-keycap-heavy-industry"
                                                    title="Bộ keycap Heavy Industry (Cherry / PBT Dyesub)">Bộ keycap
                                                    Heavy Industry (Cherry / PBT Dyesub)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">780.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35113527" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/bo-keycap-black-white-cow"
                                                title="Bộ Keycap Black &amp; White Cow (MOA / PBT Dyesub)">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/keycap-black-white-cow-5-1711782197387.jpg?v=1711782213737"
                                                    alt="Bộ Keycap Black &amp; White Cow (MOA / PBT Dyesub)">
                                            </a>
                                            <input type="hidden" name="variantId" value="112834598">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/bo-keycap-black-white-cow"
                                                    data-handle="bo-keycap-black-white-cow"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor"></span>
                                            <span class="product-name "><a class="link"
                                                    href="/bo-keycap-black-white-cow"
                                                    title="Bộ Keycap Black &amp; White Cow (MOA / PBT Dyesub)">Bộ
                                                    Keycap Black &amp; White Cow (MOA / PBT Dyesub)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">530.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">

                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35113526" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/bo-keycap-cute-cat"
                                                title="Bộ keycap Cute Cat (MAO / PBT Dyesub)">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/keycap-cute-cat-2-1711781576289.jpg?v=1711781592750"
                                                    alt="Bộ keycap Cute Cat (MAO / PBT Dyesub)">
                                            </a>
                                            <input type="hidden" name="variantId" value="112834597">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/bo-keycap-cute-cat" data-handle="bo-keycap-cute-cat"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor"></span>
                                            <span class="product-name "><a class="link" href="/bo-keycap-cute-cat"
                                                    title="Bộ keycap Cute Cat (MAO / PBT Dyesub)">Bộ keycap Cute Cat
                                                    (MAO / PBT Dyesub)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">770.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">

                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-34508041" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">

                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/order-mousepad-spy-x-family-anya-edition"
                                                title="[Order] Mousepad - Spy x Family (Anya Edition)">

                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/mousepad-spy-x-family-anya-edition.jpg?v=1707409571893"
                                                    alt="[Order] Mousepad - Spy x Family (Anya Edition)">

                                            </a>
                                            <div class="label_product ">
                                                <div class="label_wrapper">
                                                    -13%
                                                </div>
                                            </div>
                                            <input type="hidden" name="variantId" value="109510972">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/order-mousepad-spy-x-family-anya-edition"
                                                    data-handle="order-mousepad-spy-x-family-anya-edition"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-info">

                                            <span class="product-vendor">MONOKEI</span>
                                            <span class="product-name "><a class="link"
                                                    href="/order-mousepad-spy-x-family-anya-edition"
                                                    title="[Order] Mousepad - Spy x Family (Anya Edition)">[Order]
                                                    Mousepad - Spy x Family (Anya
                                                    Edition)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">540.000₫</span>
                                                    <span class="compare-price">620.000₫</span>
                                                    <div class="label_product d-inline-block">
                                                        <div class="label_wrapper">
                                                            -13%
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714359361508"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul>
                                                    <li><b>Đây là sản phẩm order, thời gian trả hàng dự kiến: Cuối
                                                            quý 2/2024</b></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="text-center mt-3 col-12">
                            <a href="/instock" title="Xem tất cả" class="btn btn-main btn-icon btn-pill">Xem tất cả
                                <svg class="icon">
                                    <use xlink:href="#icon-arrow"></use>
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- KHUNG SP INSTOCK-->
    <section class="section awe-section-4">
        <section class="section_product_top section">
            <div class="container border-0">

                <div
                    class="title_module_main heading-bar e-tabs  d-flex align-items-center flex-wrap heading-style1 justify-content-around">
                    <h2 class="heading-bar__title">Instock - Hàng có sẵn</h2>

                    <ul class="tabs tabs-title list-unstyled  m-0 mt-2 tabs-group d-flex align-items-center">

                        <li class="ega-small tab-link link   current" data-tab="product_top_1-tab-1">
                            Bàn phím cơ
                        </li>

                        <li class="ega-small tab-link link ml-4  " data-tab="product_top_1-tab-2">
                            Sản phẩm hot
                        </li>

                        <li class="ega-small tab-link link ml-4  " data-tab="product_top_1-tab-3">
                            Sản phẩm mới
                        </li>
                    </ul>
                </div>
                <div class="e-tabs">
                    <div id="product_top_1-tab-1" class="tab-content content_extabcurrent current">
                        <div class="row mt-3" data-section="tab-section">

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="" method="post" class="variants product-action"
                                        data-id="product-actions-34839258" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/in-stock-neo80-case" title="[In stock] Neo80 Case">

                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/neo80-instock.jpg?v=1714293758973"
                                                    alt="[In stock] Neo80 Case">

                                            </a>
                                            <input type="hidden" name="variantId" value="111664258">
                                            <div class="action-bar">
                                                <a href="/in-stock-neo80-case"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/in-stock-neo80-case" data-handle="in-stock-neo80-case"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-info">

                                            <span class="product-vendor">Qwertykeys</span>
                                            <span class="product-name "><a class="link" href="/in-stock-neo80-case"
                                                    title="[In stock] Neo80 Case">[In stock] Neo80 Case</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">880.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul>
                                                    <li><span style="color:#c0392b;"><strong>Để có kit hoàn chỉnh
                                                                bạn vui lòng chọn toàn bộ tuỳ chọn ở trong phần
                                                                "Neo80 full kit (in stock)", các đơn hàng không mua
                                                                đầy đủ kit sẽ bị huỷ.</strong></span></li>
                                                    <li><span style="color:#c0392b;"><strong>Do sản phẩm có nhiều
                                                                màu sắc tuỳ chọn bạn vui lòng tham khảo phối màu <a
                                                                    href="https://www.qwertykeys.com/collections/live-sales/products/neo80"
                                                                    target="_blank">tại đây</a></strong></span></li>
                                                    <li><strong><span style="color:#c0392b;">Tiêu chuẩn QC Neo80 vui
                                                                lòng tham khảo</span> <a
                                                                href="https://qwertykeys.notion.site/Acceptable-Quality-Standard-90e3f81eea8140b3bb8f1f32114007be"
                                                                target="_blank">tại đây</a></strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35001131" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">

                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/ban-phim-co-infi75-lite" title="Bàn phím cơ Infi75 Lite">

                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/infi75-lite-3-1710485568154.jpg?v=1710485614857"
                                                    alt="Bàn phím cơ Infi75 Lite">

                                            </a>
                                            <input type="hidden" name="variantId" value="112262293">
                                            <div class="action-bar">
                                                <a href="/ban-phim-co-infi75-lite"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/ban-phim-co-infi75-lite"
                                                    data-handle="ban-phim-co-infi75-lite"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-info">

                                            <span class="product-vendor">Infiverse</span>
                                            <span class="product-name "><a class="link"
                                                    href="/ban-phim-co-infi75-lite"
                                                    title="Bàn phím cơ Infi75 Lite">Bàn phím cơ Infi75
                                                    Lite</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">1.350.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">
                                                <div data-variant-id="112262293" class="color-dot selected"
                                                    style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/infi75-lite-3-1710485568154.jpg?v=1710485614857) no-repeat center center; background-size: cover">
                                                    <span class="color-name">Trắng</span>
                                                </div>

                                                <div data-variant-id="112262295" class="color-dot "
                                                    style="background-color: #111112">
                                                    <span class="color-name">Đen</span>
                                                </div>

                                                <a href="/ban-phim-co-infi75-lite"
                                                    data-handle="ban-phim-co-infi75-lite"
                                                    class="color-more quick-view">
                                                    +1 <span class="action-name">Xem thêm 1 màu khác</span>
                                                </a>
                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35460966" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/80retros-game-1989-keyboard-kit"
                                                title="80Retros Game 1989 keyboard kit">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/kit-80retros-game-1989-6-1713605605313.jpg?v=1713605616573"
                                                    alt="80Retros Game 1989 keyboard kit">
                                            </a>
                                            <input type="hidden" name="variantId" value="114804427">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/80retros-game-1989-keyboard-kit"
                                                    data-handle="80retros-game-1989-keyboard-kit"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-info">
                                            <span class="product-vendor">80Retros</span>
                                            <span class="product-name "><a class="link"
                                                    href="/80retros-game-1989-keyboard-kit"
                                                    title="80Retros Game 1989 keyboard kit">80Retros Game 1989
                                                    keyboard kit</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">5.399.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">

                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">

                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-34372632" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">

                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/in-stock-qk65v2-badge" title="[In stock] QK65V2 Badge">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/game-badge-1703332170315-d9cade1e-3e56-4f0d-ade2-09b587f145ce.jpg?v=1714316122943"
                                                    alt="[In stock] QK65V2 Badge">
                                            </a>

                                            <input type="hidden" name="variantId" value="108658276">
                                            <div class="action-bar">
                                                <a href="/in-stock-qk65v2-badge"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/in-stock-qk65v2-badge" data-handle="in-stock-qk65v2-badge"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-info">
                                            <span class="product-vendor">Qwertykeys</span>
                                            <span class="product-name "><a class="link"
                                                    href="/in-stock-qk65v2-badge"
                                                    title="[In stock] QK65V2 Badge">[In stock] QK65V2
                                                    Badge</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">250.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">

                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul>
                                                    <li><span style="color:#c0392b;"><strong>Để có kit hoàn chỉnh
                                                                bạn vui lòng chọn toàn bộ tuỳ chọn ở trong phần
                                                                "QK65V2 In stock full kit", các đơn hàng không mua
                                                                đầy đủ kit sẽ bị huỷ.</strong></span></li>
                                                    <li><span style="color:#c0392b;"><strong>Nếu cần mua extra các
                                                                bạn vui lòng mua <a
                                                                    href="https://mokbstore.com/in-stock-qk65v2-extra-add-ons"
                                                                    target="_blank">tại đây</a></strong></span></li>
                                                    <li><span style="color:#c0392b;"><strong>Vui lòng đọc kỹ các quy
                                                                định về phối màu trong phần mô tả.</strong></span>
                                                    </li>
                                                    <li><strong><span style="color:#c0392b;">Tiêu chuẩn QC QK65V2
                                                                vui lòng tham khảo</span> <a
                                                                href="https://qwertykeys.notion.site/QK65v2-629ded469b254b8ca790aa805543a1a3"
                                                                target="_blank">tại đây</a></strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">

                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-34372605" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">

                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/in-stock-qk65v2-pcb" title="[In stock] QK65V2 PCB">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/qk65v2-pcb-1703332423375-50a59836-25cc-4fc8-8fc4-d041e147160f.jpg?v=1706106069050"
                                                    alt="[In stock] QK65V2 PCB">
                                            </a>
                                            <input type="hidden" name="variantId" value="108658243">
                                            <div class="action-bar">
                                                <a href="/in-stock-qk65v2-pcb"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/in-stock-qk65v2-pcb" data-handle="in-stock-qk65v2-pcb"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-info">
                                            <span class="product-vendor">Qwertykeys</span>
                                            <span class="product-name "><a class="link" href="/in-stock-qk65v2-pcb"
                                                    title="[In stock] QK65V2 PCB">[In stock] QK65V2 PCB</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">1.290.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul>
                                                    <li><span style="color:#c0392b;"><strong>Để có kit hoàn chỉnh
                                                                bạn vui lòng chọn toàn bộ tuỳ chọn ở trong phần
                                                                "QK65V2 In stock full kit", các đơn hàng không mua
                                                                đầy đủ kit sẽ bị huỷ.</strong></span></li>
                                                    <li><span style="color:#c0392b;"><strong>Nếu cần mua extra các
                                                                bạn vui lòng mua <a
                                                                    href="https://mokbstore.com/in-stock-qk65v2-extra-add-ons"
                                                                    target="_blank">tại đây</a></strong></span></li>
                                                    <li><span style="color:#c0392b;"><strong>Vui lòng đọc kỹ các quy
                                                                định về phối màu trong phần mô tả.</strong></span>
                                                    </li>
                                                    <li><strong><span style="color:#c0392b;">Tiêu chuẩn QC QK65V2
                                                                vui lòng tham khảo</span> <a
                                                                href="https://qwertykeys.notion.site/QK65v2-629ded469b254b8ca790aa805543a1a3"
                                                                target="_blank">tại đây</a></strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-34372595" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/in-stock-qk65v2-plate" title="[In stock] QK65V2 Plate">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/qk65v2-plate-1703332503614-65a3fbf7-1336-40ec-abc3-1e6cc3627f93.jpg?v=1706106033103"
                                                    alt="[In stock] QK65V2 Plate">

                                            </a>
                                            <input type="hidden" name="variantId" value="108658223">
                                            <div class="action-bar">
                                                <a href="/in-stock-qk65v2-plate"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/in-stock-qk65v2-plate" data-handle="in-stock-qk65v2-plate"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-info">
                                            <span class="product-vendor">Qwertykeys</span>
                                            <span class="product-name "><a class="link"
                                                    href="/in-stock-qk65v2-plate"
                                                    title="[In stock] QK65V2 Plate">[In stock] QK65V2
                                                    Plate</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">520.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul>
                                                    <li><span style="color:#c0392b;"><strong>Để có kit hoàn chỉnh
                                                                bạn vui lòng chọn toàn bộ tuỳ chọn ở trong phần
                                                                "QK65V2 In stock full kit", các đơn hàng không mua
                                                                đầy đủ kit sẽ bị huỷ.</strong></span></li>
                                                    <li><span style="color:#c0392b;"><strong>Nếu cần mua extra các
                                                                bạn vui lòng mua <a
                                                                    href="https://mokbstore.com/in-stock-qk65v2-extra-add-ons"
                                                                    target="_blank">tại đây</a></strong></span></li>
                                                    <li><span style="color:#c0392b;"><strong>Vui lòng đọc kỹ các quy
                                                                định về phối màu trong phần mô tả.</strong></span>
                                                    </li>
                                                    <li><strong><span style="color:#c0392b;">Tiêu chuẩn QC QK65V2
                                                                vui lòng tham khảo</span> <a
                                                                href="https://qwertykeys.notion.site/QK65v2-629ded469b254b8ca790aa805543a1a3"
                                                                target="_blank">tại đây</a></strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-34372631" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/in-stock-qk65v2-extra-add-ons"
                                                title="[In stock] QK65V2 Extra Add-ons">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/screen-dtb-1703346429943-3631d27d-50e6-4d4b-9202-c311ef0dc883.jpg?v=1706106307867"
                                                    alt="[In stock] QK65V2 Extra Add-ons">

                                            </a>
                                            <input type="hidden" name="variantId" value="108658275">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/in-stock-qk65v2-extra-add-ons"
                                                    data-handle="in-stock-qk65v2-extra-add-ons"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">

                                            <span class="product-vendor">Qwertykeys</span>
                                            <span class="product-name "><a class="link"
                                                    href="/in-stock-qk65v2-extra-add-ons"
                                                    title="[In stock] QK65V2 Extra Add-ons">[In stock] QK65V2 Extra
                                                    Add-ons</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">250.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul>
                                                    <li><span style="color:#c0392b;"><strong>Để có kit hoàn chỉnh
                                                                bạn vui lòng chọn toàn bộ tuỳ chọn ở trong phần
                                                                "QK65V2 In stock full kit", các đơn hàng không mua
                                                                đầy đủ kit sẽ bị huỷ.</strong></span></li>
                                                    <li><span style="color:#c0392b;"><strong>Nếu cần mua extra các
                                                                bạn vui lòng mua <a
                                                                    href="https://mokbstore.com/in-stock-qk65v2-extra-add-ons"
                                                                    target="_blank">tại đây</a></strong></span></li>
                                                    <li><span style="color:#c0392b;"><strong>Vui lòng đọc kỹ các quy
                                                                định về phối màu trong phần mô tả.</strong></span>
                                                    </li>
                                                    <li><strong><span style="color:#c0392b;">Tiêu chuẩn QC QK65V2
                                                                vui lòng tham khảo</span> <a
                                                                href="https://qwertykeys.notion.site/QK65v2-629ded469b254b8ca790aa805543a1a3"
                                                                target="_blank">tại đây</a></strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-34337557" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/in-stock-neo70-case" title="[In stock] Neo70 case">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/neo70-render-3-1700582492341.jpg?v=1706412867107"
                                                    alt="[In stock] Neo70 case">
                                            </a>
                                            <input type="hidden" name="variantId" value="108388229">
                                            <div class="action-bar">
                                                <a href="/in-stock-neo70-case"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/in-stock-neo70-case" data-handle="in-stock-neo70-case"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-info">

                                            <span class="product-vendor">Neo</span>
                                            <span class="product-name "><a class="link" href="/in-stock-neo70-case"
                                                    title="[In stock] Neo70 case">[In stock] Neo70 case</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">1.850.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">
                                                <div data-variant-id="108388229" class="color-dot selected"
                                                    style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/neo70-black-1-1700492724639-c9462200-a7f8-4301-a39d-c3720b0206ac.jpg?v=1706412990347) no-repeat center center; background-size: cover">
                                                    <span class="color-name">Anodized Black</span>
                                                </div>

                                                <div data-variant-id="108388235" class="color-dot "
                                                    style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/neo70-silver-1-1700492774922-4f1c8329-9940-497f-8e3a-750b51f53750.jpg?v=1706412990347) no-repeat center center; background-size: cover">
                                                    <span class="color-name">Anodized Silver</span>
                                                </div>
                                                <a href="/in-stock-neo70-case" data-handle="in-stock-neo70-case"
                                                    class="color-more quick-view">
                                                    +8 <span class="action-name">Xem thêm 8 màu khác</span>
                                                </a>
                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul>
                                                    <li><span style="color:#c0392b;"><strong>Để có kit hoàn chỉnh
                                                                bạn&nbsp;cần mua đủ:</strong></span>
                                                        <ul>
                                                            <li><a href="https://mokbstore.com/in-stock-neo70-case"
                                                                    target="_blank"><strong>Case</strong></a></li>
                                                            <li><a href="https://mokbstore.com/in-stock-neo70-badge"
                                                                    target="_blank"><b>Badge</b></a></li>
                                                            <li><a href="https://mokbstore.com/in-stock-neo70-pcb"
                                                                    target="_blank"><b>PCB</b></a></li>
                                                            <li><a href="https://mokbstore.com/in-stock-neo70-plate"
                                                                    target="_blank"><b>Plate</b></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><strong><span style="color:#c0392b;">Tiêu chuẩn QC Neo70 vui
                                                                lòng tham khảo</span> <a
                                                                href="https://qwertykeys.notion.site/Acceptable-Quality-Standard-90e3f81eea8140b3bb8f1f32114007be"
                                                                target="_blank">tại đây</a></strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-34337551" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/in-stock-neo70-badge" title="[In stock] Neo70 Badge">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/badge-colors-silver-1700571834133-5171482e-0fbb-4755-a8d6-b6aecefcdfde.jpg?v=1705848575213"
                                                    alt="[In stock] Neo70 Badge">

                                            </a>
                                            <input type="hidden" name="variantId" value="108388211">
                                            <div class="action-bar">
                                                <a href="/in-stock-neo70-badge"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/in-stock-neo70-badge" data-handle="in-stock-neo70-badge"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">

                                            <span class="product-vendor">Neo</span>
                                            <span class="product-name "><a class="link" href="/in-stock-neo70-badge"
                                                    title="[In stock] Neo70 Badge">[In stock] Neo70 Badge</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">380.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul>
                                                    <li><span style="color:#c0392b;"><strong>Để có kit hoàn chỉnh
                                                                bạn&nbsp;cần mua đủ:</strong></span>
                                                        <ul>
                                                            <li><a href="https://mokbstore.com/in-stock-neo70-case"
                                                                    target="_blank"><strong>Case</strong></a></li>
                                                            <li><a href="https://mokbstore.com/in-stock-neo70-badge"
                                                                    target="_blank"><b>Badge</b></a></li>
                                                            <li><a href="https://mokbstore.com/in-stock-neo70-pcb"
                                                                    target="_blank"><b>PCB</b></a></li>
                                                            <li><a href="https://mokbstore.com/in-stock-neo70-plate"
                                                                    target="_blank"><b>Plate</b></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><strong><span style="color:#c0392b;">Tiêu chuẩn QC Neo70 vui
                                                                lòng tham khảo</span> <a
                                                                href="https://qwertykeys.notion.site/Acceptable-Quality-Standard-90e3f81eea8140b3bb8f1f32114007be"
                                                                target="_blank">tại đây</a></strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-34337556" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/in-stock-neo70-pcb" title="[In stock] Neo70 PCB">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/layout-1700571241961-bfdfe97c-486a-4625-a856-a1bec1d604c3.jpg?v=1705848674387"
                                                    alt="[In stock] Neo70 PCB">

                                            </a>
                                            <input type="hidden" name="variantId" value="108388226">
                                            <div class="action-bar">
                                                <a href="/in-stock-neo70-pcb"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/in-stock-neo70-pcb" data-handle="in-stock-neo70-pcb"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-info">

                                            <span class="product-vendor">Neo</span>
                                            <span class="product-name "><a class="link" href="/in-stock-neo70-pcb"
                                                    title="[In stock] Neo70 PCB">[In stock] Neo70 PCB</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">1.290.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul>
                                                    <li><span style="color:#c0392b;"><strong>Để có kit hoàn chỉnh
                                                                bạn&nbsp;cần mua đủ:</strong></span>
                                                        <ul>
                                                            <li><a href="https://mokbstore.com/in-stock-neo70-case"
                                                                    target="_blank"><strong>Case</strong></a></li>
                                                            <li><a href="https://mokbstore.com/in-stock-neo70-badge"
                                                                    target="_blank"><b>Badge</b></a></li>
                                                            <li><a href="https://mokbstore.com/in-stock-neo70-pcb"
                                                                    target="_blank"><b>PCB</b></a></li>
                                                            <li><a href="https://mokbstore.com/in-stock-neo70-plate"
                                                                    target="_blank"><b>Plate</b></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><strong><span style="color:#c0392b;">Tiêu chuẩn QC Neo70 vui
                                                                lòng tham khảo</span> <a
                                                                href="https://qwertykeys.notion.site/Acceptable-Quality-Standard-90e3f81eea8140b3bb8f1f32114007be"
                                                                target="_blank">tại đây</a></strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-3 col-12">
                            <a href="/mechanical-keyboard" title="Xem tất cả"
                                class="btn btn-main btn-icon btn-pill">
                                Xem tất cả

                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                        </div>

                    </div>

                    <div id="product_top_1-tab-2" class="tab-content content_extab">
                        <div class="row mt-3" data-section="tab-section">
                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-31151569" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/cream-soda" title="Cream Soda Switch">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/cream-soda-switch-1686495791793.jpg?v=1686495798170"
                                                    alt="Cream Soda Switch">
                                            </a>

                                            <input type="hidden" name="variantId" value="89483876">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/cream-soda" data-handle="cream-soda"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">PuNkShoO</span>
                                            <span class="product-name "><a class="link" href="/cream-soda"
                                                    title="Cream Soda Switch">Cream Soda Switch</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">17.500₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>
                                                <p>Việc Switch bị cong chân trong quá trình vận chuyển là việc rất
                                                    bình thường không thể tránh khỏi, có thể nắn thẳng lại bằng nhíp
                                                    và không làm ảnh hưởng đến hiệu năng của switch.</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-30817432" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/owlab-neon-switch" title="Owlab Neon Switch">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/vn-11134201-23030-tl3438riirove1-1683453524483.jpg?v=1704537493917"
                                                    alt="Owlab Neon Switch">
                                            </a>
                                            <input type="hidden" name="variantId" value="87523154">
                                            <div class="action-bar">
                                                <a href="/owlab-neon-switch"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/owlab-neon-switch" data-handle="owlab-neon-switch"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">Owlab</span>
                                            <span class="product-name "><a class="link" href="/owlab-neon-switch"
                                                    title="Owlab Neon Switch">Owlab Neon Switch</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">10.500₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p>Việc Switch bị cong chân trong quá trình vận chuyển là việc rất
                                                    bình thường không thể tránh khỏi, có thể nắn thẳng lại bằng nhíp
                                                    và không làm ảnh hưởng đến hiệu năng của switch.</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-30868726" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/voice-mini" title="[In-stock] Voice Mini">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/voice-mini-1686540809713.jpg?v=1686540989567"
                                                    alt="[In-stock] Voice Mini">
                                            </a>
                                            <input type="hidden" name="variantId" value="90105370">
                                            <div class="action-bar">
                                                <a href="/voice-mini"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/voice-mini" data-handle="voice-mini"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">OWLAB</span>
                                            <span class="product-name "><a class="link" href="/voice-mini"
                                                    title="[In-stock] Voice Mini">[In-stock] Voice Mini</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">1.700.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">
                                                <div data-variant-id="90105370" class="color-dot selected"
                                                    style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/voiceminiblush1685934569913.jpg?v=1686540989567) no-repeat center center; background-size: cover">
                                                    <span class="color-name">Blush (E-Salmon Pink + Silver)</span>
                                                </div>

                                                <div data-variant-id="90105371" class="color-dot "
                                                    style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/voiceminisalmon1685934569176.jpg?v=1686540989567) no-repeat center center; background-size: cover">
                                                    <span class="color-name">Salmon (E-White + Salmon Pink)</span>
                                                </div>

                                                <a href="/voice-mini" data-handle="voice-mini"
                                                    class="color-more quick-view">
                                                    +11 <span class="action-name">Xem thêm 11 màu khác</span>
                                                </a>
                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>
                                                <p><strong>Hướng dẫn sử dụng <a
                                                            href="https://owlab.notion.site/Voice-Mini-Bluetooth-Instruction-f30e21b9970649308d810f7f288fd0ae"
                                                            target="_blank">Bluetooth</a><br>
                                                        Hướng dẫn&nbsp;<a
                                                            href="https://owlab.notion.site/Voice-Mini-Build-Guide-27152ddf5f804e37882c3cd51c0247ff"
                                                            target="_blank">build</a></strong></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-30817769" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/tx-ap-stabilizer" title="TX AP Stabilizers (Clip-In)">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/vn-11134207-7qukw-lf2sa7eujzo744-1683455705631.jpg?v=1683455710797"
                                                    alt="TX AP Stabilizers (Clip-In)">
                                            </a>
                                            <input type="hidden" name="variantId" value="87524167">
                                            <div class="action-bar">
                                                <a href="/tx-ap-stabilizer"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/tx-ap-stabilizer" data-handle="tx-ap-stabilizer"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">TX</span>
                                            <span class="product-name "><a class="link" href="/tx-ap-stabilizer"
                                                    title="TX AP Stabilizers (Clip-In)">TX AP Stabilizers
                                                    (Clip-In)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">380.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">
                                                <div data-variant-id="87524167" class="color-dot selected"
                                                    style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/vn-11134207-7qukw-lf2sa7euy1cn6e-1683455707339.jpg?v=1683455721997) no-repeat center center; background-size: cover">
                                                    <span class="color-name">Trắng - 1.6 mm</span>
                                                </div>

                                                <div data-variant-id="87524170" class="color-dot "
                                                    style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/vn-11134207-7qukw-lf2sa7euo7dj97-1683455705631.jpg?v=1683455717223) no-repeat center center; background-size: cover">
                                                    <span class="color-name">Trắng - 1.2 mm</span>
                                                </div>

                                                <a href="/tx-ap-stabilizer" data-handle="tx-ap-stabilizer"
                                                    class="color-more quick-view">
                                                    +8 <span class="action-name">Xem thêm 8 màu khác</span>
                                                </a>
                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-31152318" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/tropical-waters-v2-switch" title="Tropical Waters V2 Switch">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/tropical-waters-v2-6-1685606718704-1686495020664.jpg?v=1686495027290"
                                                    alt="Tropical Waters V2 Switch">
                                            </a>
                                            <input type="hidden" name="variantId" value="89488694">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/tropical-waters-v2-switch"
                                                    data-handle="tropical-waters-v2-switch"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-info">
                                            <span class="product-vendor">Keebhut</span>
                                            <span class="product-name "><a class="link"
                                                    href="/tropical-waters-v2-switch"
                                                    title="Tropical Waters V2 Switch">Tropical Waters V2
                                                    Switch</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">13.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là
                                                        việc rất bình thường không thể tránh khỏi, có thể nắn thẳng
                                                        lại bằng nhíp và không làm ảnh hưởng đến hiệu năng của
                                                        switch.</strong></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-31265723" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/strawberry-wine-switch"
                                                title="Sarokeys Strawberry Wine Switch">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/sarokeys-strawberry-wine-switch-1-1686493744030.jpg?v=1704538069797"
                                                    alt="Sarokeys Strawberry Wine Switch">
                                            </a>
                                            <input type="hidden" name="variantId" value="90216154">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/strawberry-wine-switch"
                                                    data-handle="strawberry-wine-switch"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">Keebhut</span>
                                            <span class="product-name "><a class="link"
                                                    href="/strawberry-wine-switch"
                                                    title="Sarokeys Strawberry Wine Switch">Sarokeys Strawberry Wine
                                                    Switch</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">9.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là
                                                        việc rất bình thường không thể tránh khỏi, có thể nắn thẳng
                                                        lại bằng nhíp và không làm ảnh hưởng đến hiệu năng của
                                                        switch.</strong></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-30817826" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/geon-switches" title="Geon Switches">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/vn-11134201-23030-dkqi7qodcdov65-1683456219912.jpg?v=1683456223640"
                                                    alt="Geon Switches">

                                            </a>
                                            <input type="hidden" name="variantId" value="87524376">
                                            <div class="action-bar">
                                                <a href="/geon-switches"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/geon-switches" data-handle="geon-switches"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">Geon</span>
                                            <span class="product-name "><a class="link" href="/geon-switches"
                                                    title="Geon Switches">Geon Switches</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">12.500₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p>Việc Switch bị cong chân trong quá trình vận chuyển là việc rất
                                                    bình thường không thể tránh khỏi, có thể nắn thẳng lại bằng nhíp
                                                    và không làm ảnh hưởng đến hiệu năng của switch.</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-31265724" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/strawberry-milkshake-s-switch"
                                                title="Strawberry Milkshake S Switch">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/sarokeys-strawberry-milkshake-s-switch-2-1686493432695.jpg?v=1686493436970"
                                                    alt="Strawberry Milkshake S Switch">

                                            </a>
                                            <input type="hidden" name="variantId" value="90216155">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/strawberry-milkshake-s-switch"
                                                    data-handle="strawberry-milkshake-s-switch"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">Keebhut</span>
                                            <span class="product-name "><a class="link"
                                                    href="/strawberry-milkshake-s-switch"
                                                    title="Strawberry Milkshake S Switch">Strawberry Milkshake S
                                                    Switch</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">6.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">

                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là
                                                        việc rất bình thường không thể tránh khỏi, có thể nắn thẳng
                                                        lại bằng nhíp và không làm ảnh hưởng đến hiệu năng của
                                                        switch.</strong></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-30817822" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/hg-switch-haimu-x-geon" title="HG [Haimu x Geon] Switches">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/vn-11134201-23030-n5ped5qtnfov82-1683456189006.jpg?v=1683456195193"
                                                    alt="HG [Haimu x Geon] Switches">
                                            </a>
                                            <input type="hidden" name="variantId" value="87524368">
                                            <div class="action-bar">
                                                <a href="/hg-switch-haimu-x-geon"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/hg-switch-haimu-x-geon"
                                                    data-handle="hg-switch-haimu-x-geon"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">Geon</span>
                                            <span class="product-name "><a class="link"
                                                    href="/hg-switch-haimu-x-geon"
                                                    title="HG [Haimu x Geon] Switches">HG [Haimu x Geon]
                                                    Switches</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">7.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p>Việc Switch bị cong chân trong quá trình vận chuyển là việc rất
                                                    bình thường không thể tránh khỏi, có thể nắn thẳng lại bằng nhíp
                                                    và không làm ảnh hưởng đến hiệu năng của switch.</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-31198472" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/gateron-raw-switch" title="Gateron Raw Switch">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/gateron-raw-switch-1685868254721.jpg?v=1685870579387"
                                                    alt="Gateron Raw Switch">
                                            </a>
                                            <input type="hidden" name="variantId" value="89838207">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/gateron-raw-switch" data-handle="gateron-raw-switch"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">Geon</span>
                                            <span class="product-name "><a class="link" href="/gateron-raw-switch"
                                                    title="Gateron Raw Switch">Gateron Raw Switch</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">11.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là
                                                        việc rất bình thường không thể tránh khỏi, có thể nắn thẳng
                                                        lại bằng nhíp và không làm ảnh hưởng đến hiệu năng của
                                                        switch.</strong></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="text-center mt-3 col-12">
                            <a href="/san-pham-noi-bat" title="Xem tất cả" class="btn btn-main btn-icon btn-pill">
                                Xem tất cả

                                <svg class="icon">
                                    <use xlink:href="#icon-arrow"></use>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <div id="product_top_1-tab-3" class="tab-content content_extab">
                        <div class="row mt-3" data-section="tab-section">
                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35460966" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/80retros-game-1989-keyboard-kit"
                                                title="80Retros Game 1989 keyboard kit">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/kit-80retros-game-1989-6-1713605605313.jpg?v=1713605616573"
                                                    alt="80Retros Game 1989 keyboard kit">
                                            </a>
                                            <input type="hidden" name="variantId" value="114804427">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/80retros-game-1989-keyboard-kit"
                                                    data-handle="80retros-game-1989-keyboard-kit"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">80Retros</span>
                                            <span class="product-name "><a class="link"
                                                    href="/80retros-game-1989-keyboard-kit"
                                                    title="80Retros Game 1989 keyboard kit">80Retros Game 1989
                                                    keyboard kit</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">5.399.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35460930" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/tutkeys-game-1989-keycap-set"
                                                title="TUTKEYS Game 1989 Keycap set">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/tutkeys-game-1989-keycap-set.jpg?v=1713608819107"
                                                    alt="TUTKEYS Game 1989 Keycap set">
                                            </a>
                                            <input type="hidden" name="variantId" value="114804361">
                                            <div class="action-bar">
                                                <a href="/tutkeys-game-1989-keycap-set"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/tutkeys-game-1989-keycap-set"
                                                    data-handle="tutkeys-game-1989-keycap-set"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">TUTKEYS</span>
                                            <span class="product-name "><a class="link"
                                                    href="/tutkeys-game-1989-keycap-set"
                                                    title="TUTKEYS Game 1989 Keycap set">TUTKEYS Game 1989 Keycap
                                                    set</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">2.199.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35460890" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/ktt-80retros-game-1989-switch"
                                                title="KTT 80Retros - Game 1989 Switch (Pack 45 switch)">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/game-1989-switch-8-1713606966978.jpg?v=1714233034310"
                                                    alt="KTT 80Retros - Game 1989 Switch (Pack 45 switch)">
                                            </a>
                                            <input type="hidden" name="variantId" value="114804299">
                                            <div class="action-bar">
                                                <a href="/ktt-80retros-game-1989-switch"
                                                    class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                    <img width="20" height="20" class="icon-option"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714292295296"
                                                        alt="icon-option">
                                                    <span class="action-name">Tùy chọn</span>
                                                </a>

                                                <a href="/ktt-80retros-game-1989-switch"
                                                    data-handle="ktt-80retros-game-1989-switch"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">KTT</span>
                                            <span class="product-name "><a class="link"
                                                    href="/ktt-80retros-game-1989-switch"
                                                    title="KTT 80Retros - Game 1989 Switch (Pack 45 switch)">KTT
                                                    80Retros - Game 1989 Switch (Pack 45 switch)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">315.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là
                                                        việc rất bình thường không thể tránh khỏi, có thể nắn thẳng
                                                        lại bằng nhíp và không làm ảnh hưởng đến hiệu năng của
                                                        switch.</strong></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35220834" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/swk-catmint-switch" title="SWK Catmint Switch">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/swk-catmint-switch-1712716564156.jpg?v=1712716570937"
                                                    alt="SWK Catmint Switch">
                                            </a>
                                            <input type="hidden" name="variantId" value="113485931">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">Thêm vào giỏ </span>
                                                </button>

                                                <a href="/swk-catmint-switch" data-handle="swk-catmint-switch"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor">SWK</span>
                                            <span class="product-name "><a class="link" href="/swk-catmint-switch"
                                                    title="SWK Catmint Switch">SWK Catmint Switch</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">11.500₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là
                                                        việc rất bình thường không thể tránh khỏi, có thể nắn thẳng
                                                        lại bằng nhíp và không làm ảnh hưởng đến hiệu năng của
                                                        switch.</strong></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35113532" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/bo-keycap-dessert-shop"
                                                title="Bộ keycap Dessert Shop (MOA / PBT Dyesub)">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/keycap-dessert-shop-8-1711782423472.jpg?v=1711782440750"
                                                    alt="Bộ keycap Dessert Shop (MOA / PBT Dyesub)">
                                            </a>
                                            <input type="hidden" name="variantId" value="112834603">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/bo-keycap-dessert-shop"
                                                    data-handle="bo-keycap-dessert-shop"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor"></span>
                                            <span class="product-name "><a class="link"
                                                    href="/bo-keycap-dessert-shop"
                                                    title="Bộ keycap Dessert Shop (MOA / PBT Dyesub)">Bộ keycap
                                                    Dessert Shop (MOA / PBT Dyesub)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">780.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35113530" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/bo-keycap-cat-coffe"
                                                title="Bộ keycap Cat Coffe (MOA / PBT Dyesub)">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/cat-coffe-3-1711781525905.jpg?v=1711781542740"
                                                    alt="Bộ keycap Cat Coffe (MOA / PBT Dyesub)">
                                            </a>
                                            <input type="hidden" name="variantId" value="112834601">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/bo-keycap-cat-coffe" data-handle="bo-keycap-cat-coffe"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor"></span>
                                            <span class="product-name "><a class="link" href="/bo-keycap-cat-coffe"
                                                    title="Bộ keycap Cat Coffe (MOA / PBT Dyesub)">Bộ keycap Cat
                                                    Coffe (MOA / PBT Dyesub)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">780.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35113529" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/bo-keycap-samurai"
                                                title="Bộ keycap Samurai (Cherry / PBT Dyesub)">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/keycap-samurai-1-1711781409725.jpg?v=1711781414507"
                                                    alt="Bộ keycap Samurai (Cherry / PBT Dyesub)">
                                            </a>
                                            <input type="hidden" name="variantId" value="112834600">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active " disabled="">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Hết hàng
                                                    </span>
                                                </button>

                                                <a href="/bo-keycap-samurai" data-handle="bo-keycap-samurai"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                            <div class="available-cr">
                                                Hết hàng
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor"></span>
                                            <span class="product-name "><a class="link" href="/bo-keycap-samurai"
                                                    title="Bộ keycap Samurai (Cherry / PBT Dyesub)">Bộ keycap
                                                    Samurai (Cherry / PBT Dyesub)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">950.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35113528" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/bo-keycap-heavy-industry"
                                                title="Bộ keycap Heavy Industry (Cherry / PBT Dyesub)">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/keycap-heavy-industry-1-1711774676517.jpg?v=1711780511797"
                                                    alt="Bộ keycap Heavy Industry (Cherry / PBT Dyesub)">
                                            </a>
                                            <input type="hidden" name="variantId" value="112834599">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/bo-keycap-heavy-industry"
                                                    data-handle="bo-keycap-heavy-industry"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-info">
                                            <span class="product-vendor"></span>
                                            <span class="product-name "><a class="link"
                                                    href="/bo-keycap-heavy-industry"
                                                    title="Bộ keycap Heavy Industry (Cherry / PBT Dyesub)">Bộ keycap
                                                    Heavy Industry (Cherry / PBT Dyesub)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">780.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35113527" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/bo-keycap-black-white-cow"
                                                title="Bộ Keycap Black &amp; White Cow (MOA / PBT Dyesub)">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/keycap-black-white-cow-5-1711782197387.jpg?v=1711782213737"
                                                    alt="Bộ Keycap Black &amp; White Cow (MOA / PBT Dyesub)">
                                            </a>
                                            <input type="hidden" name="variantId" value="112834598">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/bo-keycap-black-white-cow"
                                                    data-handle="bo-keycap-black-white-cow"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor"></span>
                                            <span class="product-name "><a class="link"
                                                    href="/bo-keycap-black-white-cow"
                                                    title="Bộ Keycap Black &amp; White Cow (MOA / PBT Dyesub)">Bộ
                                                    Keycap Black &amp; White Cow (MOA / PBT Dyesub)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">530.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">

                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-35113526" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">
                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/bo-keycap-cute-cat"
                                                title="Bộ keycap Cute Cat (MAO / PBT Dyesub)">
                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/keycap-cute-cat-2-1711781576289.jpg?v=1711781592750"
                                                    alt="Bộ keycap Cute Cat (MAO / PBT Dyesub)">
                                            </a>
                                            <input type="hidden" name="variantId" value="112834597">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/bo-keycap-cute-cat" data-handle="bo-keycap-cute-cat"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="product-info">
                                            <span class="product-vendor"></span>
                                            <span class="product-name "><a class="link" href="/bo-keycap-cute-cat"
                                                    title="Bộ keycap Cute Cat (MAO / PBT Dyesub)">Bộ keycap Cute Cat
                                                    (MAO / PBT Dyesub)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">770.000₫</span>
                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714292295296"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul class="promotion-box">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-xl-15 product-col">
                                <div class="item_product_main">

                                    <form action="/cart/add" method="post" class="variants product-action"
                                        data-id="product-actions-34508041" enctype="multipart/form-data">
                                        <div class="product-thumbnail pos-relative">

                                            <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                                href="/order-mousepad-spy-x-family-anya-edition"
                                                title="[Order] Mousepad - Spy x Family (Anya Edition)">

                                                <img loading="lazy" class="img-fetured" width="480" height="480"
                                                    style="--image-scale: 1;"
                                                    src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/mousepad-spy-x-family-anya-edition.jpg?v=1707409571893"
                                                    alt="[Order] Mousepad - Spy x Family (Anya Edition)">

                                            </a>
                                            <div class="label_product ">
                                                <div class="label_wrapper">
                                                    -13%
                                                </div>
                                            </div>
                                            <input type="hidden" name="variantId" value="109510972">
                                            <div class="action-bar">
                                                <button class="action-child btn add_to_cart active ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="action-name">
                                                        Thêm vào giỏ
                                                    </span>
                                                </button>

                                                <a href="/order-mousepad-spy-x-family-anya-edition"
                                                    data-handle="order-mousepad-spy-x-family-anya-edition"
                                                    class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="action-name">Xem nhanh</span>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-info">

                                            <span class="product-vendor">MONOKEI</span>
                                            <span class="product-name "><a class="link"
                                                    href="/order-mousepad-spy-x-family-anya-edition"
                                                    title="[Order] Mousepad - Spy x Family (Anya Edition)">[Order]
                                                    Mousepad - Spy x Family (Anya
                                                    Edition)</a></span>
                                            <div class="product-item-cta position-relative">
                                                <div class="price-box">
                                                    <span class="price">540.000₫</span>
                                                    <span class="compare-price">620.000₫</span>
                                                    <div class="label_product d-inline-block">
                                                        <div class="label_wrapper">
                                                            -13%
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="item-color-chosen">


                                            </div>

                                            <div class="product-promotion hidden">
                                                <span
                                                    class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                    <img alt="Lưu ý"
                                                        src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714359361508"
                                                        width="16" height="16" class="mr-2">
                                                    Lưu ý
                                                </span>

                                                <ul>
                                                    <li><b>Đây là sản phẩm order, thời gian trả hàng dự kiến: Cuối
                                                            quý 2/2024</b></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="text-center mt-3 col-12">
                            <a href="/instock" title="Xem tất cả" class="btn btn-main btn-icon btn-pill">Xem tất cả
                                <svg class="icon">
                                    <use xlink:href="#icon-arrow"></use>
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- KHUNG LOẠI SP -->
    <section class="section_product_top section">

        <div class="container border-0">

            <div class="title_module_main heading-bar e-tabs  d-flex align-items-center flex-wrap heading-style1 justify-content-around">
                <h2 class="heading-bar__title"></h2>

                <ul class="tabs tabs-title list-unstyled  m-0 mt-2 tabs-group d-flex align-items-center">

                    <li class="ega-small tab-link link current" data-tab="product_top_2-tab-1">
                        Keycap
                    </li>

                    <li class="ega-small tab-link link ml-4  " data-tab="product_top_2-tab-2">
                        Switch
                    </li>

                    <li class="ega-small tab-link link ml-4  " data-tab="product_top_2-tab-3">
                        Phụ kiện
                    </li>
                </ul>
            </div>
            <div class="e-tabs">

                <div id="product_top_2-tab-1" class="tab-content content_extabcurrent current">

                    <div class="row mt-3" data-section="tab-section">
                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">

                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-35460930" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">
                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/tutkeys-game-1989-keycap-set"
                                            title="TUTKEYS Game 1989 Keycap set">

                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/tutkeys-game-1989-keycap-set.jpg?v=1713608819107"
                                                alt="TUTKEYS Game 1989 Keycap set">

                                        </a>

                                        <input type="hidden" name="variantId" value="114804361">
                                        <div class="action-bar">
                                            <a href="/tutkeys-game-1989-keycap-set"
                                                class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                <img width="20" height="20" class="icon-option"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714906312483"
                                                    alt="icon-option">
                                                <span class="action-name">Tùy chọn</span>
                                            </a>

                                            <a href="/tutkeys-game-1989-keycap-set"
                                                data-handle="tutkeys-game-1989-keycap-set"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">TUTKEYS</span>
                                        <span class="product-name "><a class="link"
                                                href="/tutkeys-game-1989-keycap-set"
                                                title="TUTKEYS Game 1989 Keycap set">TUTKEYS Game 1989 Keycap
                                                set</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">2.199.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">

                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-35113532" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">

                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/bo-keycap-dessert-shop"
                                            title="Bộ keycap Dessert Shop (MOA / PBT Dyesub)">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/keycap-dessert-shop-8-1711782423472.jpg?v=1711782440750"
                                                alt="Bộ keycap Dessert Shop (MOA / PBT Dyesub)">

                                        </a>
                                        <input type="hidden" name="variantId" value="112834603">
                                        <div class="action-bar">
                                            <button class="action-child btn add_to_cart active ">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span class="action-name">
                                                    Thêm vào giỏ
                                                </span>
                                            </button>

                                            <a href="/bo-keycap-dessert-shop" data-handle="bo-keycap-dessert-shop"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor"></span>
                                        <span class="product-name "><a class="link" href="/bo-keycap-dessert-shop"
                                                title="Bộ keycap Dessert Shop (MOA / PBT Dyesub)">Bộ keycap Dessert
                                                Shop (MOA / PBT Dyesub)</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">780.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">

                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-35113530" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">

                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/bo-keycap-cat-coffe"
                                            title="Bộ keycap Cat Coffe (MOA / PBT Dyesub)">

                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/cat-coffe-3-1711781525905.jpg?v=1711781542740"
                                                alt="Bộ keycap Cat Coffe (MOA / PBT Dyesub)">

                                        </a>
                                        <input type="hidden" name="variantId" value="112834601">
                                        <div class="action-bar">
                                            <button class="action-child btn add_to_cart active ">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span class="action-name">
                                                    Thêm vào giỏ
                                                </span>
                                            </button>

                                            <a href="/bo-keycap-cat-coffe" data-handle="bo-keycap-cat-coffe"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor"></span>
                                        <span class="product-name "><a class="link" href="/bo-keycap-cat-coffe"
                                                title="Bộ keycap Cat Coffe (MOA / PBT Dyesub)">Bộ keycap Cat Coffe
                                                (MOA / PBT Dyesub)</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">780.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">



                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">

                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-35113529" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">

                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/bo-keycap-samurai"
                                            title="Bộ keycap Samurai (Cherry / PBT Dyesub)">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/keycap-samurai-1-1711781409725.jpg?v=1711781414507"
                                                alt="Bộ keycap Samurai (Cherry / PBT Dyesub)">

                                        </a>
                                        <input type="hidden" name="variantId" value="112834600">
                                        <div class="action-bar">
                                            <button class="action-child btn add_to_cart active " disabled="">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span class="action-name">
                                                    Hết hàng
                                                </span>
                                            </button>

                                            <a href="/bo-keycap-samurai" data-handle="bo-keycap-samurai"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                        <div class="available-cr">
                                            Hết hàng
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor"></span>
                                        <span class="product-name "><a class="link" href="/bo-keycap-samurai"
                                                title="Bộ keycap Samurai (Cherry / PBT Dyesub)">Bộ keycap Samurai
                                                (Cherry / PBT Dyesub)</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">950.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">

                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-35113528" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">

                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/bo-keycap-heavy-industry"
                                            title="Bộ keycap Heavy Industry (Cherry / PBT Dyesub)">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/keycap-heavy-industry-1-1711774676517.jpg?v=1711780511797"
                                                alt="Bộ keycap Heavy Industry (Cherry / PBT Dyesub)">

                                        </a>
                                        <input type="hidden" name="variantId" value="112834599">
                                        <div class="action-bar">
                                            <button class="action-child btn add_to_cart active ">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span class="action-name">
                                                    Thêm vào giỏ
                                                </span>
                                            </button>

                                            <a href="/bo-keycap-heavy-industry"
                                                data-handle="bo-keycap-heavy-industry"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor"></span>
                                        <span class="product-name "><a class="link" href="/bo-keycap-heavy-industry"
                                                title="Bộ keycap Heavy Industry (Cherry / PBT Dyesub)">Bộ keycap
                                                Heavy Industry (Cherry / PBT Dyesub)</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">780.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">

                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-35113527" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">

                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/bo-keycap-black-white-cow"
                                            title="Bộ Keycap Black &amp; White Cow (MOA / PBT Dyesub)">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/keycap-black-white-cow-5-1711782197387.jpg?v=1711782213737"
                                                alt="Bộ Keycap Black &amp; White Cow (MOA / PBT Dyesub)">

                                        </a>
                                        <input type="hidden" name="variantId" value="112834598">
                                        <div class="action-bar">
                                            <button class="action-child btn add_to_cart active ">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span class="action-name">
                                                    Thêm vào giỏ
                                                </span>
                                            </button>

                                            <a href="/bo-keycap-black-white-cow"
                                                data-handle="bo-keycap-black-white-cow"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor"></span>
                                        <span class="product-name "><a class="link"
                                                href="/bo-keycap-black-white-cow"
                                                title="Bộ Keycap Black &amp; White Cow (MOA / PBT Dyesub)">Bộ Keycap
                                                Black &amp; White Cow (MOA / PBT Dyesub)</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">530.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">

                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-35113526" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">

                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/bo-keycap-cute-cat"
                                            title="Bộ keycap Cute Cat (MAO / PBT Dyesub)">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/keycap-cute-cat-2-1711781576289.jpg?v=1711781592750"
                                                alt="Bộ keycap Cute Cat (MAO / PBT Dyesub)">

                                        </a>
                                        <input type="hidden" name="variantId" value="112834597">
                                        <div class="action-bar">
                                            <button class="action-child btn add_to_cart active ">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span class="action-name">
                                                    Thêm vào giỏ
                                                </span>
                                            </button>

                                            <a href="/bo-keycap-cute-cat" data-handle="bo-keycap-cute-cat"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor"></span>
                                        <span class="product-name "><a class="link" href="/bo-keycap-cute-cat"
                                                title="Bộ keycap Cute Cat (MAO / PBT Dyesub)">Bộ keycap Cute Cat
                                                (MAO / PBT Dyesub)</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">770.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">

                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-35055080" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">

                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/pbtfans-retro-100-keycap"
                                            title="Bộ keycap PBTfans Retro 100 (Cherry / PBT)">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/1-icon-base-1711453048925.jpg?v=1711455058227"
                                                alt="Bộ keycap PBTfans Retro 100 (Cherry / PBT)">

                                        </a>
                                        <input type="hidden" name="variantId" value="112551459">
                                        <div class="action-bar">
                                            <a href="/pbtfans-retro-100-keycap"
                                                class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                <img width="20" height="20" class="icon-option"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714906312483"
                                                    alt="icon-option">
                                                <span class="action-name">Tùy chọn</span>
                                            </a>

                                            <a href="/pbtfans-retro-100-keycap"
                                                data-handle="pbtfans-retro-100-keycap"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">PBTfans</span>
                                        <span class="product-name "><a class="link" href="/pbtfans-retro-100-keycap"
                                                title="Bộ keycap PBTfans Retro 100 (Cherry / PBT)">Bộ keycap PBTfans
                                                Retro 100 (Cherry / PBT)</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">2.125.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">

                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-34884399" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">

                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/gmk-cyl-panels" title="GMK CYL PANELS">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/gmk-cyl-panels-1710245559466.jpg?v=1710245574973"
                                                alt="GMK CYL PANELS">

                                        </a>
                                        <input type="hidden" name="variantId" value="111878270">
                                        <div class="action-bar">
                                            <button class="action-child btn add_to_cart active " disabled="">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span class="action-name">
                                                    Hết hàng
                                                </span>
                                            </button>

                                            <a href="/gmk-cyl-panels" data-handle="gmk-cyl-panels"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                        <div class="available-cr">
                                            Hết hàng
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">GMK</span>
                                        <span class="product-name "><a class="link" href="/gmk-cyl-panels"
                                                title="GMK CYL PANELS">GMK CYL PANELS</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">2.500.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">

                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-34884376" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">

                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/gmk-cyl-olivia-no3" title="GMK CYL Olivia Nº3">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/gmk-cyl-oliviano3-1710245908860.jpg?v=1710245928277"
                                                alt="GMK CYL Olivia Nº3">

                                        </a>
                                        <input type="hidden" name="variantId" value="111877467">
                                        <div class="action-bar">
                                            <a href="/gmk-cyl-olivia-no3"
                                                class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                <img width="20" height="20" class="icon-option"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714906312483"
                                                    alt="icon-option">
                                                <span class="action-name">Tùy chọn</span>
                                            </a>

                                            <a href="/gmk-cyl-olivia-no3" data-handle="gmk-cyl-olivia-no3"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                        <div class="available-cr">
                                            Hết hàng
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">GMK</span>
                                        <span class="product-name "><a class="link" href="/gmk-cyl-olivia-no3"
                                                title="GMK CYL Olivia Nº3">GMK CYL Olivia Nº3</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">2.500.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>


                    <div class="text-center mt-3 col-12">
                        <a href="/keycap" title="Xem tất cả" class="btn btn-main btn-icon btn-pill">
                            Xem tất cả

                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </div>

                </div>


                <div id="product_top_2-tab-2" class="tab-content content_extab">

                    <div class="row mt-3" data-section="tab-section">

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">

                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-35460890" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">

                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/ktt-80retros-game-1989-switch"
                                            title="KTT 80Retros - Game 1989 Switch (Pack 45 switch)">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/game-1989-switch-8-1713606966978.jpg?v=1714233034310"
                                                alt="KTT 80Retros - Game 1989 Switch (Pack 45 switch)">

                                        </a>
                                        <input type="hidden" name="variantId" value="114804299">
                                        <div class="action-bar">
                                            <a href="/ktt-80retros-game-1989-switch"
                                                class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                <img width="20" height="20" class="icon-option"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714906312483"
                                                    alt="icon-option">
                                                <span class="action-name">Tùy chọn</span>
                                            </a>

                                            <a href="/ktt-80retros-game-1989-switch"
                                                data-handle="ktt-80retros-game-1989-switch"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">KTT</span>
                                        <span class="product-name "><a class="link"
                                                href="/ktt-80retros-game-1989-switch"
                                                title="KTT 80Retros - Game 1989 Switch (Pack 45 switch)">KTT
                                                80Retros - Game 1989 Switch (Pack 45 switch)</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">315.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">

                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là việc
                                                    rất bình thường không thể tránh khỏi, có thể nắn thẳng lại bằng
                                                    nhíp và không làm ảnh hưởng đến hiệu năng của switch.</strong>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">

                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-35220834" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">
                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/swk-catmint-switch" title="SWK Catmint Switch">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/swk-catmint-switch-1712716564156.jpg?v=1712716570937"
                                                alt="SWK Catmint Switch">
                                        </a>
                                        <input type="hidden" name="variantId" value="113485931">
                                        <div class="action-bar">
                                            <button class="action-child btn add_to_cart active ">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span class="action-name">
                                                    Thêm vào giỏ
                                                </span>
                                            </button>

                                            <a href="/swk-catmint-switch" data-handle="swk-catmint-switch"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="product-info">
                                        <span class="product-vendor">SWK</span>
                                        <span class="product-name "><a class="link" href="/swk-catmint-switch"
                                                title="SWK Catmint Switch">SWK Catmint Switch</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">11.500₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là việc
                                                    rất bình thường không thể tránh khỏi, có thể nắn thẳng lại bằng
                                                    nhíp và không làm ảnh hưởng đến hiệu năng của switch.</strong>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-35043234" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">
                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/gateron-summertime-switch-v2"
                                            title="Gateron Summertime Switch V2">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/gateron-summertime-1-1712539359425.jpg?v=1712539364353"
                                                alt="Gateron Summertime Switch V2">

                                        </a>
                                        <input type="hidden" name="variantId" value="112469358">
                                        <div class="action-bar">
                                            <button class="action-child btn add_to_cart active ">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span class="action-name">
                                                    Thêm vào giỏ
                                                </span>
                                            </button>

                                            <a href="/gateron-summertime-switch-v2"
                                                data-handle="gateron-summertime-switch-v2"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">PuNkShoO</span>
                                        <span class="product-name "><a class="link"
                                                href="/gateron-summertime-switch-v2"
                                                title="Gateron Summertime Switch V2">Gateron Summertime Switch
                                                V2</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">13.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là việc
                                                    rất bình thường không thể tránh khỏi, có thể nắn thẳng lại bằng
                                                    nhíp và không làm ảnh hưởng đến hiệu năng của switch.</strong>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-35028701" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">
                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/swk-jieum-v2-switch" title="SWK Jieum V2 Switch">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/swk-jieum-v2-6-1711114119607.jpg?v=1711114123113"
                                                alt="SWK Jieum V2 Switch">

                                        </a>
                                        <input type="hidden" name="variantId" value="112377463">
                                        <div class="action-bar">
                                            <button class="action-child btn add_to_cart active ">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span class="action-name">
                                                    Thêm vào giỏ
                                                </span>
                                            </button>

                                            <a href="/swk-jieum-v2-switch" data-handle="swk-jieum-v2-switch"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">SWK</span>
                                        <span class="product-name "><a class="link" href="/swk-jieum-v2-switch"
                                                title="SWK Jieum V2 Switch">SWK Jieum V2 Switch</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">11.500₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là việc
                                                    rất bình thường không thể tránh khỏi, có thể nắn thẳng lại bằng
                                                    nhíp và không làm ảnh hưởng đến hiệu năng của switch.</strong>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-35028689" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">

                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/bsun-tai-chi-switch" title="BSUN Tai Chi Switch">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/bsun-taichi-1-1711096647189.jpg?v=1711096651207"
                                                alt="BSUN Tai Chi Switch">

                                        </a>
                                        <input type="hidden" name="variantId" value="112377399">
                                        <div class="action-bar">
                                            <button class="action-child btn add_to_cart active ">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span class="action-name">
                                                    Thêm vào giỏ
                                                </span>
                                            </button>

                                            <a href="/bsun-tai-chi-switch" data-handle="bsun-tai-chi-switch"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">BSUN</span>
                                        <span class="product-name "><a class="link" href="/bsun-tai-chi-switch"
                                                title="BSUN Tai Chi Switch">BSUN Tai Chi Switch</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">2.500₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là việc
                                                    rất bình thường không thể tránh khỏi, có thể nắn thẳng lại bằng
                                                    nhíp và không làm ảnh hưởng đến hiệu năng của switch.</strong>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">

                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-34534743" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">

                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/sarokeys-strawberry-wine-v2-switch"
                                            title="Sarokeys Strawberry Wine V2 Switch">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/sarokeys-strawberry-wine-v2-switch-1-1708051238476.jpg?v=1708051253560"
                                                alt="Sarokeys Strawberry Wine V2 Switch">

                                        </a>
                                        <input type="hidden" name="variantId" value="109661051">
                                        <div class="action-bar">
                                            <a href="/sarokeys-strawberry-wine-v2-switch"
                                                class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                <img width="20" height="20" class="icon-option"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714906312483"
                                                    alt="icon-option">
                                                <span class="action-name">Tùy chọn</span>
                                            </a>

                                            <a href="/sarokeys-strawberry-wine-v2-switch"
                                                data-handle="sarokeys-strawberry-wine-v2-switch"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">Geon</span>
                                        <span class="product-name "><a class="link"
                                                href="/sarokeys-strawberry-wine-v2-switch"
                                                title="Sarokeys Strawberry Wine V2 Switch">Sarokeys Strawberry Wine
                                                V2 Switch</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">10.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là việc
                                                    rất bình thường không thể tránh khỏi, có thể nắn thẳng lại bằng
                                                    nhíp và không làm ảnh hưởng đến hiệu năng của switch.</strong>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">

                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-33904834" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">

                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/pre-order-ktt-macaron-switch" title="KTT Macaron Switches">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/ktt-macaron-1702900790465.jpg?v=1702900799237"
                                                alt="KTT Macaron Switches">

                                        </a>
                                        <input type="hidden" name="variantId" value="105644509">
                                        <div class="action-bar">
                                            <a href="/pre-order-ktt-macaron-switch"
                                                class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                <img width="20" height="20" class="icon-option"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714906312483"
                                                    alt="icon-option">
                                                <span class="action-name">Tùy chọn</span>
                                            </a>

                                            <a href="/pre-order-ktt-macaron-switch"
                                                data-handle="pre-order-ktt-macaron-switch"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">KTT</span>
                                        <span class="product-name "><a class="link"
                                                href="/pre-order-ktt-macaron-switch"
                                                title="KTT Macaron Switches">KTT Macaron Switches</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">6.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul>
                                                <li><strong>Việc Switch bị cong chân trong quá trình vận chuyển là
                                                        việc rất bình thường không thể tránh khỏi, có thể nắn thẳng
                                                        lại bằng nhíp và không làm ảnh hưởng đến hiệu năng của
                                                        switch.</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">

                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-33904651" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">

                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/pre-order-ktt-baby-switch" title="KTT Baby Switches">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/ktt-baby-switch-1702897953208.jpg?v=1702897959287"
                                                alt="KTT Baby Switches">

                                        </a>
                                        <input type="hidden" name="variantId" value="105643916">
                                        <div class="action-bar">
                                            <a href="/pre-order-ktt-baby-switch"
                                                class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                <img width="20" height="20" class="icon-option"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714906312483"
                                                    alt="icon-option">
                                                <span class="action-name">Tùy chọn</span>
                                            </a>

                                            <a href="/pre-order-ktt-baby-switch"
                                                data-handle="pre-order-ktt-baby-switch"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="product-info">
                                        <span class="product-vendor">KTT</span>
                                        <span class="product-name "><a class="link"
                                                href="/pre-order-ktt-baby-switch" title="KTT Baby Switches">KTT Baby
                                                Switches</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">4.500₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul>
                                                <li><strong>Việc Switch bị cong chân trong quá trình vận chuyển là
                                                        việc rất bình thường không thể tránh khỏi, có thể nắn thẳng
                                                        lại bằng nhíp và không làm ảnh hưởng đến hiệu năng của
                                                        switch.</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-33807503" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">
                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/diamond-w1-switch" title="Diamond W1 Switch">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/w1-swich-1-1700644039802-528d1083-111d-4ab9-b78d-28a955b7d674.jpg?v=1702994207357"
                                                alt="Diamond W1 Switch">

                                        </a>
                                        <input type="hidden" name="variantId" value="104953420">
                                        <div class="action-bar">
                                            <a href="/diamond-w1-switch"
                                                class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                <img width="20" height="20" class="icon-option"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714906312483"
                                                    alt="icon-option">
                                                <span class="action-name">Tùy chọn</span>
                                            </a>

                                            <a href="/diamond-w1-switch" data-handle="diamond-w1-switch"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="product-info">
                                        <span class="product-vendor">Naughty</span>
                                        <span class="product-name "><a class="link" href="/diamond-w1-switch"
                                                title="Diamond W1 Switch">Diamond W1 Switch</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">12.500₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">

                                            <div data-variant-id="104953420" class="color-dot selected"
                                                style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/diamond-w1-switch-5-1700129617611-d15ce80f-e70c-4476-b801-a49cc7940684.jpg?v=1702994221967) no-repeat center center; background-size: cover">
                                                <span class="color-name">Pink</span>
                                            </div>

                                            <div data-variant-id="104953422" class="color-dot "
                                                style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/diamond-w1-switch-7-1700129618349-c10a35d7-6e85-485f-94e0-1e146565490e.jpg?v=1702994222723) no-repeat center center; background-size: cover">
                                                <span class="color-name">Yellow</span>
                                            </div>
                                            <a href="/diamond-w1-switch" data-handle="diamond-w1-switch"
                                                class="color-more quick-view">
                                                +2 <span class="action-name">Xem thêm 2 màu khác</span>
                                            </a>

                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là việc
                                                    rất bình thường không thể tránh khỏi, có thể nắn thẳng lại bằng
                                                    nhíp và không làm ảnh hưởng đến hiệu năng của switch.</strong>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-33742953" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">
                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/hmx-cloud-switch" title="HMX Cloud Switch">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/hmx-cloud-1-1702716700875.jpg?v=1702716705177"
                                                alt="HMX Cloud Switch">

                                        </a>
                                        <input type="hidden" name="variantId" value="104527941">
                                        <div class="action-bar">
                                            <button class="action-child btn add_to_cart active ">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span class="action-name">
                                                    Thêm vào giỏ
                                                </span>
                                            </button>

                                            <a href="/hmx-cloud-switch" data-handle="hmx-cloud-switch"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">HMX</span>
                                        <span class="product-name "><a class="link" href="/hmx-cloud-switch"
                                                title="HMX Cloud Switch">HMX Cloud Switch</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">6.500₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <p><strong>Việc Switch bị cong chân trong quá trình vận chuyển là việc
                                                    rất bình thường không thể tránh khỏi, có thể nắn thẳng lại bằng
                                                    nhíp và không làm ảnh hưởng đến hiệu năng của switch.</strong>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="text-center mt-3 col-12">
                        <a href="/switch-cong-tac-ban-phim-co" title="Xem tất cả"
                            class="btn btn-main btn-icon btn-pill">
                            Xem tất cả

                            <svg class="icon">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </a>
                    </div>

                </div>




                <div id="product_top_2-tab-3" class="tab-content content_extab">
                    <div class="row mt-3" data-section="tab-section">
                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">

                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-33958901" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">
                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/deadline-studio-screws-tray" title="DEADLINE Studio Screws Tray">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/deadline-studio-screws-tray-1-1703552043453.jpg?v=1703552070267"
                                                alt="DEADLINE Studio Screws Tray">

                                        </a>
                                        <input type="hidden" name="variantId" value="105970354">
                                        <div class="action-bar">
                                            <a href="/deadline-studio-screws-tray"
                                                class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                <img width="20" height="20" class="icon-option"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714906312483"
                                                    alt="icon-option">
                                                <span class="action-name">Tùy chọn</span>
                                            </a>

                                            <a href="/deadline-studio-screws-tray"
                                                data-handle="deadline-studio-screws-tray"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                        <div class="available-cr">
                                            Hết hàng
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">Deadline Studio</span>
                                        <span class="product-name "><a class="link"
                                                href="/deadline-studio-screws-tray"
                                                title="DEADLINE Studio Screws Tray">DEADLINE Studio Screws
                                                Tray</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">490.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">
                                            <div data-variant-id="105970354" class="color-dot selected"
                                                style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/deadline-studio-screws-tray-2-1703552044622.jpg?v=1703552070293) no-repeat center center; background-size: cover">
                                                <span class="color-name">Silver</span>
                                            </div>

                                            <div data-variant-id="105970355" class="color-dot "
                                                style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/deadline-studio-screws-tray-1-1703552043453.jpg?v=1703552070267) no-repeat center center; background-size: cover">
                                                <span class="color-name">Black</span>
                                            </div>

                                            <a href="/deadline-studio-screws-tray"
                                                data-handle="deadline-studio-screws-tray"
                                                class="color-more quick-view">
                                                +1 <span class="action-name">Xem thêm 1 màu khác</span>
                                            </a>

                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-33951276" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">
                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/mo-lube-krytox-205g0" title="Mỡ lube Krytox 205g0">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/dscf0691-1703238148962.jpg?v=1703238699917"
                                                alt="Mỡ lube Krytox 205g0">

                                        </a>
                                        <input type="hidden" name="variantId" value="105898605">
                                        <div class="action-bar">
                                            <button class="action-child btn add_to_cart active ">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span class="action-name">
                                                    Thêm vào giỏ
                                                </span>
                                            </button>

                                            <a href="/mo-lube-krytox-205g0" data-handle="mo-lube-krytox-205g0"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">Krytox</span>
                                        <span class="product-name "><a class="link" href="/mo-lube-krytox-205g0"
                                                title="Mỡ lube Krytox 205g0">Mỡ lube Krytox 205g0</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">150.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-33949886" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">
                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/pre-order-staebies-v2-1-stabilizers"
                                            title="Staebies V2.1 Stabilizers">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/aeboards-staebies-v21-clr-1706019328933.jpg?v=1706019332167"
                                                alt="Staebies V2.1 Stabilizers">

                                        </a>
                                        <input type="hidden" name="variantId" value="105889465">
                                        <div class="action-bar">
                                            <a href="/pre-order-staebies-v2-1-stabilizers"
                                                class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                <img width="20" height="20" class="icon-option"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714906312483"
                                                    alt="icon-option">
                                                <span class="action-name">Tùy chọn</span>
                                            </a>

                                            <a href="/pre-order-staebies-v2-1-stabilizers"
                                                data-handle="pre-order-staebies-v2-1-stabilizers"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">AEboards</span>
                                        <span class="product-name "><a class="link"
                                                href="/pre-order-staebies-v2-1-stabilizers"
                                                title="Staebies V2.1 Stabilizers">Staebies V2.1
                                                Stabilizers</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">480.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">

                                            <div data-variant-id="105889465" class="color-dot selected"
                                                style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/aeboards-staebies-v21-clr-1706019328933.jpg?v=1706019332167) no-repeat center center; background-size: cover">
                                                <span class="color-name">Clear</span>
                                            </div>

                                            <div data-variant-id="105889467" class="color-dot "
                                                style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/aeboards-staebies-v21-blk-1706019329564.jpg?v=1706019333220) no-repeat center center; background-size: cover">
                                                <span class="color-name">Black</span>
                                            </div>

                                            <a href="/pre-order-staebies-v2-1-stabilizers"
                                                data-handle="pre-order-staebies-v2-1-stabilizers"
                                                class="color-more quick-view">
                                                +1 <span class="action-name">Xem thêm 1 màu khác</span>
                                            </a>

                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-33851469" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">
                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/staebies-v2-stabilizers" title="Staebies V2 Stabilizers">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/staebies-v2-stabilizers-pc-2-1702384154414.jpg?v=1702384167397"
                                                alt="Staebies V2 Stabilizers">

                                        </a>
                                        <input type="hidden" name="variantId" value="105264853">
                                        <div class="action-bar">
                                            <a href="/staebies-v2-stabilizers"
                                                class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                <img width="20" height="20" class="icon-option"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714906312483"
                                                    alt="icon-option">
                                                <span class="action-name">Tùy chọn</span>
                                            </a>

                                            <a href="/staebies-v2-stabilizers" data-handle="staebies-v2-stabilizers"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                        <div class="available-cr">
                                            Hết hàng
                                        </div>

                                    </div>

                                    <div class="product-info">
                                        <span class="product-vendor">AEboards</span>
                                        <span class="product-name "><a class="link" href="/staebies-v2-stabilizers"
                                                title="Staebies V2 Stabilizers">Staebies V2 Stabilizers</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">480.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">

                                            <div data-variant-id="105264853" class="color-dot selected"
                                                style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/staebies-v2-stabilizers-pc-2-1702384154414.jpg?v=1702384167397) no-repeat center center; background-size: cover">
                                                <span class="color-name">Clear</span>
                                            </div>

                                            <div data-variant-id="105264854" class="color-dot "
                                                style="background-color: black;">
                                                <span class="color-name">Black</span>
                                            </div>

                                            <a href="/staebies-v2-stabilizers" data-handle="staebies-v2-stabilizers"
                                                class="color-more quick-view">
                                                +1 <span class="action-name">Xem thêm 1 màu khác</span>
                                            </a>

                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-32754424" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">
                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/tx-ap-stabilizers-screw-in" title="TX AP Stabilizers (Screw-In)">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/scr-20230925-ri8-jpeg-1695646115519.jpg?v=1695646120090"
                                                alt="TX AP Stabilizers (Screw-In)">

                                        </a>
                                        <input type="hidden" name="variantId" value="98600642">
                                        <div class="action-bar">
                                            <a href="/tx-ap-stabilizers-screw-in"
                                                class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                <img width="20" height="20" class="icon-option"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714906312483"
                                                    alt="icon-option">
                                                <span class="action-name">Tùy chọn</span>
                                            </a>

                                            <a href="/tx-ap-stabilizers-screw-in"
                                                data-handle="tx-ap-stabilizers-screw-in"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="product-info">
                                        <span class="product-vendor">TX</span>
                                        <span class="product-name "><a class="link"
                                                href="/tx-ap-stabilizers-screw-in"
                                                title="TX AP Stabilizers (Screw-In)">TX AP Stabilizers
                                                (Screw-In)</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">380.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-32632385" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">
                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/neo65-cables" title="15Cables x MOKB Neo65 Cables">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/neo65-cable-banner-1695204567710.png?v=1695204829147"
                                                alt="15Cables x MOKB Neo65 Cables">

                                        </a>
                                        <input type="hidden" name="variantId" value="98237523">
                                        <div class="action-bar">
                                            <a href="/neo65-cables"
                                                class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                <img width="20" height="20" class="icon-option"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714906312483"
                                                    alt="icon-option">
                                                <span class="action-name">Tùy chọn</span>
                                            </a>

                                            <a href="/neo65-cables" data-handle="neo65-cables"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="product-info">
                                        <span class="product-vendor">15Cables</span>
                                        <span class="product-name "><a class="link" href="/neo65-cables"
                                                title="15Cables x MOKB Neo65 Cables">15Cables x MOKB Neo65
                                                Cables</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">640.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul>
                                                <li><strong><span style="color:#c0392b;">Nhập mã 15CablesNeo65 để
                                                            được giảm giá còn 550k khi mua kèm bàn phím
                                                            Neo65</span></strong></li>
                                                <li><strong><span style="color:#c0392b;">Để không lỡ việc đặt hàng,
                                                            nếu việc áp mã báo lỗi, bạn hãy ưu tiên tiếp tục hoàn
                                                            thành việc đặt hàng, sau đó bạn có thể <a
                                                                href="https://m.me/mokbstore" target="_blank">inbox
                                                                shop</a> để được hỗ trợ áp mã</span></strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-32613049" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">
                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/stab-mlv2-pro" title="Stab ML v2 Pro">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/stab-mlv2-pro-2-1695132982719.jpg?v=1695133024270"
                                                alt="Stab ML v2 Pro">

                                        </a>
                                        <input type="hidden" name="variantId" value="98146935">
                                        <div class="action-bar">
                                            <a href="/stab-mlv2-pro"
                                                class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                <img width="20" height="20" class="icon-option"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714906312483"
                                                    alt="icon-option">
                                                <span class="action-name">Tùy chọn</span>
                                            </a>

                                            <a href="/stab-mlv2-pro" data-handle="stab-mlv2-pro"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">ML</span>
                                        <span class="product-name "><a class="link" href="/stab-mlv2-pro"
                                                title="Stab ML v2 Pro">Stab ML v2 Pro</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">230.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-32503701" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">
                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/shimat-sleep" title="Shimat Sleep - pad bàn phím cơ">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/shimat-sleep-1700661991021.jpg?v=1705890512353"
                                                alt="Shimat Sleep - pad bàn phím cơ">

                                        </a>
                                        <input type="hidden" name="variantId" value="97523781">
                                        <div class="action-bar">
                                            <a href="/shimat-sleep"
                                                class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                <img width="20" height="20" class="icon-option"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714906312483"
                                                    alt="icon-option">
                                                <span class="action-name">Tùy chọn</span>
                                            </a>

                                            <a href="/shimat-sleep" data-handle="shimat-sleep"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">Shibay</span>
                                        <span class="product-name "><a class="link" href="/shimat-sleep"
                                                title="Shimat Sleep - pad bàn phím cơ">Shimat Sleep - pad bàn phím
                                                cơ</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">195.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-32503700" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">
                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/shimat-space" title="Shimat Space - pad bàn phím cơ">
                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/shimat-space-1700662005610.jpg?v=1705890519927"
                                                alt="Shimat Space - pad bàn phím cơ">

                                        </a>
                                        <input type="hidden" name="variantId" value="97523777">
                                        <div class="action-bar">
                                            <a href="/shimat-space"
                                                class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                <img width="20" height="20" class="icon-option"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714906312483"
                                                    alt="icon-option">
                                                <span class="action-name">Tùy chọn</span>
                                            </a>

                                            <a href="/shimat-space" data-handle="shimat-space"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">Shibay</span>
                                        <span class="product-name "><a class="link" href="/shimat-space"
                                                title="Shimat Space - pad bàn phím cơ">Shimat Space - pad bàn phím
                                                cơ</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">195.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">


                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-xl-15 product-col">
                            <div class="item_product_main">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-id="product-actions-32500827" enctype="multipart/form-data">
                                    <div class="product-thumbnail pos-relative">

                                        <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1"
                                            href="/tx-switch-puller-thep-khong-gi"
                                            title="TX Switch Puller (Thép không gỉ)">

                                            <img loading="lazy" class="img-fetured" width="480" height="480"
                                                style="--image-scale: 1;"
                                                src="//bizweb.dktcdn.net/thumb/large/100/484/752/products/tx-switch-puller-6-1694655799526.jpg?v=1694655826247"
                                                alt="TX Switch Puller (Thép không gỉ)">

                                        </a>
                                        <input type="hidden" name="variantId" value="97469011">
                                        <div class="action-bar">
                                            <a href="/tx-switch-puller-thep-khong-gi"
                                                class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                <img width="20" height="20" class="icon-option"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-options.png?1714906312483"
                                                    alt="icon-option">
                                                <span class="action-name">Tùy chọn</span>
                                            </a>

                                            <a href="/tx-switch-puller-thep-khong-gi"
                                                data-handle="tx-switch-puller-thep-khong-gi"
                                                class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                <i class="fas fa-eye"></i>
                                                <span class="action-name">Xem nhanh</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product-info">

                                        <span class="product-vendor">TX</span>
                                        <span class="product-name "><a class="link"
                                                href="/tx-switch-puller-thep-khong-gi"
                                                title="TX Switch Puller (Thép không gỉ)">TX Switch Puller (Thép
                                                không gỉ)</a></span>
                                        <div class="product-item-cta position-relative">
                                            <div class="price-box">
                                                <span class="price">165.000₫</span>
                                            </div>
                                        </div>

                                        <div class="item-color-chosen">

                                            <div data-variant-id="97469011" class="color-dot selected"
                                                style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/tx-switch-puller-3-1694655761672.jpg?v=1694655827783) no-repeat center center; background-size: cover">
                                                <span class="color-name">Black</span>
                                            </div>

                                            <div data-variant-id="97469012" class="color-dot "
                                                style="background: url(//bizweb.dktcdn.net/thumb/thumb/100/484/752/products/tx-switch-puller-1-1694655768673.jpg?v=1694655827817) no-repeat center center; background-size: cover">
                                                <span class="color-name">Red</span>
                                            </div>

                                            <a href="/tx-switch-puller-thep-khong-gi"
                                                data-handle="tx-switch-puller-thep-khong-gi"
                                                class="color-more quick-view">
                                                +4 <span class="action-name">Xem thêm 4 màu khác</span>
                                            </a>

                                        </div>

                                        <div class="product-promotion hidden">
                                            <span
                                                class="product-promotion__heading rounded-sm d-inline-flex align-items-center">
                                                <img alt="Lưu ý"
                                                    src="//bizweb.dktcdn.net/100/484/752/themes/920128/assets/icon-product-promotion.png?1714906312483"
                                                    width="16" height="16" class="mr-2">
                                                Lưu ý
                                            </span>

                                            <ul class="promotion-box">

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>

                                                <li></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>


                    <div class="text-center mt-3 col-12">
                        <a href="/accessories-phu-kien-ban-phim-co" title="Xem tất cả"
                            class="btn btn-main btn-icon btn-pill">
                            Xem tất cả

                            <svg class="icon">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- KHI THEM SP VAO GIO HANG -->
    <!-- <div id="popup-cart" class="popcart opencart">
        <div id="popup-cart-desktop" class="clearfix">
            <div class="title-popup-cart">
            </div>
            <div class="wrap_popup">
                <div class="title-quantity-popup">
                    <span class="cart_status" onclick="window.location.href='/cart';">
                        Giỏ hàng của bạn có <span class="cart-popup-count">1</span> sản phẩm
                    </span>
                </div>
                <div class="content-popup-cart">

                    <div class="tbody-popup scrollbar-dynamic">
                        <div class="item-popup productid-109510972">
                            <div style="width: 13%;" class="height image_ text-left">
                                <div class="item-image">
                                    <a class="product-image" href="/order-mousepad-spy-x-family-anya-edition"
                                        title="[Order] Mousepad - Spy x Family (Anya Edition)">
                                        <img loading="lazy" alt="[Order] Mousepad - Spy x Family (Anya Edition)"
                                            src="https://bizweb.dktcdn.net/100/484/752/products/mousepad-spy-x-family-anya-edition.jpg?v=1707409571893"
                                            width="'+ '90' +'" \="">
                                    </a>
                                </div>
                            </div>
                            <div style="width:40%;" class="height text-left fix_info">
                                <div class="item-info">
                                    <p class="item-name">
                                        <a class="text2line textlinefix link"
                                            href="/order-mousepad-spy-x-family-anya-edition"
                                            title="[Order] Mousepad - Spy x Family (Anya Edition)">[Order] Mousepad -
                                            Spy x
                                            Family (Anya Edition)</a>
                                    </p>
                                    <span class="variant-title-popup"></span>
                                    <a href="javascript:;" class="remove-item-cart" title="Xóa" data-id="109510972">
                                        <i class="fa fa-times"></i>&nbsp;&nbsp;Bỏ sản phẩm
                                    </a>
                                    <p class="addpass" style="color:#fff;margin:0px;">109510972</p>
                                </div>
                            </div>
                            <div style="width: 15%;" class="height text-center">
                                <div class="item-price">
                                    <span class="price">540.000₫</span>
                                </div>
                            </div>
                            <div style="width: 15%;" class="height text-center">
                                <div class="qty_h check_">
                                    <input class="variantID" type="hidden" name="variantId" value="109510972">
                                    <button
                                        onclick="var result = document.getElementById('qtyItemP109510972'); var qtyItemP109510972 = result.value; if( !isNaN( qtyItemP109510972 ) &amp;&amp; qtyItemP109510972 > 1 ) result.value--;return false;"
                                        class="num1 reduced items-count btn-minus" type="button">-</button>
                                    <input type="text" maxlength="3" min="0" readonly=""
                                        class="input-text number-sidebar qtyItemP109510972" id="qtyItemP109510972"
                                        name="Lines" size="4" value="1">
                                    <button
                                        onclick="var result = document.getElementById('qtyItemP109510972'); var qtyItemP109510972 = result.value; if( !isNaN( qtyItemP109510972 )) result.value++;return false;"
                                        class="num2 increase items-count btn-plus" type="button">+</button>
                                </div>
                            </div>
                            <div style="width: 17%;" class="height text-center">
                                <span class="cart-price">
                                    <span class="price">540.000₫</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="tfoot-popup">
                        <div class="tfoot-popup-1 clearfix">
                            <div class="popup-ship">
                            </div>
                            <span class="total-p popup-total">Tổng tiền thanh toán: <span
                                    class="total-price">540.000₫</span></span>
                        </div>
                        <div class="tfoot-popup-2 clearfix">
                            <a class="button btn-continue close-pop" title="Tiếp tục mua hàng" href="javascript:;"
                                onclick="$('#popup-cart').modal('hide');"><span><span>Tiếp tục mua
                                        hàng</span></span></a>
                            <a class="button checkout_ btn-proceed-checkout" title="Thực hiện thanh toán"
                                href="/checkout"><span>Thực hiện thanh toán</span></a>
                        </div>
                    </div>
                </div>
                <a title="Close" class="close-modal quickview-close close-pop" href="javascript:;"
                    onclick="$('#popup-cart').modal('hide');"><i class="fa fa-close"></i></a>
            </div>
        </div>

    </div>

    <div id="popupCartModal" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog align-vertical">
            <div class="modal-content "><button type="button" class="close" data-dismiss="modal" data-backdrop="false"
                    aria-label="Close" style="z-index: 9;"><span aria-hidden="true">×</span></button>
                <div class="row row-noGutter">
                    <div class="modal-left col-sm-12 col-lg-12 col-md-12">
                        <h3 class="modal-title"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.00006 15.3803C12.0761 15.3803 15.3804 12.076 15.3804 7.99995C15.3804 3.92391 12.0761 0.619629 8.00006 0.619629C3.92403 0.619629 0.619751 3.92391 0.619751 7.99995C0.619751 12.076 3.92403 15.3803 8.00006 15.3803Z"
                                    fill="#2EB346"></path>
                                <path
                                    d="M8 16C3.58916 16 0 12.4115 0 8C0 3.58916 3.58916 0 8 0C12.4115 0 16 3.58916 16 8C16 12.4115 12.4115 16 8 16ZM8 1.23934C4.27203 1.23934 1.23934 4.27203 1.23934 8C1.23934 11.728 4.27203 14.7607 8 14.7607C11.728 14.7607 14.7607 11.7273 14.7607 8C14.7607 4.27203 11.728 1.23934 8 1.23934Z"
                                    fill="#2EB346"></path>
                                <path
                                    d="M7.03336 10.9434C6.8673 10.9434 6.70865 10.8771 6.59152 10.7582L4.30493 8.43438C4.06511 8.19023 4.06821 7.7986 4.31236 7.55816C4.55652 7.31898 4.94877 7.32145 5.18858 7.5656L7.0154 9.42213L10.7948 5.25979C11.0259 5.00635 11.4176 4.98838 11.6698 5.21766C11.9232 5.44757 11.9418 5.8392 11.7119 6.09326L7.49193 10.7408C7.3773 10.8672 7.21618 10.9403 7.04577 10.944C7.04143 10.9434 7.03771 10.9434 7.03336 10.9434Z"
                                    fill="white"></path>
                            </svg>
                            <span>Thêm vào giỏ hàng thành công</span>
                        </h3>
                        <div class="modal-body">
                            <div class="media">
                                <div class="media-left thumb_img">
                                    <div class="thumb-1x1"><img loading="lazy"
                                            src="https://bizweb.dktcdn.net/thumb/small/100/484/752/products/mousepad-spy-x-family-anya-edition.jpg"
                                            alt="[Order] Mousepad - Spy x Family (Anya Edition)"></div>
                                </div>
                                <div class="media-body body_content">
                                    <div class="product-title">[Order] Mousepad - Spy x Family (Anya Edition)</div>
                                    <div class="variant_title font-weight-light"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-right margin-top-10 col-sm-12 col-lg-12 col-md-12">
                        <div class="title right_title d-flex justify-content-between"><a href="/cart"> Giỏ hàng hiện có
                            </a>
                            <div class="text-right">
                                <span class="price">1.080.000₫</span>
                                <div class="count font-weight-light">
                                    (<span class="cart-popup-count">0</span>) sản phẩm
                                </div>
                            </div>


                        </div>

                        <div class="cart-action">

                            <a href="/checkout" class="btn btn-main btn-full">Thanh toán</a>
                            <a href=".\Cart.html" class="btn btn-main checkout_button btn-full">Xem giỏ hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- XEM NHANH -->

    <div id="quick-view-product" class="quickview-product">
        <div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
        <div class="quick-view-product align-verticle">
            <div class="block-quickview primary_block details-product">
                <div class="row">
                    <div class="product-left-column product-images col-xs-12 col-sm-4 col-md-4 col-lg-5 col-xl-6">
                        <div class="image-block large-image col_large_default">
                            <span class="view_full_size">
                                <a class="img-product d-block  pos-relative embed-responsive embed-responsive-1by1"
                                    title="" href="javascript:;">
                                    <img src="https://bizweb.dktcdn.net/thumb/large/100/484/752/products/mousepad-spy-x-family-anya-edition.jpg"
                                        id="product-featured-image-quickview"
                                        class="img-responsive product-featured-image-quickview" alt="quickview"
                                        style="--image-scale: 1;">
                                </a>
                            </span>
                            <div class="loading-imgquickview" style="display:none;"></div>
                        </div>
                        <div class="more-view-wrapper clearfix">
                            <div class="thumbs_quickview owl_nav_custome1 thumbs_list_quickview"
                                id="thumbs_list_quickview">
                                <ul class="product-photo-thumbs quickview-more-views-owlslider not-thuongdq slick-initialized slick-slider"
                                    id="thumblist_quickview" style="visibility: visible;">
                                    <div aria-live="polite" class="slick-list draggable">
                                        <div class="slick-track"
                                            style="opacity: 1; width: 220px; transform: translate3d(0px, 0px, 0px);"
                                            role="listbox">
                                            <li class="slick-slide slick-current slick-active" data-slick-index="0"
                                                aria-hidden="false" style="width: 100px;" tabindex="-1" role="option"
                                                aria-describedby="slick-slide10"><a href="javascript:void(0)"
                                                    data-imageid="34508041" "="" data-zoom-image="
                                                    https://bizweb.dktcdn.net/thumb/large/100/484/752/products/mousepad-spy-x-family-anya-edition.jpg"
                                                    title="title" tabindex="0"><img
                                                        src="https://bizweb.dktcdn.net/thumb/large/100/484/752/products/mousepad-spy-x-family-anya-edition.jpg"
                                                        alt="Office World"></a></li>
                                            <li class="slick-slide slick-active" data-slick-index="1"
                                                aria-hidden="false" style="width: 100px;" tabindex="-1" role="option"
                                                aria-describedby="slick-slide11"><a href="javascript:void(0)"
                                                    data-imageid="34508041" "="" data-zoom-image="
                                                    https://bizweb.dktcdn.net/thumb/large/100/484/752/products/anya-mousepad-short-copyright-1707405987103.jpg"
                                                    title="title" tabindex="0"><img
                                                        src="https://bizweb.dktcdn.net/thumb/large/100/484/752/products/anya-mousepad-short-copyright-1707405987103.jpg"
                                                        alt="Office World"></a></li>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-center-column product-info product-item col-xs-12 col-sm-6 col-md-8 col-lg-7 col-xl-6 details-pro style_product style_border"
                        id="product-34508041">
                        <div class="head-qv group-status">
                            <h3 class="qwp-name title-product"><a class="text2line"
                                    href="/order-mousepad-spy-x-family-anya-edition"
                                    title="[Order] Mousepad - Spy x Family (Anya Edition)">[Order] Mousepad - Spy x
                                    Family (Anya Edition)</a></h3>
                            <div class="vend-qv group-status">
                                <div class="left_vend">
                                    <div class="first_status top_vendor d-inline-block">Thương hiệu:
                                        <span class="vendor_ status_name">MONOKEI</span>
                                    </div>
                                    <span class="line_tt">|</span>
                                    <div class="top_sku first_status d-inline-block">Mã sản phẩm:
                                        <span class="sku_ status_name">Đang cập nhật</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="qv-product-tags"
                            value="[&quot;Accessories&quot;,&quot;MONOKEI&quot;,&quot;Deskmat&quot;,&quot;Live&quot;]">

                        <div class="quickview-info clearfix">
                            <span class="prices price-box">
                                <span class="price product-price sale-price">540.000₫</span>
                                
                            </span>
                        </div>

                        <div class="product-description product-summary">
                            <div class="rte">

                            </div>
                        </div>

                        <form action="/cart/add" method="post" enctype="multipart/form-data"
                            class="quick_option variants form-ajaxtocart form-product" id="product-actions-34508041">
                            <span class="price-product-detail hidden" style="opacity: 0;">
                                <span class=""></span>
                            </span>

                            <div class="form-group form_product_content">
                                <div class="count_btn_style quantity_wanted_p">
                                    <div class="custom input_number_product soluong1">
                                        <button class="btn_num btn num_1 button button_qty"
                                            onclick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp;&amp; qtyqv > 1 ) result.value--;return false;">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                style="width: 11.2px;">
                                                <path fill="#b0b0b0"
                                                    d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                            </svg>
                                        </button>
                                        <input type="text" id="quantity-detail" name="quantity" value="1" maxlength="2"
                                            class="form-control prd_quantity"
                                            onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                            onchange="if(this.value == 0)this.value=1;">
                                        <button class="btn_num  btn num_2 button button_qty"
                                            onclick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                style="width: 11.2px;">
                                                <path fill="#b0b0b0"
                                                    d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="button_actions clearfix mb-0">
                                        <button type="submit"
                                            class="btn_cool btn fix_add_to_cart ajax_addtocart btn_add_cart btn-cart add_to_cart_detail">
                                            THÊM VÀO GIỎ
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="34508041"><input type="hidden" name="variantId"
                                value="109510972">
                        </form>

                    </div>
                </div>
            </div>
            <a title="Close" class="quickview-close close-window" href="javascript:;"><i class="fas fa-times"></i></a>
        </div>
    </div>


@endsection

@section('script')
@endsection