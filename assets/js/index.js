function selectedDay(element) {
    let days = document.querySelectorAll('#day');
    days.forEach(function (day) {
        day.classList.remove('selected');
    });

    element.classList.add('selected');

    let selectedDay = document.getElementById('selectedDay');
    selectedDay.innerHTML = `Selected day is: <span> ${element.innerHTML}</span>`;
}