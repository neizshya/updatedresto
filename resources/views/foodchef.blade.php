<!-- ***** Chefs Area Starts ***** -->
<section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Our Chefs</h6>
                    <h2>Chef yang Berpengalaman Pada Bidangnya
                    </h2>
                </div>
            </div>
        </div>





        <div class="row">

            @foreach ($data2 as $data2)

            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            {{-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li> --}}
                            <li><a href="https://www.instagram.com/{{$data2->insta}}"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <img height="300" width="300" src="fotochef/{{ $data2->image }}" alt="Foto Chef">
                    </div>
                    <div class="down-content">
                        <h4>{{ $data2->name }}</h4>
                        <span>{{ $data2->speciality }}</span>
                    </div>
                </div>
            </div>

            @endforeach


        </div>
    </div>
</section>
<!-- ***** Chefs Area Ends ***** -->
