const firstNameForm=document.getElementById('firstName');
const lastNameForm=document.getElementById('lastName');
const eMailForm=document.getElementById('eMail');
const typesForm555=document.getElementById('types');
const password1Form=document.getElementById('password1');
const password2Form=document.getElementById('password2');
const submitButtonForm=document.getElementById('submitButton');

//Cette action filtre le tableau selon ce qui est entrer en paramètre
if (!!firstNameForm){
    firstNameForm.addEventListener('input', () => {
        textCorrection(firstNameForm);
    });
}

if (!!lastNameForm){
    lastNameForm.addEventListener('input', () => {
        textCorrection(lastNameForm);
    });
}
if (!!password1Form){
    password1Form.addEventListener('input', () => {
        mdpCorrection(password1Form);
    });
}
if (!!password2Form){
    password2Form.addEventListener('input', () => {
        mdpCorrection(password2Form);
    });
}

function textCorrection(formName) {
    const Name = formName.value;
    const NameWithoutWrong = Name.replace(/[^a-zA-Z0-9\-' ]/g, '');
    formName.value=NameWithoutWrong;
}

function mdpCorrection(formMdp) {
    const Mdp = formMdp.value;
    const MdpWithoutWrong = Mdp.replace(/[^A-Za-z0-9\*\[\]"#\$\(\)\+:;\{\}\|~\?@]/g, '');
    formMdp.value=MdpWithoutWrong;
}
/**
       * 
       * Fonction filtrant le tableau selon les noms et les prénoms, des élèves, 
       *      correspondant à la recherche.
       * Elle prend en paramètre la balise de recherche au moment où on écrit dedans.
       * 
       */
/*function filterTable(searchInput) {
    //On reprend la valeur
    const searchText = searchInput.value.toLowerCase();

    //On reprend les lignes pour l'analyse des noms et prénoms
    const table = document.getElementById('table');
    const rows = table.querySelectorAll('tr');
    let lastVisibleRow;
    let visible = 0;

    //Début de l'analyse
    for (let i = 1; i < rows.length; i++) {
        let firstName = rows[i].getElementsByTagName('td')[1];
        let lastName = rows[i].getElementsByTagName('td')[2];

        let originalFirstName = firstName.textContent;
        let originalLastName = lastName.textContent;

        let firstNameText = originalFirstName;
        let lastNameText = originalLastName;

        //Vérifications soit si la bare de recherche est vide ou si on recherche quelqu'un
        if (searchText === "") {
            firstName.innerHTML = originalFirstName;
            lastName.innerHTML = originalLastName.charAt(0).toUpperCase() + originalLastName.slice(1);
            rows[i].style.display = '';
        } else {
            let re = "^" + searchText;
            const regex = new RegExp(re, 'i');

            //Modification si il y a un élément correspondant à la requete
            if (firstNameText.match(regex) || lastNameText.match(regex)) {
                rows[i].style.display = '';
                if (firstNameText.match(regex)) {
                    firstName.innerHTML = firstNameText.replace(regex, `<mark>${firstNameText.match(regex)[0]}</mark>`).toUpperCase();
                }
                if (lastNameText.match(regex)) {
                    let markedSearchText = `<mark>${lastNameText.match(regex)[0]}</mark>`;
                    lastName.innerHTML = lastNameText.replace(regex, markedSearchText);
                }

                lastVisibleRow = rows[i];
            } else {

                //Disparition de la ligne s'il n'y a pas de correspondance
                rows[i].style.display = 'none';
            }

        }

        //Compte les éléments rester visible sur la page
        if (i != 0 && rows[i].style.display != 'none') {
            visible++;
        }
    }

    //Modification effectuer selon le nombre d'élèves afficher
    let Count = document.getElementById('nbEleves');
    document.querySelector('.noStudentInResearch').style.display = 'none';
    if (visible > 1) {
        Count.textContent = visible + " élèves";
        if ($('#class option:selected').val() != 'all') {
            $('.checkAll').css('display', '');
        }
    } else if (visible == 1) {
        Count.textContent = visible + " élève";
        if ($('#class option:selected').val() != 'all') {
            $('.checkAll').css('display', 'none');
        }
    } else {
        if (parseInt($('#finalCount').text()) != 0) {
            document.querySelector('.noStudentInResearch').style.display = '';
        }
        if ($('#class option:selected').val() != 'all') {
            $('.checkAll').css('display', 'none');
        }

        //Modification du Compte en dessous du tableau
        Count.textContent = visible + " élève";
    }

    $('.checkAll').prop("checked", false);

}*/