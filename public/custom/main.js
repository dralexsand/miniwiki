$(function () {

    console.log('jquery main.js init');

    setLangListItem();

    const searchButton = '#home_search_field.input-group.input-group-lg span.input-group-append button.btn.btn-primary';

    $('body').on('click', searchButton, function () {
        axiosPost();
        //axiosGet();
    });

    chekLang();

});

function chekLang() {

    // .nav-item-left-border.d-none.d-sm-block div#langitems.dropdown-menu a#ru.dropdown-item

    $('body').on('click', '#langitems.dropdown-menu a', function (e) {
        e.preventDefault();
        /*console.log('langitems.dropdown-menu a clicked');
        console.log('lang: ' + $(this).attr('id'));*/
        let lng = $(this).attr('id');
        lngAjax(lng);
    });
}

function axiosPost() {

    //window.axios = require('axios');
    /*window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    let token = document.head.querySelector('meta[name="csrf-token"]');

    if (token) {
        window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
        console.log('token.content: ' + token.content);
    } else {
        console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
    }*/

    console.log('axiosPost init');
    axios({
        method: 'post',
        url: '/api/search/',
        dataType: 'json',
        data: {
            firstName: 'Fred',
            lastName: 'Flintstone'
        }
    }).then(function (response) {
        let res = JSON.stringify(response);
        console.log('axiosPost: ' + res);
        document.getElementById('s').value = response.data;
    });
}

function axiosGet() {
    console.log('axiosGet init');
    axios({
        method: 'get',
        url: 'api/search/',
        dataType: 'json',
    })
        .then(function (response) {
            let res = JSON.stringify(response);
            console.log('axiosGet: ' + res);
        });
}

function lngAjax(lng) {

    localStorage.setItem('lng', lng);
    //console.log('lng: ' + lng);
    let url = '/lng';

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "POST",
        url: url,
        data: {
            lng: lng,
        },
        success: function (data) {
            let sitenow = window.location.href;
            window.location.href = sitenow;
        },
        error: function (data, textStatus, errorThrown) {
            console.log(data);
        },
    });
}

function initLang() {
    let lng = localStorage.getItem('lng');

    if (lng === null || lng === undefined) {
        lng = 'ru';
        localStorage.setItem('lng', lng);
    }
    return lng;
}

function setLangListItem() {

    let lng = initLang();
    let flag = lng;

    if (lng === 'en') {
        flag = 'us';
    }

    let selected_item = '<img src="img/blank.gif" class="flag flag-' + flag + '" alt="' + lng + '"> ' + lng + '\n' +
        '    <i class="fas fa-angle-down"></i>';

    document.getElementById('dropdownLanguage').innerHTML = selected_item;
}


