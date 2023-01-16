import './bootstrap';
import {createLogger} from "vite";

window.addEventListener('load', init);
let buttonSearches = document.getElementsByClassName('filter');
let searchInputProject = document.querySelector('#project #search') as HTMLInputElement;
let searchInputNew = document.querySelector('#new #search') as HTMLInputElement;
let searchInputOffer = document.querySelector('#offer #search') as HTMLInputElement;
let searchInputPartner = document.querySelector('#partner #search') as HTMLInputElement;
let sortSelectCityEntreprise = document.querySelector('#cities') as HTMLSelectElement;
let sortSelectAgencyEntreprise = document.querySelector('#agency') as HTMLSelectElement;
let sortSelectJobsEntreprise = document.querySelector('#jobs') as HTMLSelectElement;
let searchInputGlossary = document.querySelector('#glossary #search') as HTMLInputElement;
let searchInputTuto = document.querySelector('#tuto #search') as HTMLInputElement;
let sortSelectLanguageTuto = document.querySelector('#languages') as HTMLSelectElement;
let sortSelectDateTuto = document.querySelector('#date') as HTMLSelectElement;
let searchInputBottin = document.querySelector('#bottin #search') as HTMLInputElement;
let sortSelectStatusBottin = document.querySelector('#status') as HTMLSelectElement;
let sortSelectDateBottin = document.querySelector('#year') as HTMLSelectElement;
let searchInputAlumni = document.querySelector('#alumni #search') as HTMLInputElement;
let searchInputLatestSubject = document.querySelector('#latestsubject #search') as HTMLInputElement;
let searchInputLatestAnswer = document.querySelector('#latestanswer #search') as HTMLInputElement;
let searchInputMySubject = document.querySelector('#mysubject #search') as HTMLInputElement;
let searchInputMyAnswer = document.querySelector('#mytalks #search') as HTMLInputElement;
let searchGlobalInput = document.querySelector('#search_bar') as HTMLInputElement;
let forms = document.querySelectorAll('.forms') as NodeListOf<HTMLFormElement>;
let containerProject = document.getElementById('containerProject')
let containerNew = document.getElementById('containerNew')
let containerOffer = document.getElementById('containerOffer')
let containerPartner = document.getElementById('containerPartner')
let containerGlossary = document.getElementById('containerGlossary')
let containerTuto = document.getElementById('containerTuto')
let containerAlumni = document.getElementById('containerAlumni')
let containerBottin = document.getElementById('containerBottin')
let containerLatestSubject = document.getElementById('containerLatestSubject')
let containerLatestAnswer = document.getElementById('containerLatestAnswer')
let containerMySubject = document.getElementById('containerMySubject')
let containerMyAnswer = document.getElementById('containerMyTalks')

let paginations = document.querySelectorAll('.page') as NodeList;
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
    slideInView();
    handlePassword();
    burgerMenu();
}

