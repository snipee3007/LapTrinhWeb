document.addEventListener('DOMContentLoaded', (event) => {
    const stars = Array.from({length: 5}, (_, i) => document.getElementById('star' + (i + 1)));
    const resetButton = document.getElementById('resetStars');

    stars.forEach((star, index) => {
        star.addEventListener('click', () => {
            stars.forEach((star, starIndex) => {
                if (starIndex <= index) {
                    star.classList.remove('text-gray-800');
                    star.classList.add('text-yellow-500');
                    star.querySelector('path').setAttribute('fill', 'currentColor');
                } else {
                    star.classList.remove('text-yellow-500');
                    star.classList.add('text-gray-800');
                    star.querySelector('path').setAttribute('fill', 'none');
                }
            });
        });
    });

    resetButton.addEventListener('click', () => {
        stars.forEach(star => {
            star.classList.remove('text-yellow-500');
            star.classList.add('text-gray-800');
            star.querySelector('path').setAttribute('fill', 'none');
        });
    });
});