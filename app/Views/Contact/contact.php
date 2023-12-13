<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?>About Us<?= $this->endSection() ?>

<?= $this->section("content") ?>

<?= $this->include("home/navbar") ?>
</div>
<style>

</style>
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
            <h4>Contact Us</h4><hr>
            <div class="mt-5">
                <div class="d-flex">
                <i class="fa-solid fa-location-dot"></i>
                <p> Address: 10, 3rd Floor, Ayodhya Apartment, College Rd, opp. to College Road, Police Chowki, D'souza Colony, Nashik, Maharashtra 422007</p>
                </div><hr>
                <div class="d-flex">
                <i class="fa-solid fa-phone"></i>
                <p> Contact: 8888888888 </p>
                </div><hr>
                <div class="d-flex">
                <i class="fa-solid fa-envelope"></i>
                <p> Email: contact@gmail.com</p>
                </div><hr>
                <div class="d-flex">
                <i class="fa-brands fa-chrome"></i>
                <p> Website: www.lucid.com</p>
                </div>
            </div>
        </div>
      </div>     
      <div class="row">
      <div id="map"></div>


      </div>
</div>

</section>

<?= $this->include("home/footer") ?>
      
      
      

<?= $this->endSection() ?>