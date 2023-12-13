<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Content
<?= $this->endSection() ?>
<?= $this->section("content") ?>
<?= $this->include("Home/navbar") ?>

</div>
<div class="row justify-content-center">

    <div class="homeContainer col-10 row justify-content-center">
        <div class="contactrow p-5">
            <h2>Show Content</h2>
            <?php if (session()->has("errors")): ?>
    <ul>
        <?php foreach (session("errors") as $error): ?>
            <li>
                <?= $error ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
            <div class="col-8">
                <div class="">
                <p><span class="blue_text">Title:</span> <?= esc($content->content_title) ?></p>
                <p><span class="blue_text">Subheading:</span> <?= esc($content->content_sub_heading) ?></p>
                <p><span class="blue_text">Content:</span> <?= esc($content->content) ?></p>
                <p><span class="blue_text">Additional Content:</span> <?= esc($content->additional_content) ?></p>
                <p><span class="blue_text">Content Section:</span> <?= esc($content->content_section) ?></p>    
                <p><span class="blue_text">Primary Button:</span> <?= esc($content->primary_btn) ?></p>
                <p><span class="blue_text">Primary Button URL:</span> <?= esc($content->primary_btn_url) ?></p>
                <p><span class="blue_text">Secondary Button:</span> <?= esc($content->secondary_btn) ?></p>
                <p><span class="blue_text">Secondary Button URL:</span> <?= esc($content->secondary_btn_url) ?></p>
                <p><span class="blue_text">Content Image: </span>
                <img src="<?= base_url("public/content_images/".$content->content_image)?>" alt="Content"
                    style="height: 200px; width:200px;"></p>

                    

                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->include("Home/footer") ?>
<?= $this->endSection() ?>