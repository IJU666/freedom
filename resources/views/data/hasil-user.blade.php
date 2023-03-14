@extends('layout.layout')
@include('layout.navbar-user')
@section('bebas')
    <div class="container col-lg-8">
        <h5 class="text-center my-5">Detail Pengaduan</h5>
        <div class="p-4 rounded-3" style="background-color: #F3F3F3;">

            <div class="accordion" id="accordionExample">
                {{-- foreach --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Aspirasi
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="col-lg-10 mx-auto">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h6>Raihan Alfarizi</h6>
                                    </div>
                                    <div class="col-lg-6">
                                        <h6 class="text-end text-secondary">Tanggal pelaporan : 2023/04/04</h6>
                                    </div>
                                </div>
                                <div class="my-2">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur facilis incidunt
                                    dolor voluptate veniam cum numquam debitis magni, laborum unde nemo minus cupiditate
                                    quos sed amet vero omnis tempora officia magnam quae non illum. Vero molestiae

                                </div>
                                <div class="row">
                                    <p class="col-lg-2">status</p>
                                    <p class="btn btn-secondary" disabled>Di proses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- endforeach --}}

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#pengaduan" aria-expanded="false" aria-controls="collapseOne">
                            Pengaduan
                        </button>
                    </h2>
                    <div id="pengaduan" class="accordion-collapse collapse " aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="col-lg-10 mx-auto">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h6>Raihan Alfarizi</h6>
                                    </div>
                                    <div class="col-lg-6">
                                        <h6 class="text-end text-secondary">Tanggal pelaporan : 2023/04/04</h6>
                                    </div>
                                </div>
                                <div class="my-2">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur facilis incidunt
                                    dolor voluptate veniam cum numquam debitis magni, laborum unde nemo minus cupiditate
                                    quos sed amet vero omnis tempora officia magnam quae non illum. Vero molestiae
                                    perspiciatis vitae pariatur accusamus quidem quod accusantium, fuga eos quae quis natus
                                    cumque ipsam, rem doloremque fugit ullam, facere quisquam architecto expedita amet.
                                    Atque, voluptatem. Voluptatibus labore maiores veritatis quibusdam consectetur atque
                                    eaque commodi ipsum libero, inventore eius magni tempora possimus. Incidunt architecto
                                    eum praesentium quibusdam culpa tempore similique error magnam accusamus est reiciendis
                                    dolorem, consequatur quia accusantium rem, laboriosam facilis et autem quam!
                                </div>

                                <div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    @include('layout.footer-user')
@endsection
