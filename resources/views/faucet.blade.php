@extends('layouts.page')

@section('main')

        <!--faucet start-->
        <section class="dm-pp-domain ptb-120 position-relative overflow-hidden">
            <img src="assets/img/shapes/dm-domain-bg.png" alt="bg" class="position-absolute left-bottom">
            <img src="assets/img/shapes/dm-about-bg.png" alt="bg" class="position-absolute right-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-40">
                            <h2>Shardeum</h2>
                        </div>
                        <div class="col-lg-12 mb-40 m-lg">
                            <form class="dm-hero-faucet-form d-flex align-items-center">
                                <input type="text" placeholder="Enter address (0x1234...)">
                                <input type="submit" value="Request" class="template-btn primary-btn border-0 flex-shrink-0">
                            </form>
                        </div>
                    </div>

                </div>
                <div class="row justify-content-center g-4">
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
        </section>
        <!--Faucet end-->
@endsection
