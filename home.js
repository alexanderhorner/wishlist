$(document).ready(function() {

  // Submit Login
  $('form').submit(function(event) {
    event.preventDefault();

    $(".btn-primary").prop("disabled",true);

    // Verify data
    $.ajax({
      type: 'POST',
      url: 'send.php',
      dataType: 'json',
      timeout: 10000,
      data: $('form').serialize(),
      success: function(data) {
        $(".container-vote").remove();
        $(".alert-success").attr("hidden", false);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        $(".alert-danger").attr("hidden", false);
      }
    });
  });
});

$(".unten").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".vote").offset().top
    }, 500);
});
