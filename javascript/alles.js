const a = "monkey";
console.log(a);

const donkey = document.querySelector("#tekst");
console.log(donkey);

donkey.innerHTML = "Monkey is een dier";
donkey.style.color = "red";

var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
};

/*<div class="ding "id="tekst">
    <p>dit is een tekst</p>
</div>

.ding {
  padding: 15px;
}
*/
