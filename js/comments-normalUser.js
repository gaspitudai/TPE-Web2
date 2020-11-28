document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    function onInitCommentsSection() {
        const formContainer = document.querySelector('#commentForm-box-ajax');
        renderFormComment(formContainer);
        setFetchURL();
    }
    onInitCommentsSection();

    function setFetchURL() {
        let urlWeb = 'http://localhost/WEB 2/TPE/api/';
        let collectionID = 'comments';
        let groupID = '';
        getComments(urlWeb, collectionID, groupID);
    }

    function getComments(urlWeb, collectionID, groupID) {
        fetch(urlWeb + collectionID + "/" + groupID, {
            "method": "GET",
            "mode": 'cors',
        })
        .then(resp => resp.json())
        .then(comments => {
            renderComments(comments);
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

            cArticle.className = 'comments-article';
            divName.className = 'name-comment-box';
            score.className = 'score-span';
            switch(comments[i].score) {
                case '1': score.innerHTML = '⭐'; break;
                case '2': score.innerHTML = '⭐⭐'; break;
                case '3': score.innerHTML = '⭐⭐⭐'; break;
                case '4': score.innerHTML = '⭐⭐⭐⭐'; break;
                case '5': score.innerHTML = '⭐⭐⭐⭐⭐'; break;
                default: score.innerHTML = '⭐⭐⭐⭐⭐'; break;
            }

            commentsContainer.appendChild(cArticle);
                cArticle.appendChild(divName);
                    divName.appendChild(pUserName);
                        pUserName.innerHTML = '@'+comments[i].user_name;
                    divName.appendChild(score);
                cArticle.appendChild(descriptionArticle);
                    descriptionArticle.appendChild(pDescription);
                        pDescription.innerHTML = comments[i].description;
                cArticle.appendChild(hr);
        }
    }

    function renderFormComment(formContainer) {
        let cSection = document.createElement('section');
        let cForm = document.createElement('form');
        let inpBox = document.createElement('div');
        let cInput = document.createElement('input');
        let scoreSelect = document.createElement('select');
        let op5 = document.createElement('option');
        let op4 = document.createElement('option');
        let op3 = document.createElement('option');
        let op2 = document.createElement('option');
        let op1 = document.createElement('option');
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
        op5.value = 5;
        op4.value = 4;
        op3.value = 3;
        op2.value = 2;
        op1.value = 1;
        submitButton.id = 'comment-submit-btn';

        formContainer.appendChild(cSection);
            cSection.appendChild(cForm);
                cForm.appendChild(inpBox);
                    inpBox.appendChild(cInput);
                    inpBox.appendChild(scoreSelect);
                        scoreSelect.appendChild(op5);
                        scoreSelect.appendChild(op4);
                        scoreSelect.appendChild(op3);
                        scoreSelect.appendChild(op2);
                        scoreSelect.appendChild(op1);
                        op5.innerHTML = 5;
                        op4.innerHTML = 4;
                        op3.innerHTML = 3;
                        op2.innerHTML = 2;
                        op1.innerHTML = 1;
                cForm.appendChild(submitButton);
                    submitButton.innerHTML = 'Send comment';

        submitButton.addEventListener('click', () => {
            let comment = cInput.value;
            let score = scoreSelect.value;
            let urlWeb = 'http://localhost/WEB 2/TPE/api/';
            let collectionID = 'comments';
            let groupID = '';
            postComment(urlWeb, collectionID, groupID, comment, score);
        })
        
    }

    function postComment(urlWeb, collectionID, groupID, comment, score) {
        let data = {
            "description": comment,
            "score": score,
        };
        let arrComment = [];
        for (let i = 0; i < cant; i++) {
            let promise = fetch(urlWeb + collectionID + "/" + groupID, {
                "method": "POST",
                "mode": 'cors',
                "headers": { "Content-Type": "application/json" },
                "body": JSON.stringify(data)
            })
            arrComment.push(promise);
        }
        Promise.all(arrComment).then(comments => {
            renderComments(comments);
        })

    }

})