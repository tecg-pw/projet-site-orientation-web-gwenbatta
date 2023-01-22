export class Tutos {
    private readonly siteUrl: string;
    private readonly slideInView: () => void;

    constructor(siteUrl: string, slideInView) {
        this.siteUrl = siteUrl;
        this.slideInView = slideInView;
        const state = {
            search: '',
            page: 1,
        }
        const stateSortTutos = {
            date: 'all',
            languages: 'all',
            page: 1
        }
        this.handleSearch(state);
        this.handleSortDate(stateSortTutos);
        this.handleSortLanguages(stateSortTutos);
    }

    private handleSearch(state) {
        let searchInputTuto = document.querySelector('#tuto #search') as HTMLInputElement;
        searchInputTuto.value = '';
        searchInputTuto.addEventListener('input', (e) => {
            state.search = (e.currentTarget as HTMLInputElement).value;
            state.page = 1;
            this.makeRequestTuto(state)
        })
    }

    private handleSortDate(state) {
        let sortSelectDateTuto = document.querySelector('#date') as HTMLSelectElement;
        sortSelectDateTuto.value = 'all';
        sortSelectDateTuto.addEventListener('change', (e) => {
            state.date = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestTutoSort(state)
        })
    }
    private handleSortLanguages(state) {
        let sortSelectLanguageTuto = document.querySelector('#languages') as HTMLSelectElement;
        sortSelectLanguageTuto.value = 'all';
        sortSelectLanguageTuto.addEventListener('change', (e) => {
            state.languages = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestTutoSort(state)
        })
    }

    private makeRequestTuto(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/technical/tuto/ajax?` + new URLSearchParams(state);
        console.log('test')
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableTuto(data, state));
    }

    private makeRequestTutoSort(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/technical/tuto/ajax?` + new URLSearchParams(state);
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableTutoSort(data, state));
    }

    private updateDataTableTuto(data, state) {
        let match = new RegExp(state.search, 'gi')
        document.getElementById('containerTuto').innerHTML = data
        let titles = document.querySelectorAll('h3 a')
        let excerpts = document.querySelectorAll('.excerpt')
        // @ts-ignore
        for (const title of titles) {
            title.innerHTML = title.textContent.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const excerpt of excerpts) {
            let str = excerpt.textContent.replace(/<[^>]+>/g, '')
            excerpt.innerHTML = str.replace(match, `<mark>${state.search}</mark>`)
        }
        this.slideInView();
        this.handlepaginationTuto(state);
    }
    private updateDataTableTutoSort(data, state) {
        document.getElementById('containerTuto').innerHTML = data
        this.slideInView();
        this.handlepaginationTuto(state);
    }

    private handlepaginationTuto(state) {
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
                this.makeRequestTuto(state)
            })
        }
    }
}
