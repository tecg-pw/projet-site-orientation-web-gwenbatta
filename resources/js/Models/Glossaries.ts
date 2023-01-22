export class Glossaries {
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
        let searchInputGlossary = document.querySelector('#glossary #search') as HTMLInputElement;
        searchInputGlossary.value = '';
        searchInputGlossary.addEventListener('input', (e) => {
            state.search = (e.currentTarget as HTMLInputElement).value;
            state.page = 1;
            this.makeRequestGlossary(state)
        })
    }
    private makeRequestGlossary(state) {
        let locale = window.location.pathname.split('/');
        // @ts-ignore
        let url = `${this.siteUrl}${locale[1]}/technical/glossary/ajax?` + new URLSearchParams(state);
        history.pushState(state, '', url.replace('/ajax', ''))
        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateDataTableGlossary(data,state));
    }

    private updateDataTableGlossary(data, state) {
        let match = new RegExp(state.search, 'gi')
        let containerGlossary = document.getElementById('containerGlossary')
        containerGlossary.innerHTML = data
        let titles = document.querySelectorAll('h3')
        let definitions = document.querySelectorAll('.definition')
        // @ts-ignore
        for (const title of titles) {
            title.innerHTML = title.textContent.innerHTML.replace(match, `<mark>${state.search}</mark>`)
        }
        // @ts-ignore
        for (const definition of definitions) {
            let str = definition.textContent.innerHTML.replace(/<[^>]+>/g, '')
            definition.innerHTML = str.replace(match, `<mark>${state.search}</mark>`)
        }
        this.slideInView();
        this.handlepaginationGlossary(state);
    }

     private handlepaginationGlossary(state) {
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
                this.makeRequestGlossary(state)
            })
        }
    }
}
