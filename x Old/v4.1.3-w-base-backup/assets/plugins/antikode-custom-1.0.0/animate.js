/// Spliting Word Animation
// Animation 
var words = document.getElementsByClassName('word');
var wordArray = [];
var currentWord = 0;

words[currentWord].style.opacity = 1;
for (var i = 0; i < words.length; i++) {
  splitLetters(words[i]);
}
function changeWord() {
  var cw = wordArray[currentWord];
  var nw = currentWord == words.length-1 ? wordArray[0] : wordArray[currentWord+1];
  for (var i = 0; i < cw.length; i++) {
    animateLetterOut(cw, i);
  }
  for (var i = 0; i < nw.length; i++) {
    nw[i].className = 'letter behind';
    nw[0].parentElement.style.opacity = 1;
    animateLetterIn(nw, i);
  }
  currentWord = (currentWord == wordArray.length-1) ? 0 : currentWord+1;
}
function animateLetterOut(cw, i) {
  setTimeout(function() {
		cw[i].className = 'letter out';
  }, i*80);
}
function animateLetterIn(nw, i) {
  setTimeout(function() {
		nw[i].className = 'letter in';
  }, 340+(i*80));
}
function splitLetters(word) {
  var content = word.innerHTML;
  word.innerHTML = '';
  var letters = [];
  for (var i = 0; i < content.length; i++) {
    var letter = document.createElement('span');
    letter.className = 'letter';
    letter.innerHTML = content.charAt(i);
    word.appendChild(letter);
    letters.push(letter);
  }
  wordArray.push(letters);
}
changeWord();
setInterval(changeWord, 3000);


/// On Scroll Animation (Manual)
// Manually set animation on scroll
// Has dependency on Animate CSS
/* $(window).scroll(function() {
    $(".item1").each(function() {
      var a = $(this).offset().top,
          d = $(window).scrollTop();
        d + 600 > a && ($(this).addClass("animated fadeInUp"), 
        $(".item2").addClass("animated fadeInUp delayp2"), 
        $(".item3").addClass("animated fadeInLeft delayp4"), 
        $(".item4").addClass("animated fadeInLeft delayp6"), 
        $(".item5").addClass("animated fadeInLeft delayp8"))
    }), 
    $(".item6").each(function() {
      var a = $(this).offset().top,
          d = $(window).scrollTop();
        d + 600 > a && ($(this).addClass("animated fadeInUp"), 
        $(".item7").addClass("animated fadeInUp delayp2"), 
        $(".item8").addClass("animated fadeInUp delayp4"), 
        $(".item9").addClass("animated fadeInLeft delayp6"))
    })
  })
}); */



/*GSAP */
/*
var text = $(".split");

var split = new SplitText(text);

function random(min, max){
  return (Math.random() * (max - min)) + min;
}

$(split.chars).each(function(i){
  TweenMax.from($(this), 2.5, {
    opacity: 0,
    x: random(-500, 500),
    y: random(-500, 500),
    z: random(-500, 500),
    scale: .1,
    delay: i * .02,
    yoyo: true,
    repeat: -1,
    repeatDelay: 10
  });
}); */
