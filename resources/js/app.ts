import './bootstrap';

let checkbox = document.getElementById('burger') as HTMLInputElement;
let body = document.body as HTMLBodyElement;

checkbox.addEventListener('change',(e)=>{
    // @ts-ignore
    if (e.currentTarget.checked){
        body.classList.add('overflow-hidden')
    }else{
        body.classList.remove('overflow-hidden')
    }
});
