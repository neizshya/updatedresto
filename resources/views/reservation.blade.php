<!-- ***** Reservation Us Area Starts ***** -->
<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Disini Anda Dapat Membuat Reservasi dan Bertanya Mengenai Galaxy Resto</h2>
                    </div>
                    <p>Mohon Login Agar Dapat Melakukan Reservasi.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Nomor Telepon</h4>
                                <span><a>08245631548</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <i class="fa fa-envelope"></i>
                                <h4>Emails</h4>
                                <span><a>GalaxyResto@glxy.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @role('user|admin')
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contact" action="{{ url('reservation') }}" method="post">

                        @csrf

                      <div class="row">
                        <div class="col-lg-12">
                            <h4>Reservasi</h4>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                            <input name="name" type="text" id="name" placeholder="Nama" required="">
                          </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                          <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required="">
                        </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                            <input name="phone" type="text" id="phone" placeholder="Nomor Telepon*" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                         <input type="number" name="guest" placeholder="Nomer Tamu">
                        </div>
                        <div class="col-lg-6">
                            <div id="filterDate2">
                              <div class="input-group date" data-date-format="dd/mm/yyyy">
                                <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                <div class="input-group-addon" >
                                  <span class="glyphicon glyphicon-th"></span>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <input type="time" name="time">
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <textarea name="message" rows="6" id="message" placeholder="Masukan Pesan" required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button-icon">Buat Reservasi</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
            @endrole
        </div>
    </div>
</section>
<!-- ***** Reservation Area Ends ***** -->
