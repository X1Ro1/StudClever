document.addEventListener('DOMContentLoaded', function() {
    const commentBlocks = document.querySelectorAll('.forum_inner-card, .forum_inner-border');

    commentBlocks.forEach(function(commentBlock) {
        const likeBtn = commentBlock.querySelector('.like-btn');
        const dislikeBtn = commentBlock.querySelector('.dislike-btn');
        const likeCount = commentBlock.querySelector('.forum_botton_like p');
        const dislikeCount = commentBlock.querySelector('.forum_botton_dislike p');

        let likes = parseInt(likeCount.textContent);
        let dislikes = parseInt(dislikeCount.textContent);

        let likeClicked = false;
        let dislikeClicked = false;

        // Лайк
        likeBtn.addEventListener('click', function() {
            if (!likeClicked) {
                likes++;
                likeCount.textContent = likes;
                likeBtn.src = "../assets/img/logo/like_red.svg";
                likeClicked = true;
                if (dislikeClicked) {
                    dislikeClicked = false;
                    dislikeBtn.src = "../assets/img/logo/dislike.svg";
                    dislikes--;
                    dislikeCount.textContent = dislikes;
                }
            } else {
                likeClicked = false;
                likeBtn.src = "../assets/img/logo/like.svg";
                likes--;
                likeCount.textContent = likes;
            }
        });

        // Дизлайк
        dislikeBtn.addEventListener('click', function() {
            if (!dislikeClicked) {
                dislikes++;
                dislikeCount.textContent = dislikes;
                dislikeBtn.src = "../assets/img/logo/dislike_red.svg";
                dislikeClicked = true;
                if (likeClicked) {
                    likeClicked = false;
                    likeBtn.src = "../assets/img/logo/like.svg";
                    likes--;
                    likeCount.textContent = likes;
                }
            } else {
                dislikeClicked = false;
                dislikeBtn.src = "../assets/img/logo/dislike.svg";
                dislikes--;
                dislikeCount.textContent = dislikes;
            }
        });
    });
});


