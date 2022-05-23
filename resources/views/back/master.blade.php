<!DOCTYPE html>
<html lang="fa">

<head>
    @include('back.partials.head')
</head>

<body dir="rtl" class="bg-gray-100 dark:bg-gray-800 rounded-2xl h-screen overflow-hidden relative font-body">
    <div class="flex items-start justify-between">
        <!-- Nav Bar -->
        <div class="h-screen hidden lg:block my-4 mr-4 shadow-lg relative w-80">
            <div class="bg-white h-full rounded-2xl dark:bg-gray-700">
                <div class="flex items-center justify-center pt-6">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="35">
                        <image width="35" height="35" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAAP0lEQVRYhe3OMQEAIADDsIF/z0NBuXc0CnLaNiPuSiRmPswQM8QMMUPMEDPEDDFDzBAzxAwxQ8wQM8QM2ckkeX+LBELpdJssAAAAAElFTkSuQmCC" />
                        <image x="2" width="28" height="25" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAZCAYAAAAiwE4nAAAEYUlEQVRIia1WTYgcRRT+vldV3TOz2exffsghJBcNGhU1BxOQJMRDAgoi/ixBBCFeRC/i0asiePDmSSVBoiARDQgBEU8JBA+Cp0gkNyWERFeT7M5Md1fVk+qZXXtmZyVR38w3VFf36/f31XvDHVOEAmD6EFgpFb1S6/UkUQWsEbjM7l8pqhMKHNg8lfemJR71PjzSXwnfbaSbRDa+NVmMkTlY+Wi59Bd81FdC1L3d2/3LZVG1b1b6AQUz/6R/xwZTZGK4LQrPdQt/IoRoVu+1DU9G4eGVMu6JwoN3ZdAQdYqTgSZEaJT8pKjC/rEXXHfExX7AS+m6Ao4L6xpNxIjBZCi3AiuoaygNWCeLhY9Hxx10wLdBMbdcxsPpuh9xLBLbBl6vx7oIk6GpXFKtYO0QTlwZ9M0U6bjkglOR+lRU5OmWjzoXySc34s3EGmaWcAbwAAKAKuKB0sdH1zkHXG1ZnK+IF5r7fcWL2MDihqSZyohMgBAUGrU36RlHfC0GW/sBR5r7RdTHVXjPJB0znXHoLTH4cq24uROQRAjxNyh+j8AuALcBLCVMCd4S4t6uxz4AywTaAKzWJedVo7gwXoV08GcVKAlq02BNMiEqBQufokS3CjqbWdods3kkobMtuxxV29eXCq4UsSxLP1tEPFECrxnL+U1BH46KkexwOuP7/YBFqPab7WV1FQGq1oGm4xGsoW7uOJ+uo8KQ1LKKEao3WkbOM8RPfeEvFcTLcx17gapXRgxOCeY9ea4I+thG9bwbcc7Eubb7zJT+9a3z7mYrNxhhd4fAJsGW3PDHySfn32FT213elpk98wCaqA0OjHJXJvzhfzXaspe2O9m+AGCBAxg3LJYCNw3xuSETy+7TAeP+k5Q+bjWZOZgDZ1W1WxOx0zigOvwhsROCA1XEoaDYMeDL2jOpo9hhy615oGtq6DciXCVfPpObk7YKZ+oxOG3GYyAMFe2ch6ZyXCsjez6Sqb8aY3irF6/d6vo+/85MDSNAOzc7hbRpP0RFiICzggy86bvlUk39WcsRzDhiS44HrUBrGBRGUFhB4QzLjvBIynUKM/UMN0RLgMzgSyErEZZClCTKtJ5pua+2CLEggIxXOuXHA8/7mBox4AOyEJH5iCwE/RWqF5tjJjlthqEa4ExUtTGqiwqnCpfWXR+O0cjuelqkVDSRWXVFxLOTyGKIs8Cwcwy7UfKYQwjwjTO4Ma7ng7bgzDOD5xtDNqoigvsLj/vXVZboWeBDbaRDhkxZHbQasZQJPx7XVVX0gi5SmL4DpQQjRKAcjxPmngPeoeKnUXqN1iM5w4D3Wo4/j+v3Q9wn1jwksY4MCHUBubnn49PrjBGnLPAuGs6tRTaevqh/5ORz7cz8MrLvg/Uii5h1XMNCSxbTFFj1mUCREW93CFntSONIjB1HB8C04d7M8Hs03tfJ3RXTsYP/o4kwnnyj73W3AH9a4ouMeNUAp5sH+U4kBR4VNyxw2givUmS7QltV0Oovk70DD93TSqEAAAAASUVORK5CYII=" />
                        <path data-name="Color Fill 1" d="m6.676 25.868.844.094c-.031 1.457-.29 3.909.281 4.878a3.406 3.406 0 0 0 1.876-.281v-1.595h.75a2.834 2.834 0 0 0 .373 1.876 3.665 3.665 0 0 0 2.251-.375v-1.5h.749l-.188 2.157c-1.1.815-2.539.479-3.752.094-.488.618-1.615.521-2.439.281-.075 2.23-3.357 3.574-4.69 1.595a6.12 6.12 0 0 1-.37-3.192h.75a10.822 10.822 0 0 0 .189 2.628l.657.563c3.974.109 2.825-3.583 2.719-7.223Zm23.731 0h.75v5.816h-.75v-5.816ZM9.583 26.994l.938.094-.094.75-.937-.094Zm8.536 1.032h.844v.75h-.844v-.75Zm-1.97 1.874h.751a10.828 10.828 0 0 0 .188 2.626l.657.563c3.013.124 2.839-1.259 2.72-4.127l.844.094a3.149 3.149 0 0 0 .281 1.782 3.67 3.67 0 0 0 1.97-.281v-1.593h.75a2.834 2.834 0 0 0 .375 1.876H25.9l.281-.281a2.837 2.837 0 0 1 .563-2.064c1.983-.652 2.913.634 2.345 2.533-1.426 1.087-1.253.271-2.533.188l-.657.469c-.927.321-1.633-.306-2.157-.469-.5.626-1.7.524-2.533.281-.075 2.23-3.357 3.574-4.69 1.595a6.122 6.122 0 0 1-.37-3.192Zm11.256-.844-.469.469a1.655 1.655 0 0 0 .375 1.313h.094a1.394 1.394 0 0 0 1.126-.375v-.092l-.094-.844c-.209-.427-.382-.481-1.032-.469Zm-2.626 4.5h-.844l.094-.844.75.094v.75Zm-13.226-.75h.847v.75h-.847v-.746Zm1.219 0h.844v.75h-.843v-.746Zm9.943 0h.75v.75h-.75v-.746ZM12.21 34.029h.75v.75h-.75v-.75Z" style="fill:#e8125e;fill-rule:evenodd" />
                    </svg>

                </div>
                <nav class="mt-6">


                    @include('back.partials.sidebar')


                </nav>
                <div class="absolute bottom-0 my-10">
                    <a class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-100 transition-colors duration-200 flex items-center py-2 px-8" href="https://github.com/aminesmkhani/aminpanel">
                        <svg width="20" xmlns="http://www.w3.org/2000/svg" class="text-blue-500 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span class="mx-4">
                            امین پنل
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Navbar  -->
        <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
            <!-- Header -->
            <header class="w-full shadow-lg bg-white dark:bg-gray-700 items-center h-16 rounded-2xl z-40">
                @include('back.partials.header')
            </header>
            <!-- Header -->

            <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto">






                        @yield('content')





                    </div>
                </section>
                <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
                        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                        </path>
                    </svg>
                    <p class="leading-relaxed text-lg">
                        ایده درست کردن یک ادمین پنل از اونجا اومد که واسه هر پروژه لاراول که می خواستم استارت کنم کلی
                        باید کانفیگ های قالب رو انجام میدادم اونم تازه با کلی فایلی که احتیاج نداشتم و مجبوراٌ با قالب
                        استفاده میکردم و این واقعاٌ حوصله ام رو سر میبرد واسه همین این پنل رو خیلی خیلی ساده با فریم ورک
                        تیلویند درست کردم با امکانات خیلی کم یا بهتره بگم اون هایی که زیاد استفاده میشه و هر چیزی رو هم
                        که لازم داشتم رو اضافه میکنم بهش, امین پنل کاملاٌ اوپن سورس هست و میتونید برای توسعش کمک کنید و
                        .فیچر هایی که میخواهید رو اضافه کنید.
                    </p>
                    <span class="inline-block h-1 w-10 rounded bg-purple-500 mt-8 mb-6"></span>
                    <h2 class="text-gray-900 font-medium tracking-wider text-sm mb-1">امین اسمخانی</h2>
                    <p class="text-gray-500">توسعه دهنده وب ساده</p>
                </div>

            </div>
        </div>
    </div>
    @include('back.partials.footer')
    @include('back.partials.script')
</body>


</html>