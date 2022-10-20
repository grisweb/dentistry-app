let services = [
    {
        image: 'service1.png',
        title: 'Диагностиеские исследования',
        text: ' При первичном обращении пациента стоматолог проводит осмотр его полости рта и дополнительные необходимые исследования для постановки четкого диагноза.',
        price: 500
    },
    {
        image: 'service1.png',
        title: 'Лечение кариеса',
        text: ' При первичном обращении пациента стоматолог проводит осмотр его полости рта и дополнительные необходимые исследования для постановки четкого диагноза.',
        price: 200
    },
    {
        image: 'service1.png',
        title: 'Диагностиеские исследования',
        text: ' При первичном обращении пациента стоматолог проводит осмотр его полости рта и дополнительные необходимые исследования для постановки четкого диагноза.',
        price: 300
    },
    {
        image: 'service1.png',
        title: 'Установка брекетов',
        text: ' При первичном обращении пациента стоматолог проводит осмотр его полости рта и дополнительные необходимые исследования для постановки четкого диагноза.',
        price: 500
    },
    {
        image: 'service2.png',
        title: 'Металл коронки',
        text: ' При первичном обращении пациента стоматолог проводит осмотр его полости рта и дополнительные необходимые исследования для постановки четкого диагноза.',
        price: 700
    },
    {
        image: 'service2.png',
        title: 'Металл коронки',
        text: ' При первичном обращении пациента стоматолог проводит осмотр его полости рта и дополнительные необходимые исследования для постановки четкого диагноза.',
        price: 900
    },
    {
        image: 'service2.png',
        title: 'Металл коронки',
        text: ' При первичном обращении пациента стоматолог проводит осмотр его полости рта и дополнительные необходимые исследования для постановки четкого диагноза.',
        price: 800
    },
    {
        image: 'service2.png',
        title: 'Металл коронки',
        text: ' При первичном обращении пациента стоматолог проводит осмотр его полости рта и дополнительные необходимые исследования для постановки четкого диагноза.',
        price: 300
    },
    {
        image: 'service3.png',
        title: 'Лечение пародонтита',
        text: ' При первичном обращении пациента стоматолог проводит осмотр его полости рта и дополнительные необходимые исследования для постановки четкого диагноза.',
        price: 400
    },
    {
        image: 'service3.png',
        title: 'Лечение пародонтита',
        text: ' При первичном обращении пациента стоматолог проводит осмотр его полости рта и дополнительные необходимые исследования для постановки четкого диагноза.',
        price: 500
    },
    {
        image: 'service3.png',
        title: 'Лечение пародонтита',
        text: ' При первичном обращении пациента стоматолог проводит осмотр его полости рта и дополнительные необходимые исследования для постановки четкого диагноза.',
        price: 799
    },
    {
        image: 'service3.png',
        title: 'Лечение пародонтита',
        text: ' При первичном обращении пациента стоматолог проводит осмотр его полости рта и дополнительные необходимые исследования для постановки четкого диагноза.',
        price: 599
    },
];

let filterPriceUpItems = services.slice();
filterPriceUpItems.sort((a, b) => a.price - b.price );

let filterPriceDownItems = services.slice();
filterPriceDownItems.sort((a, b) => a.price < b.price ? 1 : -1);

let filterAbsItems = services.slice();
filterAbsItems.sort((a, b) => a.title.localeCompare(b.title));

services = filterPriceUpItems;

function filter(filter) {
    if (filter === 'price-up') {
        services = filterPriceUpItems;
        innerItems(1, services);
    } else if (filter === 'price-down') {
        services = filterPriceDownItems;
        innerItems(1, services);
    } else if (filter === 'abc') {
        services = filterAbsItems;
        innerItems(1, services);

    } else {
    }
}

const paginationItems = document.querySelectorAll('.pagination__btn');
let notesOnOnePage = 4;
let table = document.querySelector('.services__list-services');

const prevBtn = document.querySelector('.pagination__prev');
const nextBtn = document.querySelector('.pagination__next');

let pageNumber = 1;
innerItems(pageNumber, services);

addListenersToPaginationItems(paginationItems);

function addListenersToPaginationItems(items) {
    for (let item of items) {
        item.addEventListener('click', function () {
            pageNumber = +this.innerHTML;
            innerItems(pageNumber, services);
        })
    }
}

prevBtn.addEventListener('click',  () => {
    if (pageNumber > 1) {
        innerItems(pageNumber - 1, services);
        pageNumber -= 1;
        return;
    }

    pageNumber = 3;
    innerItems(3, services);
})

nextBtn.addEventListener('click',  () => {
    if (pageNumber < 3) {
        innerItems(pageNumber + 1, services);
        pageNumber += 1;
        return;
    }

    pageNumber = 1;
    innerItems(1, services);
})



function innerItems(pageNumber, items) {
    changeButtonStyle(pageNumber, paginationItems);
    start = (pageNumber - 1) * notesOnOnePage;
    end = start + notesOnOnePage;

    notes = items.slice(start, end);

    table.innerHTML = '';

    notes.map(note => {
        let div = document.createElement('div');
        div.classList.add('list-services__item-list-services');
        let img = document.createElement('img');
        img.classList.add('item-list-services__img');
        img.src = `img/${note.image}`;
        div.appendChild(img);

        let infoDiv = document.createElement('div');
        infoDiv.classList.add('item-list-services__info');


        let titleDiv = document.createElement('div');
        titleDiv.classList.add('item-list-services__title');
        titleDiv.innerHTML = note.title;
        infoDiv.appendChild(titleDiv);

        let textDiv = document.createElement('div');
        textDiv.classList.add('item-list-services__text');
        textDiv.innerHTML = note.text;
        infoDiv.appendChild(textDiv);
        div.appendChild(infoDiv);

        let priceDiv = document.createElement('div');
        priceDiv.classList.add('item-list-services__price');
        priceDiv.innerHTML = note.price + ' руб.';
        div.appendChild(priceDiv);
        table.appendChild(div);

    })
}

function changeButtonStyle(pageNumber, items) {
    items[pageNumber - 1].classList.add('button');
    items[pageNumber - 1].classList.remove('invert-btn');

    for (let i=0; i<items.length; i++) {
        if (i !== (pageNumber-1)) {
            items[i].classList.add('invert-btn');
            items[i].classList.remove('button')
        }
    }
}
