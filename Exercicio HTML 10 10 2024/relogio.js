function info() {

    let meses = new Array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro')
    
    let semana = new Array ('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado')
    
    let agora = new Date
    
    let saida = document.getElementById('saida')
    
    let dia = agora.getDate()

    let diasemana = agora.getDay()
    
    let mes = agora.getMonth() // Jan = 0 | Fev = 1 | Mar = 2 e assim vai...
    
    
    saida.innerHTML = `<p>Dia: <mark>${dia}</mark></p>`

    saida.innerHTML += `<p>Dia da semana: <mark>${semana[diasemana]}</mark></p>`
    
    saida.innerHTML += `<p>Mês: <mark>${meses[mes]}</mark></p>`
    
    }