const category = document.querySelector('#category')
const school = document.querySelector('#school-div')
const departmentDiv = document.querySelector('#department-div')
const level = document.querySelector('#level')
const sel_level = document.getElementsByName('level')[0]
// console.log(category)

category.addEventListener('change', (e) => {
    e.preventDefault();
    // console.log(category.value)
    // console.log(sel_level)
    if (category.value == 'campus') {
        const institution = document.createElement('input')
        institution.setAttribute('name', 'school')
        institution.setAttribute('type', 'text')
        institution.setAttribute('required', 'true')
        institution.setAttribute('placeholder', 'Your School name?')
        institution.classList.add('form-control')
        school.appendChild(institution)

        const dept = document.createElement('input')
        dept.setAttribute('name', 'dept')
        dept.setAttribute('type', 'text')
        dept.setAttribute('required', 'true')
        dept.setAttribute('placeholder', 'Your Department?')
        dept.classList.add('form-control')
        departmentDiv.appendChild(dept)



        //add required to level
        sel_level.setAttribute('required', 'true')
        // const level_field = document.createElement('select')
        // level_field.setAttribute('name', 'level')
        // level_field.setAttribute('required', 'true')
        // level_field.innerHTML = "<option value=''>Select Level</option><option value='100'>100 Level</option> <option value='200'>200 Level</option><option value='300'>300 Level</option> <option value='400'>400 Level</option><option value='500'>500 Level</option> <option value='600'>600 Level</option> <option value='graduated'> Graduated -Not Applicable-</option>"
        
        // level.appendChild(level_field)
        // //add label
        // label = document.createElement('label');
        // label.innerHTML = "Your Level<b>*</b>"
        // level.appendChild(label)

        school.classList.remove('hidden')
        departmentDiv.classList.remove('hidden')
        level.classList.remove('hidden')
        


    } else {
        //remove inputs if its present
        document.getElementsByName('school')[0]?.remove()
        //remove select options
        document.getElementsByName('level')[0]?.setAttribute('required', 'false')
        //remove department
        document.getElementsByName('dept')[0]?.remove()


        school.classList.add('hidden') //hide school-div
        departmentDiv.classList.add('hidden')
        level.classList.add('hidden') //hide level-div
        
    }
})