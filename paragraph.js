let flag = false;

document.getElementById("first-btn").addEventListener("click", function() {
  flag = true;
});

document.getElementById("second-btn").addEventListener("click", function() {
  if (flag) {
    const paragraph = document.getElementById("text");
    paragraph.style.display = paragraph.style.display === "none" ? "block" : "none";
    flag = false;
  }
});