<!-- <div class="boxfooter_container " id="background-footer">
    <div class="fixwidth row">
        <div class="col-md-5">
            <div class="name_top_footer">
                <?= htmlspecialchars_decode($footer['noidung' . $lang]) ?>
            </div>
            <div class="diachi_footer">
                <img style="width: 5%;" src="/assets/images/chiduong.png" alt="">
                <span><?= $optsetting['diachi'] ?></span>
            </div>
            <div class="diachi_footer">
                <img style="width: 5%;" src="/assets/images/goidien.png" alt="">
                <span><?= $optsetting['hotline'] ?></span>
            </div>
            <div class="diachi_footer">
                <i class="fa-solid fa-envelope" style="font-family: 'Font Awesome 5 Pro';margin-right: 10px;"></i>
                <span><?= $optsetting['email'] ?></span>
            </div>
            <div class="diachi_footer">
                Website:
                <span><?= $optsetting['website'] ?></span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="logo_footer" style="text-align: center;">
                <a class="header_logo" href=""><img onerror="this.src='<?= THUMBS ?>/0x100x2/assets/images/noimage.png';"
                        src="<?= THUMBS ?>/0x100x2/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" /></a>
            </div>
            <div class="boxmenu_middle align-self-center " style="width: 100%;margin-top: 17%;">
                <img class="banner" onerror="this.src='<?= THUMBS ?>/0x70x2/assets/images/noimage.png';" src="<?= THUMBS ?>/0x70x2/<?= UPLOAD_PHOTO_L . $baner['photo'] ?>"/>
            </div>
        </div>
        <div class="col-md-3">
            <iframe
                src="https://www.facebook.com/plugins/page.php?href=<?= $optsetting['fanpage'] ?>&tabs=timeline&width=340&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                width="340" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
    </div>
</div>
<div class="boxfooter_bottom ">
    <div class="fixwidth d-flex justify-content-between flex-wrap">
        <?= $optsetting['copyright'] ?>
        <div>Online: <?= $online ?> | Hôm nay: <?= $counter['today'] ?> | Tổng: <?= $counter['total'] ?></div>
    </div>
</div> -->


<div class="boxfooter_container " id="background-khachhang">
    <div class="fixwidth">
        <div class="row">
            <div class="col-md-4">
                <div class="footer_name"><?= $footer['ten' . $lang] ?></div>
                <div class="des_footer">
                    <?= htmlspecialchars_decode($footer['noidung' . $lang]) ?>
                </div>
            </div>
            <div class="col-md-4 lo_ft">
                <div class="des_footer2 pl-3 pr-3">
                    <?= htmlspecialchars_decode($footer2['noidung' . $lang]) ?>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                <div class="title5"><span> ĐĂNG KÝ NHẬN TIN</span></div>
                <form class="form-newsletter validation-contact" novalidate method="post" action="" enctype="multipart/form-data">
                    <div class="input-contact">
                        <input type="text" class="form-control" id="name-newsletter" name="name-newsletter" placeholder="<?= hoten ?>" required />
                    </div>
                    <div class="input-contact">
                        <input type="number" class="form-control" id="phone-newsletter" name="phone-newsletter" placeholder="<?= sodienthoai ?>" required />
                    </div>
                    <div class="input-contact">
                        <input type="email" class="form-control" id="email-newsletter" name="email-newsletter" placeholder="Email" required />
                    </div>
                    <div class="text-right">
                      <input type="submit" class="btn btn-primary" name="submit-newsletter" value="Gửi Ngay" disabled />  
                    </div>
                    
                </form>
                </div>
                <div class="pt-2 text-right"><?= $optsetting['copyright'] ?>. All rights reserved. Design by Dua TAK</div>
            </div>
        </div>
    </div>

</div>