<section id="contact-section" class="contact-section section">
    <h2 class="section-title">Get in Touch</h2>
    <div class="intro">
        <div class="dialog">
            <form id="form">
                {{ csrf_field() }}
                <fieldset class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control required" data-field-name="Name" data-field-type="text" autocomplete="off" >
                    <span class="error"></span>
                </fieldset>
                <fieldset class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control required" data-field-name="Email" data-field-type="email" autocomplete="off" >
                    <span class="error"></span>
                </fieldset>
                <fieldset class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" class="form-control required" data-field-name="Subject" data-field-type="text" autocomplete="off" >
                    <span class="error"></span>
                </fieldset>
                <fieldset class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-control required" data-field-name="Message" data-field-type="text" autocomplete="off" ></textarea>
                    <span class="error"></span>
                </fieldset>
                <fieldset class="form-group btn-holder" style="min-height: 70px;">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">                    
                            <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
                            <span class="error"></span>
                        </div>
                        <div class="col-sm-12 col-md-6 text-right">                    
                            <a class="btn send-message-btn pull-right"><span><i class="fa fa-paper-plane" aria-hidden="true"></i>  &nbsp;Send</span></a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

        <div class="text-center">
            <ul class="social list-inline">
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-github-alt" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>

</section>