window.axios = require('axios')

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

document.getElementById('convertCurrency')
        .addEventListener('click', () => {
            const input = {
                from: document.getElementsByName('from')[0].value,
                to: document.getElementsByName('to')[0].value,
                amount: document.getElementsByName('amount')[0].value,
            }

            const result = document.getElementById('result')

            axios.post('/convert', input)
                 .then(function (response) {
                     const amount = response.data.amount

                     result.textContent = `${ input.amount } ${ input.from } = ${ amount } ${ input.to }`

                     result.classList.remove('hidden')
                     result.classList.add('text-green-500')
                 })
                 .catch(function (err) {
                     result.textContent = 'Failed to convert'

                     result.classList.remove('hidden')
                     result.classList.add('text-red-500')

                     console.warn(err)
                 })
        })

