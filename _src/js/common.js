$(document).ready(function(){
  // mask animation
  var element = document.querySelectorAll('.mask__animation--whenLoading');

  var elementArr = Array.prototype.slice.call(element);

  // nav
  $(".menu__button").click(function () {
    this.classList.toggle("active");

    $(".header__navList").toggleClass("header__navList--active");
  });

  setTimeout(function () {
    elementArr.forEach(function( items ) {
      items.querySelector('.mask__inner').classList.add('start');
    });
  }, 0);


	$(".marker-animation--whenLoading").each(function(){
    var position = $(this).offset().top;

    var scroll = $(window).scrollTop();

    var windowHeight = $(window).height();

    if (scroll > position - windowHeight){
      $(this).addClass('active');
    }
	});

  // setTimeout(function () {
  // }, 2000);
});

$('a[href^="#"]').not('.ez-toc-link').click(function () {
  var speed = 800;
  var href = $(this).attr("href");
  // var className = $(this).attr("class").split(" ");

  // if (!className.includes('ez-toc-link')) {
  var target = $(href == "#" || href == "" ? "html" : href);
  var position = target.offset().top - 100;
  $("html, body").animate({
    scrollTop: position
  }, speed, "swing");
  return false;
  // }
});

// mask animation
 // スクロールで要素がウィンドウ内に入ったタイミング
window.addEventListener("scroll", function(){
  var element = document.querySelectorAll('.mask__animation');
  var elementArr = Array.prototype.slice.call(element);
  var scrollCount = document.documentElement.scrollTop || document.body.scrollTop;
  var windowHeight = window.innerHeight;
  var threshold = 100;

  elementArr.forEach(function( items ) {
    var elementOffsetTop = items.getBoundingClientRect().top;
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    var offsetPosition = elementOffsetTop + scrollTop;

    if (scrollCount > offsetPosition - windowHeight + threshold) {
      items.querySelector('.mask__inner').classList.add('start');
    }
  });
});

// maker animation
$(window).scroll(function (){
	$(".marker-animation").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
    var windowHeight = $(window).height(); //ウインドウの高さを取得

    if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
      $(this).addClass('active');
    }
  });


  if ($(window).scrollTop() > 0) {
    $('.header__inner').addClass('active');
  } else {
    $('.header__inner').removeClass('active');
  }
});
