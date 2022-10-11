/*!
    * Start Bootstrap - SB Admin v7.0.5 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2022 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */

const { toArray } = require("lodash");

    //
// Scripts
//

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});


        let btn1 = document.getElementById("btntag");
        const tag = document.querySelector('option[id=tagval]').textContent;

        btn1.addEventListener('click', function(){
            h1.appendChild(text);
            if(tag){
                document.getElementById("output").appendChild(' <div class="btn btn-dark"><h5>'+tag+'</h5><a>delete</a></div>');
            }else{
                document.getElementById("output").appendChild('<h5>Please add a valid Tag</h5>');
            }

        });

        const form  = document.getElementById('addPost');

        document.querySelector('#add-form').addEventListener('submit', (e) => {
            e.preventDefault();
            var formData = new FormData(e.target);
            fetch("{{ url('admin/add-post') }}", {
              method: 'POST',
              body: formData
            }).then(() => console.log('success'));
          });




