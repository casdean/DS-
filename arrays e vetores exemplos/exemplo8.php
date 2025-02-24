<script>

    let onibus = [];
    let continuar = 'sim';

    while (continuar == 'sim') {
        onibus.push(prompt('digite o nome do passageiro:'));
        continuar = prompt("Deseja subir mais alguém no ônibus? sim/não");
        
    }
    console.log('Passageiros do ônibus:')
    onibus.forEach(function(passageiro){
        console.log(passageiro);
    })
</script>