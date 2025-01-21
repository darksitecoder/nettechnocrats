<div id="contact" class="contact__section">

 <div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">



   <div class="col-lg-12">
   @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
   <form name="praposal_form" action="{{ route('proposal.store') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
    @csrf
    <div class="row gy-4">

        <div class="col-md-6">
            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
        </div>

        <div class="col-md-6">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
        </div>

        <div class="col-md-6">
            <input type="text" class="form-control" name="subject" id="subject-field" placeholder="Request For...." required>
        </div>

        <div class="col-md-6 text-center">
            <button type="submit">Send Me a Proposal <i class="fa-solid fa-arrow-right"></i></button>
        </div>

    </div>
</form>

   </div><!-- End Contact Form -->

  </div>

 </div>

</div>