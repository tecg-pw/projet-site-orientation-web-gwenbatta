import './bootstrap';
import {Projects} from "./Models/Projects";
import {News} from "./Models/News";
import {Tutos} from "./Models/Tutos";
import {Glossaries} from "./Models/Glossaries";
import {Offers} from "./Models/Offers";

window.addEventListener('load', init);
const siteUrl = 'http://tecweb.test/';
let buttonSearches = document.getElementsByClassName('filter');

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
let containerOffer = document.getElementById('containerOffer')
let containerPartner = document.getElementById('containerPartner')

let containerAlumni = document.getElementById('containerAlumni')
let containerBottin = document.getElementById('containerBottin')
let containerLatestSubject = document.getElementById('containerLatestSubject')
let containerLatestAnswer = document.getElementById('containerLatestAnswer')
let containerMySubject = document.getElementById('containerMySubject')
let containerMyAnswer = document.getElementById('containerMyTalks')
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
     new Offers(siteUrl,slideInView);
    }
    // new Partners(siteUrl,slideInView);
    if (searchInputTuto !== null || sortSelectDateTuto !== null || sortSelectLanguageTuto !== null) {
        new Tutos(siteUrl, slideInView);
    }
    if (searchInputGlossary !== null) {
        new Glossaries(siteUrl, slideInView);
    }
    // new People(siteUrl,slideInView);
    // new Alumnis(siteUrl,slideInView);
    // new Subjects(siteUrl,slideInView);
    // new Answers(siteUrl,slideInView);
    slideInView();
    handlePassword();
    burgerMenu();
}

const stateSearch = {
    search: '',
    page: 1,
}
const stateSearchGlobal = {
    search_bar: '',
    page: 1,
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
const stateSortForum = {
    tags: 'all',
    status: 'all',
    year: 'all',
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


function makeRequestOffer() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `${siteUrl}${locale[1]}/entreprise/internship/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableOffer(data));
}

function makeRequestPartner() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `${siteUrl}${locale[1]}/entreprise/partner/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTablePartner(data));
}




function makeRequestBottin() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `${siteUrl}${locale[1]}/bottin/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableBottin(data));
}

function makeRequestAlumni() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `${siteUrl}${locale[1]}/bottin/alumni/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableAlumni(data));
}

function makeRequestLatestSubject() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `${siteUrl}${locale[1]}/forum/index/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableSubject(data, containerLatestSubject));
}

function makeRequestLatestAnswer() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `${siteUrl}${locale[1]}/forum/latest-answers/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableAnswer(data, containerLatestAnswer));
}

