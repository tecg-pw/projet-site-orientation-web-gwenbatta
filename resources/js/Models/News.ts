export class News {
    private readonly siteUrl: string;
    private readonly slideInView: () => void;
    constructor(siteUrl: string, slideInView) {
        this.siteUrl = siteUrl;
        this.slideInView = slideInView;
        const state = {
            search: '',
            page: 1,
        }
        this.handleSearch(state);
    }
    private handleSearch(state){
        let searchInputNew = document.querySelector('#new #search') as HTMLInputElement;
        searchInputNew.value = '';
        searchInputNew.addEventListener('input', (e) => {
            state.search = (e.currentTarget as HTMLInputElement).value;
            state.page = 1;
            this.makeRequestNew(state)
        })
    }
    private makeRequestNew(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/news/index/ajax?` + new URLSearchParams(state);
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableNew(data,state));
    }

    private updateDataTableNew(data,state) {
        let match = new RegExp(state.search, 'gi')
        document.getElementById('containerNew').innerHTML = data
        let titles = document.querySelectorAll('h3')
        let excerpts = document.querySelectorAll('.excerpt')
        let dates = document.querySelectorAll('.datesNew')
        // @ts-ignore
        for (const title of titles) {
            title.innerHTML = title.textContent.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const excerpt of excerpts) {
            let str = excerpt.textContent.replace(/<[^>]+>/g, '')
            excerpt.innerHTML = str.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const date of dates) {
            date.innerHTML = date.textContent.replace(match, `<mark>${state.search}</mark>`)
        }
        this.slideInView();
        this.handlepaginationNew(state);
    }

   private handlepaginationNew(state) {
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
                this.makeRequestNew(state)
            })
        }
    }
}
