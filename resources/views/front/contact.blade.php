<div class="row section-header">
    <div class="col-full">
        <h3 class="subhead subhead--light">Contact Us</h3>
        <h1 class="display-1 display-1--light">Get in touch and let's make something great together. Let's turn your idea on an even greater product.</h1>
    </div>
</div> <!-- end section-header -->

<div class="row">

    <div class="col-full contact-main">
        <p>
            <a href="mailto:#0" class="contact-email">anuj@studiomatrix.com.np</a>
            <span class="contact-number">+977 9843 139 536</span>
        </p>
    </div> <!-- end contact-main -->

</div> <!-- end row -->

<div class="row">

    <div class="col-five tab-full contact-secondary">
        <h3 class="subhead subhead--light">Where To Find Us</h3>

        <p class="contact-address">
            Khusibun, Nayabaazar<br>
            Kathmanudu<br>
            Province no - 03 Nepal
        </p>
    </div> <!-- end contact-secondary -->

    <div class="col-five tab-full contact-secondary">
        <h3 class="subhead subhead--light">Follow Me</h3>

        <ul class="contact-social">
            <li>
                <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
            </li>
            <li>
                <a href="https://www.facebook.com"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
                <a href="https://www.facebook.com"><i class="fab fa-instagram"></i></a>
            </li>
            <li>
                <a href="https://www.facebook.com"><i class="fab fa-behance"></i></a>
            </li>
            <li>
                <a href="https://www.facebook.com"><i class="fab fa-dribbble"></i></a>
            </li>
        </ul> <!-- end contact-social -->

        <div class="contact-subscribe">
            <form id="subscribe" class="group mc-form" novalidate="true"">
            {{--<form id="mc-form" class="group mc-form" novalidate="true" method="post" action="{{route('subscribe')}}">--}}
                {{csrf_field()}}
            <div class="email">
                <input type="email" name="email" id="email" class="email" placeholder="Email Address">
                <span class="error"></span>
                <input type="submit" name="subscribe" value="Subscribe">
            </div>
            </form>
        </div> <!-- end contact-subscribe -->
    </div> <!-- end contact-secondary -->

</div> <!-- end row -->

<div class="row">
    <div class="col-full cl-copyright">
                <span>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a
                            href="https://colorlib.com" target="_blank">Colorlib</a>
                    </span>
    </div>
</div>

<div class="cl-go-top">
    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
</div>

<script>

    $('#subscribe').submit(function (e) {
        e.preventDefault();

        var data = $(this).serialize();
        $.ajax({
            url: '/subscribe',
            type: 'post',
            data: data,
            datatype: 'json',
            success: function (response) {
                alert('Succesfully subscribed');
                $(':input', '#subscribe')
                    .not(' :submit, :hidden')
                    .val('')
            },

            error: function (errors) {
                $.each(errors.responseJSON.errors,function(key,value){
                    $('#'+key).parent('div').addClass('has-error');
                    $('#'+key).next('span').html(value[0]);
                    $('#'+key).next('span').addClass('help-block');
                });
            }
        })
    });
</script>
<style>
    .help-block{
        color:red;
    }
</style>

