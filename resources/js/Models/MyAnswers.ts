export class MyAnswers {
    private readonly siteUrl: string;
    private readonly slideInView: () => void;

    constructor(siteUrl: string, slideInView) {
        this.siteUrl = siteUrl;
        this.slideInView = slideInView;
        const state = {
            search: '',
            page: 1,
        }
        const stateSortMyAnswers = {
            tags: 'all',
            status: 'all',
            year: 'all',
            page: 1
        }
        this.handleSearch(state);
        this.handleSortTags(stateSortMyAnswers);
        this.handleSortStatus(stateSortMyAnswers);
        this.handleSortYear(stateSortMyAnswers);
    }

    private handleSearch(state) {
        let searchInputMyAnswer = document.querySelector('#mytalks #search') as HTMLInputElement;
        searchInputMyAnswer.value = '';
        searchInputMyAnswer.addEventListener('input', (e) => {
            state.search = (e.currentTarget as HTMLInputElement).value;
            state.page = 1;
            this.makeRequestMyAnswers(state)
        })
    }

    private handleSortYear(state) {
        let sortSelectDateMyAnswer = document.querySelector('#sortmysanswers .year-forum') as HTMLSelectElement;
        sortSelectDateMyAnswer.value = 'all';
        sortSelectDateMyAnswer.addEventListener('change', (e) => {
            state.year = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestMyAnswersSort(state)
        })
    }

    private handleSortStatus(state) {
        let sortSelectStatusMyAnswer = document.querySelector('#sortmysanswers .status-forum') as HTMLSelectElement;
        sortSelectStatusMyAnswer.value = 'all';
        sortSelectStatusMyAnswer.addEventListener('change', (e) => {
            state.status = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestMyAnswersSort(state)
        })
    }

    private handleSortTags(state) {
        let sortSelectTagMyAnswer = document.querySelector('#sortmysanswers #tags') as HTMLSelectElement;
        sortSelectTagMyAnswer.value = 'all';
        sortSelectTagMyAnswer.addEventListener('change', (e) => {
            state.tags = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestMyAnswersSort(state)
        })
    }

    private makeRequestMyAnswers(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/forum/my-talks/ajax?` + new URLSearchParams(state);
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableMyAnswers(data, state))
    }

    private makeRequestMyAnswersSort(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/forum/my-talks/ajax?` + new URLSearchParams(state);
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableMyAnswersSort(data, state));
    }

    private updateDataTableMyAnswers(data, state) {
        let match = new RegExp(state.search, 'gi')
        document.getElementById('containerMyTalks').innerHTML = data
        let titles = document.querySelectorAll('.search-title')
        let comments = document.querySelectorAll('.search-comment')
        // @ts-ignore
        for (const title of titles) {
            title.innerHTML = title.innerHTML.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const comment of comments) {
            let str = comment.innerHTML.replace(/<[^>]+>/g, '')
            comment.innerHTML = str.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        this.slideInView();
        this.handlepaginationMyAnswers(state);
    }

    private updateDataTableMyAnswersSort(data, state) {
        document.getElementById('containerMyTalks').innerHTML = data
        this.slideInView();
        this.handlepaginationMyAnswers(state);
    }

    private handlepaginationMyAnswers(state) {
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
                this.makeRequestMyAnswers(state)
            })
        }
    }
}
