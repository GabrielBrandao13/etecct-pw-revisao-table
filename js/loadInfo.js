async function loadStudentsInfo(){
    const students = await getAlunos()
    clearTable()

    students.map(student => {
        adicionarAluno(student.nome, student.nota1, student.nota2, student.nota3)
    })
}