async function main(){
    setMediaAlunos()
    const alunos = await getAlunos()
    loadStudentsInfo(alunos)
}

main()