async function loadStudentsInfo(){
    const students = await getStudents()
    clearTable()

    students.map(student => {
        insertStudent(student.id, student.nome, student.nota1, student.nota2, student.nota3)
    })
}