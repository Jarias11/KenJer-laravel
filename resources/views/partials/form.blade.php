<div class="formbold-main-wrapper">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div id="ContactFormContainer" class="formbold-form-wrapper" style="display: none;">

        <form id="ContactForm" method="POST">
            @csrf
            <button id="CloseForm" class="close-button">X</button> <!-- Close button -->
            <h2 class="form-title">Free Estimate</h2>
            <div class=" formbold-mb-5">
                <label for="fullname" class="formbold-form-label"> Full Name </label>
                <input type="text" name="fullname" id="fullname" placeholder="Full Name" class="formbold-form-input" required />
            </div>
            <div class="formbold-mb-5">
                <label for="email" class="formbold-form-label"> Email Address </label>
                <input type="email" name="email" id="email" placeholder="Enter your email" class="formbold-form-input" required />
            </div>
            <div class="formbold-mb-5">
                <label for="phone" class="formbold-form-label"> Phone Number </label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone number" class="formbold-form-input" required />
            </div>
            <div class="formbold-mb-5">
                <label for="state" class="formbold-form-label"> State </label>
                <select name="state" id="state" class="formbold-form-input" required>
                    <option value="NJ">NJ</option>
                    <option value="PA">PA</option>
                    <option value="NY">NY</option>
                </select>
            </div>
            <div class="formbold-mb-5">
                <label for="city" class="formbold-form-label"> City </label>
                <input type="text" name="city" id="city" placeholder="Enter your city" class="formbold-form-input" />
            </div>
            <div class="formbold-mb-5">
                <label for="service" class="formbold-form-label"> Service </label>
                <select name="service" id="service" class="formbold-form-input">
                    <option value="outdoors">Outdoors</option>
                    <option value="indoors">Indoors</option>
                    <option value="basements">Basements</option>
                </select>
            </div>
            <div class="formbold-mb-5">
                <label for="message" class="formbold-form-label"> Brief Message </label>
                <textarea name="message" id="message" placeholder="Enter your message" class="formbold-form-input"></textarea>
            </div>
            <div>
                <button id="SubmitForm" class="formbold-btn">Free Estimate</button>
            </div>
        </form>
    </div>
</div>
<input id="SubmitUrl" type="hidden" value="{{ route('contact.submitQuote') }}" />
<script src="{{ asset('js/form.js') }}"></script>
