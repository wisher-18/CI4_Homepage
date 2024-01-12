
</div>
<?php if($contactUsContents): ?>
<section class="contact">
<div class="homeContainer">
      <div class="row contactrow p-5">
        <h2>Contact Us</h2>
        <div class="col-md-7 p-5">
        <h4>Get in touch</h4>
            <div class="mb-3">
                <label for="input1" class="form-label">Name</label>
                <input type="text" id="input1" class="form-control" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="input2" class="form-label">Email</label>
                <input type="email" id="input2" class="form-control" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="input3" class="form-label">Contact Number</label>
                <input type="number" id="input3" class="form-control" placeholder="Enter your number">
            </div>
            <div class="mb-3">
                <label for="input4">Your message</label><br>
                <textarea class="form-control" name="message" id="input4"  cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-outline-primary">Submit</button>
            </div>
        
        </div>
        <div class="col-md-5 contactInfo p-5">
            <?php foreach($contactUsContents as $content): ?>
            <h4>Contact Us</h4><hr>
            <div class="mt-5">
                <div class="d-flex">
                <i class="fa-solid fa-location-dot"></i>
                <p><?= $content->content_title ?></p>
                </div><hr>
                <div class="d-flex">
                <i class="fa-solid fa-phone"></i>
                <p><?= $content->content_sub_heading ?> </p>
                </div><hr>
                <div class="d-flex">
                <i class="fa-solid fa-envelope"></i>
                <p><?= $content->content ?></p>
                </div><hr>
                <div class="d-flex">
                <i class="fa-brands fa-chrome"></i>
                <p><?= $content->additional_content ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
      </div>     
      <div class="row">
      <div id="map"></div>


      </div>
</div>

</section>
<?php endif; ?>
