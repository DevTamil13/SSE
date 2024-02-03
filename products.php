<?php $title = "About" ?>
<?php include("header.php") ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/css/lightgallery-bundle.min.css">
<main>
    <section>
        <div class="container mb-5">
            <div id="lightgallery">
            </div>
            <div class="pagenation">
                <div class="arr-l page" data-type="prev"><i class="fa-solid fa-angle-left"></i></div>
                <div class="pages">
                </div>
                <div class="arr-r page" data-type="next"><i class="fa-solid fa-angle-right"></i></div>
            </div>
        </div>
    </section>
</main>

<?php include("footer.php") ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/lightgallery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/plugins/zoom/lg-zoom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/plugins/thumbnail/lg-thumbnail.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/plugins/fullscreen/lg-fullscreen.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/plugins/autoplay/lg-autoplay.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript"
    src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<script>
    $(document).ready(function () {
        $.getJSON('public/data/gallery.json', function (data) {
            let pages = data.length
            let page_ = ""
            for (let j = 0; j < pages; j++) {
                page_ += j === 0 ? `<span class="page pg_active" data-type="btn"><div class="cont">${j + 1}</div></span>` : `<span class="page" data-type="btn"><div class="cont">${j + 1}</div></span>`
            }
            $('.pages').append(page_)

            function load_gallery(page, data) {
                current_page_data = data[page - 1]['list']
                let html = "";
                for (let i = 0; i < current_page_data.length; i++) {
                    html += `<a data-src="public/img/gallery/${current_page_data[i]['thumb']}.jpg" class="gallery-item" data-sub-html="${current_page_data[i]['title']}"><img alt="${current_page_data[i]['title']}" src="public/img/gallery/${current_page_data[i]['src']}.jpg" />`
                }
                $('#lightgallery').css('opacity', 0)
                $('#lightgallery').empty()
                $('#lightgallery').append(html)
                setTimeout(() => {
                    $('#lightgallery').css('opacity', 1)
                }, 500);

                lightGallery(document.getElementById('lightgallery'), {
                    speed: 500,
                    showZoomInOutIcons: true,
                    actualSize: false,
                    plugins: [lgZoom, lgThumbnail, lgFullscreen, lgAutoplay],
                    download: false,
                    share: false,
                });

                $('.gallery-item').Lazy({
                    // your configuration goes here
                    scrollDirection: 'vertical',
                    effect: 'fadeIn',
                    visibleOnly: true,
                    onError: function (element) {
                        console.log('error loading ' + element.data('src'));
                    }
                });
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
            load_gallery(1, data)

            $('.page').click(function () {
                const type = $(this).data('type')
                let curr_page = Number($('.pg_active').find('.cont').text())
                let curr_act = $('.pg_active')
                if (type == 'prev' && !(curr_page <= 1)) {
                    var this_page = curr_page - 1
                    var set_active = curr_act.prev()
                } else if (type == 'next' && !(curr_page >= pages)) {
                    var this_page = curr_page + 1
                    var set_active = curr_act.next()
                } else if (type == 'btn') {
                    var this_page = $(this).find('.cont').text()
                    var set_active = $(this)
                }
                if (this_page && set_active) {
                    $('.pg_active').removeClass('pg_active')
                    set_active.addClass('pg_active')
                    load_gallery(this_page, data)
                }
            })
        })
    })
</script>