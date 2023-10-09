function bannerDestaque(banner_id) {    
    var interval = 3; /* SEGUNDOS */
    var banner = $('#' + banner_id);
    var imgs = banner.children('img');
    if (banner.length && imgs.length) {
        setInterval(function () {
            banner.find('img').each(function (i) {
                if ($(this).hasClass('active')) {
                    $(this).removeClass('active');
                    pos = i == (imgs.length - 1) ? 0 : i + 1;
                    imgs.eq(pos).addClass('active');
                    return false;
                }
            });
            return false;
        }, (interval * 1000));
    }
}