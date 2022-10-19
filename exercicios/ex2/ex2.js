$(document).ready(function () {
    $("form").submit(function (event) {
        $(".form-group").removeClass("has-error");
        $(".help-block").remove();
        var formData = {
            num: $("#num").val(),
        };

        $.ajax({
            type: "POST",
            url: "message.php",
            data: $('form').serialize(),
            dataType: "json",
            encode: true,
        }).done(function (data) {
            console.log(data);

            if (!data.success) {
                if (data.errors.num) {
                    $("#number").addClass("has-error");
                    $("#number").append(
                        '<div class="help-block">' + data.errors.num + "</div>"
                    );
                }

            } else {
                $("#form").append(
                    '<div class="alert alert-success">' + data.message + "</div>",
                    '<div class="alert alert-success">' + data.result + "</div>",
                );
            }
        });

        event.preventDefault();
    });
});