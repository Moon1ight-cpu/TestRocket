const UI = {
    burger: document.querySelector('.header__burger'),
    bot: document.querySelector('.header__bot'),
    form: document.querySelector('.modal__form'),
    fioInput: document.querySelector('#recipient-name'),
    text: document.querySelector('#message-text'),
    modal: document.querySelector('.modal'),
    nav: document.querySelector('.nav'),
}

UI.burger.addEventListener('click', () => {
    UI.burger.classList.toggle('header__burger--active')
    UI.bot.classList.toggle('header__bot--active')
})

UI.form.addEventListener('submit', formSend)

UI.nav.addEventListener('click', (e) => {
    if (e.target.className === 'nav-link') {
        UI.burger.classList.remove('header__burger--active')
        UI.bot.classList.remove('header__bot--active')
    }
})



async function formSend(e) {
    e.preventDefault()

    UI.modal.classList.add('form--sending')


    let response = await sendData(serializeForm())
    if (response.ok) {
        UI.modal.classList.remove('form--sending')
        let result = await response.json()
        alert(result.message)
        UI.form.reset()
    } else {
        UI.modal.classList.remove('form--sending')
        alert('Ошибка')
    }

    function serializeForm() {
        let formData = new FormData()

        formData.append('name', UI.fioInput.value)
        formData.append('message', UI.text.value)
        return formData
    }

    async function sendData(data) {
        return await fetch('sendmail.php', {
            method: 'POST',
            body: data,
        })
    }
}