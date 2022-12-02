const nav = document.querySelector(".main_nav")
const linked = document.querySelectorAll(".link_nav")
const linked_logo = document.querySelector(".link_nav_logo")
const link_nav_detail = document.querySelectorAll(".link_nav_detail")

$(window).on("load", function () {
    $('#app').removeClass('hidden')
    $('#loading').addClass('hidden')
});

window.addEventListener('scroll', () => {
    window.scrollY > 30 ? (
        nav.classList.add('bg-white', 'shadow-xl'),
        nav.classList.remove('bg-transparent'),

        linked_logo.classList.remove('text-white'),
        linked_logo.classList.add('text-indigo-500'),

        link_nav_detail.forEach(item => item.classList.add('text-black')),
        link_nav_detail.forEach(item => item.classList.remove('text-white'))
    ) : (
        nav.classList.remove('bg-white', 'shadow-xl'),
        nav.classList.add('bg-transparent'),
        
        linked_logo.classList.add('text-white'),
        linked_logo.classList.remove('text-indigo-500'),

        link_nav_detail.forEach(item => item.classList.add('text-white')),
        link_nav_detail.forEach(item => item.classList.remove('text-black'))
    )
});



const subs_error = (message) => {
    $('#subscribe_mail').removeClass('ring-indigo-400')
    $('#subscribe_mail').addClass('ring-red-500 border-2 border-red-700 placeholder-red-600 text-red-700')
    $('#error_mail_subs').text(message)

    setTimeout(() => {
        $('#error_mail_subs').text('')
        $('#subscribe_mail').addClass('ring-indigo-400')
        $('#subscribe_mail').removeClass('ring-red-500 border-2 border-red-700 placeholder-red-600 text-red-700')
    }, 3000)
}

$('#subs_button').on('click', () => {
    if ($('#subscribe_mail').val().length <= 0) {
        subs_error('This field is required!')
    } else {
        $('#alert').removeClass('hidden')
        setTimeout(() => {
            $('#alert').addClass('hidden')
            $('#subscribe_mail').val('')
        }, 5000)
    }
})

$('#close_alert').on('click', () => {
    $('#alert').addClass('hidden')
})