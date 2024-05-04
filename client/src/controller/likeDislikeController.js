const likeContainers = document.querySelectorAll('[id^="like-container"]');
const dislikeContainers = document.querySelectorAll('[id^="dislike-container"]');

likeContainers.forEach((container, i) => {
    container.addEventListener('click', function() {
        const like = document.getElementById('like' + i);
        const unlike = document.getElementById('unlike' + i);
        const dislike = document.getElementById('dislike' + i);
        const undislike = document.getElementById('undislike' + i);

        like.classList.toggle('hidden');
        unlike.classList.toggle('hidden');

        if (dislike.classList.contains('hidden')) {
            dislike.classList.toggle('hidden');
            undislike.classList.toggle('hidden');
        }
    });
});

dislikeContainers.forEach((container, i) => {
    container.addEventListener('click', function() {
        const like = document.getElementById('like' + i);
        const unlike = document.getElementById('unlike' + i);
        const dislike = document.getElementById('dislike' + i);
        const undislike = document.getElementById('undislike' + i);

        dislike.classList.toggle('hidden');
        undislike.classList.toggle('hidden');

        if (like.classList.contains('hidden')) {
            like.classList.toggle('hidden');
            unlike.classList.toggle('hidden');
        }
    });
});