<div class="cell-sm-8 offset-top-66 offset-lg-top-0">
    <div class="alert-classic alert-classic-orange alert-classic-sm">
        <h6>
            <span class="text-middle icon icon-xxs mdi mdi-close-circle-outline"></span>
            <span class="text-middle">Fields highlighted in orange are required.</span>
        </h6>
    </div>
    <form data-form-output="form-output-global" data-form-type="quote" method="post" action="bat/rd-mailform.php" class="rd-mailform text-left">
        <div class="range">
            <div class="cell-lg-6">
                <div class="form-group">
                    <label class="form-label form-label-outside required" for="quote-first-name">First Name:</label> 
                    <input class="form-control" id="quote-first-name" name="first-name" type="text" data-constraints="@Required">
                </div>
            </div>
            <div class="cell-lg-6">
                <div class="form-group">
                    <label class="form-label form-label-outside required" for="quote-last-name">Last Name:</label> 
                    <input class="form-control" id="quote-last-name" name="last-name" type="text" data-constraints="@Required">
                </div>
            </div>
            <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                <div class="form-group">
                    <label class="form-label form-label-outside required" for="quote-email">E-Mail Address:</label> 
                    <input class="form-control" id="quote-email" name="email" type="email" data-constraints="@Required @Email">
                </div>
            </div>
            <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                <div class="form-group">
                    <label class="form-label form-label-outside required" for="quote-telephone-number">Telephone Number:</label> 
                    <input class="form-control" id="quote-telephone-number" name="telephone-number" type="text" data-constraints="@Required">
                </div>
            </div>
            <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                <div class="form-group">
                    <label class="form-label form-label-outside" for="quote-organization">Name of University/Organization/Company (If none, put N/A):</label>
                    <input class="form-control" id="quote-organization" name="organization" type="text">
                </div>
            </div>
            <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                <div class="form-group">
                    <label class="form-label form-label-outside required" for="quote-hear-about-us">How did you hear about us:</label> 
                    <select class="form-control" id="quote-hear-about-us" name="hear-about-us" data-constraints="@Required">
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
            <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                <div class="form-group">
                    <label class="form-label form-label-outside required" for="quote-describe-trip">Describe  your trip:</label>
                    <input class="form-control" id="quote-describe-trip" name="describe-trip" type="text" data-constraints="@Required">
                </div>
            </div>
            <div class="cell-lg-12 offset-top-20 offset-lg-top-0">
                <div class="form-group">
                    <br><input class="" id="quote-newsletter" name="newsletter" type="checkbox" checked="checked" value="Yes"> 
                    <label class="form-label form-label-outside" for="quote-newsletter">Please send me newsletter and details on 
                    upcoming events from RSVP Caribbean</label> 
                </div>
            </div>
            
            
        </div>
        <div class="group-sm text-center text-lg-left offset-top-30">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>