const stateSearch = {
    search: '',
    page: 1,
}
const stateSortTutos = {
    date: 'all',
    languages: 'all',
    page: 1
}
const stateSortPeople = {
    status: 'all',
    year: 'all',
    page: 1
}
const stateSortPartner = {
    cities: 'all',
    agency: 'all',
    page: 1
}
const stateSortOffer = {
    jobs: 'all',
    agency: 'all',
    page: 1
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

if (searchInputProject !== null) {
    searchInputProject.value = '';
    searchInputProject.addEventListener('input', (e) => {
        stateSearch.search = (e.currentTarget as HTMLInputElement).value;
        stateSearch.page = 1;
        makeRequestProject()
    })
}
if (searchInputNew !== null) {
    searchInputNew.value = '';
    searchInputNew.addEventListener('input', (e) => {
        stateSearch.search = (e.currentTarget as HTMLInputElement).value;
        stateSearch.page = 1;
        makeRequestNew()
    })
}
if (searchInputOffer !== null) {
    searchInputOffer.value = '';
    searchInputOffer.addEventListener('input', (e) => {
        stateSearch.search = (e.currentTarget as HTMLInputElement).value;
        stateSearch.page = 1;
        makeRequestOffer()
    })
}
if (searchInputPartner !== null) {
    searchInputPartner.value = '';
    searchInputPartner.addEventListener('input', (e) => {
        stateSearch.search = (e.currentTarget as HTMLInputElement).value;
        stateSearch.page = 1;
        makeRequestPartner()
    })
}
if (searchInputGlossary !== null) {
    searchInputGlossary.value = '';
    searchInputGlossary.addEventListener('input', (e) => {
        stateSearch.search = (e.currentTarget as HTMLInputElement).value;
        stateSearch.page = 1;
        makeRequestGlossary()
    })
}
if (searchInputTuto !== null) {
    searchInputTuto.value = '';
    searchInputTuto.addEventListener('input', (e) => {
        stateSearch.search = (e.currentTarget as HTMLInputElement).value;
        stateSearch.page = 1;
        makeRequestTuto()
    })
}
if (searchInputBottin !== null) {
    searchInputBottin.value = '';
    searchInputBottin.addEventListener('input', (e) => {
        stateSearch.search = (e.currentTarget as HTMLInputElement).value;
        stateSearch.page = 1;
        makeRequestBottin()
    })
}
if (searchInputAlumni !== null) {
    searchInputAlumni.value = '';
    searchInputAlumni.addEventListener('input', (e) => {
        stateSearch.search = (e.currentTarget as HTMLInputElement).value;
        stateSearch.page = 1;
        makeRequestAlumni()
    })
}
if (searchInputLatestSubject !== null) {
    searchInputLatestSubject.value = '';
    searchInputLatestSubject.addEventListener('input', (e) => {
        stateSearch.search = (e.currentTarget as HTMLInputElement).value;
        stateSearch.page = 1;
        makeRequestLatestSubject()
    })
}
if (searchInputLatestAnswer !== null) {
    searchInputLatestAnswer.value = '';
    searchInputLatestAnswer.addEventListener('input', (e) => {
        stateSearch.search = (e.currentTarget as HTMLInputElement).value;
        stateSearch.page = 1;
        makeRequestLatestAnswer()
    })
}

if (searchInputMySubject !== null) {
    searchInputMySubject.value = '';
    searchInputMySubject.addEventListener('input', (e) => {
        stateSearch.search = (e.currentTarget as HTMLInputElement).value;
        stateSearch.page = 1;
        makeRequestMySubject()
    })
}
if (searchInputMyAnswer !== null) {
    searchInputMyAnswer.value = '';
    searchInputMyAnswer.addEventListener('input', (e) => {
        stateSearch.search = (e.currentTarget as HTMLInputElement).value;
        stateSearch.page = 1;
        makeRequestMyAnswer()
    })
}

function makeRequestProject() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `http://tecweb.test/${locale[1]}/project/index/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableProject(data));
}

function makeRequestNew() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `http://tecweb.test/${locale[1]}/news/index/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableNew(data));
}

function makeRequestOffer() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `http://tecweb.test/${locale[1]}/entreprise/internship/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableOffer(data));
}

function makeRequestPartner() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `http://tecweb.test/${locale[1]}/entreprise/partner/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTablePartner(data));
}

function makeRequestGlossary() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `http://tecweb.test/${locale[1]}/technical/glossary/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableGlossary(data));
}

function makeRequestTuto() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `http://tecweb.test/${locale[1]}/technical/tuto/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableTuto(data));
}

function makeRequestBottin() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `http://tecweb.test/${locale[1]}/bottin/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableBottin(data, containerBottin));
}

function makeRequestAlumni() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `http://tecweb.test/${locale[1]}/bottin/alumni/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableBottin(data, containerAlumni));
}

function makeRequestLatestSubject() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `http://tecweb.test/${locale[1]}/forum/index/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableSubject(data, containerLatestSubject));
}

function makeRequestLatestAnswer() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `http://tecweb.test/${locale[1]}/forum/latest-answers/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableAnswer(data, containerLatestAnswer));
}

function makeRequestMySubject() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `http://tecweb.test/${locale[1]}/forum/my-subject/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableSubject(data, containerMySubject));
}

function makeRequestMyAnswer() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `http://tecweb.test/${locale[1]}/forum/my-talks/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableAnswer(data, containerMyAnswer));
}