function makeRequestMySubject() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `${siteUrl}${locale[1]}/forum/my-subject/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableSubject(data, containerMySubject));
}

function makeRequestMyAnswer() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `${siteUrl}${locale[1]}/forum/my-talks/ajax?` + new URLSearchParams(stateSearch);
    history.pushState(stateSearch, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableAnswer(data, containerMyAnswer));
}


function updateDataTableOffer(data) {
    containerOffer.innerHTML = data
    let titles = document.querySelectorAll('h3')
    let descriptions = document.querySelectorAll('.description')
    let partners = document.querySelectorAll('.partner')
    if (stateSearch.search !== '') {
        let match = new RegExp(stateSearch.search, 'gi')
        // @ts-ignore
        for (const title of titles) {
            title.innerHTML = title.innerHTML.replace(match, `<mark>${stateSearch.search}</mark>`)
        }
        // @ts-ignore
        for (const description of descriptions) {
            let str = description.innerHTML.replace(/<[^>]+>/g, '')
            description.innerHTML = str.replace(match, `<mark>${stateSearch.search}</mark>`)
        }
        // @ts-ignore
        for (const partner of partners) {
            partner.innerHTML = partner.innerHTML.replace(match, `<mark>${stateSearch.search}</mark>`)
        }
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
        title.innerHTML = title.innerHTML.replace(match, `<mark>${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const adresse of adresses) {
        adresse.innerHTML = adresse.innerHTML.replace(match, `<mark>${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const locality of localities) {
        locality.innerHTML = locality.innerHTML.replace(match, `<mark>${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const localityNum of localitiesNum) {
        localityNum.innerHTML = localityNum.innerHTML.replace(match, `<mark>${stateSearch.search}</mark>`)
    }
    slideInView();
    handlepaginationPartner();
}




function updateDataTableBottin(data) {
    let match = new RegExp(stateSearch.search, 'gi')
    containerBottin.innerHTML = data
    let names = document.querySelectorAll('.name')
    let firstnames = document.querySelectorAll('.firstname')
    let status = document.querySelectorAll('.status')
    let begins = document.querySelectorAll('.begin')
    let ends = document.querySelectorAll('.end')
    // @ts-ignore
    for (const name of names) {
        name.innerHTML = name.innerHTML.replace(match, `<mark>${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const firstname of firstnames) {
        firstname.innerHTML = firstname.innerHTML.replace(match, `<mark>${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const statusElement of status) {
        let str = statusElement.innerHTML.replace(/<[^>]+>/g, '')
        statusElement.innerHTML = str.replace(match, `<mark>${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const begin of begins) {
        begin.innerHTML = begin.innerHTML.replace(match, `<mark>${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const end of ends) {
        end.innerHTML = end.innerHTML.replace(match, `<mark>${stateSearch.search}</mark>`)
    }

    slideInView();
    handlepaginationBottin();
}

function updateDataTableAlumni(data) {
    let match = new RegExp(stateSearch.search, 'gi')
    containerAlumni.innerHTML = data
    let names = document.querySelectorAll('.name')
    let firstnames = document.querySelectorAll('.firstname')
    let status = document.querySelectorAll('.status')
    let begins = document.querySelectorAll('.begin')
    let ends = document.querySelectorAll('.end')
    // @ts-ignore
    for (const name of names) {
        name.innerHTML = name.innerHTML.replace(match, `<mark>${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const firstname of firstnames) {
        firstname.innerHTML = firstname.innerHTML.replace(match, `<mark>${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const statusElement of status) {
        let str = statusElement.innerHTML.replace(/<[^>]+>/g, '')
        statusElement.innerHTML = str.replace(match, `<mark>${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const begin of begins) {
        begin.innerHTML = begin.innerHTML.replace(match, `<mark>${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const end of ends) {
        end.innerHTML = end.innerHTML.replace(match, `<mark>${stateSearch.search}</mark>`)
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
        title.innerHTML = title.innerHTML.replace(match, `<mark>${stateSearch.search}</mark>`)
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
        title.innerHTML = title.innerHTML.replace(match, `<mark>${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    for (const comment of comments) {
        let str = comment.innerHTML.replace(/<[^>]+>/g, '')
        comment.innerHTML = str.replace(match, `<mark>${stateSearch.search}</mark>`)
    }
    // @ts-ignore
    slideInView();
    handlepaginationAnswer();
}


function handlepaginationOffer() {
    let paginations = document.querySelectorAll('#pagination a') as NodeList;
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
    let paginations = document.querySelectorAll('#pagination a') as NodeList;
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




function handlepaginationBottin() {
    let paginations = document.querySelectorAll('#pagination a') as NodeList;
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
    let paginations = document.querySelectorAll('#pagination a') as NodeList;
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
    let paginations = document.querySelectorAll('#pagination a') as NodeList;
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


if (sortSelectCityEntreprise !== null) {
    sortSelectCityEntreprise.value = 'all';
    sortSelectCityEntreprise.addEventListener('change', (e) => {
        stateSortPartner.cities = (e.currentTarget as HTMLSelectElement).value;
        stateSortPartner.page = 1;
        makeRequestPartnerSort()
    })
}
if (sortSelectAgencyPartner !== null) {
    sortSelectAgencyPartner.value = 'all';
    sortSelectAgencyPartner.addEventListener('change', (e) => {
        stateSortPartner.agency = (e.currentTarget as HTMLSelectElement).value;
        stateSortPartner.page = 1;
        makeRequestPartnerSort()
    })
}

function makeRequestPartnerSort() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `${siteUrl}${locale[1]}/entreprise/partner/ajax?` + new URLSearchParams(stateSortPartner);
    history.pushState(stateSortPartner, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTablePartner(data));
}

if (sortSelectJobsEntreprise !== null) {
    sortSelectJobsEntreprise.value = 'all';
    sortSelectJobsEntreprise.addEventListener('change', (e) => {
        stateSortOffer.jobs = (e.currentTarget as HTMLSelectElement).value;
        stateSortOffer.page = 1;
        makeRequestOfferSort()
    })
}
if (sortSelectAgencyOffer !== null) {
    sortSelectAgencyOffer.value = 'all';
    sortSelectAgencyOffer.addEventListener('change', (e) => {
        stateSortOffer.agency = (e.currentTarget as HTMLSelectElement).value;
        stateSortOffer.page = 1;
        makeRequestOfferSort()
    })
}

function makeRequestOfferSort() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `${siteUrl}${locale[1]}/entreprise/internship/ajax?` + new URLSearchParams(stateSortOffer);
    history.pushState(stateSortOffer, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableOffer(data));
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
    let url = `${siteUrl}${locale[1]}/bottin/ajax?` + new URLSearchParams(stateSortPeople);
    history.pushState(stateSortPeople, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableBottin(data));
}

if (sortSelectDateAlumni !== null) {
    sortSelectDateAlumni.value = 'all';
    sortSelectDateAlumni.addEventListener('change', (e) => {
        stateSortPeople.year = (e.currentTarget as HTMLSelectElement).value;
        stateSortPeople.page = 1;
        makeRequestAlumniSort()
    })
}
if (sortSelectStatusAlumni !== null) {
    sortSelectStatusAlumni.value = 'all';
    sortSelectStatusAlumni.addEventListener('change', (e) => {
        stateSortPeople.status = (e.currentTarget as HTMLSelectElement).value;
        stateSortPeople.page = 1;
        makeRequestAlumniSort()
    })
}

function makeRequestAlumniSort() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `${siteUrl}${locale[1]}/bottin/alumni/ajax?` + new URLSearchParams(stateSortPeople);
    history.pushState(stateSortPeople, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableAlumni(data));
}

if (sortSelectStatusLatestSubject !== null) {
    sortSelectStatusLatestSubject.value = 'all';
    sortSelectStatusLatestSubject.addEventListener('change', (e) => {
        stateSortForum.status = (e.currentTarget as HTMLSelectElement).value;
        stateSortForum.page = 1;
        makeRequestLatestSubjectSort()

    })
}
if (sortSelectTagLatestSubject !== null) {
    sortSelectTagLatestSubject.value = 'all';
    sortSelectTagLatestSubject.addEventListener('change', (e) => {
        stateSortForum.tags = (e.currentTarget as HTMLSelectElement).value;
        stateSortForum.page = 1;
        makeRequestLatestSubjectSort()
    })
}
if (sortSelectDateLatestSubject !== null) {
    sortSelectDateLatestSubject.value = 'all';
    sortSelectDateLatestSubject.addEventListener('change', (e) => {
        stateSortForum.year = (e.currentTarget as HTMLSelectElement).value;
        stateSortForum.page = 1;
        makeRequestLatestSubjectSort()
    })
}

if (sortSelectStatusLatestAnswer !== null) {
    sortSelectStatusLatestAnswer.value = 'all';
    sortSelectStatusLatestAnswer.addEventListener('change', (e) => {
        stateSortForum.status = (e.currentTarget as HTMLSelectElement).value;
        stateSortForum.page = 1;
        makeRequestLatestAnswerSort()

    })
}
if (sortSelectTagLatestAnswer !== null) {
    sortSelectTagLatestAnswer.value = 'all';
    sortSelectTagLatestAnswer.addEventListener('change', (e) => {
        stateSortForum.tags = (e.currentTarget as HTMLSelectElement).value;
        stateSortForum.page = 1;
        makeRequestLatestAnswerSort()
    })
}
if (sortSelectDateLatestAnswer !== null) {
    sortSelectDateLatestAnswer.value = 'all';
    sortSelectDateLatestAnswer.addEventListener('change', (e) => {
        stateSortForum.year = (e.currentTarget as HTMLSelectElement).value;
        stateSortForum.page = 1;
        makeRequestLatestAnswerSort()
    })
}

if (sortSelectStatusMySubject !== null) {
    sortSelectStatusMySubject.value = 'all';
    sortSelectStatusMySubject.addEventListener('change', (e) => {
        stateSortForum.status = (e.currentTarget as HTMLSelectElement).value;
        stateSortForum.page = 1;
        makeRequestMySubjectSort()

    })
}
if (sortSelectTagMySubject !== null) {
    sortSelectTagMySubject.value = 'all';
    sortSelectTagMySubject.addEventListener('change', (e) => {
        stateSortForum.tags = (e.currentTarget as HTMLSelectElement).value;
        stateSortForum.page = 1;
        makeRequestMySubjectSort()
    })
}
if (sortSelectDateMySubject !== null) {
    sortSelectDateMySubject.value = 'all';
    sortSelectDateMySubject.addEventListener('change', (e) => {
        stateSortForum.year = (e.currentTarget as HTMLSelectElement).value;
        stateSortForum.page = 1;
        makeRequestMySubjectSort()
    })
}

if (sortSelectStatusMyAnswer !== null) {
    sortSelectStatusMyAnswer.value = 'all';
    sortSelectStatusMyAnswer.addEventListener('change', (e) => {
        stateSortForum.status = (e.currentTarget as HTMLSelectElement).value;
        stateSortForum.page = 1;
        makeRequestMyAnswerSort()

    })
}
if (sortSelectTagMyAnswer !== null) {
    sortSelectTagMyAnswer.value = 'all';
    sortSelectTagMyAnswer.addEventListener('change', (e) => {
        stateSortForum.tags = (e.currentTarget as HTMLSelectElement).value;
        stateSortForum.page = 1;
        makeRequestMyAnswerSort()
    })
}
if (sortSelectDateMyAnswer !== null) {
    sortSelectDateMyAnswer.value = 'all';
    sortSelectDateMyAnswer.addEventListener('change', (e) => {
        stateSortForum.year = (e.currentTarget as HTMLSelectElement).value;
        stateSortForum.page = 1;
        makeRequestMyAnswerSort()
    })
}


function makeRequestLatestSubjectSort() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `${siteUrl}${locale[1]}/forum/index/ajax?` + new URLSearchParams(stateSortForum);
    history.pushState(stateSortForum, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableSubject(data, containerLatestSubject));
}

function makeRequestLatestAnswerSort() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `${siteUrl}${locale[1]}/forum/latest-answers/ajax?` + new URLSearchParams(stateSortForum);
    history.pushState(stateSortForum, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableSubject(data, containerLatestAnswer));
}

function makeRequestMySubjectSort() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `${siteUrl}${locale[1]}/forum/my-subject/ajax?` + new URLSearchParams(stateSortForum);
    history.pushState(stateSortForum, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableSubject(data, containerMySubject));
}

function makeRequestMyAnswerSort() {
    let locale = window.location.pathname.split('/');
    // @ts-ignore
    let url = `${siteUrl}${locale[1]}/forum/my-talks/ajax?` + new URLSearchParams(stateSortForum);
    history.pushState(stateSortForum, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableSubject(data, containerMyAnswer));
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
    //window.location.href = `${siteUrl}${locale[1]}/search`
    // @ts-ignore
    let url = `${siteUrl}${locale[1]}/search/ajax?` + new URLSearchParams(stateSearchGlobal);
    history.pushState(stateSearchGlobal, '', url.replace('/ajax', ''))
    fetch(url)
        .then((response) => response.text())
        .then((data) => updateDataTableGlobal(data));
}

function updateDataTableGlobal(data) {
    let match = new RegExp(stateSearch.search, 'gi')
    containerGlobal.innerHTML = data
    // let titles = document.querySelectorAll('h4')
    // // @ts-ignore
    // for (const title of titles) {
    //     title.innerHTML = title.innerHTML.replace(match, `<mark>${stateSearchGlobal.search_bar}</mark>`)
    // }

    slideInView();
    // handlepaginationProject()
}
