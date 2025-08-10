// import external dependencies
import 'bootstrap';
import 'jquery';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import templateStepper from './routes/templateStepper';
import 'select2/dist/js/select2.min.js';
import {Splide} from '@splidejs/splide';


/** Populate Router instance with DOM routes */
let routes;
routes = new Router({
  // All pages
    common,
  // Getting Started Template
    templateStepper,
});

// Load Events

function searchToggle()
{
    const searchButton = document.querySelector('#search');
    const searchBox = document.querySelector('.search_box');

    searchButton.addEventListener('click', function (event) {
        searchBox.classList.toggle('active');
        event.preventDefault();
    });

    window.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            searchBox.classList.remove('active');
            searchBox.setAttribute('aria-hidden', 'true');
        }
    })
}

searchToggle();

jQuery(document).ready(() => routes.loadEvents());
$(function () {
    $('#search').click(function (e) {
        e.preventDefault();
        $('.search_box').toggleClass('active');
    });
});

$(function () {
    $('.select-multi-board').select2({
        placeholder: 'Select Filter Option',
        debug: true,
        allowClear: true,
    });
});

$('.select-multi-board').on('select2:unselect', function () {
    $('.product-list').show();
    $('.ProductSection').show();
});

$('.select-multi-board').on('select2:select', function (e) {
    $('.product-list').hide();
    var data = e.params.data;
    $('.' + data.id).show();
    $('.ProductSection').hide();
});

//select-distros functions
$(function () {
    $('.select-distros').select2({
        placeholder: 'Select Filter Option',
        debug: true,
        allowClear: true,
    });
});

$('.select-distros').on('select2:unselect', function () {
    $('.type-distros').show();
})

$('.select-distros').on('select2:select', function (e) {
    $('.type-distros').hide();
    var data = e.params.data;
    $('.' + data.id).show();
})

//select-projects functions
$(function () {
    $('.select-project').select2({
        placeholder: 'Select Filter Option',
        debug: true,
        allowClear: true,
    });
});

$('.select-project').on('select2:unselect', function () {
    $('.type-project').show();
})

$('.select-project').on('select2:select', function (e) {
    $('.type-project').hide();
    var data = e.params.data;
    $('.' + data.id).show();
})

//select-books functions
$(function () {
    $('.select-book').select2({
        placeholder: 'Select Filter Option',
        debug: true,
        allowClear: true,
    });
});

$('.select-book').on('select2:unselect', function () {
    $('.type-book').show();
});

$('.select-book').on('select2:select', function (e) {
    $('.type-book').hide();
    var data = e.params.data;
    $('.' + data.id).show();
});

new Splide('#splide', {
    perPage: 4,
    gap: '1rem',
    pagination: false,
    breakpoints: {
        '1024': {
            perPage: 3,
            gap: '1rem',
        },
        '768': {
            perPage: 2,
            gap: '1rem',
        },
        '576': {
            perPage: 2,
            gap: '1rem',
        },
        '480': {
            perPage: 2,
            gap: '1rem',
        },
    },
}).mount();
