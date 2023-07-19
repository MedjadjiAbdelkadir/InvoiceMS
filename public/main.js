// $('body').addClass('dark-theme');

const btnToggleTheme = document.getElementById("btn-toggle-theme");


let theme = localStorage.getItem("theme");
let iconTheme = localStorage.getItem("icon-theme");
let btnColorText = localStorage.getItem('color-text');


$('body').addClass(theme);
$('#btn-toggle-theme').addClass(btnColorText);
$('#btn-toggle-theme #icon').addClass(iconTheme);


const toggleTheme = () => {
    if(localStorage.getItem("theme") != "dark-theme"){



        localStorage.setItem("theme", "dark-theme");
        $('#btn-toggle-theme #icon').removeClass(localStorage.getItem('icon-theme'));

        $('#btn-toggle-theme').removeClass(localStorage.getItem('color-text'));
        localStorage.setItem('color-text', 'text-white');
        $('#btn-toggle-theme').addClass(localStorage.getItem('color-text'));

        localStorage.setItem("icon-theme", "fa-sun");
        // localStorage.setItem("icon-theme", "fa-moon");
        $('#btn-toggle-theme #icon').addClass(localStorage.getItem('icon-theme'));

        $('body').addClass(localStorage.getItem('theme'));

        console.log(localStorage.getItem('icon-theme'));
        console.log($('#btn-toggle-theme #icon').attr('class'));
    }else{
        // $('#btn-toggle-theme').addClass('text-white');
        
        $('#btn-toggle-theme #icon').removeClass(localStorage.getItem('icon-theme'));

        $('#btn-toggle-theme').removeClass(localStorage.getItem('color-text'));
        localStorage.setItem('color-text', 'text-gray-900');
        $('#btn-toggle-theme').addClass(localStorage.getItem('color-text'));

        $('body').removeClass(localStorage.getItem('theme'));
        localStorage.setItem("icon-theme", "fa-moon");
        // localStorage.setItem("icon-theme", "fa-sun");
        $('#btn-toggle-theme #icon').addClass(localStorage.getItem('icon-theme'));

        localStorage.removeItem("theme");
        console.log(localStorage.getItem('icon-theme'));
        console.log($('#btn-toggle-theme #icon').attr('class'));        
    }
}
btnToggleTheme.onclick = function() {
    toggleTheme();
    $('#btn-toggle-theme').classList.toggle(localStorage.getItem('color-text'))
}
