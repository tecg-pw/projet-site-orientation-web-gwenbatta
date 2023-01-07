import './bootstrap';

window.addEventListener('load', init);
let buttonSearches = document.querySelectorAll('#searchButton') as NodeListOf<HTMLButtonElement>;
let searchGlobalInput = document.querySelector('#search_bar') as HTMLInputElement;
let searchGlobalForm = document.querySelector('#searchGlobalForm') as HTMLFormElement;
function init() {
    document.body.classList.remove('no-js');
    document.body.classList.add('js-only');

     handlePassword()
     burgerMenu()
     pdfInputTextValue()

}
     updateImageModifyProfil()
     updateImageModifyBackImage()




// @ts-ignore
for (const buttonSearchElement of buttonSearches) {
    buttonSearchElement.classList.add('sr-only');
}


function pdfInputTextValue() {
    let pdf = document.getElementById('pdf') as HTMLInputElement;
    let textInput = document.querySelector('.textInput');

    pdf.classList.add('sr-only')
    pdf.addEventListener('change', () => {

        if (pdf.value) {
            // @ts-ignore
            textInput.innerHTML = `<p class="text-sm">${pdf.value}</p>`;
        }
    })
}

function updateImageModifyProfil() {
    let avatar = document.getElementById('avatar') as HTMLInputElement;
    let imgAvatar = document.querySelector('#avatarUpdate') as HTMLImageElement;

    avatar.classList.add('sr-only')

    function showPreview(event){
        if(event.target.files.length > 0){
            imgAvatar.src = URL.createObjectURL(event.target.files[0]);
            imgAvatar.style.display = "block";
        }
    }
    avatar.addEventListener('change', (e) => {
        showPreview(e);
    })
}
function updateImageModifyBackImage() {
    let backImage = document.getElementById('back_image') as HTMLInputElement;
    let backAvatar = document.querySelector('#backUpdate') as HTMLImageElement;

    backImage.classList.add('sr-only')

    function showPreview(event){
        if(event.target.files.length > 0){
            backAvatar.src = URL.createObjectURL(event.target.files[0]);
            backAvatar.style.display = "block";
        }
    }
    backImage.addEventListener('change', (e) => {
        showPreview(e);
    })
}

function burgerMenu() {
    let checkbox = document.getElementById('burger') as HTMLInputElement;
    let deleteElement = document.querySelector('.delete-element') as HTMLDivElement;
    let body = document.body as HTMLBodyElement;

    checkbox.addEventListener('change', (e) => {
        // @ts-ignore
        if (e.currentTarget.checked) {
            body.classList.add('overflow-hidden')
        } else {
            body.classList.remove('overflow-hidden')
        }
    });

    if (body.contains(deleteElement)) {
        body.classList.add('overflow-hidden')
    }
}

function handlePassword() {
    let inputs = document.getElementsByClassName('password') as HTMLCollection;
    let btns = document.getElementsByClassName('show-password') as HTMLCollection;
    let show = document.getElementsByClassName('show') as HTMLCollection;
    let hide = document.getElementsByClassName('hide') as HTMLCollection;

    // @ts-ignore
    Array.from(btns).forEach((btn, index) => {
        btn.addEventListener('click', (e) => {
            let input = inputs[index] as HTMLInputElement;
            (input.type === 'password') ? input.type = 'text' : input.type = 'password';
            show[index].classList.toggle('hidden');
            hide[index].classList.toggle('hidden');
        });
    });
}
