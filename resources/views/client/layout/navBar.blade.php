<div class=" navContainer text-white fixed-top">
    <nav class=" py-2">
        <div class="container nav d-block  navbar-expand-lg bg-body-tertiary ">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-3 col-10">
                    <a class="navbar-brand py-2 text-center  m-0" href="{{ route('client.home') }}">
                        <img class="px-3" src="{{ asset('assets_website/imgs/home/malmas.svg') }}" />
                    </a>
                </div>
                <div class="col-lg-9  col-2 d-flex justify-content-sm-center" >
                    <div class="container-fluid nav-container">
                        <a class="navbar-toggler  border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <i class="fa-solid fa-bars  fs-3"></i>
                        </a>

                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                             aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                    <a class="navbar-brand  py-2 text-center  m-0" href="{{ route('client.home') }}">
                                        <img class="" src="{{ asset('assets_website/imgs/home/malmas.svg') }}" />
                                    </a>
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                                    <i class="fa-solid fa-xmark text-white"></i>
                                </button>
                            </div>

                            <div class="offcanvas-body header ">

                                <ul class="navbar-nav w-100  gap-lg-3 gap-2  align-items-lg-center">

                                    <li class="nav-item px-2 ">
                                        <a class="nav-link active " aria-current="page" href="{{ route('client.home') }}">
                                        <span >
                                          @lang('trans.home')
                                        </span>
                                        </a>
                                    </li>
                                    <li class="nav-item px-2  ">
                                        <a class="nav-link " aria-current="page" href="{{ route('client.home') }}#services">
                                            <span class="">@lang('trans.services')</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  px-2 ">
                                        <a class="nav-link " aria-current="page" href="{{ route('client.home') }}#packages"><span class="">@lang('trans.packages')</span></a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link " aria-current="page" href="{{ route('client.home') }}#about"><span class="">@lang('trans.about_us')</span></a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link " aria-current="page" href="{{ route('client.home') }}#contactUs"><span class="">@lang('trans.contact_with_us')</span></a>
                                    </li>

                                </ul>
                                <ul class="navbar-nav w-100  gap-lg-3 gap-2 justify-content-lg-end align-items-lg-center">
                                    <li>
                                        <a href="{{route('lang',lang() == 'ar'? 'en' : 'ar')}}" class="text-decoration-none fw-semibold nav-link nav-hover mx-3 fs-7 ">
                                            <div class="px-2 LanguageMenu " role="button">
                                                <span class="lan" id="LanguageText"> {{ lang() == 'ar'? 'English' : 'العربية'}}</span>
                                                <span>
                                                <i class="fa-solid fa-globe"></i>
                                            </span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class=" d-flex">
                                        <a href="tel:{{ setting('phone') }}" class="bg-primary-color btn smallres w-auto my-2 rounded-2 text-white fw-semibold px-md-5 px-4 py-2 d-flex align-items-center gap-2 w-auto"><span><svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.71 14.29L7.56 14.17C7.50426 14.1322 7.44372 14.1019 7.38 14.08L7.2 14C7.03782 13.9661 6.86976 13.973 6.71092 14.0201C6.55208 14.0673 6.40744 14.1531 6.29 14.27C6.20167 14.3672 6.13064 14.4788 6.08 14.6C6.00432 14.7822 5.98423 14.9827 6.02226 15.1763C6.06028 15.3699 6.15472 15.5479 6.2937 15.688C6.43267 15.828 6.60996 15.9238 6.80326 15.9633C6.99656 16.0028 7.19722 15.9843 7.38 15.91C7.4995 15.852 7.61052 15.778 7.71 15.69C7.84876 15.5494 7.94275 15.3708 7.98013 15.1768C8.0175 14.9828 7.99658 14.7821 7.92 14.6C7.87014 14.4844 7.79889 14.3792 7.71 14.29ZM11 0H3C2.20435 0 1.44129 0.316071 0.87868 0.87868C0.316071 1.44129 0 2.20435 0 3V17C0 17.7956 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H11C11.7956 20 12.5587 19.6839 13.1213 19.1213C13.6839 18.5587 14 17.7956 14 17V3C14 2.20435 13.6839 1.44129 13.1213 0.87868C12.5587 0.316071 11.7956 0 11 0ZM12 17C12 17.2652 11.8946 17.5196 11.7071 17.7071C11.5196 17.8946 11.2652 18 11 18H3C2.73478 18 2.48043 17.8946 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V3C2 2.73478 2.10536 2.48043 2.29289 2.29289C2.48043 2.10536 2.73478 2 3 2H11C11.2652 2 11.5196 2.10536 11.7071 2.29289C11.8946 2.48043 12 2.73478 12 3V17Z" fill="white"/>
                                            </svg>
                                            </span><span class="d-flex align-items-center pt-1">{{ setting('phone') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</div>
<div class="floatwhatsapp ">
    <a href="https://wa.me/{{ setting('whatsapp') }}" class="text-white" target="_blank">
        <i class="fa-brands fa-whatsapp "></i>
    </a>
</div>

<div class="back-to-top" id="backTop">
    <i class="fa-solid fa-chevron-up"></i>
</div>