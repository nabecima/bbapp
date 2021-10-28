const { rest } = require("lodash");

$(function () {
    $("#tweet-form").on("submit", function (e) {
        e.preventDefault();

        const $form = $(this);
        const $textarea = $form.find("textarea");
        const $button = $form.find("button");
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            type: $form.attr("method"),
            url: $form.attr("action"),
            data: $form.serialize(),
            dataType: "json",
        })
            .done(function (res) {
                $tweets = $("#tweets");

                const html = `<div class="col-md-9 d-flex tweet mb-3" data-id="${res.id}">
            <div class="icon-wrapper">
              <a href="/user/${res.user_id}">
                <img src="storage/images/${res.avatar}" alt="" class="img-fluid icon">
              </a>
            </div>
            <div class="content">
                <p class="name font-weight-bold d-flex justify-content-between"><span>${res.name}さん</span><span class="text-center times"><i class="fas fa-times"></i></span></p>
                <p class="tweet-body mb-0">${res.body}</p>
            </div>
        </div>`;

                $tweets.prepend(html);
                console.log(res.body);
                $textarea.val("");
            })
            .fail(function (error) {
                console.log(error);
            });
    });

    $(document).on("click", ".times", function () {
        $tweet = $(this).parents(".tweet");
        $id = $tweet.attr("data-id");

        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            type: "POST",
            url: `tweet/${$id}`,
            data: { _method: "DELETE" },
        }).done(function () {
            $tweet.remove();
        });
    });
});
