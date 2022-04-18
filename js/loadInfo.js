function loadStudentsInfo(info){
    clearTable()
    info.map(student => {
        adicionarAluno(student.nome, student.nota1, student.nota2, student.nota3)
    })
}