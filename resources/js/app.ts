import './bootstrap';
import {Projects} from "./Models/Projects";
import {News} from "./Models/News";
import {Tutos} from "./Models/Tutos";
import {Glossaries} from "./Models/Glossaries";
import {Offers} from "./Models/Offers";
import {Partners} from "./Models/Partners";
import {People} from "./Models/People";
import {Alumnis} from "./Models/Alumnis";
import {LatestSubjects} from "./Models/LatestSubjects";
import {MySubjects} from "./Models/MySubjects";
import {LatestAnswers} from "./Models/LatestAnswers";
import {MyAnswers} from "./Models/MyAnswers";
window.addEventListener('load', init);
const siteUrl = 'http://tecweb.test/';
let buttonSearches = document.getElementsByClassName('filter');
let nav = document.querySelector('[aria-labelledby="navigation"]') as HTMLElement;
let burger = document.querySelector('.burger_position') as HTMLDivElement;
let searchInputOffer = document.querySelector('#offer #search') as HTMLInputElement;
let searchInputPartner = document.querySelector('#partner #search') as HTMLInputElement;
let sortSelectCityEntreprise = document.querySelector('#cities') as HTMLSelectElement;
let sortSelectAgencyPartner = document.querySelector('.agency-partner') as HTMLSelectElement;
let sortSelectAgencyOffer = document.querySelector('.agency-offer') as HTMLSelectElement;
let sortSelectJobsEntreprise = document.querySelector('#jobs') as HTMLSelectElement;
let searchInputGlossary = document.querySelector('#glossary #search') as HTMLInputElement;
let searchInputTuto = document.querySelector('#tuto #search') as HTMLInputElement;
let sortSelectLanguageTuto = document.querySelector('#languages') as HTMLSelectElement;
let sortSelectDateTuto = document.querySelector('#date') as HTMLSelectElement;
let searchInputBottin = document.querySelector('#bottin #search') as HTMLInputElement;
let sortSelectStatusBottin = document.querySelector('#bottin_sort #status') as HTMLSelectElement;
let sortSelectDateBottin = document.querySelector('#bottin_sort #year') as HTMLSelectElement;
let sortSelectStatusAlumni = document.querySelector('#alumni_sort #status') as HTMLSelectElement;
let sortSelectDateAlumni = document.querySelector('#alumni_sort #year') as HTMLSelectElement;
let searchInputAlumni = document.querySelector('#alumni #search') as HTMLInputElement;
let searchInputLatestSubject = document.querySelector('#latestsubject #search') as HTMLInputElement;
let searchInputLatestAnswer = document.querySelector('#latestanswer #search') as HTMLInputElement;
let searchInputMySubject = document.querySelector('#mysubject #search') as HTMLInputElement;
let searchInputMyAnswer = document.querySelector('#mytalks #search') as HTMLInputElement;
let sortSelectTagLatestSubject = document.querySelector('#sortlatestsubject #tags') as HTMLSelectElement;
let sortSelectDateLatestSubject = document.querySelector('#sortlatestsubject .year-forum') as HTMLSelectElement;
let sortSelectStatusLatestSubject = document.querySelector('#sortlatestsubject .status-forum') as HTMLSelectElement;
let sortSelectTagLatestAnswer = document.querySelector('#sortlatestanswers #tags') as HTMLSelectElement;
let sortSelectDateLatestAnswer = document.querySelector('#sortlatestanswers .year-forum') as HTMLSelectElement;
let sortSelectStatusLatestAnswer = document.querySelector('#sortlatestanswers .status-forum') as HTMLSelectElement;
let sortSelectTagMySubject = document.querySelector('#sortmysubject #tags') as HTMLSelectElement;
let sortSelectDateMySubject = document.querySelector('#sortmysubject .year-forum') as HTMLSelectElement;
let sortSelectStatusMySubject = document.querySelector('#sortmysubject .status-forum') as HTMLSelectElement;
let sortSelectTagMyAnswer = document.querySelector('#sortmyanswers #tags') as HTMLSelectElement;
let sortSelectDateMyAnswer = document.querySelector('#sortmyanswers .year-forum') as HTMLSelectElement;
let sortSelectStatusMyAnswer = document.querySelector('#sortmyanswers .status-forum') as HTMLSelectElement;
let searchGlobalInput = document.querySelector('#search_bar') as HTMLInputElement;
let forms = document.querySelectorAll('.forms') as NodeListOf<HTMLFormElement>;
let searchInputProject = document.querySelector('#project #search') as HTMLInputElement;
let searchInputNew = document.querySelector('#new #search') as HTMLInputElement;
let containerGlobal = document.getElementById('content')
let pdf = document.getElementById('pdf') as HTMLInputElement;
let textInput = document.querySelector('.textInput');
let avatar = document.getElementById('avatar') as HTMLInputElement;
let imgAvatar = document.querySelector('#avatarUpdate') as HTMLImageElement;
let imgSrc = document.querySelector('#avatarSrcset') as HTMLImageElement;
let backImage = document.getElementById('back_image') as HTMLInputElement;
let backAvatar = document.querySelector('#backUpdate') as HTMLImageElement;
let imgSrcBack = document.querySelector('#backSrcset') as HTMLImageElement;
if (pdf !== null) {
    pdf.classList.add('sr-only')
    pdf.addEventListener('change', () => {
        if (pdf.value) {
            // @ts-ignore
            textInput.innerHTML = `<p class="text-sm">${pdf.value}</p>`;
        }
    })
}

