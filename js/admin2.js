document.addEventListener('DOMContentLoaded', function() {
    'use strict';

// Delete ticket

    let btnsDeleteTick = document.querySelectorAll(".js-btn-deleteTicket");
    for(let btn of btnsDeleteTick) {
        btn.addEventListener('click', () => {
            deleteTicket(btn);
        });
    }

    function deleteTicket(btnEdit) {
        let id = btnEdit.dataset.id;
        window.location.href=`deleteTicket/${id}`;
    }

// Delete category

    let btnsDeleteCat = document.querySelectorAll(".js-btn-deleteCategory");
    for(let btn of btnsDeleteCat) {
        btn.addEventListener('click', () => {
            deleteCategory(btn);
        });
    }

    function deleteCategory(btnEdit) {
        let id = btnEdit.dataset.id;
        window.location.href=`deleteCategory/${id}`;
    }
    
// Go to Home: Logo WAV

    document.getElementById('js-logo-ShowHome').addEventListener('click', () => {
        window.location.href='user';
    });
    
});