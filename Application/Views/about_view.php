<!-- ABOUT -->
<section id="about" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-3 col-md-6 col-sm-12">
                <div class="section-title">
                    <h1>Professional Team for you</h1>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="team-thumb">
                    <img src=<?= $data[0][0]['img']['src'] ?> class=<?= $data[0][0]['img']['class'] ?> alt=<?= $data[0][0]['name'] ?>>
                    <div class="team-info">
                        <h2><?= $data[0][0]['name'] ?></h2>
                        <small><?= $data[0][0]['position'] ?></small>
                        <p><?= $data[0][0]['about'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="team-thumb">
                    <div class="team-info">
                        <h2><?= $data[0][1]['name'] ?></h2>
                        <small><?= $data[0][1]['position'] ?></small>
                        <p><?= $data[0][1]['about'] ?></p>
                    </div>
                    <img src=<?= $data[0][1]['img']['src'] ?> class=<?= $data[0][1]['img']['class'] ?> alt=<?= $data[0][1]['name'] ?>>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="team-thumb">
                    <img src=<?= $data[0][2]['img']['src'] ?> class=<?= $data[0][2]['img']['class'] ?> alt=<?= $data[0][2]['name'] ?>>
                    <div class="team-info">
                        <h2><?= $data[0][2]['name'] ?></h2>
                        <small><?= $data[0][2]['position'] ?></small>
                        <p><?= $data[0][2]['about'] ?></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- TESTIMONIAL -->
<section id="testimonial" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <div class="testimonial-image"></div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="testimonial-info">

                    <div class="section-title">
                        <h1>What People Say</h1>
                    </div>

                    <div class="owl-carousel owl-theme">
                        <?php foreach ($data[1] as $data) : ?>
                            <div class="item">
                                <h3><?= $data['comment'] ?></h3>
                                <div class="testimonial-item">
                                    <img src=<?= $data['img']['src'] ?> class=<?= $data['img']['class'] ?> alt=<?= $data['name'] ?>>
                                    <h4><?= $data['name'] ?></h4>
                                </div>
                            </div>
                        <?php endforeach ?>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>