function QuePersonasNoAtendemos() {
    var x = document.getElementById("NoAtendemos");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }