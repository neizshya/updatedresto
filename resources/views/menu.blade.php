
    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Menu yang dipilih agar selalu memiliki rasa berkualitas</h2>
                        <h3>Geser gambar untuk melihat menu</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">


                    @foreach ($data as $data)


                    <div class="item">
                        <div style="background-image: url('/FotoMakanan/{{$data->gb_makanan}}')" class='card '>
                            <div class="price"><h6>{{$data->harga}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$data->nm_makanan}}</h1>
                              <p class='description'>{{$data->deskripsi}}.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->
