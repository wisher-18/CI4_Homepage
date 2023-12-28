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
    color: #007bff;
    /* You can change the color as needed */
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
</div>
<section class="pricing">
  <div class="container">
    <div class="row">
      <?php foreach ($pricingContents as $content): ?>
        <div class="col-md-4">
          <div class="pricing-plan feature-module">
            <div class="circlediv row align-items-center">
              <i class="fa-solid fa-<?= $content->additional_content ?>"></i>
            </div>
            <h2 class="pricing-header">
              <?= $content->content_title ?>
            </h2>
            <ul class="pricing-features">
              <?php
              // Decode the JSON string from feature_data column
              $features = json_decode($content->feature_data, true);
              ?>

              <?php foreach ($features as $featureItem): ?>

                <li class="pricing-features-item">
                  <?= $featureItem['feature_heading'] ?>
                </li>
              <?php endforeach; ?>
            </ul>
            <span class="pricing-price">
              <?= $content->content_sub_heading ?>
            </span>
            <a href="<?= $content->primary_btn_url ?>" class="pricing-button">
              <?= $content->primary_btn_name ?>
            </a>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>