const searchEl = document.querySelector('#cocktail-search')
const searchResultBox = document.querySelector('#cocktail-results')
let searchResults = []
let lastSearchTime = 0
let processing = false

initCocktails()

function initCocktails() {
    searchEl.addEventListener('input', event => {
        const val = event.target.value

        if (val.length <= 3 || (lastSearchTime !== 0 && lastSearchTime + 1000 >= new Date().getTime()) || processing)
            return

        processing = true
        fetchCocktails(val)
    })
}

function fetchCocktails(val) {
    lastSearchTime = new Date().getTime()

    fetch(`/tablet/cocktails?s=${ val }`, { method: 'GET' })
        .then(async res => {
            if (res.ok) {
                searchResults = (await res.json()).drinks ?? []
                syncSearchResultBox()
            }
        })
        .catch(err => {
            console.log(err)
        })
        .finally(() => processing = false)
}

function syncSearchResultBox() {
    if (searchResults.length <= 0)
        searchResultBox.children[1].innerHTML = `<span>Helaas, niks gevonden... Probeer het opnieuw.</span>`
    else {
        searchResultBox.children[1].innerHTML = '<div></div>'

        searchResults.forEach(res => {
            const resEl = document.createElement('div')
            resEl.classList.add('row', 'mx-0')

            const nameEl = document.createElement('span')
            nameEl.classList.add('col-3', 'px-0')
            nameEl.innerHTML = res.strDrink
            resEl.appendChild(nameEl)

            const categoryEl = document.createElement('span')
            categoryEl.classList.add('col-3', 'px-0')
            categoryEl.innerHTML = res.strCategory
            resEl.appendChild(categoryEl)

            const ingredientEl = document.createElement('div')
            ingredientEl.classList.add('col-6', 'px-0')
            const ingredients = Object.keys(res) // Find all object attrs with key containing 'strIngredient' and map all the paired values to an array.
                .filter(key => key.indexOf('strIngredient') !== -1)
                .filter(ingrKey => res[ingrKey])
                .map(ingrKey => res[ingrKey])
            ingredientEl.innerHTML = ingredients.join(', ')
            resEl.appendChild(ingredientEl)

            searchResultBox.children[1].appendChild(resEl)
        })
    }
}
