import './bootstrap';

window.addEventListener('load',init);

function init(){
    document.body.classList.remove('no-js');
    document.body.classList.add('js-only');
    handlePassword()
    burgerMenu()
}

let buttonSearches = document.querySelectorAll('#searchButton') as NodeListOf<HTMLButtonElement>;
console.log(buttonSearches);

// @ts-ignore
for (const buttonSearchElement of buttonSearches) {
    buttonSearchElement.classList.add('sr-only');
}



function burgerMenu(){
    let checkbox = document.getElementById('burger') as HTMLInputElement;
    let deleteElement = document.querySelector('.delete-element') as HTMLDivElement;
    let body = document.body as HTMLBodyElement;

    checkbox.addEventListener('change',(e)=>{
        // @ts-ignore
        if (e.currentTarget.checked){
            body.classList.add('overflow-hidden')
        }else{
            body.classList.remove('overflow-hidden')
        }
    });

    if(body.contains(deleteElement)){
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
