import './bootstrap';

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
