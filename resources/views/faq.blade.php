@extends('includes.include')
@section('content')


  <!-- breadcrumb area start -->
  <section class="breadcrumb pt-150 pb-150 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.jpeg"
  data-overlay="dark" data-opacity="5">
  <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="breadcrumb__wrap">
                  <h2 class="title">Your FAQ</h2>
                  <div class="breadcrumb__nav">
                      <ul>
                          <li><span>//</span></li>
                          <li><a href="index.html">Home</a></li>
                          <li>|</li>
                          <li>FAQ</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- breadcrumb area end -->

<!-- faq-search area start -->
<section class="faq-search-area pt-150 pb-155 bg_img" data-background="assets/images/pattern/faq-pattern.png">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-xl-8 text-center">
              <div class="faq-search-wrap">
                  <div class="faq-search mb-45">
                      <form action="index.html">
                          <input type="search" placeholder="Type your questions here">
                          <button type="submit"><i class="fal fa-search"></i></button>
                      </form>
                  </div>
                  <h2 class="title">What are you looking for?</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- faq-search area end -->

<!-- faq area start -->
<div class="faq-area pt-100 pb-100">
  <div class="container">
      <div class="row mt-none-20">
          <div class="col-xl-6 mt-20">
              <div class="accordion faqs faqs--2" id="accordionFaq">
                  <div class="card">
                      <div class="card__header" id="heading1">
                          <h5 class="mb-0 title">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse1"
                                  aria-expanded="false" aria-controls="collapse1">
                                  First and foremost, you never want to go?
                              </button>
                          </h5>
                      </div>
                      <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionFaq">
                          <div class="card__body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                  et dolore magna
                                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card__header" id="heading2">
                          <h5 class="mb-0 title">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2"
                                  aria-expanded="true" aria-controls="collapse2">
                                  Without security protection on your computer?
                              </button>
                          </h5>
                      </div>
                      <div id="collapse2" class="collapse show" aria-labelledby="heading2" data-parent="#accordionFaq">
                          <div class="card__body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                  et dolore magna
                                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card__header" id="heading3">
                          <h5 class="mb-0 title">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3"
                                  aria-expanded="false" aria-controls="collapse3">
                                  Free Anti-Virus has very low detection rates?
                              </button>
                          </h5>
                      </div>
                      <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionFaq">
                          <div class="card__body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                  et dolore magna
                                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card__header" id="heading4">
                          <h5 class="mb-0 title">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4"
                                  aria-expanded="false" aria-controls="collapse4">
                                  Give us a call and we will be happy to inform?
                              </button>
                          </h5>
                      </div>
                      <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionFaq">
                          <div class="card__body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                  et dolore magna
                                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card__header" id="heading5">
                          <h5 class="mb-0 title">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5"
                                  aria-expanded="false" aria-controls="collapse5">
                                  You of the latest security software?
                              </button>
                          </h5>
                      </div>
                      <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionFaq">
                          <div class="card__body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                  et dolore magna
                                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card__header" id="heading6">
                          <h5 class="mb-0 title">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6"
                                  aria-expanded="false" aria-controls="collapse6">
                                  We recommend and sell to all our clients?
                              </button>
                          </h5>
                      </div>
                      <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionFaq">
                          <div class="card__body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                  et dolore magna
                                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-6 mt-20">
              <div class="accordion faqs faqs--2" id="accordionFaq2">
                  <div class="card">
                      <div class="card__header" id="heading7">
                          <h5 class="mb-0 title">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse7"
                                  aria-expanded="false" aria-controls="collapse7">
                                  First and foremost, you never want to go?
                              </button>
                          </h5>
                      </div>
                      <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionFaq">
                          <div class="card__body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                  et dolore magna
                                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card__header" id="heading8">
                          <h5 class="mb-0 title">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse8"
                                  aria-expanded="true" aria-controls="collapse8">
                                  Without security protection on your computer?
                              </button>
                          </h5>
                      </div>
                      <div id="collapse8" class="collapse show" aria-labelledby="heading8" data-parent="#accordionFaq">
                          <div class="card__body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                  et dolore magna
                                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card__header" id="heading9">
                          <h5 class="mb-0 title">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse9"
                                  aria-expanded="false" aria-controls="collapse9">
                                  Free Anti-Virus has very low detection rates?
                              </button>
                          </h5>
                      </div>
                      <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionFaq">
                          <div class="card__body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                  et dolore magna
                                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card__header" id="heading10">
                          <h5 class="mb-0 title">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse10"
                                  aria-expanded="false" aria-controls="collapse10">
                                  Give us a call and we will be happy to inform?
                              </button>
                          </h5>
                      </div>
                      <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordionFaq">
                          <div class="card__body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                  et dolore magna
                                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card__header" id="heading11">
                          <h5 class="mb-0 title">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse11"
                                  aria-expanded="false" aria-controls="collapse11">
                                  You of the latest security software?
                              </button>
                          </h5>
                      </div>
                      <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordionFaq">
                          <div class="card__body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                  et dolore magna
                                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card__header" id="heading12">
                          <h5 class="mb-0 title">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse12"
                                  aria-expanded="false" aria-controls="collapse12">
                                  We recommend and sell to all our clients?
                              </button>
                          </h5>
                      </div>
                      <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionFaq">
                          <div class="card__body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                  et dolore magna
                                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-xl-12 text-center">
              <div class="faq-wrap pt-45 pb-45 mt-40">
                  <p>Couldn’t find your answer? <a href="contact.html" class="inline-btn"><i class="fal fa-comments"></i> <span>Ask a Question</span></a></p>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- faq area end -->

<!-- cta area start -->
<section class="cta__area cta__area--2 cta__area--3 pt-95 pb-95 bg_img"
  data-background="assets/images/bg/cta-bg-3.jpeg">
  <div class="container">
      <div class="row">
          <div class="col-xl-6">
              <div class="section__heading mb-40">
                  <h4 class="section__heading--title-small"><span class="mr-10">//</span> Call to action</h4>
                  <h2 class="section__heading--title">Just Make An Awesome
                      Tour Here<span>.</span></h2>
                  <div class="section__heading--content mt-20">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                          incididunt ut labore et dolore magna
                          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                  </div>
              </div>
          </div>
          <div class="col-xl-6 text-right">
              <a href="contact.html" class="site-btn mt-95">Get Started Now <span>+</span></a>
          </div>
      </div>
  </div>
</section>
<!-- cta area end -->



@endsection