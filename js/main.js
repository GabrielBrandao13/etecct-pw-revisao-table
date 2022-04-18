async function update(){
    await loadStudentsInfo()
}

async function main(){
    await update()
}

main()