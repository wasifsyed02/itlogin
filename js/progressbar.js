$(document).ready(function() {
    $('.progress1 .progress-bar1').css("width",
              function() {
                  return $(this).attr("aria-valuenow") + "%";
              }
      )
  });
