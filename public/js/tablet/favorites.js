const dishes = document.querySelectorAll('.dish')
let favorites = []

initFavorites()

function initFavorites() {
    const favoriteEl = document.createElement('input')
    favoriteEl.type = 'checkbox'
    favoriteEl.classList.add('col-auto')
    dishes.forEach(dish => dish.insertBefore(favoriteEl.cloneNode(true), dish.children[1]))

    if (getCookie('favorites')) {
        setFavorites()
        syncFavorites()
    }

    dishes.forEach(dish => dish.children[1].addEventListener('change', event => toggleFavorite(event.target.parentElement)))
}

function syncFavorites() {
    const shouldToggle = []
    dishes.forEach((dishEl, index) => {
        if (dishEl.children[1].checked && favorites.findIndex(id => dishEl.getAttribute('id') === `dish-${id}`) === -1
            || !dishEl.children[1].checked && favorites.findIndex(id => dishEl.getAttribute('id') === `dish-${id}`) !== -1)
            shouldToggle.push(index)
    })
    shouldToggle.forEach(index => dishes[index].children[1].checked = !dishes[index].children[1].checked)
}

function validateFavoritesCookie() {
    const validFavorites = favorites.filter(id => [...dishes].findIndex(node => node.getAttribute('id') === `dish-${id}`) !== -1)
    document.cookie = `favorites=${ validFavorites.join(',') }`

    return validFavorites.length === favorites.length
}

function setFavorites() {
    favorites = getCookie('favorites').split(',')
    if (!validateFavoritesCookie())
        favorites = getCookie('favorites').split(',')
}

function toggleFavorite(dishEl) {
    const dishId = dishEl.id.split('-')[1]

    const index = favorites.findIndex(favorite => favorite === dishId)
    if (index !== -1) favorites.splice(index, 1)
    else favorites.push(dishId)

    document.cookie = `favorites=${ favorites.join(',') }`
    syncFavorites()
}

function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
