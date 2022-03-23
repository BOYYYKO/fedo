<div id="features" class="tabs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="above-heading">Товар</div>
                <h2 class="h2-heading">Детальніше про товар</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Tabs Content -->
                <div class="tab-content" id="argoTabsContent">

                    <!-- Tab -->
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="row">
                            <div class="col-lg-6 ">
                                <div class="image-container">
                                    <? if (is_file('files/news/' . $model['photo'] . '_m.jpg')) : ?>
                                        <? if (is_file('files/news/' . $model['photo'] . '_b.jpg')) : ?>
                                            <a href="/files/news/<?= $model['photo'] ?>_b.jpg" data-fancybox="gallery">
                                            <? endif; ?>
                                            <img src="/files/news/<?= $model['photo'] ?>_m.jpg" />
                                            <? if (is_file('files/news/' . $model['photo'] . '_b.jpg')) : ?>
                                            </a>
                                        <? endif; ?>
                                    <? endif; ?>
                                </div> <!-- end of image-container -->
                            </div> <!-- end of col -->
                            <div class="col-lg-6">
                                <div class="text-container">
                                    <h3><?= $model['title'] ?></h3>
                                    <p>Опис товару: <?= $model['description'] ?></p>
                                    <ul class="list-unstyled li-space-lg">
                                        <li class="media">
                                            <i class="fas fa-square"></i>
                                            <div class="media-body">Присутні всі розміри</div>
                                        </li>
                                        <li class="media">
                                            <i class="fas fa-square"></i>
                                            <div class="media-body">Найраща якість</div>
                                        </li>
                                        <li class="media">
                                            <i class="fas fa-square"></i>
                                            <div class="media-body">Швидка доставка</div>
                                        </li>
                                    </ul>
                                    <a class="btn-solid-reg page-scroll" href="/tovars/">Назад</a>
                                    <script src="https://pay.fondy.eu/static_common/v1/checkout/ipsp.js"></script>
                                    <script>
                                        var button = $ipsp.get('button');
                                        button.setMerchantId( 1396424);
                                        button.setAmount(<?= $model['price'] ?>, 'UAH', true);
                                        button.setHost('pay.fondy.eu');
                                    </script>
                                    <button class="btn-solid-reg popup-with-move-anim" onclick="location.href=button.getUrl()">Придбати</button>                                </div> <!-- end of text-container -->
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->
                </div> <!-- end of tab content -->
                <!-- end of tabs content -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of tabs -->
<!-- end of features -->