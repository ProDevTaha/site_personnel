@extends('layout')

@section('content')
<main class="flex-shrink-0">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container px-5">
            <a class="navbar-brand" href="/"><span class="fw-bolder text-primary">Taha Dourhmi</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#myResume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#Myproject">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
 
    <!-- Projects Section-->
    <section class="py-5" id="Myproject">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Project Card 1-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex flex-wrap justify-content-center align-items-center">
                                <div class="p-2" style="width:400px">
                                    <h2 class="fw-bolder">MyColis</h2>
                                    <p>create a multi-user application for delivery that manages pickups and order status (deliver or return) and track packages and payments using React.js, Redux, Laravel, Mysql and Merise</p>
                                </div>
                                <a href="https://mycolis.ma/" target="_blank">
                                    <div class=" p-2" style="width:350px">
                                        <img class="img-fluid rounded" src="assets/mycoli.png" alt="img" style="height:200px" />
                                    </div>
                                </a>
                        
                            </div>
                        </div>
                    </div>
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex flex-wrap justify-content-center align-items-center">
                                <div class="p-2" style="width:400px">
                                    <h2 class="fw-bolder">BOOTCODING</h2>
                                    <p>create web site the sell courses like java and angular ... and streaming using php,laravel,mysql and bootstrap</p>
                                </div>
                                <a href="https://boot-coding.com/" target="_blank">
                                    <div class=" p-2" style="width:350px">
                                        <img class="img-fluid rounded" src="assets/bootcoding.png" alt="img" style="height:200px" />
                                    </div>
                                </a>
                        
                            </div>
                        </div>
                    </div>
                    <!-- Project Card 2-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex flex-wrap justify-content-center align-items-center">
                                <div class="p-2" style="width:400px">
                                    <h2 class="fw-bolder">BOOTCODERS</h2>
                                    <p>Create Website the sell iptv with payment gateway stripe using php,laravel,mysql,javascript,sass and bootstrap</p>
                                </div>
                               <a href="https://www.bootcoders.com/" target="_blank">
                                <div class=" p-2" style="width:350px">
                                    <img class="img-fluid rounded" src="assets/bootcoders.png" alt="img" style="height:200px" />
                                </div>
                               </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- Call to action section-->
   <section class="py-5 bg-gradient-primary-to-secondary text-white">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
            <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="/contact">Contact me</a>
        </div>
    </div>
</section>
   
</main>
<!-- Footer-->
<footer class="bg-white py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto"><div class="small m-0"> Copyright &copy; {{ date("Y") }} TahaDourhmi </div></div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
@endsection