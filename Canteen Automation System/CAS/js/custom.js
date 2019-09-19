$("body").delegate("#Order", "click", function(event) {
    event.preventDefault();
    var productId = $(this).attr("fid");

    $.ajax({
        url: "action.php",
        method: "POST",
        data: {
            addOrder: 1,
            fid: productId
        },
        success: function(data) {
            //window.location.reload();
            alert(data);
        }
    })
});