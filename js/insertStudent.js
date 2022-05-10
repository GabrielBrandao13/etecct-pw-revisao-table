const form = document.querySelector('form')

form.addEventListener('submit', handleAddAluno)

function createCell(val){
    const cell = document.createElement('td')
    cell.textContent = val
    return cell
}

function clearTable(){
    document.querySelector('table tbody').innerHTML = ''
}


function handleAddAluno(e){
    e.preventDefault()
    const inputNome = document.querySelector('#nome')
    const inputNota1 = document.querySelector('#nota1')
    const inputNota2 = document.querySelector('#nota2')
    const inputNota3 = document.querySelector('#nota3')

    const nome = inputNome.value
    const nota1 = inputNota1.value
    const nota2 = inputNota2.value
    const nota3 = inputNota3.value

    insertStudentOnDb(nome, nota1, nota2, nota3)

    inputNome.value = ''
    inputNota1.value = ''
    inputNota2.value = ''
    inputNota3.value = ''
}


function insertStudent(nome, nota1, nota2, nota3){
    const TARGET = document.querySelector('table tbody')
    const row = document.createElement('tr')

    const td1 = createCell(nome)
    const td2 = createCell(nota1)
    const td3 = createCell(nota2)
    const td4 = createCell(nota3)
    const td5 = createCell(0)
    const tdDelete = createCell('❌')
    
    row.appendChild(td1)
    row.appendChild(td2)
    row.appendChild(td3)
    row.appendChild(td4)
    row.appendChild(td5)
    row.appendChild(tdDelete)

    TARGET.appendChild(row)
    setAvgOfStudents()
}



function handleRemoveStudentFactory(id){
    const fn = (e)=> {
        removeStudentFromDb(id)
    }
    return fn
}


async function insertStudentOnDb(nome, nota1, nota2, nota3){
    const data = new FormData()
    
    data.append('nome', nome)
    data.append('nota1', nota1)
    data.append('nota2', nota2)
    data.append('nota3', nota3)
    
    await fetch('./api/insert_aluno.php', {
        body: data,
        method: 'POST',
        "Content-Type": "multipart/form-data"
    })
    update()
}
async function removeStudentFromDb(id){
    const data = new FormData()

    data.append('id', id)

    await fetch('./api/delete_aluno.php', {
        body:data,
        method:'POST',
        'Content-type':"multipart/form-data"
    })
    update()
}