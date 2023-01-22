export class People {
    private readonly siteUrl: string;
    private readonly slideInView: () => void;

    constructor(siteUrl: string, slideInView) {
        this.siteUrl = siteUrl;
        this.slideInView = slideInView;
        const state = {
            search: '',
            page: 1,
        }
        const stateSortBottins = {
            status: 'all',
            year: 'all',
            page: 1
        }
        this.handleSearch(state);
        this.handleSortYear(stateSortBottins);
        this.handleSortStatus(stateSortBottins);
    }

    private handleSearch(state) {
        let searchInputBottin = document.querySelector('#bottin #search') as HTMLInputElement;
        searchInputBottin.value = '';
        searchInputBottin.addEventListener('input', (e) => {
            state.search = (e.currentTarget as HTMLInputElement).value;
            state.page = 1;
            this.makeRequestBottin(state)
        })
    }

    private handleSortYear(state) {

        let sortSelectYearEntreprise = document.querySelector('#bottin_sort #year') as HTMLSelectElement;
        sortSelectYearEntreprise.value = 'all';
        sortSelectYearEntreprise.addEventListener('change', (e) => {
            state.year = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestBottinSort(state)
        })
    }

    private handleSortStatus(state) {
        let sortSelectStatusBottin = document.querySelector('#bottin_sort #status') as HTMLSelectElement;
        sortSelectStatusBottin.value = 'all';
        sortSelectStatusBottin.addEventListener('change', (e) => {
            state.status = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestBottinSort(state)
        })
    }

    private makeRequestBottin(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/bottin/ajax?` + new URLSearchParams(state);
        console.log('test')
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableBottin(data, state));
    }

    private makeRequestBottinSort(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/bottin/ajax?` + new URLSearchParams(state);
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableBottinSort(data, state));
    }

    private updateDataTableBottin(data, state) {

        let match = new RegExp(state.search, 'gi')
        document.getElementById('containerBottin').innerHTML = data
        let names = document.querySelectorAll('.name')
        let firstnames = document.querySelectorAll('.firstname')
        let status = document.querySelectorAll('.status')
        let begins = document.querySelectorAll('.begin')
        let ends = document.querySelectorAll('.end')
        // @ts-ignore
        for (const name of names) {
            name.innerHTML = name.textContent.innerHTML.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const firstname of firstnames) {
            firstname.innerHTML = firstname.textContent.innerHTML.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const statusElement of status) {
            let str = statusElement.textContent.innerHTML.replace(/<[^>]+>/g, '')
            statusElement.innerHTML = str.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const begin of begins) {
            begin.innerHTML = begin.textContent.innerHTML.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const end of ends) {
            end.innerHTML = end.textContent.innerHTML.replace(match, `<mark>${state.search}</mark>`)
        }

        this.slideInView();
        this.handlepaginationBottin(state);
    }

    private updateDataTableBottinSort(data, state) {
        document.getElementById('containerBottin').innerHTML = data
        this.slideInView();
        this.handlepaginationBottin(state);
    }

    private handlepaginationBottin(state) {
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
                this.makeRequestBottin(state)
            })
        }
    }
}
