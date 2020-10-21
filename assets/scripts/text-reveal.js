// Dit heb ik ergens van het magische internet gehaald, prachtig stukje code :-)

var decrypted2 = document.getElementById("decoded2");
var encrypted2 = document.getElementById("encoded2");

function startdecrypt2() {
    var originalText = decrypted2.textContent.split('').reverse();
    var decrypted2Text = "";
    var i = 0;
    decrypted2.textContent = "";
    var shuffleInterval = setInterval(function(){
      var shuffledText = '';
      var j = originalText.length;
      while(j--) shuffledText += String.fromCharCode((Math.random()*94+33) | 0);
      if(i++ % 10 === 0) decrypted2Text += originalText.pop();
      decrypted2.textContent = decrypted2Text;
      encrypted2.textContent = shuffledText;
      if(!shuffledText.length) clearInterval(shuffleInterval);
    },35);
}
if (window.addEventListener) {
    window.addEventListener('load', startdecrypt2, false);
} else {
    window.attachEvent('onload', startdecrypt2); // internet -trash-explorer
}