


//botton số lượng
$('input.input-qty').each(function() {
  var $this = $(this),
    qty = $this.parent().find('.is-form'),
    min = Number($this.attr('min')),
    max = Number($this.attr('max'))
  if (min == 0) {
    var d = 0
  } else d = min
  $(qty).on('click', function() {
    if ($(this).hasClass('minus')) {
      if (d > min) d += -1
    } else if ($(this).hasClass('plus')) {
      var x = Number($this.val()) + 1
      if (x <= max) d += 1
    }
    $this.attr('value', d).val(d)
  })
})
//botton số lượng


const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'vertical',
    loop: true,
    autoplay: {
    delay: 3000,
    },

    // If we need pagination
    //pagination: {
        //el: '.swiper-pagination',
    //},

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
        });
//menu Mobile

document.querySelectorAll('.nav_menu').forEach(
    function(phantu) {
        phantu.style.cssText = "--max-height:"+phantu.scrollHeight+"px";
    }
  );
///menu for

var toggleNav = document.querySelector(".bar");
const mNav = document.querySelector(".nav_menu");
const mParent = document.querySelectorAll(".nav_menu>ul>li:nth-child(-n+4)");

for (let i = 0; i < mParent.length; i++) {
    mParent[i].addEventListener("click", function () {
      let ddStatus = mParent[i].childNodes[2].style.display;  
      if (ddStatus === "block"){
        mParent[i].childNodes[2].style.display = "none";
        document.querySelectorAll('.nav_menu').forEach(
            function(phantu) {
                phantu.style.cssText = "--max-height:"+331+"px";
            }
         );
      } else{
        closeAll(mParent);
        mParent[i].childNodes[2].style.display = "block";   
        document.querySelectorAll('.nav_menu').forEach(
            function(phantu) {
                phantu.style.cssText = "--max-height:"+500+"px";
            }
         );
      }
    })
  }
  toggleNav.addEventListener("click",function() {
    mNav.classList.toggle("open");
    toggleNav.classList.toggle("open"); 
  })
  function closeAll(arg) {
      for (let i = 0; i < arg.length; i++) {
        arg[i].childNodes[2].style.display = "none";
      }
    }


  //so tang dan
  function animateNumber(finalNumber, duration = 5000, startNumber = 0, callback) {
    const startTime = performance.now()
    function updateNumber(currentTime) {
      const elapsedTime = currentTime - startTime
      if (elapsedTime > duration) {
        callback(finalNumber)
      } else {
        const rate = elapsedTime / duration
        const currentNumber = Math.round(rate * finalNumber)
        callback(currentNumber)
        requestAnimationFrame(updateNumber)
      }
    }
    requestAnimationFrame(updateNumber)
  }
  


  ///zoom images

const chitiet = document.querySelector('.chitiet');
const baoquan = document.querySelector('.baoquan');
const tksize = document.querySelector('.thamkhaosize');

if(chitiet){
  chitiet.addEventListener('click',function(){
        document.querySelector('.mota_baoquan').style.display = 'none';
        document.querySelector('.mota_chitiet').style.display = 'block';
        document.querySelector('.mota_size').style.display = 'none';
  });
}
if(baoquan){
  baoquan.addEventListener('click',function(){
    document.querySelector('.mota_baoquan').style.display = 'block';
    document.querySelector('.mota_chitiet').style.display = 'none';
    document.querySelector('.mota_size').style.display = 'none';
  })
}
if(tksize){
  tksize.addEventListener('click',function(){
       document.querySelector('.mota_size').style.display = 'block';
       document.querySelector('.mota_chitiet').style.display = 'none';
       document.querySelector('.mota_baoquan').style.display = 'none';
  })
}

$(document).ready(function() {
  $(".mota_open").click(function(){
    $(this).toggleClass("active");
    $(this).next(".mota").stop('true','true').slideToggle(300);
  });
});

///hieu ung truot menu
var nav = $('nav');
var line = $('<div />').addClass('line');

line.appendTo(nav);

var active = nav.find('.active');
var pos = 0;
var wid = 0;

if(active.length) {
  pos = active.position().left;
  wid = active.width();
  line.css({
    left: pos,
    width: wid
  });
}

nav.find('.mota_hed li a').click(function(e) {
  e.preventDefault();
  if(!$(this).parent().hasClass('active') && !nav.hasClass('animate')) {
    
    nav.addClass('animate');

    var _this = $(this);

    nav.find('.mota_hed li').removeClass('active');

    var position = _this.parent().position();
    var width = _this.parent().width();

    if(position.left >= pos) {
      line.animate({
        width: ((position.left - pos) + width)
      }, 300, function() {
        line.animate({
          width: width,
          left: position.left
        }, 150, function() {
          nav.removeClass('animate');
        });
        _this.parent().addClass('active');
      });
    } else {
      line.animate({
        left: position.left,
        width: ((pos - position.left) + wid)
      }, 300, function() {
        line.animate({
          width: width
        }, 150, function() {
          nav.removeClass('animate');
        });
        _this.parent().addClass('active');
      });
    }

    pos = position.left;
    wid = width;
  }
});


///bang size

var size = document.querySelector('.thamkhaosize');
var modall = document.querySelector('.modall');
var close = document.querySelector('.close');
var body = document.querySelector('.body');


size.addEventListener('click',function(){
    modall.classList.add('open');
});

close.addEventListener('click',function(){
  modall.classList.remove('open');
});

modall.addEventListener('click',function(){
  modall.classList.remove('open');
});

body.addEventListener('click',function(even){
  even.stopPropagation();
})

let ul = document.querySelector('.size .itemc');
let li = document.querySelectorAll('.size .itemc>input');

li.forEach(el =>{
    el.addEventListener('click',function(){
        ul.querySelector('.active').classList.remove('active');
        el.classList.add('active');

    });
});

let ul1 = document.querySelector('.mausac .itemc');
let li1 = document.querySelectorAll('.mausac .itemc>input');

li1.forEach(el =>{
    el.addEventListener('click',function(){
        ul1.querySelector('.active').classList.remove('active');
        el.classList.add('active');

    });
});

var gett = document.getElementById('country');
console.log(gett);


