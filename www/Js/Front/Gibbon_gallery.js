let uri = window.location.pathname.split('/');



function go_previous(){

    if (uri[3] < 2) {

        document.getElementById("previous").firstChild.setAttribute('href', '');
        document.getElementById("previous").className = 'page-item disabled';

    };

};

function go_next(){

    var checkNext = parseInt(document.getElementById('nb_page').textContent);

    console.log(uri[3]);
    console.log(checkNext);

    if (uri[3] >= (checkNext)){

        document.getElementById("next").firstChild.setAttribute('href', '');

        document.getElementById("next").className = 'page-item disabled'

        document.getElementById("previous").className = 'page-item'

    };
};

go_previous();
go_next();
