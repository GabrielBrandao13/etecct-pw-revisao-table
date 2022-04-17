const MINGRADE = 2.5

function iterateOverCell(aluno){
    let notasAluno = [...aluno.children].slice(1, 4).map(node => {
        const nodeValue = Number(node.textContent)
        if(nodeValue < MINGRADE){
            markCellAsReproved(node)
        }
        return nodeValue
    }).map(nota =>{
        const result = Number(nota)
        return result
    })
    let media = avgOf(notasAluno)
    return media
}

function setMediaAlunos(){
    let alunos = [...document.querySelectorAll('tr')]
    alunos.slice(1).map(aluno => {
        let media = iterateOverCell(aluno)
        let mediaContainer = aluno.children[4]
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

