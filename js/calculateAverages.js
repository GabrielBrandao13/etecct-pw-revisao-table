const MINGRADE = 2.5

function iterateOverCell(aluno){
    let studentsGrades = [...aluno.children].slice(1, 4).map(node => {
        const nodeValue = Number(node.textContent)
        if(nodeValue < MINGRADE){
            markCellAsReproved(node)
        }
        return nodeValue
    }).map(grade =>{
        const result = Number(grade)
        return result
    })
    let avgOfStudentsGrades = avgOf(studentsGrades)
    return avgOfStudentsGrades
}

function setAvgOfStudents(){
    let students = [...document.querySelectorAll('tr')]
    students.slice(1).map(student => {
        let media = iterateOverCell(student)
        let mediaContainer = student.children[4]
        mediaContainer.textContent = media
        markStudentsAsReproved(media, mediaContainer)
    })
}

function markStudentsAsReproved(currentGrade, reprovedContainer){
    if(currentGrade < MINGRADE){
        markCellAsReproved(reprovedContainer)
    }
}

function markCellAsReproved(element){
    element.classList.add('reprovado')
}

function avgOf(arr) {
    return arr.reduce((acc, val) => acc+val)/arr.length
}

