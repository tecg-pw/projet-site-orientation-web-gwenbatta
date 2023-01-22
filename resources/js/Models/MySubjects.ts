export class MySubjects {
    private readonly siteUrl: string;
    private readonly slideInView: () => void;

    constructor(siteUrl: string, slideInView) {
        this.siteUrl = siteUrl;
        this.slideInView = slideInView;
        const state = {
            search: '',
            page: 1,
        }
        const stateSortMySubjectss = {
            tags: 'all',
            status: 'all',
            year: 'all',
            page: 1
        }
        this.handleSearch(state);
        this.handleSortTags(stateSortMySubjectss);
        this.handleSortStatus(stateSortMySubjectss);
        this.handleSortYear(stateSortMySubjectss);
    }

    private handleSearch(state) {
        let searchInputMySubject = document.querySelector('#mysubject #search') as HTMLInputElement;
        searchInputMySubject.value = '';
        searchInputMySubject.addEventListener('input', (e) => {
            state.search = (e.currentTarget as HTMLInputElement).value;
            state.page = 1;
            this.makeRequestMySubjects(state)
        })
    }

    private handleSortYear(state) {
        let sortSelectDateMySubject = document.querySelector('#sortmysubject .year-forum') as HTMLSelectElement;
        sortSelectDateMySubject.value = 'all';
        sortSelectDateMySubject.addEventListener('change', (e) => {
            state.year = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestMySubjectsSort(state)
        })
    }

    private handleSortStatus(state) {
        let sortSelectStatusMySubject = document.querySelector('#sortmysubject .status-forum') as HTMLSelectElement;
        sortSelectStatusMySubject.value = 'all';
        sortSelectStatusMySubject.addEventListener('change', (e) => {
            state.status = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestMySubjectsSort(state)
        })
    }

    private handleSortTags(state) {
        let sortSelectTagMySubject = document.querySelector('#sortmysubject #tags') as HTMLSelectElement;
        sortSelectTagMySubject.value = 'all';
        sortSelectTagMySubject.addEventListener('change', (e) => {
            state.tags = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestMySubjectsSort(state)
        })
    }

    private makeRequestMySubjects(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/forum/my-subject/ajax?` + new URLSearchParams(state);
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableMySubjects(data, state))
    }

    private makeRequestMySubjectsSort(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/forum/my-subject/ajax?` + new URLSearchParams(state);
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableMySubjectsSort(data, state));
    }

    private updateDataTableMySubjects(data, state) {
        let match = new RegExp(state.search, 'gi')
        document.getElementById('containerMySubject').innerHTML = data
        let titles = document.querySelectorAll('.search-title')

        // @ts-ignore
        for (const title of titles) {
            title.innerHTML = title.textContent.innerHTML.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        this.slideInView();
        this.handlepaginationMySubjects(state);
    }

    private updateDataTableMySubjectsSort(data, state) {
        document.getElementById('containerMySubject').innerHTML = data
        this.slideInView();
        this.handlepaginationMySubjects(state);
    }

    private handlepaginationMySubjects(state) {
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
                this.makeRequestMySubjects(state)
            })
        }
    }
}
