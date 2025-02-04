<!-- Contact Section -->
 
<section id="contact" class="contact section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <span>Section Title</span>
  <h2>Contact</h2>
  <p>Fill the form for more details</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-5">

      <div class="info-wrap">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Address</h3>
            <p>G-192, Sec-63, Noida, Delhi (NCR) India</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Call Us</h3>
            <p> +91-9711411002</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email Us</h3>
            <p>sales@nettechnocrats.com</p>
          </div>
        </div><!-- End Info Item -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2768.1690364594565!2d77.38490257189108!3d28.617918631000588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5041555554f%3A0x6c59d83bd08b7d6f!2sNettechnocrats!5e1!3m2!1sen!2sus!4v1729664445332!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="col-lg-7">
      <form action="{{url('/enquiryFormSubmit')}}" method="post" class="php-email-form php-email-form-2" data-aos="fade-up" data-aos-delay="200">
        @csrf
        
        <div class="row gy-4">

          <div class="col-md-6">
            <label for="name-field" class="pb-2">Your Name</label>
            <input type="text" name="name" id="name-field" class="form-control" required="">
          </div>

          <div class="col-md-6">
            <label for="email-field" class="pb-2">Your Email</label>
            <input type="email" class="form-control" name="email" id="email-field" required="">
          </div>

          <div class="col-md-12">
            <label for="subject-field" class="pb-2">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject-field" required="">
          </div>

          <div class="col-md-12">
            <label for="message-field" class="pb-2">Message</label>
            <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <button type="submit">Send Message</button>
          </div>

        </div>
      </form>
    </div><!-- End Contact Form -->

  </div>

</div>

</section><!-- /Contact Section -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $(".php-email-form-2").on("submit", function (e) {
        e.preventDefault(); // Prevent default form submission

        var form = $(this);
        var formData = form.serialize(); // Serialize form data

        // Show loading message
        $(".loading").show();
        $(".error-message, .sent-message").hide();

        $.ajax({
            url: form.attr("action"), // Form action URL
            type: "POST",
            data: formData,
            dataType: "json",
            success: function (response) {
                $(".loading").hide();
                $(".sent-message").show().text("Your message has been sent. Thank you!");
                form.trigger("reset"); // Reset the form after submission
            },
            error: function (xhr) {
                $(".loading").hide();
                var errorMsg = "Something went wrong! Please try again.";
                if (xhr.responseJSON && xhr.responseJSON.error) {
                    errorMsg = xhr.responseJSON.error;
                }
                $(".error-message").show().text(errorMsg);
            }
        });
    });
});
</script>