function init() {
    document.body.classList.remove('no-js');
    document.body.classList.add('js-only');
    searchGlobalInput.value = '';
    if (searchInputProject !== null) {
        new Projects(siteUrl, slideInView);
    }
    if (searchInputNew !== null) {
        new News(siteUrl, slideInView);
    }
    if (searchInputOffer !== null || sortSelectAgencyOffer !== null || sortSelectJobsEntreprise !== null) {
        new Offers(siteUrl, slideInView);
    }
    if (searchInputPartner !== null || sortSelectAgencyPartner !== null || sortSelectCityEntreprise !== null) {
        new Partners(siteUrl, slideInView);
    }
    if (searchInputTuto !== null || sortSelectDateTuto !== null || sortSelectLanguageTuto !== null) {
        new Tutos(siteUrl, slideInView);
    }
    if (searchInputBottin !== null || sortSelectDateBottin !== null || sortSelectStatusBottin !== null) {
        new People(siteUrl, slideInView);
    }
    if (searchInputGlossary !== null) {
        new Glossaries(siteUrl, slideInView);
    }
    if (searchInputAlumni !== null || sortSelectDateAlumni !== null || sortSelectStatusAlumni !== null) {
        new Alumnis(siteUrl, slideInView);
    }
    if (searchInputLatestSubject !== null || sortSelectDateLatestSubject !== null || sortSelectStatusLatestSubject !== null || sortSelectTagLatestSubject !== null) {
        new LatestSubjects(siteUrl, slideInView);
    }
    if (searchInputMySubject !== null || sortSelectDateMySubject !== null || sortSelectStatusMySubject !== null || sortSelectTagMySubject !== null) {
        new MySubjects(siteUrl, slideInView);
    }
    if (searchInputLatestAnswer !== null || sortSelectDateLatestAnswer !== null || sortSelectStatusLatestAnswer !== null || sortSelectTagLatestAnswer !== null) {
        new LatestAnswers(siteUrl, slideInView);
    }
    if (searchInputMyAnswer !== null || sortSelectDateMyAnswer !== null || sortSelectStatusMyAnswer !== null || sortSelectTagMyAnswer !== null) {
        new MyAnswers(siteUrl, slideInView);
    }

    slideInView();
    handlePassword();
    burgerMenu();
}
window.addEventListener('resize', ()=>{
    let test = window.innerHeight - nav.clientHeight
    burger.style.height = test + 'px';
})
const stateSearchGlobal = {
    search_bar: '',
    page: 1,
}


for (let i = 0; i < buttonSearches.length; i++) {
    buttonSearches[i].classList.add('sr-only')
}

// @ts-ignore
for (const form of forms) {
    form.addEventListener('submit', (e) => {
        e.preventDefault();
    })
}

function updateImageModifyProfil() {

    avatar.classList.add('sr-only')

    function showPreview(event) {
        imgSrc.classList.add('sr-only')
        imgAvatar.classList.remove('sr-only')
        if (event.target.files.length > 0) {
            imgAvatar.src = URL.createObjectURL(event.target.files[0]);
            imgAvatar.style.display = "block";
            if (document.body.clientWidth < 2040) {
                imgAvatar.style.width = '108px'
            } else {
                imgAvatar.style.width = '140px'
            }
        }
    }

    avatar.addEventListener('change', (e) => {
        showPreview(e);
    })
}

function updateImageModifyBackImage() {

    backImage.classList.add('sr-only')

    function showPreview(event) {
        imgSrcBack.classList.add('sr-only')
        backAvatar.classList.remove('sr-only')
        if (event.target.files.length > 0) {
            backAvatar.src = URL.createObjectURL(event.target.files[0]);
            backAvatar.style.display = "block";
            if (document.body.clientWidth < 2040) {
                backAvatar.style.width = '108px'
            } else {
                backAvatar.style.width = '140px'
            }
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
        let test = window.innerHeight - nav.clientHeight
        burger.style.height = test + 'px';
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
        btn.addEventListener('click', () => {
            let input = inputs[index] as HTMLInputElement;
            (input.type === 'password') ? input.type = 'text' : input.type = 'password';
            show[index].classList.toggle('hidden');
            hide[index].classList.toggle('hidden');
        });
    });
}

function slideInView() {
    document.documentElement.classList.add('js-enabled');
    let options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5,
    }

    let aTargets = document.querySelectorAll('.slide-in');
    let observer = new IntersectionObserver(callback, options);
    // @ts-ignore
    for (const target of aTargets) {
        observer.observe(target);
    }

    function callback(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }
}


if (avatar !== null) {
    updateImageModifyProfil()
}
if (backImage !== null) {
    updateImageModifyBackImage()
}


if (searchGlobalInput !== null) {
    searchGlobalInput.value = '';
    searchGlobalInput.addEventListener('input', (e) => {
        stateSearchGlobal.search_bar = (e.currentTarget as HTMLInputElement).value;
        stateSearchGlobal.page = 1;
        makeRequestGlobal()

    })
}

function makeRequestGlobal() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `${siteUrl}${locale[1]}/search/ajax?` + new URLSearchParams(stateSearchGlobal);
    history.pushState(stateSearchGlobal, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableGlobal(data));
}

function updateDataTableGlobal(data) {
    containerGlobal.innerHTML = data
    slideInView();
}
