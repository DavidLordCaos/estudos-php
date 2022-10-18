$(document).ready(function () {
    $("form").submit(function (event) {
        $(".form-group").removeClass("has-error");
        $(".help-block").remove();
        var formData = {
            num1: $("#num1").val(),
            num2: $("#num2").val(),
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
                if (data.errors.num1) {
                    $("#number1").addClass("has-error");
                    $("#number1").append(
                        '<div class="help-block">' + data.errors.num1 + "</div>"
                    );
                }

                if (data.errors.num2) {
                    $("#number2").addClass("has-error");
                    $("#number2").append(
                        '<div class="help-block">' + data.errors.num2 + "</div>"
                    );
                }

            } else {
                $("#form").append(
                    '<div class="alert alert-success">' + data.message + "</div>",
                    '<div class="alert alert-success">' + 'O resultado é ' + data.result + "</div>"
                );
            }
        });

        event.preventDefault();
    });
});