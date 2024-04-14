AOS.init();

function hideModal() {
  $("#myModal").fadeOut();
  setTimeout(() => {
    $("#myModal").css("display", "none");
  }, 1000);
}
function showModal() {
  $("#myModal").fadeIn();
  $("#myModal").css("display", "block");
}

$(document).ready(function () {
  $("#btn-modal").click(showModal);

  $(".close").click(hideModal);

  $(window).click(function (event) {
    if (event.target == document.getElementById("myModal")) {
      hideModal();
    }
  });
});
