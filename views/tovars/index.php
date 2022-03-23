<?php
    $userModel = new \models\Users();
    $user  = $userModel->GetCurrentUser();
?>

<!-- Pricing -->
    <div id="pricing" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">Одяг</div>
                    <h2 class="h2-heading">Товари</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                <?php foreach($lastNews as $news) : ?>
                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title"><?=$news['title'] ?></div>
                            <? if (is_file('files/news/'.$news['photo'].'_m.jpg')) : ?>
                                <img src="/files/news/<?=$news['photo'] ?>_m.jpg" class="d-block mx-lg-auto img-fluid" loading="lazy"/>
                            <? else: ?>
                                <svg class="bd-placeholder-img figure-img img-fluid rounded float-start  width="200" height="300" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="lightgray"></rect></svg>
                            <? endif; ?>
                            <div class="price"><span class="currency">₴</span><span class="value"><?=$news['price'] ?></span></div>
                            <div class="frequency"><?=$news['description'] ?></div>
                            <div class="divider"></div>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="/tovars/view?id=<?=$news['id'] ?>">ПЕРЕГЛЯНУТИ</a>
                                <? if($news['user_id'] == $user['id'] || $user['access'] == 1):?>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <a href="/tovars/edit?id=<?=$news['id'] ?>" class="text-decoration-none">
                                            <div class="media-body"><i class="fas fa-edit"></i> Редагувати</div>
                                        </a>
                                        <a href="/tovars/delete?id=<?=$news['id'] ?>" class="text-decoration-none">
                                            <div class="media-body"><i class="fas fa-times"></i> Видалити</div>
                                        </a>
                                    </li>
                                </ul>
                            <? endif; ?>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <?php endforeach; ?>
                    <!-- end of card -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->

<!-- <div class="container">
    <br>
    <h1 class="display-4 fst-italic text-dark text-center">Моделі:</h1>
    <div class="p-5">
        <?php foreach($lasttovars as $news) : ?>
        <hr class="default_hr">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <div class="photo">
                    <? if (is_file('files/news/'.$news['photo'].'_m.jpg')) : ?>
                    <img src="/files/news/<?=$news['photo'] ?>_m.jpg" class="d-block mx-lg-auto img-fluid" loading="lazy"/>
                    <? else: ?>
                    <svg class="bd-placeholder-img figure-img img-fluid rounded float-start  width="200" height="300" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="white"></rect></svg>
                    <? endif; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3"><?=$news['title'] ?></h1>
                <p class="lead"><?=$news['description'] ?></p>
                <a href="/tovars/view?id=<?=$news['id'] ?>" class="btn btn-outline-dark me-2">Читати далі</a>
                <? if($news['user_id'] == $user['id'] || $user['access'] == 1):?>
                    <a href="/tovars/edit?id=<?=$news['id'] ?>"><img src="/files/icons/edit.png" title="Редагувати" style="height: 40px; width: 40px;"></a>
                    <a href="/tovars/delete?id=<?=$news['id'] ?>"><img src="/files/icons/remove.png" title="Видалити" style="height: 40px; width: 40px;"></a>
                <? endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div> -->