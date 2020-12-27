$('.play-btn').click(function () {
    var id_but = this.id;

    $.ajax({
        url: "/addRecord.php",
        data: {
            "id_but": id_but,
        },
        type: "POST",
        success: function(x) {
        }});

});
