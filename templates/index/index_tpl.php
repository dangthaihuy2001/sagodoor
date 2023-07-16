<div class="section_product pt-3 pb-3">
    <div class="fixwidth">
        <div class="row">
            <div class="col-md-3 col-12 pl-2 pr-2 mb-3 d-flex flex-column justify-content-center align-items-center bg_khung">
                <div class="title2">SẢN PHẨM <br> NỔI BẬT</div>
                <div class="readmore"><a href="">Xem tất cả <i class="far fa-angle-right"></i></a></div>
            </div>
            <div class="col-md-9 col-12 pl-2 pr-2 mb-3">
                <div class="owl-carousel owl-theme owl-sanpham">
                    <?php foreach ($sanpham_nb as $key => $value) { ?>
                        <a href="<?= $value['tenkhongdauvi'] ?>" class="item_product">
                            <div class="img_product">
                                <img onerror="this.src='<?= THUMBS ?>/300x350x1/assets/images/noimage.png';" src="<?= THUMBS ?>/300x350x1/<?= UPLOAD_PRODUCT_L . $value['photo'] ?>" />
                            </div>
                            <div class="content_product d-flex align-items-center justify-content-between">
                                <div><?= $value['tenvi'] ?></div>
                                <div><i class="far fa-long-arrow-right"></i></div>
                            </div>
                        </a>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section_product pt-3 pb-3">
    <div class="fixwidth">
        <div class="row">
            <div class="col-md-3 col-12 pl-2 pr-2 mb-3 d-flex flex-column justify-content-center align-items-center bg_khung">
                <div class="title2">SẢN PHẨM <br> BÁN CHẠY</div>
                <div class="readmore"><a href="">Xem tất cả <i class="far fa-angle-right"></i></a></div>
            </div>
            <div class="col-md-9 col-12 pl-2 pr-2 mb-3">
                <div class="owl-carousel owl-theme owl-sanpham">
                    <?php foreach ($sanpham_nb1 as $key => $value) { ?>
                        <a href="<?= $value['tenkhongdauvi'] ?>" class="item_product">
                            <div class="img_product">
                                <img onerror="this.src='<?= THUMBS ?>/300x350x1/assets/images/noimage.png';" src="<?= THUMBS ?>/300x350x1/<?= UPLOAD_PRODUCT_L . $value['photo'] ?>" />
                            </div>
                            <div class="content_product d-flex align-items-center justify-content-between">
                                <div><?= $value['tenvi'] ?></div>
                                <div><i class="far fa-long-arrow-right"></i></div>
                            </div>
                        </a>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php foreach ($danhmucnb_list as $key => $value) {
    $sanpham_list = $d->rawQuery("select ten$lang, tenkhongdauvi, mota$lang, ngaytao,photo, id,gia from #_product where id_list = ? and noibat>0 and hienthi>0 and type='san-pham' order by stt,id desc", array($value['id']));
?>
    <div class="section_product pt-3 pb-3">
        <div class="fixwidth">
            <div class="row">
                <div class="col-md-3 col-12 pl-2 pr-2 mb-3 d-flex flex-column justify-content-center align-items-center bg_khung">
                    <div class="title2"><?= $value['tenvi'] ?></div>
                    <div class="readmore"><a href="">Xem tất cả <i class="far fa-angle-right"></i></a></div>
                </div>
                <div class="col-md-9 col-12 pl-2 pr-2 mb-3">
                    <div class="owl-carousel owl-theme owl-sanpham">
                        <?php foreach ($sanpham_list as $key1 => $value1) { ?>
                            <a href="<?= $value1['tenkhongdauvi'] ?>" class="item_product">
                                <div class="img_product">
                                    <img onerror="this.src='<?= THUMBS ?>/300x350x1/assets/images/noimage.png';" src="<?= THUMBS ?>/300x350x1/<?= UPLOAD_PRODUCT_L . $value1['photo'] ?>" />
                                </div>
                                <div class="content_product d-flex align-items-center justify-content-between">
                                    <div><?= $value1['tenvi'] ?></div>
                                    <div><i class="far fa-long-arrow-right"></i></div>
                                </div>
                            </a>
                        <?php  } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<div class="section_ldc pt-3 pb-3">
    <div class="fixwidth">
        <div class="row">
            <div class="col-md-9 col-12 pl-2 pr-2 mb-3" style="position: relative;">
                <img onerror="this.src='<?= THUMBS ?>/900x100x1/assets/images/noimage.png';" src="<?= UPLOAD_PHOTO_L . $banner_ldc['photo'] ?>" />
                <div class="title_ldc">TẠI SAO NÊN SỬ DỤNG CỬA GỖ NHỰA COMPOSITE SUMKO SMART DOOR?</div>
            </div>
            <div class="col-md-3 col-12 pl-2 pr-2 mb-3 d-flex flex-column justify-content-between ld_right">
                <?php for ($i = 0; $i < count($lydochon); $i++) { ?>
                    <div class="item_ldc mb-4 d-flex align-items-center justify-content-between">
                        <div>
                            <img onerror="this.src='<?= THUMBS ?>/60x60x1/assets/images/noimage.png';" src="<?= THUMBS ?>/60x60x2/<?= UPLOAD_PHOTO_L . $lydochon[$i]['photo'] ?>" />
                        </div>
                        <div class="content_ldc"><?= $lydochon[$i]['tenvi'] ?></div>
                    </div>
                <?php if ($i == 2) {
                        break;
                    }
                } ?>
            </div>
            <?php for ($i = 3; $i < count($lydochon); $i++) { ?>
                <div class="col-md-3 col-12 pl-2 pr-2 mb-3 pt-2 ld_left">
                    <div class="item_ldc d-flex align-items-center justify-content-between">
                        <div>
                            <img onerror="this.src='<?= THUMBS ?>/60x60x1/assets/images/noimage.png';" src="<?= THUMBS ?>/60x60x2/<?= UPLOAD_PHOTO_L . $lydochon[$i]['photo'] ?>" />
                        </div>
                        <div class="content_ldc"><?= $lydochon[$i]['tenvi'] ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="section_intro pt-3 pb-3">
    <div class="fixwidth">
        <div class="row">
            <div class="col-md-4 col-12 pl-2 pr-2 mb-2 bg_khung d-flex flex-column justify-content-center align-items-center" style="position: relative;">
                <div class="title2">VỀ SAGO DOOR</div>
                <div class="readmore"><a href="">Xem tất cả <i class="far fa-angle-right"></i></a></div>
            </div>
            <div class="col-md-8 col-12 pl-2 pr-2 mb-2">
                <?= htmlspecialchars_decode($gioithieu['motavi']) ?>
            </div>
        </div>
    </div>
</div>
<div class="section_thicong pt-3 pb-3">
    <div class="title3">Thi công nội thất</div>
    <div class="grid_tc">
        <?php foreach ($thicong as $key => $value) { ?>
            <div class="item_thicong">
                <div class="img_tc">
                    <img onerror="this.src='<?= THUMBS ?>/500x300x1/assets/images/noimage.png';" src="<?= UPLOAD_NEWS_L . $value['photo'] ?>" />
                </div>
                <div class="content_tc">
                    <div><?= $value['tenvi'] ?></div>
                    <div><a href="">Xem tất cả <i class="far fa-angle-right"></i></a></div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<div class="section_duan pt-3 pb-3">
    <div class="fixwidth">
        <div class="title3">DỰ ÁN</div>
        <div class="grid_duan">
            <?php foreach ($duan as $key => $v) {
                $k = $key;
                if ($k = 9) {
                    $k = 0;
                }
                if ($k == 0) {
                    $w = '800x500x1';
                } elseif ($k < 3) {
                    $w = '400x240x1';
                } elseif ($k < 5) {
                    $w = '600x300x1';
                } else {
                    $w = '400x250x1';
                } ?>
                <a href="<?= $v['tenkhongdauvi'] ?>" class="item_duan duan<?= $key ?>">
                    <div class="img_duan">
                        <img onerror="this.src='<?= THUMBS ?>/<?= $w ?>/assets/images/noimage.png';" src="<?= THUMBS ?>/<?= $w ?>/<?= UPLOAD_NEWS_L . $v['photo'] ?>" loading="lazy" />
                    </div>
                    <div class="content_duan">
                        <div><?= $v['tenvi'] ?></div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</div>