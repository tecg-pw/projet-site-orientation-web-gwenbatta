export class Alumnis {
    private readonly siteUrl: string;
    private readonly slideInView: () => void;

    constructor(siteUrl: string, slideInView) {
        this.siteUrl = siteUrl;
        this.slideInView = slideInView;
        const state = {
            search: '',
            page: 1,
        }
        const stateSortAlumnis = {
            status: 'all',
            year: 'all',
            page: 1
        }
        this.handleSearch(state);
        this.handleSortYear(stateSortAlumnis);
        this.handleSortStatus(stateSortAlumnis);
    }

    private handleSearch(state) {
        let searchInputAlumni = document.querySelector('#almuni #search') as HTMLInputElement;
        searchInputAlumni.value = '';
        searchInputAlumni.addEventListener('input', (e) => {
            state.search = (e.currentTarget as HTMLInputElement).value;
            state.page = 1;
            this.makeRequestAlumni(state)
        })
    }

    private handleSortYear(state) {

        let sortSelectYearEntreprise = document.querySelector('#alumni_sort #year') as HTMLSelectElement;
        sortSelectYearEntreprise.value = 'all';
        sortSelectYearEntreprise.addEventListener('change', (e) => {
            state.year = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestAlumniSort(state)
        })
    }

    private handleSortStatus(state) {
        let sortSelectStatusAlumni = document.querySelector('#alumni_sort #status') as HTMLSelectElement;
        sortSelectStatusAlumni.value = 'all';
        sortSelectStatusAlumni.addEventListener('change', (e) => {
            state.status = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestAlumniSort(state)
        })
    }

    private makeRequestAlumni(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/bottin/ajax?` + new URLSearchParams(state);
        console.log('test')
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableAlumni(data, state));
    }

    private makeRequestAlumniSort(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/bottin/ajax?` + new URLSearchParams(state);
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableAlumniSort(data, state));
    }

    private updateDataTableAlumni(data, state) {

        let match = new RegExp(state.search, 'gi')
        document.getElementById('containerAlumni').innerHTML = data
        let names = document.querySelectorAll('.name')
        let firstnames = document.querySelectorAll('.firstname')
        let status = document.querySelectorAll('.status')
        let begins = document.querySelectorAll('.begin')
        let ends = document.querySelectorAll('.end')
        // @ts-ignore
        for (const name of names) {
            name.innerHTML = name.innerHTML.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const firstname of firstnames) {
            firstname.innerHTML = firstname.innerHTML.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const statusElement of status) {
            let str = statusElement.innerHTML.replace(/<[^>]+>/g, '')
            statusElement.innerHTML = str.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const begin of begins) {
            begin.innerHTML = begin.innerHTML.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const end of ends) {
            end.innerHTML = end.innerHTML.replace(match, `<mark>${state.search}</mark>`)
        }

        this.slideInView();
        this.handlepaginationAlumni(state);
    }

    private updateDataTableAlumniSort(data, state) {
        document.getElementById('containerAlumni').innerHTML = data
        this.slideInView();
        this.handlepaginationAlumni(state);
    }

    private handlepaginationAlumni(state) {
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
                this.makeRequestAlumni(state)
            })
        }
    }
}
