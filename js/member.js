const member = document.querySelector("input[name='gender']");
const yesClass = document.querySelectorAll('yes');

console.log( yesClass.classListName);
member.addEventListener('click', ()=>{
    if (member.value === 'yes'){
        yesClass.addClassList('show');
        console.log( yesClass.classListName);
    }
})
