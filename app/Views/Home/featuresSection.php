<section class="p-5">
    <div class="container">
        <div class="row">
            <div class="title-text">
                <?php foreach ($featureContent as $feature): ?>
                    <h4><?= $feature->content_sub_heading ?></h4>
                    <h2><?= $feature->content_title ?></h2>
                    <img src="public/images/prostok_t_2.png" alt="">
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row">
            <?php foreach ($featureContent as $feature): ?>
                <?php
                // Decode the JSON string from feature_data column
                $features = json_decode($feature->feature_data, true);
                ?>

                <?php foreach ($features as $featureItem): ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-module">
                            <div class="circlediv row align-items-center">
                                <i class="fa-solid fa-<?= $featureItem['icon'] ?>"></i>
                            </div>
                            <h3><?= $featureItem['feature_heading'] ?></h3>
                            <p><?= $featureItem['feature_content'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

            <?php endforeach; ?>
        </div>
    </div>
</section>
