function handleColor(e) {
  $("#" + e).toggleClass(e);
}
$(window).keypress(function(e) {
  if (e.key === " " || e.key === "Spacebar") {
    $("#add-element").prepend(
      '<div class="rule-value bg-light" id="rule-value-1"><div class="value text-center text-primary">' +
        $("#rule-input-1").val() +
        '</div><div class="cross-icon text-center"><i class="fa fa-times"></i></div></div>'
    );
    $("#rule-input-1").val("");
  }
});

$(window).ready(function() {
  $("#step2").hide();
  $("#step3").hide();
  $("#step4").hide();
});

function changeBackground() {
  $(".white-div").style("animation", "changeBackgroundWhite 10s ease-in-out");
  // $(".blue-div").style("animation", "changeBackgroundBlue 10s ease-in-out");
}

var steps = [true, false, false, false];
var k = 1;

$("#next-step").click(function() {
  $("#step" + k).hide();
  $("#status-block-" + k)
    .removeClass("active")
    .addClass("complete")
    .html('<i class="fa fa-check"></i>');
  $("#step-content-block-" + k)
    .removeClass("active-block")
    .addClass("inactive-block");
  k = k === 4 ? 0 : k + 1;
  if (k === 0) {
    $("#step1").show();
    $(".white-div").addClass("changeWhite");
    $(".blue-div").addClass("changeBlue");
  }
  else {
    if (k === 1) {
      $("#prev-step").hide();
    } else {
      $("#prev-step").show();
    }
    $("#step" + k).show();
    $("#status-block-" + k)
      .removeClass("incomplete")
      .addClass("active");
    $("#step-content-block-" + k)
      .removeClass("inactive-block")
      .addClass("active-block");
  }
});
$("#prev-step").click(function() {
  $("#step" + k).hide();
  k = k === 0 ? 1 : k - 1;
  if (k === 1) {
    $("#prev-step").hide();
  } else {
    $("#prev-step").show();
  }
  $("#step" + k).show();
});
