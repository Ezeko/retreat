const member = document.querySelectorAll("input[name='member']");
const yesClass = document.querySelectorAll('yes');

console.log( yesClass.classListName);
member.addEventListener('click', (e)=>{
    console.log('working');
    e.preventDefault();

})
