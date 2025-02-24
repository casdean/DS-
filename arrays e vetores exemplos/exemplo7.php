<script>
    // let aluno1 = ""
    // let aluno2 = ""
    // let aluno3 = ""

    let alunos = [
        'savalo horse',
        "catarina silveira",
        "conta gotos oliveira",
    ];

    alunos.push('dipirono');
    alunos.push('mussarelo');
    alunos.push(prompt('Digite o nome do aluno:'));
    console.log(alunos[1]);
    console.log(alunos.length);
    console.log (alunos);
    alunos.forEach(function(aluno) {
        console.log(" o aluno é " + aluno);
    });

   

</script>