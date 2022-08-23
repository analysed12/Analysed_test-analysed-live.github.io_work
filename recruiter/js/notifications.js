$(document).ready(function () {
  showNotification();
  setInterval(function () {
    showNotification();
  }, 2000);
});

function showNotification() {
  if (!Notification) {
    $("body").append(
      '<h4 style="color:red">*Browser does not support Web Notification</h4>'
    );
    return;
  }
  if (Notification.permission !== "granted") {
    Notification.requestPermission();
  } else {
    $.ajax({
      //url: "www.google.com",
      //type: "POST",
      success: function (data, textStatus, jqXHR) {
        //var data = jQuery.parseJSON(data);

        //var data_notif = data.notif;
        //for (var i = data_notif.length - 1; i >= 0; i--) {
        //var theurl = data_notif[i]["url"];
        var notifikasi = new Notification("hello", {
          //icon: data_notif[i]["icon"],
          body: "hello how are you",
        });
        notifikasi.onclick = function () {
          window.alert("ok");
          notifikasi.close();
        };
        setTimeout(function () {
          notifikasi.close();
        }, 5000);
        //}
      },
      error: function (jqXHR, textStatus, errorThrown) {},
    });
  }
}
