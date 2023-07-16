<div id="menu_topp">
    <div class="header-cachtop">
        <div class="header-top">
            <div class="fixwidth d-flex justify-content-between align-self-center flex-wrap">
                <div class="menu_mobi align-self-center">
                    <p class="icon_menu_mobi"><i class="fas fa-bars"></i></p>
                    <a href="" class="home_mobi">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="header_left_mobile align-self-center">
                    <a class="header_logo" href=""><img onerror="this.src='<?= THUMBS ?>/0x200x1/assets/images/noimage.png';" src="<?= THUMBS ?>/0x200x1/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" /></a>
                </div>
                <div class="menu_mobi_add">
                    <div class="frm_timkiem">
                        <input type="text" class="input" id="keyword" placeholder="Tìm kiếm" onkeypress="doEnter(event,'keyword');">
                        <button type="submit" class="nut_tim" onclick="onSearch('keyword');"><i class="far fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="fixwidth d-flex justify-content-between flex-wrap align-items-center">
                <div class="header_left align-self-center">
                    <a class="header_logo" href=""><img onerror="this.src='<?= THUMBS ?>/0x100x1/assets/images/noimage.png';" src="<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" /></a>
                </div>
                <div class="boxmenu_middle align-self-center ">
                    <div><?= $setting['tenvi'] ?></div>
                    <div><span><?= $optsetting['slogan'] ?></span></div>
                </div>

                <div class="all_totle d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex align-items-center mb-2 contact_header">
                        <div><img src="assets/images/mail-icon.png" width="25" height="25" alt="" srcset=""></div>
                        <div class="pl-2"><span><?= $optsetting['email'] ?></span></div>
                    </div>
                    <div class="d-flex align-items-center contact_header">
                        <div> <img src="assets/images/mobilephone-icon.png" width="25" alt="" srcset=""></div>
                        <div class="pl-2">Hotline: <span><?= $optsetting['hotline'] ?></span></div>
                    </div>
                    <!-- <div class="frm_timkiem">
                        <input type="text" class="input" id="keyword2" placeholder="Tìm kiếm" onkeypress="doEnter(event,'keyword2');">
                        <button type="submit" class="nut_tim" onclick="onSearch('keyword2');"><i class="far fa-search"></i></button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <div class="header-height">
        <div id="menu_top">
            <div class="fixwidth clearfix">
                <div class="menu">
                    <ul class="menu_cap_cha d-flex">
                        <li class="menulicha <?= $source == 'index' ? 'trangchu active' : '' ?>"><a href="" title="TRANG CHỦ">TRANG CHỦ</a></li>
                        <li class="menulicha <?= $com == 'gioi-thieu' ? 'trangchu active' : '' ?>"><a href="gioi-thieu" title="GIỚI THIỆU">GIỚI THIỆU</a></li>

                        <li class="menulicha <?= $com == 'san-pham' ? 'trangchu active' : '' ?>"><a href="san-pham" title="SẢN PHẨM">SẢN PHẨM</a>
                            <?php if ($splistmenu) { ?>
                                <ul class="menu_cap_con">
                                    <?php foreach ($splistmenu as $c => $cat) { ?>
                                        <li><a title="<?= $cat['ten' . $lang] ?>" href="<?= $cat[$sluglang] ?>"><?= $cat['ten' . $lang] ?> <i class="far fa-angle-right"></i></a>
                                            <?php
                                            $spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, id,photo from #_product_cat where type = ? and id_list = ? and hienthi > 0 order by stt,id desc", array('san-pham', $cat['id']));
                                            if (count($spcatmenu) > 0) { ?>
                                                <ul class="menu_cap_2">
                                                    <?php foreach ($spcatmenu as $c1 => $cat1) {
                                                        $spitemmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, id,photo from #_product_item where type = ? and id_cat = ? and hienthi > 0 order by stt,id desc", array('san-pham', $cat1['id']));
                                                    ?>
                                                        <li><a title="<?= $cat1['ten' . $lang] ?>" href="<?= $cat1[$sluglang] ?>"><?= $cat1['ten' . $lang] ?></a>                                                      
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>

                        <li class="menulicha <?= $com == 'du-an' ? 'trangchu active' : '' ?>"><a href="du-an" title="DỰ ÁN">DỰ ÁN</a></li>
                        <li class="menulicha <?= $com == 'thi-cong-noi-that' ? 'trangchu active' : '' ?>"><a href="thi-cong-noi-that" title="THI CÔNG NỘI THẤT">THI CÔNG NỘI THẤT</a>

                        </li>
                        <li class="menulicha <?= $com == 'phu-kien' ? 'trangchu active' : '' ?>"><a href="phu-kien" title="PHỤ KIỆN">PHỤ KIỆN</a>

                        </li>
                        <li class="menulicha <?= $com == 'tin-tuc' ? 'trangchu active' : '' ?>"><a href="tin-tuc" title="TIN TỨC">TIN TỨC</a>

                        </li>
                        <li class="menulicha <?= $com == 'lien-he' ? 'trangchu active' : '' ?>"><a href="lien-he" title="LIÊN HỆ">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>