document.addEventListener("DOMContentLoaded", function() {
    const filterButtons = document.querySelectorAll('.filter-button');
    const faqItems = document.querySelector('.faq-items');

    // Скрыть все ответы при загрузке страницы
    const answers = document.querySelectorAll('.answer');
    answers.forEach(function(answer) {
        answer.style.display = 'none';
    });

    filterButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            filterQuestions(category);
        });
    });

    faqItems.addEventListener('click', function(event) {
        const target = event.target;
        if (target.classList.contains('question')) {
            const answer = target.nextElementSibling;
            toggleAnswer(answer);
        }
    });

    function filterQuestions(category) {
        const items = faqItems.querySelectorAll('.faq-item');
        items.forEach(function(item) {
            const itemCategory = item.getAttribute('data-category');
            if (category === 'all' || itemCategory === category) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    function toggleAnswer(answer) {
        if (answer.style.display === 'block') {
            answer.style.display = 'none';
        } else {
            answer.style.display = 'block';
        }
    }
});


