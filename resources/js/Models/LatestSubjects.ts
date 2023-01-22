export class LatestSubjects {
    private readonly siteUrl: string;
    private readonly slideInView: () => void;

    constructor(siteUrl: string, slideInView) {
        this.siteUrl = siteUrl;
        this.slideInView = slideInView;
        const state = {
            search: '',
            page: 1,
        }
        const stateSortLatestSubjectss = {
            tags: 'all',
            status: 'all',
            year: 'all',
            page: 1
        }
        this.handleSearch(state);
        this.handleSortTags(stateSortLatestSubjectss);
        this.handleSortStatus(stateSortLatestSubjectss);
        this.handleSortYear(stateSortLatestSubjectss);
    }

    private handleSearch(state) {
        let searchInputLatestSubject = document.querySelector('#latestsubject #search') as HTMLInputElement;
        searchInputLatestSubject.value = '';
        searchInputLatestSubject.addEventListener('input', (e) => {
            state.search = (e.currentTarget as HTMLInputElement).value;
            state.page = 1;
            this.makeRequestLatestSubjects(state)
        })
    }

    private handleSortYear(state) {
        let sortSelectDateLatestSubject = document.querySelector('#sortlatestsubject .year-forum') as HTMLSelectElement;
        sortSelectDateLatestSubject.value = 'all';
        sortSelectDateLatestSubject.addEventListener('change', (e) => {
            state.year = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestLatestSubjectsSort(state)
        })
    }

    private handleSortStatus(state) {
        let sortSelectStatusLatestSubject = document.querySelector('#sortlatestsubject .status-forum') as HTMLSelectElement;
        sortSelectStatusLatestSubject.value = 'all';
        sortSelectStatusLatestSubject.addEventListener('change', (e) => {
            state.status = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestLatestSubjectsSort(state)
        })
    }

    private handleSortTags(state) {
        let sortSelectTagLatestSubject = document.querySelector('#sortlatestsubject #tags') as HTMLSelectElement;
        sortSelectTagLatestSubject.value = 'all';
        sortSelectTagLatestSubject.addEventListener('change', (e) => {
            state.tags = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestLatestSubjectsSort(state)
        })
    }

    private makeRequestLatestSubjects(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/forum/index/ajax?` + new URLSearchParams(state);
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableLatestSubjects(data, state))
    }

    private makeRequestLatestSubjectsSort(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/forum/index/ajax?` + new URLSearchParams(state);
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableLatestSubjectsSort(data, state));
    }

    private updateDataTableLatestSubjects(data, state) {
        let match = new RegExp(state.search, 'gi')
        document.getElementById('containerLatestSubject').innerHTML = data
        let titles = document.querySelectorAll('.search-title')

        // @ts-ignore
        for (const title of titles) {
            title.innerHTML = title.textContent.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        this.slideInView();
        this.handlepaginationLatestSubjects(state);
    }

    private updateDataTableLatestSubjectsSort(data, state) {
        document.getElementById('containerLatestSubject').innerHTML = data
        this.slideInView();
        this.handlepaginationLatestSubjects(state);
    }

    private handlepaginationLatestSubjects(state) {
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
                this.makeRequestLatestSubjects(state)
            })
        }
    }
}
