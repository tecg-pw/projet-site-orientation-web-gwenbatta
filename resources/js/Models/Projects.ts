export class Projects {
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
        let searchInputProject = document.querySelector('#project #search') as HTMLInputElement;
        searchInputProject.value = '';
        searchInputProject.addEventListener('input', (e) => {
            state.search = (e.currentTarget as HTMLInputElement).value;
            state.page = 1;
            this.makeRequestProject(state)
        })
    }
    private makeRequestProject(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/project/index/ajax?` + new URLSearchParams(state);
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableProject(data,state));
    }

    private updateDataTableProject(data, state) {
        let match = new RegExp(state.search, 'gi')
        document.getElementById('containerProject').innerHTML = data
        let titles = document.querySelectorAll('h3')
        let dates = document.querySelectorAll('.datesProject')
        // @ts-ignore
        for (const title of titles) {
            title.innerHTML = title.textContent.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const date of dates) {
            date.innerHTML = date.textContent.replace(match, `<mark>${state.search}</mark>`)
        }
        this.slideInView();
        this.handlepaginationProject(state)
    }

     private handlepaginationProject(state) {
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
                this.makeRequestProject(state)
            })
        }
    }
}
