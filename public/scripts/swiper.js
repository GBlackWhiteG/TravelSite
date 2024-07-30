const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: true,
    centeredSlides: true,
    slidesPerView: 2.8,
    spaceBetween: 40,


    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});