export class Partners {
    private readonly siteUrl: string;
    private readonly slideInView: () => void;

    constructor(siteUrl: string, slideInView) {
        this.siteUrl = siteUrl;
        this.slideInView = slideInView;
        const state = {
            search: '',
            page: 1,
        }
        const stateSortPartners = {
            cities: 'all',
            agency: 'all',
            page: 1
        }
        this.handleSearch(state);
        this.handleSortCity(stateSortPartners);
        this.handleSortAgency(stateSortPartners);
    }

    private handleSearch(state) {
        let searchInputPartner = document.querySelector('#partner #search') as HTMLInputElement;
        searchInputPartner.value = '';
        searchInputPartner.addEventListener('input', (e) => {
            state.search = (e.currentTarget as HTMLInputElement).value;
            state.page = 1;
            this.makeRequestPartner(state)
        })
    }

    private handleSortCity(state) {
        let sortSelectCityEntreprise = document.querySelector('#cities') as HTMLSelectElement;
        sortSelectCityEntreprise.value = 'all';
        sortSelectCityEntreprise.addEventListener('change', (e) => {
            state.cities = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestPartnerSort(state)
        })
    }
    private handleSortAgency(state) {
        let sortSelectAgencyPartner = document.querySelector('.agency-partner') as HTMLSelectElement;
        sortSelectAgencyPartner.value = 'all';
        sortSelectAgencyPartner.addEventListener('change', (e) => {
            state.agency = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestPartnerSort(state)
        })
    }

    private makeRequestPartner(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/entreprise/partner/ajax?` + new URLSearchParams(state);
        console.log('test')
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTablePartner(data, state));
    }

    private makeRequestPartnerSort(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/entreprise/partner/ajax?` + new URLSearchParams(state);
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTablePartnerSort(data, state));
    }

    private updateDataTablePartner(data, state) {

        let match = new RegExp(state.search, 'gi')
        document.getElementById('containerPartner').innerHTML = data
        let titles = document.querySelectorAll('h3')
        let adresses = document.querySelectorAll('.adresse')
        let localities = document.querySelectorAll('.locality')
        let localitiesNum = document.querySelectorAll('.localityNumber')
        // @ts-ignore
        for (const title of titles) {
            title.innerHTML = title.textContent.innerHTML.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const adresse of adresses) {
            adresse.innerHTML = adresse.textContent.innerHTML.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const locality of localities) {
            locality.innerHTML = locality.textContent.innerHTML.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const localityNum of localitiesNum) {
            localityNum.innerHTML = localityNum.textContent.innerHTML.replace(match, `<mark>${state.search}</mark>`)
        }
        this.slideInView();
        this.handlepaginationPartner(state);
    }
    private updateDataTablePartnerSort(data, state) {
        document.getElementById('containerPartner').innerHTML = data
        this.slideInView();
        this.handlepaginationPartner(state);
    }

    private handlepaginationPartner(state) {
        let paginations = document.querySelectorAll('#pagination a') as NodeList;
        // @ts-ignore
        for (const pagination of paginations) {
            pagination.addEventListener('click', (e) => {
                e.preventDefault();
                if (e.currentTarget.classList.contains('previous')) {
                    state.page -= 1
                } else if (e.currentTarget.classList.contains('next')) {
                    state.page += 1
                } else {
                    state.page = parseInt(e.currentTarget.dataset.page)
                }
                this.makeRequestPartner(state)
            })
        }
    }
}
