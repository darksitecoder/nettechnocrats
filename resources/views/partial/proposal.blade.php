<!-- Main CSS File -->
<link href="{{ asset('style/web/seo-services/main.css') }}" rel="stylesheet">

<style>
    .alert-success {
        font-size: 15px;
    }
</style>
<div id="contact" class="contact__section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            <div class="col-lg-12">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
            </div>

            <form name="praposal_form" action="{{ route('proposal.store') }}" method="post" class="php-email-form php-proposal-form" data-aos="fade-up" data-aos-delay="200">
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
                        <button type="submit">Send Me A Proposal <i class=" fa-solid fa-arrow-right"></i></button>
                    </div>


                    <div class="col-md-12 text-center">
                        <div class="loading" style="display: none;">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message"></div>
                    </div>
                </div>
            </form>
        </div><!-- End Contact Form -->
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(".php-proposal-form").on("submit", function(e) {
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
                success: function(response) {
                    $(".loading").hide();
                    $(".sent-message").show().text("Your message has been sent. Thank you!");
                    form.trigger("reset"); // Reset the form after submission
                },
                error: function(xhr) {
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