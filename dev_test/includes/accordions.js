//jshint esversion:6

// this is for the accordion menues for the page

const acc = document.getElementsByClassName("accordion");

for (var i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {

    this.classList.toggle("active");

    let panel = this.nextElementSibling;

    if (panel.style.display === "block") {

      panel.style.display = "none";

    } else {
      panel.style.display = "block";

    }

  });

}
