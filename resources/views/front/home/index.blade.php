@extends('front.master')



@section('content')


<div class="">
    <section>


        <div class="mx-auto w-10/12 rounded-xl">
            <div class="w-full  ">
                <div class="grid lg:grid-cols-5 grid-cols-1 gap-2 bg-slate-500">
                    <div class="toolbox w-full">
                        <div class="toolbox-right bg-amber-300">
                            <div class="toolbox-info">
                                نمایش <span>9 از 56</span> محصول
                            </div>
                        </div>

                        <div class="toolbox-left bg-red-300">
                            <div class="toolbox-sort">
                                <label for="sortby">مرتب سازی براساس : </label>
                                <div class="select-custom">
                                    <select name="sortby" id="sortby" class="form-control">
                                        <option value="popularity" selected="selected">بیشترین خرید</option>
                                        <option value="rating">بیشترین امتیاز</option>
                                        <option value="date">تاریخ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="toolbox-layout">
                                <a href="category-list.html" class="btn-layout">
                                    <svg width="16" height="10">
                                        <rect x="0" y="0" width="4" height="4"></rect>
                                        <rect x="6" y="0" width="10" height="4"></rect>
                                        <rect x="0" y="6" width="4" height="4"></rect>
                                        <rect x="6" y="6" width="10" height="4"></rect>
                                    </svg>
                                </a>

                                <a href="category-2cols.html" class="btn-layout">
                                    <svg width="10" height="10">
                                        <rect x="0" y="0" width="4" height="4"></rect>
                                        <rect x="6" y="0" width="4" height="4"></rect>
                                        <rect x="0" y="6" width="4" height="4"></rect>
                                        <rect x="6" y="6" width="4" height="4"></rect>
                                    </svg>
                                </a>

                                <a href="category.html" class="btn-layout active">
                                    <svg width="16" height="10">
                                        <rect x="0" y="0" width="4" height="4"></rect>
                                        <rect x="6" y="0" width="4" height="4"></rect>
                                        <rect x="12" y="0" width="4" height="4"></rect>
                                        <rect x="0" y="6" width="4" height="4"></rect>
                                        <rect x="6" y="6" width="4" height="4"></rect>
                                        <rect x="12" y="6" width="4" height="4"></rect>
                                    </svg>
                                </a>

                                <a href="category-4cols.html" class="btn-layout">
                                    <svg width="22" height="10">
                                        <rect x="0" y="0" width="4" height="4"></rect>
                                        <rect x="6" y="0" width="4" height="4"></rect>
                                        <rect x="12" y="0" width="4" height="4"></rect>
                                        <rect x="18" y="0" width="4" height="4"></rect>
                                        <rect x="0" y="6" width="4" height="4"></rect>
                                        <rect x="6" y="6" width="4" height="4"></rect>
                                        <rect x="12" y="6" width="4" height="4"></rect>
                                        <rect x="18" y="6" width="4" height="4"></rect>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="products mb-3">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-4">
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">جدید</span>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-4.jpg" alt="تصویر محصول" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>افزودن
                                                    به لیست علاقه مندی</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="مشاهده سریع محصول"><span>مشاهده سریع</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="مقایسه"><span>مقایسه</span></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>افزودن به
                                                    سبد خرید</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">زنانه</a>
                                        </div>
                                        <h3 class="product-title text-center"><a href="product.html">دامن چرمی
                                                قهوه ای</a></h3>
                                        <div class="product-price">
                                            64,000 تومان
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 20%;"></div>

                                            </div>
                                            <span class="ratings-text">( 2 بازدید )</span>
                                        </div>

                                        <div class="product-nav product-nav-thumbs">
                                            <a href="#" class="active">
                                                <img src="assets/images/products/product-4-thumb.jpg" alt="product desc">
                                            </a>
                                            <a href="#">
                                                <img src="assets/images/products/product-4-2-thumb.jpg" alt="product desc">
                                            </a>

                                            <a href="#">
                                                <img src="assets/images/products/product-4-3-thumb.jpg" alt="product desc">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                    <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>قبلی
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item-total">از 6</li>
                            <li class="page-item">
                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                    بعدی <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav> -->
                </div>
                <!-- <aside class=" bg-lime-600 order-lg-first">
                    <div class="sidebar sidebar-shop">
                        <div class="widget widget-clean">
                            <label>فیلترها : </label>
                            <a href="#" class="sidebar-filter-clear">پاک کردن همه</a>
                        </div>

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                                    دسته بندی
                                </a>
                            </h3>

                            <div class="collapse show" id="widget-1">
                                <div class="widget-body">
                                    <div class="filter-items filter-items-count">

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-1">
                                                <label class="custom-control-label" for="cat-1">لباس</label>
                                            </div>
                                            <span class="item-count">3</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true" aria-controls="widget-2">
                                    سایز
                                </a>
                            </h3>

                            <div class="collapse show" id="widget-2">
                                <div class="widget-body">
                                    <div class="filter-items">
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="size-1">
                                                <label class="custom-control-label" for="size-1">XS</label>
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="size-2">
                                                <label class="custom-control-label" for="size-2">S</label>
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked="" id="size-3">
                                                <label class="custom-control-label" for="size-3">M</label>
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked="" id="size-4">
                                                <label class="custom-control-label" for="size-4">L</label>
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="size-5">
                                                <label class="custom-control-label" for="size-5">XL</label>
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="size-6">
                                                <label class="custom-control-label" for="size-6">XXL</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-3" role="button" aria-expanded="true" aria-controls="widget-3">
                                    رنگ
                                </a>
                            </h3>

                            <div class="collapse show" id="widget-3">
                                <div class="widget-body">
                                    <div class="filter-colors">
                                        <a href="#" style="background: #b87145;"><span class="sr-only">Color
                                                Name</span></a>
                                        <a href="#" style="background: #f0c04a;"><span class="sr-only">Color
                                                Name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                Name</span></a>
                                        <a href="#" class="selected" style="background: #cc3333;"><span class="sr-only">Color Name</span></a>
                                        <a href="#" style="background: #3399cc;"><span class="sr-only">Color
                                                Name</span></a>
                                        <a href="#" style="background: #669933;"><span class="sr-only">Color
                                                Name</span></a>
                                        <a href="#" style="background: #f2719c;"><span class="sr-only">Color
                                                Name</span></a>
                                        <a href="#" style="background: #ebebeb;"><span class="sr-only">Color
                                                Name</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-4" role="button" aria-expanded="true" aria-controls="widget-4">
                                    برند
                                </a>
                            </h3>

                            <div class="collapse show" id="widget-4">
                                <div class="widget-body">
                                    <div class="filter-items">
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-1">
                                                <label class="custom-control-label" for="brand-1">Next</label>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true" aria-controls="widget-5">
                                    قیمت
                                </a>
                            </h3>

                            <div class="collapse show" id="widget-5">
                                <div class="widget-body">
                                    <div class="filter-price">
                                        <div class="filter-price-text">
                                            محدوده قیمت :
                                            <span id="filter-price-range">1000تومان - 750000تومان</span>
                                        </div>

                                        <div id="price-slider" class="noUi-target noUi-ltr noUi-horizontal">
                                            <div class="noUi-base">
                                                <div class="noUi-connects">
                                                    <div class="noUi-connect" style="transform: translate(0%) scale(0.74975, 1);"></div>
                                                </div>
                                                <div class="noUi-origin" style="transform: translate(0%); z-index: 5;">
                                                    <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1000.0" aria-valuemax="749800.0" aria-valuenow="1000.0" aria-valuetext="1000تومان">
                                                        <div class="noUi-touch-area"></div>
                                                        <div class="noUi-tooltip">1000تومان</div>
                                                    </div>
                                                </div>
                                                <div class="noUi-origin" style="transform: translate(74.975%); z-index: 4;">
                                                    <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="1200.0" aria-valuemax="1000000.0" aria-valuenow="750000.0" aria-valuetext="750000تومان">
                                                        <div class="noUi-touch-area"></div>
                                                        <div class="noUi-tooltip">750000تومان</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside> -->


            </div>
        </div>



    </section>

</div>
@endsection