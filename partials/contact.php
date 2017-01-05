<div class="col-md-12 contact_page" id="contact">
      <h1 class="subtitle text-center title section-heading"> Get In Touch </h1>
      <hr>

      <div class="row text-center">
        <h2 class="subtitle text-center section-heading"> Contact &amp; Location </h2>
        <hr class="short_hr">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <a name="contact"></a>
          <form method="post" action="validation.php">
            <input type="hidden" name="action" value="send">

            <div class="form-group row">
              <label for="email" class="col-md-12 col-form-label text-left">Email</label>
              <div class="col-md-12">
                <input class="form-control input-lg" type="email" id="email" placeholder="JohnDoe@Example.com" name="email" value="" required="">
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-md-12 col-form-label text-left">Full Name</label>
              <div class="col-md-12">
                <input class="form-control input-lg" type="search" id="name" placeholder="John Joe" name="fname" aria-describedby="name-format" required="" aria-required="true" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" title="firstname lastname">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-search-input" class="col-md-12 col-form-label text-left">Phone</label>
              <div class="col-md-12">
                <input class="form-control input-lg" type="tel" id="phone" placeholder="888-888-8888" name="phone" title="Phone Number format (1234567890)" pattern="^\d{3}\d{3}\d{4}$" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="example-search-input" class="col-md-12 col-form-label text-left">Message</label>
              <div class="col-md-12">
                <textarea class="form-control input-lg" type="textarea" name="company" rows="10" cols="30" id="example-search-input" placeholder="Text Message">
                </textarea>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                  <button type="submit" class="btn btn-primary btn-lg col-md-12" name="submit">Send Message</button>
                </div>
              </div>
          </form>
        </div>
        <div class="col-md-4">
          <div class="col-md-12 embed-container maps">

            <p> 3260 Blume Dr. Suite 430 Richmond, CA 94806 <br>
            Phone: (510) 269-8100 | Fax: (510) 223-8774 <br></p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.7148566128167!2d-122.32231588467639!3d37.983783279722005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808577af88d3440b%3A0x4e15c83a726792a0!2s3260+Blume+Dr%2C+Richmond%2C+CA+94806!5e0!3m2!1sen!2sus!4v1482950767936" width="600rem" height="200rem" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
          </div>

          <div class="col-md-12 embed-container maps">
            <p> 2880 Zanker Rd. Suite 203 San Jose, CA 95134 <br> Phone: (888) 821-2722 | Fax: (510) 223-8774 <br></p>


            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.743522973094!2d-121.93075128469337!3d37.39589727983019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fc9689422c183%3A0xecb8971dece9acd7!2s2880+Zanker+Rd%2C+San+Jose%2C+CA+95134!5e0!3m2!1sen!2sus!4v1482964025046" width="600rem" height="200rem" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>

</div>
