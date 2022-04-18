async function update(){
    
}

async function main(){
    const info = await getAlunos()
    await loadStudentsInfo(info)
    await update()
}

main()