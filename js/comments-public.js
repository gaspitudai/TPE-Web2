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
        let commentsContainer = document.querySelector('#comment-box-ajax')

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


















})