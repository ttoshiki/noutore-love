"use strict";

window.addEventListener("load", function () {
  // タイムスタンプを取得
  var date = new Date();
  var timestamp = date.getTime();

  // 追加するimgを生成
  var picture = document.createElement('picture');
  var source = document.createElement('source');
  var img = document.createElement('img')
  source.type = 'image/webp';
  // img.src = '/wp-content/themes/noutore-love/assets/img/home/book.gif?' + timestamp;

  // source.srcset = '/wp/wp-content/themes/noutore-love/assets/img/home/book.webp?' + timestamp;
  img.src = '/wp/wp-content/themes/noutore-love/assets/img/home/book.gif?' + timestamp;

  var wrapper = document.getElementById('opening-animation')
  bodyScrollLock.disableBodyScroll(wrapper);
  wrapper.appendChild(picture)
  picture.appendChild(source)
  picture.appendChild(img)
  setTimeout(function(){
    jQuery("#opening-animation img").fadeOut(100);
    jQuery("#opening-animation").fadeOut(200);
    // jqueryのfadeoutが不自然なのでcssアニメーションでfadeout
    wrapper.classList.add('fadeout');
    bodyScrollLock.enableBodyScroll(wrapper);
  }, 1900);
});
