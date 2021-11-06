(function ($, undefined) {
    $(function () {
        $("h2").css("color", "white");
    });
    $(window).scroll(function () {
        /* Скроллировать фоновые слои с разной скоростью */
        var winTop = $(window).scrollTop();
        $(".home .mars").css(
            "background-position",
            "center " + -(winTop * 0.5) + "px"
        );
    });
    //   /* Добавить плавный скроллинг ко всем ссылкам внутри тега navbar*/
    //   $("a[href*='#']").on("click", function (event) {
    //     //this.hash - атрибут 'href' ссылки
    //     var hash = $(this).attr("href"); //сохраняем атрибут href
    //     if (hash !== "") {
    //       //проверяем, не пустое ли поле 'href'
    //       // Используем метод jQuery animate(), чтобы добавить плавный скроллинг
    //       $("html, body").animate(
    //         {
    //           scrollTop: $(hash).offset().top, // устанавливаем новое положение документа по якорю
    //         },
    //         900 //900-число миллисекунд - время анимации
    //       );
    //     }
    //   });
})(jQuery);