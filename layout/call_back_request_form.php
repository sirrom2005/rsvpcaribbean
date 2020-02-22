<div class="cell-sm-8 offset-top-66 offset-lg-top-0">
    <div class="alert-classic alert-classic-orange alert-classic-sm">
        <h6>
            <span class="text-middle icon icon-xxs mdi mdi-close-circle-outline"></span>
            <span class="text-middle">Fields highlighted in orange are required.</span>
        </h6>
    </div>
    <form data-form-output="form-output-global" data-form-type="call-back" method="post" action="bat/rd-mailform.php" class="rd-mailform text-left">
        <div class="range">
            <div class="cell-lg-6">
                <div class="form-group">
                    <label class="form-label form-label-outside required" for="contact-first-name">First Name:</label> 
                    <input class="form-control" id="contact-first-name" name="first-name" type="text" data-constraints="@Required">
                </div>
            </div>
            <div class="cell-lg-6">
                <div class="form-group">
                    <label class="form-label form-label-outside required" for="contact-last-name">Last Name:</label> 
                    <input class="form-control" id="contact-last-name" name="last-name" type="text" data-constraints="@Required">
                </div>
            </div>
            <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                <div class="form-group">
                    <label class="form-label form-label-outside required" for="contact-us-email">E-Mail Address:</label> 
                    <input class="form-control" id="contact-email" name="email" type="email" data-constraints="@Required @Email">
                </div>
            </div>
            <!-- div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                <div class="form-group">
                    <label class="form-label form-label-outside" for="contact-us-email">Confirm E-Mail Address*:</label>
                    <input class="form-control" id="contact-us-email" name="email" type="email">
                </div>
            </div -->
            <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                <div class="form-group">
                    <label class="form-label form-label-outside required" for="contact-telephone-number">Telephone Number:</label> 
                    <input class="form-control" id="contact-telephone-number" name="telephone-number" type="text" data-constraints="@Required">
                </div>
            </div>
            <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                <div class="form-group">
                    <label class="form-label form-label-outside" for="contact-organization">Name of University/Organization/Company (If none, put N/A):</label>
                    <input class="form-control" id="contact-organization" name="organization" type="text">
                </div>
            </div>
            <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                <div class="form-group">
                    <label class="form-label form-label-outside required" for="contact-hear-about">How did you hear about us:</label> 
                    <select class="form-control" id="contact-hear-about" name="hear-about" data-constraints="@Required">
                        <option value=""></option>
                        <option value="Google">Google</option>
                        <option value="Yahoo">Yahoo</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Twitter">Twitter</option>
                        <option value="Instagram">Instagram</option>
                        <option value="YouTube">YouTube</option>
                        <option value="Television">Television</option>
                        <option value="Promotional Flyer">Promotional Flyer</option>
                        <option value="Newspaper/Magazine">Newspaper/Magazine</option>
                        <option value="University/College">University/College</option>
                        <option value="Past Volunteer">Past volunteer</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>
            <div class="cell-lg-12 offset-top-20">
                <div class="form-group">
                    <label class="form-label form-label-outside required" for="contact-message">Question/Message:</label> 
                    <textarea class="form-control" id="contact-message" name="message" data-constraints="@Required"></textarea>
                </div>
            </div>
            <div class="cell-lg-12 offset-top-20 offset-lg-top-0">
                <div class="form-group">
                    <label class="form-label form-label-outside required" for="contact-best-time-call">Best Time to Call (your time):</label> 
                    <select class="form-control" id="contact-best-time-call" name="best-time-call" data-constraints="@Required">
                        <option value=""></option>
                        <option value="7am – 12pm">7am – 12pm</option>
                        <option value="12pm – 5pm">12pm – 5pm</option>
                        <option value="5pm – 10pm">5pm – 10pm</option>
                    </select>
                </div>
            </div>
            <div class="cell-lg-12 offset-top-20 offset-lg-top-0">
                <div class="form-group">
                    <br><input class="" id="contact-newsletter" name="newsletter" type="checkbox" checked="checked" value="Yes"> 
                    <label class="form-label form-label-outside" for="contact-newsletter">Please send me newsletter and details on 
                    upcoming events from RSVP Caribbean</label> 
                </div>
            </div>
            
            <!-- div class="cell-lg-12 offset-top-20 offset-lg-top-0">
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6Le3YyMTAAAAAJaQcUwvMzxnZH4S9O87yKLVsTLF"></div>
                </div>
            </div -->
            
        </div>
        <div class="group-sm text-center text-lg-left offset-top-30">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>