function updateDataTableProject(data) {
    let match = new RegExp(stateSearch.search, 'gi')
    containerProject.innerHTML = data
    let titles = document.querySelectorAll('h3')
    let dates = document.querySelectorAll('.datesProject')
    // @ts-ignore
    for (const title of titles) {
        title.innerHTML = title.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const date of dates) {
        date.innerHTML = date.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    slideInView();
    handlepaginationProject()
}

function updateDataTableNew(data) {
    let match = new RegExp(stateSearch.search, 'gi')
    containerNew.innerHTML = data
    let titles = document.querySelectorAll('h3')
    let excerpts = document.querySelectorAll('.excerpt')
    let dates = document.querySelectorAll('.datesNew')
    // @ts-ignore
    for (const title of titles) {
        title.innerHTML = title.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const excerpt of excerpts) {
        let str = excerpt.innerHTML.replace(/<[^>]+>/g, '')
        excerpt.innerHTML = str.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const date of dates) {
        date.innerHTML = date.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    slideInView();
    handlepaginationNew();
}

function updateDataTableOffer(data) {
    let match = new RegExp(stateSearch.search, 'gi')
    containerOffer.innerHTML = data
    let titles = document.querySelectorAll('h3')
    let descriptions = document.querySelectorAll('.description')
    let partners = document.querySelectorAll('.partner')
    // @ts-ignore
    for (const title of titles) {
        title.innerHTML = title.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const description of descriptions) {
        let str = description.innerHTML.replace(/<[^>]+>/g, '')
        description.innerHTML = str.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const partner of partners) {
        partner.innerHTML = partner.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }

    slideInView();
    handlepaginationOffer();
}

function updateDataTablePartner(data) {
    let match = new RegExp(stateSearch.search, 'gi')
    containerPartner.innerHTML = data
    let titles = document.querySelectorAll('h3')
    let adresses = document.querySelectorAll('.adresse')
    let localities = document.querySelectorAll('.locality')
    let localitiesNum = document.querySelectorAll('.localityNumber')
    // @ts-ignore
    for (const title of titles) {
        title.innerHTML = title.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const adresse of adresses) {
        adresse.innerHTML = adresse.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const locality of localities) {
        locality.innerHTML = locality.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const localityNum of localitiesNum) {
        localityNum.innerHTML = localityNum.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    slideInView();
    handlepaginationPartner();
}

function updateDataTableGlossary(data) {
    let match = new RegExp(stateSearch.search, 'gi')
    containerGlossary.innerHTML = data
    let titles = document.querySelectorAll('h3')
    let definitions = document.querySelectorAll('.definition')
    // @ts-ignore
    for (const title of titles) {
        title.innerHTML = title.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const definition of definitions) {
        let str = definition.innerHTML.replace(/<[^>]+>/g, '')
        definition.innerHTML = str.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    slideInView();
    handlepaginationGlossary();
}

function updateDataTableTuto(data) {
    let match = new RegExp(stateSearch.search, 'gi')
    containerTuto.innerHTML = data
    let titles = document.querySelectorAll('h3 a')
    let excerpts = document.querySelectorAll('.excerpt')
    // @ts-ignore
    for (const title of titles) {
        title.innerHTML = title.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const excerpt of excerpts) {
        let str = excerpt.innerHTML.replace(/<[^>]+>/g, '')
        excerpt.innerHTML = str.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    slideInView();
    handlepaginationTuto();
}

function updateDataTableBottin(data, container) {
    let match = new RegExp(stateSearch.search, 'gi')
    container.innerHTML = data
    let names = document.querySelectorAll('.name')
    let firstnames = document.querySelectorAll('.firstname')
    let status = document.querySelectorAll('.status')
    let begins = document.querySelectorAll('.begin')
    let ends = document.querySelectorAll('.end')
    // @ts-ignore
    for (const name of names) {
        name.innerHTML = name.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const firstname of firstnames) {
        firstname.innerHTML = firstname.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const statusElement of status) {
        let str = statusElement.innerHTML.replace(/<[^>]+>/g, '')
        statusElement.innerHTML = str.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const begin of begins) {
        begin.innerHTML = begin.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const end of ends) {
        end.innerHTML = end.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }

    slideInView();
    handlepaginationBottin();
}

function updateDataTableSubject(data, container) {
    let match = new RegExp(stateSearch.search, 'gi')
    container.innerHTML = data
    let titles = document.querySelectorAll('.search-title')

    // @ts-ignore
    for (const title of titles) {
        title.innerHTML = title.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    slideInView();
    handlepaginationSubject();
}

function updateDataTableAnswer(data, container) {
    let match = new RegExp(stateSearch.search, 'gi')
    container.innerHTML = data
    let titles = document.querySelectorAll('.search-title')
    let comments = document.querySelectorAll('.search-comment')
    // @ts-ignore
    for (const title of titles) {
        title.innerHTML = title.innerHTML.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const comment of comments) {
        let str = comment.innerHTML.replace(/<[^>]+>/g, '')
        comment.innerHTML = str.replace(match, `<mark class="text-orange-500">${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    slideInView();
    handlepaginationAnswer();
}


function handlepaginationProject() {
    // @ts-ignore
    for (const pagination of paginations) {
        pagination.addEventListener('click', (e) => {
            e.preventDefault();
            if (e.currentTarget.classList.contains('previous')) {
                stateSearch.page -= 1
            } else if (e.currentTarget.classList.contains('next')) {
                stateSearch.page += 1
            } else {
                stateSearch.page = parseInt(e.currentTarget.dataset.page)
            }
            makeRequestProject()
        })
    }
}

function handlepaginationNew() {
    // @ts-ignore
    for (const pagination of paginations) {
        pagination.addEventListener('click', (e) => {
            e.preventDefault();
            if (e.currentTarget.classList.contains('previous')) {
                stateSearch.page -= 1
            } else if (e.currentTarget.classList.contains('next')) {
                stateSearch.page += 1
            } else {
                stateSearch.page = parseInt(e.currentTarget.dataset.page)
            }
            makeRequestNew()
        })
    }
}

function handlepaginationOffer() {
    // @ts-ignore
    for (const pagination of paginations) {
        pagination.addEventListener('click', (e) => {
            e.preventDefault();
            if (e.currentTarget.classList.contains('previous')) {
                stateSearch.page -= 1
            } else if (e.currentTarget.classList.contains('next')) {
                stateSearch.page += 1
            } else {
                stateSearch.page = parseInt(e.currentTarget.dataset.page)
            }
            makeRequestOffer()
        })
    }
}

function handlepaginationPartner() {
    // @ts-ignore
    for (const pagination of paginations) {
        pagination.addEventListener('click', (e) => {
            e.preventDefault();
            if (e.currentTarget.classList.contains('previous')) {
                stateSearch.page -= 1
            } else if (e.currentTarget.classList.contains('next')) {
                stateSearch.page += 1
            } else {
                stateSearch.page = parseInt(e.currentTarget.dataset.page)
            }
            makeRequestPartner()
        })
    }
}

function handlepaginationGlossary() {
    // @ts-ignore
    for (const pagination of paginations) {
        pagination.addEventListener('click', (e) => {
            e.preventDefault();
            if (e.currentTarget.classList.contains('previous')) {
                stateSearch.page -= 1
            } else if (e.currentTarget.classList.contains('next')) {
                stateSearch.page += 1
            } else {
                stateSearch.page = parseInt(e.currentTarget.dataset.page)
            }
            makeRequestGlossary()
        })
    }
}

function handlepaginationTuto() {
    // @ts-ignore
    for (const pagination of paginations) {
        pagination.addEventListener('click', (e) => {
            e.preventDefault();
            if (e.currentTarget.classList.contains('previous')) {
                stateSearch.page -= 1
            } else if (e.currentTarget.classList.contains('next')) {
                stateSearch.page += 1
            } else {
                stateSearch.page = parseInt(e.currentTarget.dataset.page)
            }
            makeRequestTuto()
        })
    }
}

function handlepaginationBottin() {
    // @ts-ignore
    for (const pagination of paginations) {
        pagination.addEventListener('click', (e) => {
            e.preventDefault();
            if (e.currentTarget.classList.contains('previous')) {
                stateSearch.page -= 1
            } else if (e.currentTarget.classList.contains('next')) {
                stateSearch.page += 1
            } else {
                stateSearch.page = parseInt(e.currentTarget.dataset.page)
            }
            makeRequestBottin()
        })
    }
}

function handlepaginationSubject() {
    // @ts-ignore
    for (const pagination of paginations) {
        pagination.addEventListener('click', (e) => {
            e.preventDefault();
            if (e.currentTarget.classList.contains('previous')) {
                stateSearch.page -= 1
            } else if (e.currentTarget.classList.contains('next')) {
                stateSearch.page += 1
            } else {
                stateSearch.page = parseInt(e.currentTarget.dataset.page)
            }
            makeRequestLatestSubject()
            makeRequestMySubject()
        })
    }
}

function handlepaginationAnswer() {
    // @ts-ignore
    for (const pagination of paginations) {
        pagination.addEventListener('click', (e) => {
            e.preventDefault();
            if (e.currentTarget.classList.contains('previous')) {
                stateSearch.page -= 1
            } else if (e.currentTarget.classList.contains('next')) {
                stateSearch.page += 1
            } else {
                stateSearch.page = parseInt(e.currentTarget.dataset.page)
            }
            makeRequestLatestAnswer()
            makeRequestMyAnswer()
        })
    }
}


if (sortSelectDateTuto !== null) {
    sortSelectDateTuto.value = 'all';
    sortSelectDateTuto.addEventListener('change', (e) => {
        stateSortTutos.date = (e.currentTarget as HTMLSelectElement).value;
        stateSortTutos.page = 1;
        makeRequestTutoSort()
    })
}
if (sortSelectLanguageTuto !== null) {
    sortSelectLanguageTuto.value = 'all';
    sortSelectLanguageTuto.addEventListener('change', (e) => {
        stateSortTutos.languages = (e.currentTarget as HTMLSelectElement).value;
        stateSortTutos.page = 1;
        makeRequestTutoSort()
    })
}

function makeRequestTutoSort() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `http://tecweb.test/${locale[1]}/technical/tuto/ajax?` + new URLSearchParams(stateSortTutos);
    history.pushState(stateSortTutos, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableTuto(data));
}

if (sortSelectCityEntreprise !== null) {
    sortSelectCityEntreprise.value = 'all';
    sortSelectCityEntreprise.addEventListener('change', (e) => {
        stateSortPartner.cities = (e.currentTarget as HTMLSelectElement).value;
        stateSortPartner.page = 1;
        makeRequestPartnerSort()
    })
}
if (sortSelectAgencyEntreprise !== null) {
    sortSelectAgencyEntreprise.value = 'all';
    sortSelectAgencyEntreprise.addEventListener('change', (e) => {
        stateSortPartner.agency = (e.currentTarget as HTMLSelectElement).value;
        stateSortPartner.page = 1;
        makeRequestPartnerSort()
    })
}
if (sortSelectJobsEntreprise !== null) {
    sortSelectJobsEntreprise.value = 'all';
    sortSelectJobsEntreprise.addEventListener('change', (e) => {
        stateSortOffer.jobs = (e.currentTarget as HTMLSelectElement).value;
        console.log(sortSelectJobsEntreprise.value)
        stateSortOffer.page = 1;
        makeRequestOfferSort()
    })
}

function makeRequestPartnerSort() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `http://tecweb.test/${locale[1]}/entreprise/partner/ajax?` + new URLSearchParams(stateSortPartner);
    history.pushState(stateSortPartner, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTablePartner(data));
}

function makeRequestOfferSort() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `http://tecweb.test/${locale[1]}/entreprise/intership/ajax?` + new URLSearchParams(stateSortOffer);
    history.pushState(stateSortOffer, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTablePartner(data));
}


if (sortSelectDateBottin !== null) {
    sortSelectDateBottin.value = 'all';
    sortSelectDateBottin.addEventListener('change', (e) => {
        stateSortPeople.year = (e.currentTarget as HTMLSelectElement).value;
        stateSortPeople.page = 1;
        makeRequestBottinSort()
    })
}
if (sortSelectStatusBottin !== null) {
    sortSelectStatusBottin.value = 'all';
    sortSelectStatusBottin.addEventListener('change', (e) => {
        stateSortPeople.status = (e.currentTarget as HTMLSelectElement).value;
        stateSortPeople.page = 1;
        makeRequestBottinSort()
    })
}

function makeRequestBottinSort() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `http://tecweb.test/${locale[1]}/bottin/ajax?` + new URLSearchParams(stateSortPeople);
    history.pushState(stateSortPeople, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableBottin(data, containerBottin));
}

if (sortSelectDateBottin !== null) {
    sortSelectDateBottin.value = 'all';
    sortSelectDateBottin.addEventListener('change', (e) => {
        stateSortPeople.year = (e.currentTarget as HTMLSelectElement).value;
        stateSortPeople.page = 1;
        makeRequestAlumniSort()
    })
}
if (sortSelectStatusBottin !== null) {
    sortSelectStatusBottin.value = 'all';
    sortSelectStatusBottin.addEventListener('change', (e) => {
        stateSortPeople.status = (e.currentTarget as HTMLSelectElement).value;
        stateSortPeople.page = 1;
        makeRequestAlumniSort()
    })
}

function makeRequestAlumniSort() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `http://tecweb.test/${locale[1]}/bottin/alumni/ajax?` + new URLSearchParams(stateSortPeople);
    history.pushState(stateSortPeople, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableBottin(data, containerAlumni));
}


if (avatar !== null) {
    updateImageModifyProfil()
}
if (backImage !== null) {
    updateImageModifyBackImage()
}
