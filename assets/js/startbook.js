// 目次の表示・非表示
jQuery(".startbook__moreButtonWrapper.-contents").click(function () {
  if (jQuery(".startbook__contentsContent").hasClass("-hidden")) {
    jQuery(".startbook__contentsContent").slideDown();
  } else {
    jQuery(".startbook__contentsContent").slideUp();
  }
  jQuery(".startbook__contentsContent").toggleClass("-hidden");
});

// お申し込みから発送までの流れの表示・非表示
jQuery(".startbook__moreButtonWrapper.-flow").click(function () {
  if (jQuery(".startbook__flowContents").hasClass("-hidden")) {
    jQuery(".startbook__flowContents").slideDown();
  } else {
    jQuery(".startbook__flowContents").slideUp();
  }
  jQuery(".startbook__flowContents").toggleClass("-hidden");
});