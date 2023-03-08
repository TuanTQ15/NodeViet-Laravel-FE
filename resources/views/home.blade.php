@extends('layouts.home')

@section('main')
        <!--project index start-->
        <section class="ds-faq pb-120 ds-bg mt-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title text-center">
                            <h2 class="project-lists mb-3 mt-50">Thống kê dự án</h2>
                            <p>Dưới đây là thống kê các dự án đang trong quá trình chạy testnet, những dự án sắp chạy và những dự án đã kết thúc testnet.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="d-flex align-items-center justify-content-center ds-faq-controls">
                        <ul class="nav nav-tabs border-0 ds-faq-controls justify-content-center" role="tablist">
                            <li><button class="active" data-bs-toggle="tab" data-bs-target="#project_active" aria-selected="true" role="tab"><i class="fa-solid fa-gear"></i><span class="ms-3">Hoạt động</span></button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#project_upcoming" aria-selected="false" tabindex="-1" role="tab"><i class="fa-solid fa-server"></i><span class="ms-3">Sắp tới</span></button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#project_ended" aria-selected="false" tabindex="-1" role="tab"><i class="fa-solid fa-server"></i><span class="ms-3">Kết thúc</span></button></li>
                        </ul>
                    </div>
                    <div class="tab-content mt-30 position-relative zindex-1">
                        <div class="tab-pane fade show active" id="project_active" role="tabpanel">
                            <div class="accordion hm2-accordion rounded-2 deep-shadow bg-white" id="accordion_1">
                                <div class="row justify-content-start g-4">
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <span class="dm-offer-badge fw-bold text-white position-absolute">Incentivized</span>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="project_active" role="tabpanel">
                            <div class="accordion hm2-accordion rounded-2 deep-shadow bg-white" id="accordion_1">
                                <div class="row justify-content-start g-4">
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <span class="dm-offer-badge fw-bold text-white position-absolute">Active</span>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <span class="dm-offer-badge fw-bold text-white position-absolute">Active </span>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <span class="dm-offer-badge fw-bold text-white position-absolute">Active </span>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <span class="dm-offer-badge fw-bold text-white position-absolute">Active </span>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <span class="dm-offer-badge fw-bold text-white position-absolute">Active </span>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="project_upcoming" role="tabpanel">
                            <div class="accordion hm2-accordion rounded-2 deep-shadow bg-white" id="accordion_1">
                                <div class="row justify-content-start g-4">
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <span class="dm-offer-badge fw-bold text-white position-absolute">Active </span>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <span class="dm-offer-badge fw-bold text-white position-absolute">Active </span>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <span class="dm-offer-badge fw-bold text-white position-absolute">Active </span>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <span class="dm-offer-badge fw-bold text-white position-absolute">Active </span>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <span class="dm-offer-badge fw-bold text-white position-absolute">Active </span>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="project_ended">
                            <div class="accordion hm2-accordion rounded-2 deep-shadow bg-white" id="accordion_1">
                                <div class="row justify-content-start g-4">
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <span class="dm-offer-badge fw-bold text-white position-absolute">Active </span>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <span class="dm-offer-badge fw-bold text-white position-absolute">Active </span>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <span class="dm-offer-badge fw-bold text-white position-absolute">Active </span>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <span class="dm-offer-badge fw-bold text-white position-absolute">Active </span>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="dm-pp-domain-item position-relative overflow-hidden zindex-1">
                                            <a href="https://shardeum.org/" target="_blank" rel="noopener noreferrer"><img src="assets/img/project/shardeum-transparent.png" alt="cpanel" class="img-fluid">Shardeum</a>
                                            <span class="dm-offer-badge fw-bold text-white position-absolute">Active</span>
                                            <a href="#">Faucet<i class="fa-solid fa-arrow-right-long"></i></a>
                                            <span class="circle-small position-absolute"></span>
                                            <span class="circle-shape shape-1 position-absolute"></span>
                                            <span class="circle-shape shape-2 position-absolute"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--project index end-->
@endsection
