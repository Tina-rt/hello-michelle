AOS.init();

function hideModal() {
  $("#myModal").fadeOut();
  setTimeout(() => {
    $("#myModal").css("display", "none");
  }, 1000);
  $(".msg").hide();
}
function showModal() {
  $("#form_creneau").show();
  $("#myModal").fadeIn();
  $("#myModal").css("display", "block");
}

$(document).ready(function () {
  $("#btn-modal").click(showModal);

  $(".close").click(hideModal);

  $(window).click(function (event) {
    if (event.target == document.getElementById("myModal")) {
      hideModal();
      console.log("Clicked outside");
    }
    if (!$(event.target).closest("#nav").length) {
      // code to hide menus
      $("nav").removeClass("collapse");
    }
  });
});

$("section").click(() => {});

$("#send_creneau").click(() => {
  let formData = $("#form_creneau").serialize();
  $.ajax({
    type: "POST",
    url: "modal.php",
    data: formData,

    success: function (response) {
      $("#form_creneau").hide();
      $(".msg").toggleClass("hide");
    },
  });
});

$(".btn-menu").click(() => {
  $("nav").toggleClass("collapse");
});

var services = document.getElementById("services");

$("#discover-btn").click(() => {
  services.scrollIntoView();
  location.hash = "#services";
});
