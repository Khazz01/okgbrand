@extends('frontend.master')

@section('home')



<section id="FAQ-Home" class="hero">
    <div class="container">
    <div class=" hero-container">
      <div class="hero-section container-fluid ">
        <div class="hero-content">
          <h1>
            FREQUENTLY ASKED QUESTIONS
          </h1>
          <p>Welcome to the OKG BRAND "Frequently Asked Questions" page! Here, you'll find answers to common questions about our services, policies, and processes. If you can't find what you're looking for, feel free to reach out to us directly, we're happy to assist you!</p>
          <div class="hero-buttons">
          </div>
        </div>
      </div>
      </div>
      </div>
  </section>


<section class="faq-area section--padding" id="faq">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 questions-div">
              <div class="accordion faq-div" id="accordionExample">
<div class="accordion-item">
  <h2 class="accordion-header" id="headingOne">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
    What is OKG BRAND?
    </button>
  </h2>
  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <strong>OKG BRAND is an online platform</strong> that helps store owners gain authentic reviews and stellar ratings, while also offering a wide range of digital services, including website design, email list and lead generation, graphic design, video editing, eBook creation, social media ads, desktop publishing, and various writing services such as creative writing, ghostwriting, content writing, and poetry. 
    </div>
  </div>
</div>
<div class="accordion-item">
  <h2 class="accordion-header" id="headingTwo">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    How Do We Complete Projects?
    </button>
  </h2>
  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
    <div class="accordion-body">
    For store promotions, we use authentic reviews, ratings, and social media ads to enhance visibility. For other services, our skilled and dedicated team ensures high-quality execution tailored to your needs.  .
    </div>
  </div>
</div>
<div class="accordion-item">
  <h2 class="accordion-header" id="headingThree">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    Can I Collaborate With the Team?
    </button>
  </h2>
  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
    <div class="accordion-body">
    Yes! We welcome collaborations and partnerships. 
    </div>
  </div>
</div>
<div class="accordion-item">
  <h2 class="accordion-header" id="headingThree">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
    Why Choose OKG BRAND?
    </button>
  </h2>
  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
    <div class="accordion-body">
    We are committed to delivering top-notch services with professionalism and excellence.
    </div>
  </div>
</div>
<div class="accordion-item">
  <h2 class="accordion-header" id="headingThree">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
    How Can I Get Started?
    </button>
  </h2>
  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
    <div class="accordion-body">
    Simply place an order for the service you need, and we’ll take it from there!  
    </div>
  </div>
</div>
<div class="accordion-item">
  <h2 class="accordion-header" id="headingOne">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
    How Long Does Project Delivery Take?
    </button>
  </h2>
  <div id="collapseSix" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
    <div class="accordion-body">
    Delivery time depends on the service requested. Timelines are flexible and can be negotiated based on your specific needs.
    </div>
  </div>
</div>

</div><!-- end generic-accordion -->
            </div><!-- end col-lg-7-->
            <div class="col-lg-4" >
                <div class="card more-questions card-item">
                    <div class="card-body">
                        <h3 class="fs-24 font-weight-semi-bold pb-2">Still have question?</h3>
                        <div class="divider"><span></span></div>
                        <div>Please reach out to our customer service team, available 24/7, via WhatsApp for assistance. <br>
                        <div style="text-align:center;"><a href="https://wa.me/2347070659197?text=Hello%20there!"><i class="fa-brands fa-3x fa-whatsapp"></i></a</div>
                        </div>
                        
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection