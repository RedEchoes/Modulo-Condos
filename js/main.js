$(document).ready(function () {
$('.carousel').carousel();
});
/* HEADER */
headerMince = false;
$(window).scroll(function (e) {
  var y_position = window.pageYOffset;
  var y_cible = 50;
  console.log(y_position);
  if (y_position > y_cible && !headerMince) {
    $('#header').addClass('headerMince');
    $('#header').toggleClass('ft-30 ft-20');
    headerMince = true;
  } else if (y_position < y_cible && headerMince) {
    $('#header').removeClass('headerMince');
    $('#header').toggleClass('ft-20 ft-30');
    headerMince = false;
  }
});

/* MENU MOBILE */
$(".activator").click(function () {
  let activateId = $(this).attr("data-activate");
  $("#" + activateId).toggleClass("d-none");
});

/* TIROIRS */
let tir = document.getElementsByClassName("tir-head");
let i;
for (i = 0; i < tir.length; i++) {
  tir[i].addEventListener("click", function () {
    for (i = 0; i < tir.length; i++) {
      tir[i].parentElement.classList.remove("active");
    }
    this.parentElement.classList.toggle("active");
  });
}

/* FORMULAIRE */
$(document).ready(function () {
  $('#characterLeft').text('140 characters left');
  $('#message').keydown(function () {
    var max = 140;
    var len = $(this).val().length;
    if (len >= max) {
      $('#characterLeft').text('You have reached the limit');
      $('#characterLeft').addClass('red');
      $('#btnSubmit').addClass('disabled');
    } else {
      var ch = max - len;
      $('#characterLeft').text(ch + ' characters left');
      $('#btnSubmit').removeClass('disabled');
      $('#characterLeft').removeClass('red');
    }
  });
});

/* CALCUL */
if ($("#formCalcul").length > 0) {
  $('#formCalcul').calx();
  $("#type").change(function () {
    var id = $(this).children(":selected").attr("id");
    if (id == "min") {
      $('#cha3').attr('disabled', true);
      $('#hau, #bea').addClass('d-none');
      $('#cha ,#anc, #lim').removeClass('d-none');
    }
    if (id == "fam") {
      $('#cha3').attr('disabled', false);
      $('#lim, #bea').addClass('d-none');
      $('#hau').removeClass('d-none')
    }
    if (id == "mod") {
      $('#cha3').attr('disabled', false);
      $('#anc, #cha').addClass('d-none');
      $('#hau ,#bea, #lim').removeClass('d-none');
    }
    $('#secteur option:eq(0)').prop('selected', true);
  });
  $("#plancherCheck").change(function () {
    if ($("#plancherCheck").is(':checked')) {
      $("#plancher").attr('disabled', false);
    } else {
      $("#plancher").attr('disabled', true);
    }
  });
  plancher.oninput = function () {
    if (this.value.length > 4)
      this.value = this.value.slice(0, 4);
  }
  $("#type").change(function () {
    var id = $(this).children(":selected").attr("id");
    if (id == "min") {
      $('#plancher').attr('max', 1400);
    }
    if (id == "fam") {
      $('#plancher').attr('max', 1800);
    }
    if (id == "mod") {
      $('#plancher').attr('max', 2400);
    }
  });
}