@extends('home/layouts/main')
@section('container')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <img src="/img/akhi.png" style="max-height: 100px;">
            <h2>Kontak</h2>
            <img src="/img/ukhti.png" style="max-height: 100px;">
            <h3>Segera <span>Hubungi Kami</span></h3>
            <p>Hubungi kami untuk informasi lebih lanjut mengenai Taman Kanak Kanak Islam Terpadu Luqmanul Hakim.</p>
          </div>
          
          @foreach ($profiles as $profile)
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-3 col-md-6">
                <div class="info-box mb-4 h-100 rounded p-2 pt-5">
                    <i class="bx bx-map"></i>
                    <h3>Alamat</h3>
                    <p>{!! $profile->alamat !!}</p>
                </div>
                </div>
    
                <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4 h-100 rounded p-2 pt-5">
                    <i class="bx bx-envelope"></i>
                    <h3>Email</h3>
                    <p>{{ $profile->email }}</p>
                </div>
                </div>
    
                <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4 h-100 rounded p-2 pt-5">
                    <i class="bx bx-phone-call"></i>
                    <h3>Telepon</h3>
                    <p>{{ $profile->telp }}</p>
                </div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="info-box  mb-4 h-100 rounded p-2 pt-5">
                      <i class="bx bx-chat"></i>
                      <h3>Whatsapp</h3>
                      <p>{{ $profile->whatsapp }}</p>
                </div>
                </div>
          @endforeach
  
          </div>
  
          <div class="row mt-4" data-aos="fade-up" data-aos-delay="100">
  
            <div class="col-lg-12">
              <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.97420085!2d107.6291131!3d-6.9509592!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcdb990c0c0ecf5e1!2sTKIT%20LUQMANUL%20HAKIM!5e0!3m2!1sen!2sid!4v1649541023256!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>

          </div>
  
        </div>
      </section><!-- End Contact Section -->
@endsection