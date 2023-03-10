//----------Funkcje obslugujące zestaw - jeszcze nie działają i powodują błędy ---------//

$(document).ready(function() {
    $('.wybrany_zestaw').click(function(){
        $('.wybrany_zestaw').removeClass('active')
        console.log(this.classList.add('active'))
    })
})
