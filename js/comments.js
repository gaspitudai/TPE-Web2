document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    function setFetchURL() {
        let urlWeb = 'http://localhost/WEB 2/TPE/api/';
        let collectionID = 'comments';
        let groupID = '';
        getComments(urlWeb, collectionID, groupID);
    }
    setFetchURL();

    function getComments(urlWeb, collectionID, groupID) {
        fetch(urlWeb + collectionID + "/" + groupID, {
            "method": "GET",
            "mode": 'cors',
        })
        .then(resp => resp.json())
        .then(comments => {
            renderComments(comments);
            console.log(comments);
        })
        .catch(exc => console.log('Catch exc: ' + exc))
    }

    function renderComments(comments) {
        let commentsContainer = document.querySelector('#comment-box-ajax');

        for(let i=0; i<comments.length; i++) {

            let cArticle = document.createElement('article');
            let divName = document.createElement('div');
            let pUserName = document.createElement('p');
            let score = document.createElement('span');
            let descriptionArticle = document.createElement('article');
            let pDescription = document.createElement('p');
            let hr = document.createElement('hr');
            let btnDeleteComment = document.createElement('button');

            cArticle.className = 'comments-article';
            divName.className = 'name-comment-box';
            btnDeleteComment.className = 'btn-delete-comment';
            switch(comments[i].score) {
                case '1': score.innerHTML = '⭐'; break;
                case '2': score.innerHTML = '⭐⭐'; break;
                case '3': score.innerHTML = '⭐⭐⭐'; break;
                case '4': score.innerHTML = '⭐⭐⭐⭐'; break;
                case '5': score.innerHTML = '⭐⭐⭐⭐⭐'; break;
                default: score.innerHTML = '⭐⭐⭐⭐⭐'; break;
            }
            btnDeleteComment.innerHTML = 'X';

            commentsContainer.appendChild(cArticle);
                cArticle.appendChild(divName);
                    divName.appendChild(pUserName);
                        pUserName.innerHTML = '@'+comments[i].user_name;
                        divName.appendChild(score);
                        divName.appendChild(btnDeleteComment);
                cArticle.appendChild(descriptionArticle);
                    descriptionArticle.appendChild(pDescription);
                        pDescription.innerHTML = comments[i].description;
                cArticle.appendChild(hr);
        }

        renderFormComment(commentsContainer);
                 
        submitButton.addEventListener('click', e => {
            e.preventDefault();
            console.log('asdDASVCA')
        })
    }

    function renderFormComment(commentsContainer) {
        let cSection = document.createElement('section');
        let cForm = document.createElement('form');
        let inpBox = document.createElement('div');
        let cInput = document.createElement('input');
        let scoreSelect = document.createElement('select');
        let op1 = document.createElement('option');
        let op2 = document.createElement('option');
        let op3 = document.createElement('option');
        let op4 = document.createElement('option');
        let op5 = document.createElement('option');
        let submitButton = document.createElement('button');

        cSection.className = 'comments-section logBox comment-box';
        cForm.className = 'formLogin comment-form';
        cForm.action = 'post-comment';
        cForm.method = 'post';
        inpBox.className = 'inpBox';
        cInput.className = 'inp-log';
        cInput.placeholder = '. . .';
        cInput.id = 'comment-inp'
        cInput.name = 'comment-inp';
        cInput.type = 'text';
        scoreSelect.name = 'score-select';
        scoreSelect.id = 'score-select';
        op1.value = 1;
        op2.value = 2;
        op3.value = 3;
        op4.value = 4;
        op5.value = 5;
        submitButton.id = 'comment-submit-btn';        
        submitButton.type = 'submit';        

        commentsContainer.appendChild(cSection);
            cSection.appendChild(cForm);
                cForm.appendChild(inpBox);
                    inpBox.appendChild(cInput);
                    inpBox.appendChild(scoreSelect);
                        scoreSelect.appendChild(op1);
                        scoreSelect.appendChild(op2);
                        scoreSelect.appendChild(op3);
                        scoreSelect.appendChild(op4);
                        scoreSelect.appendChild(op5);
                        op1.innerHTML = '1';
                        op2.innerHTML = '2';
                        op3.innerHTML = '3';
                        op4.innerHTML = '4';
                        op5.innerHTML = '5';
                cForm.appendChild(submitButton);
                    submitButton.innerHTML = 'Send comment';
    }

})