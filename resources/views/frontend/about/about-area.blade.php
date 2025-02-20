@extends('frontend.master')

@section('home')


<section id="About-Us-Home" class="hero">
    <div class="container">
    <div class=" hero-container">
      <div class="hero-section container-fluid ">
        <div class="hero-content">
          <h1>
            ABOUT US
          </h1>
          <p>Welcome to the OKG BRAND "About" page! Learn more about our mission, values, and commitment to innovation as we build strong connections and make a positive impact.</p>
          <div class="hero-buttons">
          </div>
        </div>
      </div>
      </div>
      </div>
  </section>

  <section id="How-we-started">
    <div class="container">
        <div class="story-content container text-center">
            <div class="section-heading">
                <h2 class="section__title pb-3 lh-50 story-title">OKG Brand</h2>
                <p class="section__desc"  data-aos="zoom-in"  data-aos-delay="100" style="text-align:left">At OKG BRAND, we see ourselves as more than just a digital marketing agency—we are a dynamic force that drives the digital landscape forward. Our approach goes beyond simply offering services; we are a brand built on the core principles of innovation, integrity, and excellence. As we navigate the fast-paced and constantly evolving world of digital marketing, our mission is clear: to provide tailored, high-quality solutions that meet the unique needs of businesses, entrepreneurs, and individuals who are looking to elevate their online presence. <br><br>

We understand that digital marketing isn’t one-size-fits-all. That's why we work closely with each client to craft personalized strategies that speak to their specific goals, challenges, and target audience. At the core of our company is a commitment to excellence. Every project we take on is fueled by a combination of precision, creativity, and an unwavering attention to detail. We don’t just aim to meet expectations; we strive to exceed them. <br><br>

Our motto, "Collaboration That Births Excellence," is not just a tagline—it is a reflection of our philosophy. We believe that the best results come from working together, sharing ideas, and leveraging the unique strengths of both our team and our clients. This collaborative approach ensures that every strategy we implement is not only effective but also aligns with the client’s vision and objectives. <br><br>

At OKG BRAND, we are proud to be a partner in our clients' success. By embodying values like integrity and transparency in everything we do, we foster trust and build long-lasting relationships. We are dedicated to delivering measurable, impactful results that help businesses thrive in the digital age, all while maintaining the highest standards of professionalism and innovation.</p>
            </div><!-- end section-heading -->
        </div><!-- end story-content -->
        <div class="row pt-60px">
            <div class="col-lg-3 responsive-column-half core-values">
                <div class="story-img-item">
                    <img class="lazy" src="{{asset('frontend/img/TEAM SPIRIT.jpg')}}" alt="Story image" style="">
                </div>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-3 responsive-column-half core-values">
              <div class="story-img-item">
                  <img class="lazy" src="{{asset('frontend/img/INTEGRITY.jpg')}}" alt="Story image" style="">
              </div>
            </div>
            <div class="col-lg-3 responsive-column-half core-values">
              <div class="story-img-item">
                  <img class="lazy" src="{{asset('frontend/img/EXCELLENCE.jpg')}}" alt="Story image" style="">
              </div>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-3 responsive-column-half core-values">
              <div class="story-img-item">
                  <img class="lazy" src="{{asset('frontend/img/CONTRIBUTION.jpg')}}" alt="Story image" style="">
              </div>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div>
  </section>

  <section id="mission-and-vision" class="about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 about-us-image">
          <div class="about-us-image">
      <img src="{{asset('frontend/img/aboutus.png')}}" alt="About Us" width="100%">
    </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 MandV">
          <div class="about-us-content">
    <h3>Our Vision</h3>
    <h2>To Become the Best Online Promotion Agency and in All Services we Render</h2>
  </div>

  <div class="about-us-content">
<h3>Our Mission</h3>
<h2>To Collaborate With Multiple Online Stores, Rendering An Authentic Service That Makes Them Rank Higher</h2>

</div>
        </div>
      </div>
    </div>
  </section>

  <section class="team-member-area section--padding" id="team-member-area">
    <div class="container">
        <div class="team-member-heading-content text-center">
            <div class="section-heading">
                <h2 class="section__title lh-50">Meet Our Leaderships</h2>
            </div><!-- end section-heading -->
        </div><!-- end team-member-heading-content -->
        <div class="row pt-60px">
             <div class="col-lg-4 col-md-6 team-member-div responsive-column-half">
                <div class="card card-item member-card text-center">
                    <div class="card-image">
                        <img class="card-img-top" src="{{asset('frontend/img/CEO.jpg')}}" alt="team member">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Obafemi Kelvin Godwin</h5>
                        <p class="card-text">Founder And CEO</p>
                        <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                            <li><a href="https://www.facebook.com/share/1EDFJiCmGj/"><i class="fa-brands fa-2x fa-square-facebook"></i></a></li>
                            <li><a href="https://x.com/godwin25209?t=N-4ewsvkxSogDfgeTEe00g&s=09"><i class="fa-brands fa-2x fa-square-x-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/obafemi-kelvin-godwin-711574297?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa-brands fa-2x fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 col-md-6 team-member-div responsive-column-half">
               <div class="card card-item member-card text-center">
                   <div class="card-image">
                       <img class="card-img-top" src="{{asset('frontend/img/CTO.jpg')}}" alt="team member">
                   </div>
                   <div class="card-body">
                       <h5 class="card-title">Okome Kesiena David</h5>
                       <p class="card-text">Chief Technology Officer (CTO)</p>
                       <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                           <li><a href="https://github.com/Khazz01"><i class="fa-brands fa-2x fa-square-github"></i></a></li>
                           <li><a href="https://x.com/okome_kesiena?s=21"><i class="fa-brands fa-2x fa-square-x-twitter"></i></a></li>
                           <li><a href="https://www.linkedin.com/in/kesiena-okome-5a0982257?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="fa-brands fa-2x fa-linkedin"></i></a></li>
                       </ul>
                   </div>
               </div><!-- end card -->
           </div><!-- end col-lg-3 -->
           <div class="col-lg-4 col-md-6 team-member-div responsive-column-half">
              <div class="card card-item member-card text-center">
                  <div class="card-image">
                      <img class="card-img-top" src="{{asset('frontend/img/manager.jpg')}}" alt="team member">
                  </div>
                  <div class="card-body">
                      <h5 class="card-title"><a href="#">Adeleke Adeoluwa Isaac</a></h5>
                      <p class="card-text">Brand Manager</p>
                      <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                          <li><a href="https://www.facebook.com/profile.php?id=100072074614686"><i class="fa-brands fa-2x fa-square-facebook"></i></a></li>
                          <li><a href="https://www.instagram.com/jolly_prince07?igsh=YzljYTk1ODg3Zg=="><i class="fa-brands fa-2x fa-square-instagram"></i></a></li>
                          <!-- <li><a href="#"><i class="fa-brands fa-2x fa-linkedin"></i></a></li> -->
                      </ul>
                  </div>
              </div><!-- end card -->
          </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

@endsection