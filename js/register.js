const member = document.getElementsByName('member')
const yesShow = document.querySelectorAll('.yes')
const noHide = document.querySelectorAll('.no')
const location = document.querySelector('#location')

console.log(location)


//console.log(yesShow)
const selection = document.querySelector('#memberSelection')

selection.addEventListener('click', (e) => {
    e.preventDefault()
    // console.log('working')
    // console.log(member[0].checked)
    //if yes display yes form
    if (member[0].checked) {
        noHide.forEach(no => {
            no.classList.remove('show')
            no.classList.add('hidden')
        });
        yesShow.forEach(yes => {
            yes.classList.remove('hidden')
            yes.classList.add('show')
        });

    }
    else if (member[1].checked){

        yesShow.forEach(yes => {
            yes.classList.remove('show')
            yes.classList.add('hidden')
        });
        noHide.forEach(no => {
            no.classList.remove('hidden')
            no.classList.add('show')
        });
    }
})

