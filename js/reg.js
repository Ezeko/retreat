const member = document.getElementsByName('member')
const yesShow = document.querySelectorAll('.yes')
const noHide = document.querySelectorAll('.no')
const loc = document.querySelector('#location')
const district = document.querySelector('#district')

// console.log(loc)


//console.log(yesShow)
const selection = document.querySelector('#memberSelection')

selection.addEventListener('change', (e) => {
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
        loc.setAttribute('required', 'true')
        district.setAttribute('required', 'true')

        // console.log(district.value)
        district.addEventListener('change', (e) => {
            e.preventDefault()
            const locOptions = document.querySelectorAll('#location option')
            console.log(locOptions)
            // console.log(district.value)
            if (district.value == 'CENTRAL'){
                //first remove all children
                // console.log(locOptions)
                locOptions.forEach(n => n.remove())
                var opt = document.createElement('option');
                opt.innerHTML = 'Central Church'
                opt.setAttribute('value', 'Central')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'OluwaFemi 1 Church'
                opt.setAttribute('value', 'Oluwa-Femi1')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'OluwaFemi 2 Church'
                opt.setAttribute('value', 'Oluwa-Femi2')
                loc.appendChild(opt)
            } else if (district.value == 'CAMPSITE'){
                //first remove all children
                // console.log(locOptions)
                locOptions.forEach(n => n.remove())
                var opt = document.createElement('option');
                opt.innerHTML = 'Campsite Church'
                opt.setAttribute('value', 'Campsite')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Campus Church'
                opt.setAttribute('value', 'Campus')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'College Church'
                opt.setAttribute('value', 'College')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Olotito 1 Church'
                opt.setAttribute('value', 'Olotito1')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Olupitan Church'
                opt.setAttribute('value', 'Olupitan')
                loc.appendChild(opt)
            } else if (district.value == 'EBENEZER'){
                //first remove all children
                // console.log(locOptions)
                locOptions.forEach(n => n.remove())
                var opt = document.createElement('option');
                opt.innerHTML = 'Courage Church'
                opt.setAttribute('value', 'Courage')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Ebenezer Church'
                opt.setAttribute('value', 'Ebenezer')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Fish Pond Church'
                opt.setAttribute('value', 'Fish Pond')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Victorious Church'
                opt.setAttribute('value', 'Victorious ')
                loc.appendChild(opt)
            } else if (district.value == 'POWERLINE'){
                //first remove all children
                // console.log(locOptions)
                locOptions.forEach(n => n.remove())
                var opt = document.createElement('option');
                opt.innerHTML = 'Mission Church'
                opt.setAttribute('value', 'Mission')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Courage Church'
                opt.setAttribute('value', 'Courage_power')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Powerline Church'
                opt.setAttribute('value', 'Powerline')
                loc.appendChild(opt)

            } else if (district.value == 'LAGOS-EXPRESS'){
                //first remove all children
                // console.log(locOptions)
                locOptions.forEach(n => n.remove())
                var opt = document.createElement('option');
                opt.innerHTML = 'Osooro 1 Church'
                opt.setAttribute('value', 'Osooro1')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Osooro 2 Church'
                opt.setAttribute('value', 'Osooro2')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Ologede Church'
                opt.setAttribute('value', 'Ologede')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Dumex Church'
                opt.setAttribute('value', 'Dumex')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Hope'
                opt.setAttribute('value', 'Hope')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Mosco'
                opt.setAttribute('value', 'Mosco')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Immaculate'
                opt.setAttribute('value', 'Immaculate')
                loc.appendChild(opt)
            } else if (district.value == 'IDIMANGO'){
                //first remove all children
                // console.log(locOptions)
                locOptions.forEach(n => n.remove())
                var opt = document.createElement('option');
                opt.innerHTML = 'Idimango 1 Church'
                opt.setAttribute('value', 'Idimango1')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Idimango 2 Church'
                opt.setAttribute('value', 'Idimango2')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Ore Alaba Church'
                opt.setAttribute('value', 'Ore-Alaba')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Albert Church'
                opt.setAttribute('value', 'Albert')
                loc.appendChild(opt)
            } else if (district.value == 'LANGUAGE'){
                //first remove all children
                // console.log(locOptions)
                locOptions.forEach(n => n.remove())
                var opt = document.createElement('option');
                opt.innerHTML = 'Igbo Central/ Hausa Church'
                opt.setAttribute('value', 'IgboCentral/Hausa')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Igbo Express Church'
                opt.setAttribute('value', 'IgboExpress')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Igbo/Kutep Church'
                opt.setAttribute('value', 'Igbo/Kutep')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Urhobo Church'
                opt.setAttribute('value', 'Urhobo ')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Efik'
                opt.setAttribute('value', 'Efik')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Zaccheus'
                opt.setAttribute('value', 'Zaccheus')
                loc.appendChild(opt)
            } else if (district.value == 'OMI-AYO'){
                //first remove all children
                // console.log(locOptions)
                locOptions.forEach(n => n.remove())
                var opt = document.createElement('option');
                opt.innerHTML = 'Omi Ayo Church'
                opt.setAttribute('value', 'Omi-Ayo')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Show Boy Church'
                opt.setAttribute('value', 'Show-Boy')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Akinjagunla Church'
                opt.setAttribute('value', 'Akinjagunle')
                loc.appendChild(opt)

            } else if (district.value == 'IBUKUN-OLUWA'){
                //first remove all children
                // console.log(locOptions)
                locOptions.forEach(n => n.remove())
                var opt = document.createElement('option');
                opt.innerHTML = 'Ibukun Oluwa 1 Church'
                opt.setAttribute('value', 'Ibukun-Oluwa1')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Ibukun Oluwa 2 Church'
                opt.setAttribute('value', 'Ibukun-Oluwa2')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Ibukun Oluwa 3 Church'
                opt.setAttribute('value', 'Ibukun-Oluwa3')
                loc.appendChild(opt)

            } else if (district.value == 'YORUBA'){
                //first remove all children
                // console.log(locOptions)
                locOptions.forEach(n => n.remove())
                var opt = document.createElement('option');
                opt.innerHTML = 'Campground Church'
                opt.setAttribute('value', 'Campground')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Surulere Church'
                opt.setAttribute('value', 'Surulere')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Bolorunduro Church'
                opt.setAttribute('value', 'Bolorunduro')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Big Joe Church'
                opt.setAttribute('value', 'Big Joe')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Central'
                opt.setAttribute('value', 'Central_Yoruba')
                loc.appendChild(opt)
            } else if (district.value == 'OTHERS'){
                //first remove all children
                // console.log(locOptions)
                locOptions.forEach(n => n.remove())
                var opt = document.createElement('option');
                opt.innerHTML = 'Asejire'
                opt.setAttribute('value', 'Asejire')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Ajue'
                opt.setAttribute('value', 'Ajue')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Odigbo '
                opt.setAttribute('value', 'Odigbo')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'F.O.P'
                opt.setAttribute('value', 'F.O.P')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Faith'
                opt.setAttribute('value', 'Faith')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Ofosu'
                opt.setAttribute('value', 'Ofosu')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Kajola'
                opt.setAttribute('value', 'Kajola')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Oniparaga'
                opt.setAttribute('value', 'Oniparaga')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Okefara'
                opt.setAttribute('value', 'Okefara')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Onisere'
                opt.setAttribute('value', 'Onisere')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Oladapo'
                opt.setAttribute('value', 'Oladapo')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Araromi-Obu'
                opt.setAttribute('value', 'Araromi-Obu')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Afforestation'
                opt.setAttribute('value', 'Afforestation')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Omifon'
                opt.setAttribute('value', 'Omifon')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Ajegunle'
                opt.setAttribute('value', 'Ajegunle')
                loc.appendChild(opt)

                var opt = document.createElement('option');
                opt.innerHTML = 'Costain'
                opt.setAttribute('value', 'Costain')
                loc.appendChild(opt)
            }
            // //add label
            // label = document.createElement('label');
            // label.innerHTML = "Your Level<b>*</b>"
            // loc.appendChild(label)
        })
    }
    else if (member[1].checked){
        const denomination = document.getElementsByName('denomination')
        yesShow.forEach(yes => {
            yes.classList.remove('show')
            yes.classList.add('hidden')
        });
        noHide.forEach(no => {
            no.classList.remove('hidden')
            no.classList.add('show')
        });
        // console.log(denomination[0])
        denomination[0].setAttribute('required', 'true')
    }
})

