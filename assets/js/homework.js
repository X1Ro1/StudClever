// День
document.addEventListener('DOMContentLoaded', function() {
    const homeworkCalendarDays = document.querySelectorAll('.homework-calendar-day');
    const homeworkCards = document.querySelectorAll('.homework-card-cards');

    // Обработчик события клика по дню месяца
    homeworkCalendarDays.forEach(day => {
        day.addEventListener('click', function() {
            const selectedDay = this.querySelector('.hm_question').getAttribute('data-day');

            // Показываем карточку домашнего задания для выбранного дня
            homeworkCards.forEach(card => {
                if (card.getAttribute('data-day') === selectedDay) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});





// Месяц
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-button');
    const homeworkItems = document.querySelectorAll('.homework-item');

    // Обработчик события клика по кнопкам фильтрации
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const selectedCategory = this.getAttribute('data-category');

            // Показываем только дни из выбранного месяца и категории
            homeworkItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                if (itemCategory === selectedCategory) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});


