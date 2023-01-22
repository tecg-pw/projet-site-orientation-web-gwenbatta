export class Offers {
    private readonly siteUrl: string;
    private readonly slideInView: () => void;

    constructor(siteUrl: string, slideInView) {
        this.siteUrl = siteUrl;
        this.slideInView = slideInView;
        const state = {
            search: '',
            page: 1,
        }
        const stateSortOffers = {
            jobs: 'all',
            agency: 'all',
            page: 1
        }
        this.handleSearch(state);
        this.handleSortAgency(stateSortOffers);
        this.handleSortJob(stateSortOffers);
    }

    private handleSearch(state) {
        let searchInputOffer = document.querySelector('#offer #search') as HTMLInputElement;
        searchInputOffer.value = '';
        searchInputOffer.addEventListener('input', (e) => {
            state.search = (e.currentTarget as HTMLInputElement).value;
            state.page = 1;
            this.makeRequestOffer(state)
        })
    }

    private handleSortJob(state) {
        let sortSelectJobsEntreprise = document.querySelector('#jobs') as HTMLSelectElement;
        sortSelectJobsEntreprise.value = 'all';
        sortSelectJobsEntreprise.addEventListener('change', (e) => {
            state.jobs = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestOfferSort(state)
        })
    }
    private handleSortAgency(state) {
        let sortSelectAgencyOffer = document.querySelector('.agency-offer') as HTMLSelectElement;
        sortSelectAgencyOffer.value = 'all';
        sortSelectAgencyOffer.addEventListener('change', (e) => {
            state.agency = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestOfferSort(state)
        })
    }

    private makeRequestOffer(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/entreprise/internship/ajax?` + new URLSearchParams(state);
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableOffer(data,state));
    }

    private makeRequestOfferSort(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/entreprise/internship/ajax?` + new URLSearchParams(state);
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableOfferSort(data,state));
    }

    private updateDataTableOffer(data, state) {
        document.getElementById('containerOffer').innerHTML = data
        let titles = document.querySelectorAll('h3')
        let descriptions = document.querySelectorAll('.description')
        let partners = document.querySelectorAll('.partner')
        if (state.search !== '') {
            let match = new RegExp(state.search, 'gi')
            // @ts-ignore
            for (const title of titles) {
                title.innerHTML = title.textContent.replace(match, `<mark>${state.search}</mark>`)
            }
            // @ts-ignore
            for (const description of descriptions) {
                let str = description.textContent.replace(/<[^>]+>/g, '')
                description.innerHTML = str.replace(match, `<mark>${state.search}</mark>`)
            }
            // @ts-ignore
            for (const partner of partners) {
                partner.innerHTML = partner.textContent.replace(match, `<mark>${state.search}</mark>`)
            }
        }

        this.slideInView();
        this.handlepaginationOffer(state);
    }
    private updateDataTableOfferSort(data, state) {
        document.getElementById('containerOffer').innerHTML = data
        this.slideInView();
        this.handlepaginationOffer(state);
    }

    private handlepaginationOffer(state) {
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
                this.makeRequestOffer(state)
            })
        }
    }
}
