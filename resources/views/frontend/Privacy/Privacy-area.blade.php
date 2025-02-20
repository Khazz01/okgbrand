@extends('frontend.master')

@section('home')

<section id="Privacy-Home" class="hero">
    <div class="container">
    <div class=" hero-container">
      <div class="hero-section container-fluid ">
        <div class="hero-content">
          <h1>
            Privacy Policy
          </h1>
          <p>Welcome to OKG BRAND's Privacy Policy. This policy explains how we handle your personal information. By using our services, you consent to our practices. If you disagree, please do not use our services.</p>
          <div class="hero-buttons">
          </div>
        </div>
      </div>
      </div>
      </div>
  </section>

  <section class="terms-and-conditions-area section--padding" id="TNC">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 tnc-sidebar-div">
                  <div class="sidebar">
                     <div class="card card-item">
                          <div class="card-body">
                              <h3 class="card-title fs-18 pb-2">Category</h3>
                              <div class="divider"><span></span></div>
                              <ul class="generic-list-item">
                              <li class="category-tnc-list"><a href="#InformationWeCollect">Information We Collect</a></li>
                              <li class="category-tnc-list"><a href="#contact-forms">Contact Forms</a></li>
                              <li class="category-tnc-list"><a href="#protectInfo">Protect Your Information</a></li>
                              <li class="category-tnc-list"><a href="#contactInfo">Your Contact Information</a></li> 
                                  
                              </ul>
                          </div>
                      </div><!-- end card -->
                  </div><!-- end sidebar -->
              </div><!-- end col-lg-4 -->
              <div class="col-lg-8">
                <div id="InformationWeCollect" class="card privacy-card card-item">
                    <div class="card-body">
                        <h2 class="card-title fs-18 pb-4"> Information We Collect and How We Use It</h2>
                        <div class="divider"><span></span></div>
                        <h4 class="fs-16 font-weight-semi-bold pb-1"> Account Information:</h3>
                        <p class="pb-3">
                        At OkgBrand, we are dedicated to safeguarding and honoring your privacy. We collect, utilize, protect, and manage your account information, ensuring that your data remains secure while granting you access to our services and the ability to control your information.
                        </p>
                        <h4 class="fs-16 font-weight-semi-bold pb-1"> Public Content:</h3>
                        <p class="pb-3">
At OkgBrand, public content refers to any information you share openly on our platform. This content may be collected, used, and displayed by us for services, marketing, and other purposes. While we take steps to protect your data, you are responsible for what you share publicly. Public content may also be accessed or shared by third parties, like search engines or social media platforms. You can delete or modify your public content, but copies may remain in backup storage. We reserve the right to update this policy and will notify users of significant changes.
                        </p>
                        <h4 class="fs-16 font-weight-semi-bold pb-1"> Contacts:</h3>
                        <p class="pb-3">
OkgBrand collects and uses your contact information (e.g., names, emails, phone numbers) to provide services and enhance your experience. Your contact details are securely stored and protected. We do not sell or share your contacts for marketing purposes but may share them with trusted service providers. You can manage, update, or delete your contact information at any time. We retain contact details only as needed for services, after which they are deleted. Any changes to this policy will be communicated to users. By using our services, you agree to the terms outlined in this policy.
                        </p>
                        <h4 class="fs-16 font-weight-semi-bold pb-1"> Communications:</h3>
                        <p>
OkgBrand collects and stores communication data (e.g., emails, messages) to respond to inquiries, provide support, and improve services. This data is securely protected and not shared with third parties unless necessary for services or legal reasons. You have control over the communication information you share and can request access or deletion at any time. Communication data is retained only as long as needed, after which it is securely deleted. Any significant policy changes will be communicated to users. By using our services, you agree to this policy.
                        </p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div id="contact-forms" class="card privacy-card card-item">
                    <div class="card-body">
                        <h2 class="card-title fs-18 pb-3"> Contact forms</h2>
                        <div class="divider"><span></span></div>
                        <h4 class="fs-16 font-weight-semi-bold pb-1"> Cookies</h3>
                        <p class="pb-3">

OkgBrand uses cookies to improve your experience on our website, including for essential functions, performance tracking, personalization, and advertising. We may also allow third-party cookies for analytics and ads. By using our website, you consent to our use of cookies. You can manage or disable cookies through your browser settings, though this may affect some features. We may update this policy occasionally and encourage users to review it periodically.
                        </p>
                        <h4 class="fs-16 font-weight-semi-bold pb-1"> Embedded content from other websites</h3>
                        <p>
OkgBrand may display embedded content (like videos or posts) from third-party websites. These external sites may collect data about you, such as your IP address, and their data practices are governed by their own privacy policies. We encourage you to review these policies. You can control your interactions with embedded content through settings on the third-party sites. By using our platform, you agree to these data collection practices.
                        </p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div id="protectInfo" class="card privacy-card card-item">
                    <div class="card-body">
                        <h2 class="card-title fs-18 pb-3"> How we protect your information</h2>
                        <div class="divider"><span></span></div>
                        <p class="pb-3">
                        We implement proper data collection, storage, and processing methods, along with security measures, to safeguard your personal information, username, password, transaction details, and other data stored on our Site from unauthorized access, modification, disclosure, or destruction.
                        </p>
                        <p>
                        Sensitive and private data exchanged between the Site and its Users is transmitted through an SSL-secured communication channel, encrypted, and protected with digital signatures. Additionally, our Site complies with PCI vulnerability standards to ensure the highest level of security for Users.
                        </p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div id="contactInfo" class="card privacy-card card-item">
                    <div class="card-body">
                        <h2 class="card-title fs-18 pb-3"> Your contact information</h2>
                        <div class="divider"><span></span></div>
                        <p>
                        If you have an account on this site or have left comments, you can request an exported file of the personal data we hold about you, including any information you’ve provided. You may also ask us to delete any personal data we have on file. However, this does not apply to data we are required to retain for administrative, legal, or security purposes.
                        </p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
              
          </div><!-- end row -->
      </div><!-- end container -->
  </section>
  
@endsection