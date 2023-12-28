<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?>Pricing<?= $this->endSection() ?>

<?= $this->section("content") ?>
<?= $this->include("home/navbar") ?>

<style>
  .pricing {
    background-color: #f8f9fa;
    padding: 80px 0;
    text-align: center;
  }

  .pricing-plan {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    margin: 20px;
    padding: 40px;
    height: 500px;
    transition: transform 0.3s ease-in-out;
  }

  .pricing-plan:hover {
    transform: scale(1.05);
  }

  .pricing-icon {
    font-size: 48px;
    margin-bottom: 20px;
    color: #007bff; /* You can change the color as needed */
  }

  .pricing-header {
    color: #007bff;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .pricing-features {
    list-style-type: none;
    padding: 0;
    margin-bottom: 30px;
  }

  .pricing-features-item {
    margin-bottom: 10px;
  }

  .pricing-price {
    color: #28a745;
    display: block;
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .pricing-button {
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-size: 16px;
    padding: 10px 20px;
    text-decoration: none;
    transition: background-color 0.3s ease-in-out;
  }

  .pricing-button:hover {
    background-color: #0056b3;
  }
</style>

<section class="pricing">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="pricing-plan">
          <span class="pricing-icon">🚀</span>
          <h2 class="pricing-header">Personal</h2>
          <ul class="pricing-features">
            <li class="pricing-features-item">Custom domains</li>
            <li class="pricing-features-item">Sleeps after 30 mins of inactivity</li>
          </ul>
          <span class="pricing-price">Free</span>
          <a href="#/" class="pricing-button">Sign up</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="pricing-plan">
          <span class="pricing-icon">🛩️</span>
          <h2 class="pricing-header">Small team</h2>
          <ul class="pricing-features">
            <li class="pricing-features-item">Never sleeps</li>
            <li class="pricing-features-item">Multiple workers for more effective work</li>
          </ul>
          <span class="pricing-price">$150</span>
          <a href="#/" class="pricing-button is-featured">Free trial</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="pricing-plan">
          <span class="pricing-icon">🚀🚀</span>
          <h2 class="pricing-header">Enterprise</h2>
          <ul class="pricing-features">
            <li class="pricing-features-item">Dedicated</li>
            <li class="pricing-features-item">Simple horizontal scalability</li>
          </ul>
          <span class="pricing-price">$400</span>
          <a href="#/" class="pricing-button">Free trial</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->include("home/footer") ?>
<?= $this->endSection() ?>
