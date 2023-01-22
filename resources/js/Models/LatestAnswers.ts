export class LatestAnswers {
    private readonly siteUrl: string;
    private readonly slideInView: () => void;

    constructor(siteUrl: string, slideInView) {
        this.siteUrl = siteUrl;
        this.slideInView = slideInView;
        const state = {
            search: '',
            page: 1,
        }
        const stateSortLatestAnswerss = {
            tags: 'all',
            status: 'all',
            year: 'all',
            page: 1
        }
        this.handleSearch(state);
        this.handleSortTags(stateSortLatestAnswerss);
        this.handleSortStatus(stateSortLatestAnswerss);
        this.handleSortYear(stateSortLatestAnswerss);
    }

    private handleSearch(state) {
        let searchInputLatestAnswer = document.querySelector('#latestanswer #search') as HTMLInputElement;
        searchInputLatestAnswer.value = '';
        searchInputLatestAnswer.addEventListener('input', (e) => {
            state.search = (e.currentTarget as HTMLInputElement).value;
            state.page = 1;
            this.makeRequestLatestAnswers(state)
        })
    }

    private handleSortYear(state) {
        let sortSelectDateLatestAnswer = document.querySelector('#sortlatestanswers .year-forum') as HTMLSelectElement;
        sortSelectDateLatestAnswer.value = 'all';
        sortSelectDateLatestAnswer.addEventListener('change', (e) => {
            state.year = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestLatestAnswersSort(state)
        })
    }

    private handleSortStatus(state) {
        let sortSelectStatusLatestAnswer = document.querySelector('#sortlatestanswers .status-forum') as HTMLSelectElement;
        sortSelectStatusLatestAnswer.value = 'all';
        sortSelectStatusLatestAnswer.addEventListener('change', (e) => {
            state.status = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestLatestAnswersSort(state)
        })
    }

    private handleSortTags(state) {
        let sortSelectTagLatestAnswer = document.querySelector('#sortlatestanswers #tags') as HTMLSelectElement;
        sortSelectTagLatestAnswer.value = 'all';
        sortSelectTagLatestAnswer.addEventListener('change', (e) => {
            state.tags = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;
            this.makeRequestLatestAnswersSort(state)
        })
    }

    private makeRequestLatestAnswers(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/forum/latest-answers/ajax?` + new URLSearchParams(state);
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableLatestAnswers(data, state))
    }

    private makeRequestLatestAnswersSort(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/forum/latest-answers/ajax?` + new URLSearchParams(state);
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableLatestAnswersSort(data, state));
    }

    private updateDataTableLatestAnswers(data, state) {
        let match = new RegExp(state.search, 'gi')
        document.getElementById('containerLatestAnswer').innerHTML = data
        let titles = document.querySelectorAll('.search-title')
        let comments = document.querySelectorAll('.search-comment')
        // @ts-ignore
        for (const title of titles) {
            title.innerHTML = title.textContent.innerHTML.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const comment of comments) {
            let str = comment.textContent.innerHTML.replace(/<[^>]+>/g, '')
            comment.innerHTML = str.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        this.slideInView();
        this.handlepaginationLatestAnswers(state);
    }

    private updateDataTableLatestAnswersSort(data, state) {
        document.getElementById('containerLatestAnswer').innerHTML = data
        this.slideInView();
        this.handlepaginationLatestAnswers(state);
    }

    private handlepaginationLatestAnswers(state) {
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
                this.makeRequestLatestAnswers(state)
            })
        }
    }
}
