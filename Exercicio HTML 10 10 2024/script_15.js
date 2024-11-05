function contar() {

    let saida = document.getElementById('saida')

    saida.innerHTML += `<h2>Contando de 1 até 10</h2>`

    let cont = 1

    while (cont <= 10) {

        //saida.innerHTML += ` ${cont} - `

        if(cont%2 == 0) {
            saida.innerHTML += `<span style="color: red;"> ${cont} </span>`
        }else {
            saida.innerHTML += ` ${cont} `
        }
        if(cont < 10) {
            saida.innerHTML += ` - `
        }
        cont++ // Corresponde a cont = cont + 1
    }

    saida.innerHTML += ` ! `

}