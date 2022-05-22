@extends('front.master')

@section('content')

<section>
    <div class="mx-auto">
        <div class="w-full bg-slate-800 rounded-xl">
            <div class="grid grid-cols-12 gap-2 pb-5">
                <div class="lg:col-span-9 col-span-full grid-cols-1   ">
                    <div class="block lg:hidden border-b mb-2 border-red-800">
                        <aside class=" m-3 text-right ">
                            <div class="flex justify-end gap-3 sidebar sidebar-shop">
                                <div class="flex items-center">
                                    <label class="text-sm  py-1">فیلترها </label>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                </div>
                                <div class="flex items-center">
                                    <label class="text-sm  py-1">پربازدیدترین </label>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-1 mt-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 4h13M3 8h9m-9 4h9m5-4v12m0 0l-4-4m4 4l4-4" />
                                    </svg>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="toolbox w-full pb-5">
                        <div class="grid grid-cols-12">
                            <div class="col-span-9 toolbox-left ">
                                <div class="flex items-center">
                                    <div class="toolbox-layout flex gap-3 m-3 dark:fill-red-500 fill-slate-500">
                                        <a href="category-list.html" class="btn-layout ">
                                            <svg class="" width="16" height="10">
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
                                    <div class="toolbox-sort flex">
                                        <div class="select-custom">
                                            <select name="sortby" id="sortby" class="form-control rounded bg-inherit py-1 ring-1 ring-slate-500">
                                                <option value="popularity" selected="selected">بیشترین خرید</option>
                                                <option value="rating">بیشترین امتیاز</option>
                                                <option value="date">تاریخ</option>
                                            </select>
                                        </div>
                                        <label for="sortby" class="ml-2"> : مرتب سازی براساس </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-3 toolbox-right text-center m-2">
                                <div class="toolbox-info">
                                    نمایش <span>9 از 56</span> محصول
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="products mb-3">
                        <div class="row justify-content-center">
                            <div class="grid grid-cols-3 gap-5 px-5">
                                <div class="product text-center bg-slate-700 rounded-lg">
                                    <figure class="product-media max-h-fit ">
                                        <span class="product-label label-new">جدید</span>
                                        <a href="product.html " class="">
                                            <img src="{{ asset('img/product/lg/men.jpg') }}" alt="تصویر محصول" class="product-image">
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

                                        <div class="product-nav product-nav-thumbs flex gap-2 p-2 ">
                                            <a href="#" class="active ">
                                                <img src="{{ asset('img/product/lg/men.jpg') }}" class="rounded-md" alt="product desc">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('img/product/lg/men.jpg') }}" class="rounded-md" alt="product desc">
                                            </a>

                                            <a href="#">
                                                <img src="{{ asset('img/product/lg/men.jpg') }}" class="rounded-md" alt="product desc">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="product text-center bg-slate-700 rounded-lg">
                                    <figure class="product-media">
                                        <span class="product-label label-new">جدید</span>
                                        <a href="product.html">
                                            <img src="{{ asset('img/product/lg/men1.jpg') }}" alt="تصویر محصول" class="product-image h-30">
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
                                        <div class="product-nav product-nav-thumbs flex gap-2 p-2 ">
                                            <a href="#" class="active ">
                                                <img src="{{ asset('img/product/lg/men1.jpg') }}" class="rounded-md" alt="product desc">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('img/product/lg/men1.jpg') }}" class="rounded-md" alt="product desc">
                                            </a>

                                            <a href="#">
                                                <img src="{{ asset('img/product/lg/men1.jpg') }}" class="rounded-md" alt="product desc">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="product text-center bg-slate-700 rounded-lg">
                                    <figure class="product-media">
                                        <span class="product-label label-new">جدید</span>
                                        <a href="product.html">
                                            <img src="{{ asset('img/product/lg/men2.jpg') }}" alt="تصویر محصول" class="product-image h-30">
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

                                        <div class="product-nav product-nav-thumbs flex gap-2 p-2 ">
                                            <a href="#" class="active ">
                                                <img src="{{ asset('img/product/lg/men2.jpg') }}" class="rounded-md" alt="product desc">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('img/product/lg/men2.jpg') }}" class="rounded-md" alt="product desc">
                                            </a>

                                            <a href="#">
                                                <img src="{{ asset('img/product/lg/men2.jpg') }}" class="rounded-md" alt="product desc">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <nav aria-label="Page navigation" class="">
                        <ul class="pagination justify-content-center flex">
                            <li class="page-item">
                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                    بعدی <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item-total">از 6</li>
                            <li class="page-item disabled">
                                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                    <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>قبلی
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="lg:col-span-3 col-span-full p-5 ">
                    <div class="hidden lg:block">
                        <aside class=" text-right bg-slate-700 rounded-lg p-3">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection